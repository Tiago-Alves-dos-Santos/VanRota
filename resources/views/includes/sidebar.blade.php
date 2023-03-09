<div class="mysidebar" id="mysidebar-geral" data-show="visivel">
    <div class="titulo">
        <h4>VanRota</h4>
    </div>
    <div class="container-divider">
        <div class="divider"></div>
    </div>
    <div class="links">
        <a href="">
            <i class="fa-solid fa-route"></i>
            Link 1
        </a>
        <a href="">
            <i class="fa-solid fa-route"></i>
            Link 1
        </a>
        <a href="">
            <i class="fa-solid fa-route"></i>
            Link 1
        </a>
        <a href="">
            <i class="fa-solid fa-route"></i>
            Link 1
        </a>
        <div class="container-divider">
            <div class="divider"></div>
        </div>
        <div class="sublink">
            <div class="sublink-title">
                <span>Titulo</span>
                <i class="fa-solid fa-square-caret-down"></i>
            </div>
            <div class="sublink-links">
                <a href="">
                    <i class="fa-solid fa-route"></i>
                    Link 1
                </a>
                <a href="">
                    <i class="fa-solid fa-route"></i>
                    Link 1
                </a>
                <a href="">
                    <i class="fa-solid fa-route"></i>
                    Link 1
                </a>
                <a href="">
                    <i class="fa-solid fa-route"></i>
                    Link 1
                </a>
            </div>
        </div>
    </div>
</div>

@push('layout.sidebar.scripts')
<script>
    $(function(){
        //variaveis globais
        let mysidebar = $("#mysidebar-geral");
        let container_body = $("#content-sidebar");
        //functions-events
        function verfiyWindow(event = true){
            let breakpoint = 1000;
            if($(window).width() <= breakpoint){//sidebar não visivel
                sidebarNaoVisivel();
            }else if($(window).width() > breakpoint && event == true){
                sidebarVisivel();
            }
        }
        verfiyWindow(false);
        function sidebarWindowResise(){
            $(window).resize(function() {
                verfiyWindow();
            });
        }
        sidebarWindowResise();
        function sidebarMaxHeight(){
            $(document).on('scroll', function(){
                $(mysidebar).height(document.body.scrollHeight);
            });
        }
        sidebarMaxHeight();
        function sidebarVisivel(){
            $(container_body).removeClass('container-sidebar-saida');
            $(container_body).addClass('container-sidebar-entrada');
            $(mysidebar).removeClass('sidebar-saida');
            $(mysidebar).addClass('sidebar-entrada');
            $(mysidebar).data('show','visivel');
        }
        function sidebarNaoVisivel(){
            $(container_body).removeClass('container-sidebar-entrada');
            $(container_body).addClass('container-sidebar-saida');
            $(mysidebar).removeClass('sidebar-entrada');
            $(mysidebar).addClass('sidebar-saida');
            $(mysidebar).data('show','nao-visivel');
        }
        function toggleSidebar(){
            $("#toggle-sidebar").on('click', function(e){
                let visivel = $(mysidebar).data('show') == 'visivel' ? true:false;
                if(visivel){//visivel
                    sidebarNaoVisivel();
                }else{
                    sidebarVisivel();
                }
            });
        }
        toggleSidebar();
        //esconder sublinks
        $(".sublink-links").hide();
        function toggleSideSubLinks(){
            $(".sublink-title").on('click', function(){
                let sublinks = $(this).parent().find('.sublink-links');
                $(sublinks).slideToggle();
            });
        }
        toggleSideSubLinks();
    });
</script>
@endpush
