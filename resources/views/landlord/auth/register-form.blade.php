<div class="sign2">
    <div class="section-left">
    </div>
    <div class="form-holder signup-2 px-xxl" data-perfect-scrollbar='' data-suppress-scroll-x='true' ">
        <form class="signup-form">
            <div class="mb-xxl signin-right-image">
                <img class="card-img-top signup" src="{{ asset('theme/images/logo.png') }}" style="width: 300px; text-align: center;" alt="Card image cap">
            </div>
            <div class="form-headline text-center mt-md mb-xxxl">
                <h3 class="heading">Create una cuenta y vive la experiencia</h3>
            </div>
            <div class="row">
                <div class="col-md-6 mb-md">
                    <div class="input-group  input-light mb-3">
                        <input wire:model.defer="name" type="text" class="form-control" placeholder="Nombre del Negocio">
                    </div>
                </div>
                <div class="col-md-6 mb-sm">
                    <div class="input-group  input-light mb-3">
                        <input wire:model.defer="email" type="text" class="form-control" placeholder="Tu E-mail">
                    </div>
                </div>
                <div class="col-md-6 mb-sm">
                    <div class="input-group  input-light mb-3">
                        <input wire:model.defer="phone" type="text" class="form-control" placeholder="Tu numero de Whatsapp">
                    </div>
                </div>
                <div class="col-md-6 mb-sm">
                    <div class="input-group  input-light mb-3">
                        <input wire:model.defer="password" type="password" class="form-control" placeholder="Contraseña">
                    </div>
                </div>
                <div class="col-md-6 mb-md">
                    <div class="input-group  input-light mb-3">
                        <input wire:model.defer="domain" type="text" class="form-control" placeholder="Nombr del Dominio">
                    </div>
                </div>
            </div>
            <div class="mb-md custom-control custom-checkbox checkbox-primary mb-xl">
                <input type="checkbox" class="custom-control-input" id="customCheck2">
                <label class="custom-control-label" for="customCheck2">Estoy de acuerdo con los términos y condiciones</label>
            </div>
            <button wire:click="save" type="button" class="btn btn-raised btn-raised-primary btn-block">Registrarme</button>
            <div class="border-bottom mt-xxl mb-lg"></div>
            <div class="text-center">
                <p>Registrarte con</p>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-google btn-outline mx-xs"><i class="fab fa-google"></i>Google</button>
                <button class="btn btn-outline btn-facebook mx-xs"><i class="fab fa-facebook-f"></i>Facebook</button>
                <button class="btn btn-twitter btn-outline mx-xs"><i class="fab fa-twitter"></i>Twitter</button>
            </div>
        </form>
    </div>
</div>