@extends('app.layouts.app')

@section('title')
    Invita para ser premium
@endsection

@section('content')
    <div class="main-content-container container-fluid px-4">
        <div class="row">
            <div class="col-lg-8 mx-auto mt-4">
                <!-- Edit User Details Card -->
                <div class="card card-small edit-user-details mb-4">

                    <div class="card-body p-0">
                        <form action="#" class="py-4">
                            <div class="form-row mx-4">
                                <div class="col-lg-12 col-mb-12">
                                    <h6 class="form-text m-0">Avisale a tus amigos sobre nuestra aplicación <a href=""> Day
                                            To Day </a></h6>
                                    <p class="form-text text-muted m-0">Con ello conseguiras una cuenta premium el cual
                                        tendra una duración máxima de <span
                                            class="badge badge-pill badge-outline-success">siempre</span> ¡¡Como lo has
                                        leido!! seras premium de forma gratuita si 10 de tus amigos se registran.</p>

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

                            {{-- <div class="form-row mx-4">
                                                    <div class="col mb-3">
                                                        <h6 class="form-text m-0">Notifications</h6>
                                                        <p class="form-text text-muted m-0">Setup which notifications would you like to receive.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="form-row mx-4">
                                                    <label for="conversationsEmailsToggle" class="col col-form-label"> Conversations <small
                                                            class="form-text text-muted"> Sends notification emails with updates for the
                                                            conversations you are participating in or if someone mentions you. </small>
                                                    </label>
                                                    <div class="col d-flex">
                                                        <div class="custom-control custom-toggle ml-auto my-auto">
                                                            <input type="checkbox" id="conversationsEmailsToggle" class="custom-control-input"
                                                                checked="">
                                                            <label class="custom-control-label" for="conversationsEmailsToggle"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row mx-4">
                                                    <label for="newProjectsEmailsToggle" class="col col-form-label"> New Projects <small
                                                            class="form-text text-muted"> Sends notification emails when you are invited to a
                                                            new project. </small>
                                                    </label>
                                                    <div class="col d-flex">
                                                        <div class="custom-control custom-toggle ml-auto my-auto">
                                                            <input type="checkbox" id="newProjectsEmailsToggle" class="custom-control-input">
                                                            <label class="custom-control-label" for="newProjectsEmailsToggle"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row mx-4">
                                                    <label for="vulnerabilitiesEmailsToggle" class="col col-form-label"> Vulnerability Alerts
                                                        <small class="form-text text-muted"> Sends notification emails when everything goes down
                                                            and there's no hope left whatsoever. </small>
                                                    </label>
                                                    <div class="col d-flex">
                                                        <div class="custom-control custom-toggle ml-auto my-auto">
                                                            <input type="checkbox" id="vulnerabilitiesEmailsToggle" class="custom-control-input"
                                                                checked="">
                                                            <label class="custom-control-label" for="vulnerabilitiesEmailsToggle"></label>
                                                        </div>
                                                    </div>
                                                </div> --}}


                            <div class="card-footer border-top">
                                <a href="#" class="btn btn-sm btn-accent ml-auto d-table mr-3">Enviar</a>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- End Edit User Details Card -->
            </div>
        </div>
    </div>

@endsection
