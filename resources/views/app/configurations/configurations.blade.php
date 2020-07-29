@extends('app.layouts.app')

@section('title')
    Configuraciones
@endsection

@section('content')

    <div class="main-content-container container-fluid px-4">

        {{-- title content header --}}
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Configuración</span>
                <h3 class="page-title">Mi configuración</h3>
            </div>
        </div>
        {{-- /title content header --}}

        {{-- content body --}}
        <div class="row">
            <div class="col-lg-8 mx-auto mt-4">
                <div class="card card-small edit-user-details mb-4">
                    <div class="card-body p-0">
                        <form action="#" class="py-4">
                            {{-- account information --}}
                            <div class="form-row mx-4">
                                <div class="col-lg-12 col-mb-12">
                                    <h6 class="form-text m-0">Información de la cuenta</h6>

                                    <a class="dropdown-item" href="{{ url('Perfil') }}">
                                        <i class="material-icons">account_box</i> Perfil de usuario</a>
                                    <a class="dropdown-item" href="{{ url('Cambiar_contraseña') }}">
                                        <i class="material-icons">lock</i> Cambiar contraseña</a>
                                    <a class="dropdown-item" href="{{ url('Index#cuentas') }}">
                                        <span class="badge badge-pill badge-outline-success">Cuenta Básica</span> <small style="color: crimson" >¡¡Cambiate
                                            a premium!!</small></a>
                                </div>
                            </div>
                            {{-- /account information --}}
                            <hr />

                            {{-- configurations --}}
                            <div class="form-row mx-4">
                                <h6 class="form-text m-0">Configuración</h6>
                            </div>

                            {{-- reminder --}}
                            <div class="form-row mx-4">
                                <label for="conversationsEmailsToggle" class="col col-form-label"> Recordatorios <small
                                        class="form-text text-muted"> Envia notificaciones de recordatorio de tus listas y
                                        metas hacia tu computador. </small>
                                </label>
                                <div class="col d-flex">
                                    <div class="custom-control custom-toggle ml-auto my-auto">
                                        <input type="checkbox" id="conversationsEmailsToggle" class="custom-control-input"
                                            checked="">
                                        <label class="custom-control-label" for="conversationsEmailsToggle"></label>
                                    </div>
                                </div>
                            </div>
                            {{-- /reminder --}}

                            {{-- sign off --}}
                            <div class="form-row mx-4">
                                <label for="newProjectsEmailsToggle" class="col col-form-label"> Cerrar sesión <small
                                        class="form-text text-muted"> Cierra la sesión una vez pasada los 30 min de
                                        inactividad. </small>
                                </label>
                                <div class="col d-flex">
                                    <div class="custom-control custom-toggle ml-auto my-auto">
                                        <input type="checkbox" id="newProjectsEmailsToggle" class="custom-control-input">
                                        <label class="custom-control-label" for="newProjectsEmailsToggle"></label>
                                    </div>
                                </div>
                            </div>
                            {{-- /sign off --}}

                            {{-- notifications --}}
                            <div class="form-row mx-4">
                                <label for="vulnerabilitiesEmailsToggle" class="col col-form-label"> Notificaciones
                                    <small class="form-text text-muted"> Mostrara una notificación por cada acción realizada
                                        dentro de la aplicación. </small>
                                </label>
                                <div class="col d-flex">
                                    <div class="custom-control custom-toggle ml-auto my-auto">
                                        <input type="checkbox" id="vulnerabilitiesEmailsToggle" class="custom-control-input"
                                            checked="">
                                        <label class="custom-control-label" for="vulnerabilitiesEmailsToggle"></label>
                                    </div>
                                </div>
                            </div>
                            {{-- /notifications --}}
                            {{-- /configurations --}}

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
