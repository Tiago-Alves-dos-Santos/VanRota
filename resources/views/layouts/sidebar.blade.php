<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.header')
<body style="background-color: #F4F3EF" id="layout-sidebar">
    {{-- colocar session do usuario para não ficar passando parametro --}}
    @include('includes.sidebar', ['tipo' => 'users'])
    <div class="content-sidebar" id="content-sidebar">
        @include('includes.myNavBar')
        <div class="content">
            @yield('content-body')
        </div>
    </div>


    @stack('layout.sidebar.scripts')
    <script>
        $(function(){

        });
    </script>

    @include('includes.footer')
</body>
</html>
