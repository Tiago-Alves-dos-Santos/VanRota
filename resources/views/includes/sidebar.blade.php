@php
    $links = Sidebar::getLinksType($tipo);
    $sublinks = Sidebar::getSubLinksType($tipo);
    // dd($sub_links);
@endphp
<div class="mysidebar" id="mysidebar-geral" data-show="visivel">
    <div class="titulo">
        <h4>VanRota</h4>
    </div>
    <div class="container-divider">
        <div class="divider"></div>
    </div>
    <div class="links">
        @foreach ($links as $value)
        <a href="{{ $value["url"] }}">
            <?=  $value["icone"] ?>
            {{ $value["nome"] }}
        </a>
        @endforeach
        @if (!empty($sublinks))
        <div class="container-divider">
            <div class="divider"></div>
        </div>
        @endif
        @php
            $old_key = '';
        @endphp

        @forelse ($sublinks as $key => $links )
        <div class="sublink">
            <div class="sublink-title">
                <div class="title">
                    <span style="text-transform: capitalize">{{ $key }}</span>
                    <i class="fa-solid fa-square-caret-down"></i>
                </div>

                <div class="sublink-links">
                    @foreach ($links as $value )
                    <a href="{{ $value["url"] }}">
                        <?=  $value["icone"] ?>
                        {{ $value["nome"] }}
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        @empty
        @endforelse

    </div>
</div>

@push('layout.sidebar.scripts')
<script>
    $(function(){
        //variaveis globais
        let mysidebar = $("#mysidebar-geral");
        let container_body = $("#content-sidebar");
        let toggle_sidebar = $("#toggle-sidebar");
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
            $(toggle_sidebar).html('<i class="fa-solid fa-xmark"></i>');
            $(mysidebar).data('show','visivel');
        }
        function sidebarNaoVisivel(){
            $(container_body).removeClass('container-sidebar-entrada');
            $(container_body).addClass('container-sidebar-saida');
            $(mysidebar).removeClass('sidebar-entrada');
            $(mysidebar).addClass('sidebar-saida');
            $(toggle_sidebar).html('<i class="fa-solid fa-bars"></i>');
            $(mysidebar).data('show','nao-visivel');
        }
        function toggleSidebar(){
            $(toggle_sidebar).on('click', function(e){
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
