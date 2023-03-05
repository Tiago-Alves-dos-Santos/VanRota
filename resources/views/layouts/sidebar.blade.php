<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.header')
<body style="background-color: #F4F3EF" id="layout-sidebar">
    <div class="mysidebar">
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
                <span>Titulo</span>
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
    <div class="content-sidebar">
        <button>toggle</button>
    </div>


    <script>
        $(function(){

        });
    </script>
</body>
</html>
