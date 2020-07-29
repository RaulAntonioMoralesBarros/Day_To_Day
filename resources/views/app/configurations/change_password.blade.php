@extends('app.layouts.app')

@section('title')
    Cambiar contraseña
@endsection

@section('content')

    <div class="main-content-container container-fluid px-4">

        {{-- title content header --}}
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Perfil de usuario</span>
                <h3 class="page-title">Cambiar contraseña</h3>
                <a href="{{ url('Configuracion') }}" style="color: #007bff;"><i class="material-icons">
                        keyboard_backspace
                    </i>Volver</a>
            </div>
        </div>
        {{-- /title content header --}}

        {{-- content body --}}
        <div class="row">
            <div class="col-lg-8 mx-auto mt-4">
                <div class="card card-small edit-user-details mb-4">
                    <div class="card-body p-0">
                        <form action="#" class="py-4">
                            <div class="form-row mx-4">
                                <div class="col mb-3">
                                    <h6 class="form-text m-0">Cambiar contraseña</h6>
                                    <small class="form-text text-muted m-0">Cambia tu contraseña actual.</small>
                                </div>
                            </div>
                            <div class="form-row mx-4">
                                <div class="form-group col-md-4">
                                    <label for="firstName">Contraseña anterior</label>
                                    <input type="password" class="form-control" id="firstName"
                                        placeholder="Contraseña anterior">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="lastName">Nueva contraseña</label>
                                    <input type="password" class="form-control" id="lastName" placeholder="Nueva contraseña">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="emailAddress">Repite la nueva contraseña</label>
                                    <input type="password" class="form-control" id="emailAddress"
                                        placeholder="Repite la nueva contraseña">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        {{-- /content body --}}

    </div>

@endsection
