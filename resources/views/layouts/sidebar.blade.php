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

        });
    </script>
    <script src="{{ asset('js/footer.js') }}"></script>
</body>
</html>
