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
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <input type="password" name="senha" class="my-custom-input" placeholder="******">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <button type="submit" class="login-btn">
                    Entrar
                </button>
            </div>
        </div>
    </form>
</div>
