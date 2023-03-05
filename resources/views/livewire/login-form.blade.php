<div class="livewire-login-form">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
        @switch($tipo)
            @case('cliente')
            <form wire:submit.prevent="loginCliente" method="POST">
                @break
            @case('vr-motorista')
            <form wire:submit.prevent="loginMotorista" method="POST">
                @break
            @case('vr-cobrador')
            <form wire:submit.prevent="loginCobrador" method="POST">
                @break
            @case('vr-dono')
            <form wire:submit.prevent="loginDono" method="POST">
                @break
            @case('devsoft')
            <form wire:submit.prevent="loginDeveloper" method="POST">
                @break
            @default

        @endswitch
        @csrf
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <h1>
                    <span>V</span>an<span>R</span>ota
                </h1>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12 d-flex justify-content-center">
                <img src="{{ asset('img/motorista-teste.png') }}" alt="">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12 d-flex justify-content-center">
                @switch($tipo)
                    @case('cliente')
                        {{-- Colocar nome do cliente aq --}}
                        <h4></h4>
                        @break
                    @case('vr-motorista')
                        <h4>Motorista</h4>
                        @break
                    @case('vr-cobrador')
                        <h4>Cobrador</h4>
                        @break
                    @case('vr-dono')
                        <h4>Dono</h4>
                        @break
                    @case('devsoft')
                        <h4>Desenvolvedor</h4>
                        @break

                    @default
                    <h4 class="text-danger">Erro tipo login não definido</h4>
                @endswitch
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Senha</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input pointer" type="checkbox" value="" id="flexCheckDefault" style="accent-color: red !important;">
                    <label class="form-check-label pointer" for="flexCheckDefault">
                      Lembrar-me
                    </label>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a href="">Esqueci a senha!</a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <button type="submit" class="btn btn-login w-100">
                    Entrar
                </button>
            </div>
        </div>
        @if ($tipo == 'cliente')
        <div class="row mt-4">
            <div class="col-md-12 d-flex justify-content-center flex-column align-items-center">
                <h6>Ou entre com:</h6>
                <a href="" class="login-social" title="Login com facebook">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </div>
        </div>
        @endif
    </form>
</div>
