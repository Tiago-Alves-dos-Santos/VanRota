<div class="livewire-login-form">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <form action="">
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
                <h4>Motorista</h4>
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
        <div class="row mt-4">
            <div class="col-md-12 d-flex justify-content-center flex-column align-items-center">
                <h6>Ou entre com:</h6>
                <a href="" class="login-social" title="Login com facebook">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </div>
        </div>
    </form>
</div>
