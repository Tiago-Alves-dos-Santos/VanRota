<div class="livewire-login-form">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <form action="">
        <div class="row mb-5">
            <div class="col-md-12 d-flex justify-content-center">
                <img src="{{ asset('img/default-user-400.jpg') }}" alt="imagem usuario">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <input type="text" name="email" class="my-custom-input" placeholder="seu@email.com">
                <span class="text-danger mt-1">Error msg</span>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <input type="password" name="senha" class="my-custom-input" placeholder="******">
                <span class="text-danger mt-1">Error msg</span>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="form-check form-switch">
                    <input class="form-check-input pointer" type="checkbox" value="" id="lembrar_me" name="lembrar_me" style="accent-color: red;">
                    <label class="form-check-label pointer" for="lembrar_me">
                      Lembrar de mim
                    </label>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <button type="submit" class="login-btn">
                    Entrar
                </button>
                <button type="button" class="login-btn-blue mt-4" title="Login facebook" style="padding-top: 10px">
                    <i class="fa-brands fa-facebook fa-2xl"></i>
                </button>
            </div>
        </div>
    </form>
</div>
