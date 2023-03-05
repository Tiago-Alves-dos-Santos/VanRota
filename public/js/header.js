/************************ALERTAS*****************************/

function tipoAlerta(tipo){ 
    switch (tipo) {
        case 'error':
            return 0;
            break;
        case 'success':
            return 1;
            break;
        case 'warning':
            return 2;
            break;
        case 'info':
            return 3;
            break;
        case 'info-purple':
            return 4;
            break;
        case 'info-dark':
            return 5;
            break;

        default:
            throw new Error("Paramêtro 'tipo':"+tipo+", possui valor não reconhecido na função ");
            break;
    }
 }

function showAlert(title, information, color, custom_icon = ""){
    let cor = ['red','green','orange','blue','purple','dark']; // 0 - 5
    let icons = "";
    switch (cor[color]) {
        case 'red':
            icons = "fa-solid fa-bug";
            break;
        case 'green':
            icons = "fa-solid fa-circle-check";
            break;
        case 'orange':
            icons = "fa-solid fa-triangle-exclamation"
            break;
        case 'blue':
            icons = "fa-solid fa-circle-info"
            break;
        case 'purple':
            icons = "fa-solid fa-circle-radiation";
            break;
        case 'dark':
            icons = "fa-brands fa-ubuntu";
            break;

        default:
            break;
    }

    if(custom_icon){
        icons = custom_icon;
    }
    $.confirm({
        title: title,
        icon: icons,
        content: information,
        type: cor[color],
        typeAnimated: true,
        buttons: {
            OK: {
                text: 'OK',
                btnClass: 'btn-'+cor[color],
                action: function(){
                }
            },
        }
    });
}

function showQuestionYesNo(title,question_data, callback,color='dark'){
    $.confirm({
        title: title,
        content: question_data,
        type: color,
        typeAnimated: true,
        buttons: {
            Sim: {
                text: 'SIM',
                btnClass: 'btn-'+color,
                action: callback
            },
            Nao: {
                text: 'NÃO',
                action: function(){

                }
            },
        }
    });
}
/************************TOASTS*****************************/
function tipoToast(tipo){ 
    switch (tipo) {
        case 'info':
            return 0;
            break;
        case 'warning':
            return 1;
            break;
        case 'error':
            return 2;
            break;
        case 'success':
            return 3;
            break;

        default:
            throw new Error("Paramêtro 'tipo':"+tipo+", possui valor não reconhecido na função ");
            break;
    }
}
function showToast(title, data, type){
    let icon = ['info','warning','error','success'];
    $.toast({
        heading: title,
        text: data,
        showHideTransition: 'slide', /** slide, plain, fade */
        hideAfter: true, 
        //hideAfter: 5000,
        icon: icon[type],
        allowToastClose: true, /**fechar toast icone */

        /** mostrar no maximo n totas, n é o valor epecificado n = int, caso valor 'false' mostra apenas um toats */
        //stack: 4, 

        /** 
         * bottom- (left, right,center),
         * top- (left,right,center)
         * mid-center,
         * { top: '-', bottom: '-', left: '-', right: '-' 
        */
        // position: 'bottom-left', 

        /** Cores */
        // bgColor: '#FF1356',
        // textColor: 'white',

        /**texto 
         * left, right, center
        */
        // textAlign: 'center'
        /**
         * Eventos
         */

        //  beforeShow: function () {
        //     alert('The toast is about to appear');
        // },
    
        // afterShown: function () {
        //     alert('Toast has appeared.');
        // },
    
        // beforeHide: function () {
        //     alert('Toast is about to hide.');
        // },
    
        // afterHidden: function () {
        //     alert('Toast has been hidden.');
        // }
    })
}
/************************FUNCTIONS*****************************/
function semEspaco(element) {
    element.value = element.value.replace(/[^a-zA-Z0-9]/g,'');
}
//footer
// $(function(){
//     $('.mask-money').mask('000.000.000,00', {reverse:true});
// });