<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.header')
<body style="background-color: #F4F3EF" id="layout-sidebar">
    @include('includes.sidebar')
    <div class="content-sidebar" id="content-sidebar">
        @include('includes.myNavBar')
        <div class="content">

        </div>
    </div>


    @stack('layout.sidebar.scripts')
    <script>
        $(function(){

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="{{ asset('js/footer.js') }}"></script>
</body>
</html>
