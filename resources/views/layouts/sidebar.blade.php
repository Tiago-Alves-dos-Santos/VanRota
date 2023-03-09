<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.header')
<body style="background-color: #F4F3EF" id="layout-sidebar">
    @include('includes.sidebar')
    <div class="content-sidebar" id="content-sidebar">
        <button type="button" class="btn btn-info" id="toggle-sidebar">toggle</button>
    </div>


    @stack('layout.sidebar.scripts')
    <script>
        $(function(){
            //esconder sublinks
            // $(".sublink-links").hide();
            function toggleSidebar(){
                let mysidebar = $("#mysidebar-geral");
                let container_body = $("#content-sidebar");
                $("#toggle-sidebar").on('click', function(e){
                    let visivel = $(mysidebar).data('show') == 'visivel' ? true:false;
                    if(visivel){//visivel
                        $(container_body).removeClass('container-sidebar-entrada');
                        $(container_body).addClass('container-sidebar-saida');
                        $(mysidebar).removeClass('sidebar-entrada');
                        $(mysidebar).addClass('sidebar-saida');
                        $(mysidebar).data('show','nao-visivel');
                    }else{
                        $(container_body).removeClass('container-sidebar-saida');
                        $(container_body).addClass('container-sidebar-entrada');
                        $(mysidebar).removeClass('sidebar-saida');
                        $(mysidebar).addClass('sidebar-entrada');
                        $(mysidebar).data('show','visivel');
                    }
                });
            }
            toggleSidebar();
        });
    </script>
</body>
</html>
