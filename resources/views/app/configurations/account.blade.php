@extends('app.layouts.app')

@section('title')
    Perfil
@endsection

@section('content')
    <div class="main-content-container container-fluid px-4">

        {{-- title content header --}}
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Perfil de usuario</span>
                <h3 class="page-title">Mi perfil</h3>
                <a href="{{ url('Configuracion') }}" style="color: #007bff;"><i class="material-icons">
                        keyboard_backspace
                    </i>Volver</a>
            </div>
        </div>
        {{-- /title content header --}}

        {{-- content body --}}
        <div class="row">

            {{-- account information --}}
            <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                    <div class="card-header border-bottom text-center">
                        <div class="mb-3 mx-auto">
                            <img class="rounded-circle" src="img/avatars/1.png" alt="User Avatar" width="110"> </div>
                        <h4 class="mb-0">Raúl Antonio</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-4">
                            <div class="progress-wrapper">
                                <strong class="text-muted d-block mb-2">Metas cumplidas</strong>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="74"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 74%;">
                                        <span class="progress-value">74%</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item p-4">
                            <strong class="text-muted d-block mb-2">Description</strong>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi
                                soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi
                                cumque?</span>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- /account information --}}

            {{-- account modification --}}
            <div class="col-lg-8">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Detalles de la cuenta</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <div class="row">
                                <div class="col">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="feFirstName">Cambiar imagen</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile04"
                                                            aria-describedby="inputGroupFileAddon04">
                                                        <label class="custom-file-label" for="inputGroupFile04">Cambiar
                                                            archivo</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="feFirstName">Nombres</label>
                                                <input type="text" class="form-control" id="feFirstName"
                                                    placeholder="First Name" value="Raúl"> </div>
                                            <div class="form-group col-md-6">
                                                <label for="feLastName">Apellidos</label>
                                                <input type="text" class="form-control" id="feLastName"
                                                    placeholder="Last Name" value="Antonio"> </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="feEmailAddress">Correo electronico</label>
                                                <input type="email" class="form-control" id="feEmailAddress"
                                                    placeholder="Email" value="raulantonio@example.com"> </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="feDescription">Description</label>
                                                <textarea class="form-control" name="feDescription"
                                                    rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi cumque?</textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-accent">Actualizar cuenta</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- /account modification --}}
        </div>
    </div>
@endsection
