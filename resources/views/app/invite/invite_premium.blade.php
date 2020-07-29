@extends('app.layouts.app')

@section('title')
    Invita para ser premium
@endsection

@section('content')
    <div class="main-content-container container-fluid px-4">

        {{-- title content header --}}
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Invitar</span>
                <h3 class="page-title">Invita a tus amigos</h3>

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
                                <div class="col-lg-12 col-mb-12">
                                    <h6 class="form-text m-0" style="color: crimson">Avisale a tus amigos sobre nuestra
                                        aplicación <a href=""> Day
                                            To Day </a></h6>
                                    <p class="form-text text-muted m-0">Con ello conseguiras una cuenta premium el cual
                                        tendra una duración máxima de <span
                                            class="badge badge-pill badge-outline-success">siempre</span> <span
                                            style="color: black;font-weight: bold"> ¡¡Como lo has
                                            leido!! </span> seras premium de forma gratuita si 10 de tus amigos se
                                        registran.</p>
                                    <br>
                                </div>
                                <div class="col-lg-6 col-mb-12">
                                    <h6 class="form-text m-0">Número de invitaciones enviadas: <a href="">0</a></h6>
                                </div>
                                <div class="col-lg-6 col-mb-12">
                                    <h6 class="form-text m-0">Número de personas registradas tras ser invitadas por ti: <a
                                            href="">0</a></h6>
                                </div>
                            </div>
                            <div class="form-row mx-4">
                                <div class="col-lg-12">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="firstName">Remitente:</label>
                                            <input type="text" class="form-control" id="firstName" value="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="lastName">Email destino:</label>
                                            <input type="text" class="form-control" id="lastName" value="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="userBio">Contenido:</label>
                                            <textarea style="min-height: 87px;" id="userBio" name="userBio"
                                                class="form-control">He descubierto esta página llamada Day To Day y he pensado que te resultará muy útil.</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-top">
                                <a href="#" class="btn btn-sm btn-accent ml-auto d-table mr-3">Enviar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- /content body --}}

    </div>
@endsection
