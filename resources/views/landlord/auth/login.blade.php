@extends('landlord.layouts.guest')
@section('title', 'Ingresar')
@section('content')
    <div class="section-left">
        <div class="section-left-content">
            <h1 class="text-36 font-weight-light text-white">¿No tienes una cuenta?</h1>
            <p class="mb-24 text-small">Deje de perder tiempo y dinero. ¡Es gratis!</p>
            <a href="registrarme.html" class="btn btn-raised btn-raised-warning">Registrarme</a>
        </div>
    </div>
    <div class="form-holder signin-2 px-xxl">
        <div data-perfect-scrollbar='' data-suppress-scroll-x='true'>
            <div class="d-flex flex-column align-items-center mt-lg mb-xxl">
                <img class="card-img-top signup" src="{{ asset('theme/images/logo.png') }}" style="width: 300px; text-align: center;" alt="Card image cap">
                
                <span class="mb-md text-muted mb-lg d-block"></span>
            </div>
            <form class="">
                <div class="input-group with-icon input-light mb-xl">
                    <div class="input-group-prepend">
                        <i class="input-group-text material-icons">perm_identity</i>
                    </div>
                    <input type="text" class="form-control" placeholder="Usuario" value="" aria-label="Usuario" aria-describedby="basic-addon1">
                </div>
                <div class="input-group with-icon input-light mb-xl">
                    <div class="input-group-prepend">
                        <i class="input-group-text material-icons">lock</i>
                    </div>
                    <input type="password" class="form-control" placeholder="Contraseña" value="" aria-label="Contraseña" aria-describedby="basic-addon1">
                </div>
                <button type="button" class="btn btn-raised btn-raised-primary btn-block">Ingresar</button>
                <br><br>
                <button type="button" class="btn btn-raised btn-raised-default btn-block">¿Has olvidado tu Contraseña?</button>
                
            </form>
        </div>
    </div>
@stop