@extends('layouts.app')

@section('title')
    Objetivos
@endsection

@section('Objetivos_y_metas')
    active
@endsection


@section('filters')
    @include('objectives_and_goals.objectives.filters')
@endsection


@section('content')
    <div class="main-content-container container-fluid px-4 pb-4">

        {{-- title content header --}}
        <div class="page-header row no-gutters py-4">
            <div class="col-lg-8 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Objetivos y metas</span>
                <h3 class="page-title">Aprender canción Chop Suey - SOAD</h3>
                <a href="{{ url('Objetivos_y_metas') }}" style="color: #007bff;"><i class="material-icons">
                        keyboard_backspace
                    </i>Volver</a>
            </div>
            <div class="col-lg-4 col-sm-4 text-right text-sm-right mb-0">
                <span class="text-uppercase page-subtitle">22 de Julio del 2020</span><br>
                <a href="" style="color: red;"><i class="material-icons">&#xE872;</i>Eliminar todo</a>
            </div>
        </div>
        {{-- /title content header --}}

        {{-- content body --}}
        <div class="row">
            <div class="col-lg-8 mb-3">
                <div class="card card-small mb-3">
                    {{-- title --}}
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Mis objetivos</h6>
                    </div>
                    {{-- /title --}}

                    {{-- body --}}
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex px-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Nuevos objetivos"
                                        aria-label="Agregar nuevas objetivos" aria-describedby="basic-addon2" />
                                    <div class="input-group-append">
                                        <button class="btn btn-white px-2" type="button" data-toggle="modal"
                                            data-target="#tarea">
                                            <i class="material-icons">add</i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item px-3 pb-2">
                                <div class="custom-control custom-checkbox mb-1">
                                    <input type="checkbox" class="custom-control-input" id="tarea1" checked />
                                    <label class="custom-control-label" style="text-decoration: line-through;"
                                        for="tarea1">Introducción
                                    </label>

                                    <span style="text-align: left; font-size: 12px;">
                                        <i class="material-icons">alarm</i> 12 de febrero 10:20
                                        PM</span>

                                    <a href="" style="color: red;"><i class="material-icons">&#xE872;</i></a>

                                </div>
                                <div class="custom-control custom-checkbox mb-1">
                                    <input type="checkbox" class="custom-control-input" id="tarea1" />
                                    <label class="custom-control-label" for="tarea1">Verso
                                    </label>
                                    <span style="text-align: left; font-size: 12px;">
                                        <i class="material-icons">alarm</i> 1 de febrero 10:20
                                        PM</span> -
                                    <span style="text-align: left; font-size: 12px;">
                                        <i class="material-icons">content_paste</i>Nota</span>
                                    <a href="" style="color: red;"><i class="material-icons">&#xE872;</i></a>
                                    <a href="#" class="card-post__category badge badge-pill badge-info" data-toggle="modal"
                                        data-target=".tarea">Información.</a>
                                </div>
                                <div class="custom-control custom-checkbox mb-1">
                                    <input type="checkbox" class="custom-control-input" id="tarea2" />
                                    <label class="custom-control-label" for="tarea2">Pre-estribillo</label>
                                    <a href="" style="color: red;"><i class="material-icons">&#xE872;</i></a>

                                </div>
                            </li>
                        </ul>
                    </div>
                    {{-- body --}}

                </div>
            </div>


            <div class="col-lg-4 mb-4">
                {{-- progress --}}
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom text-center">
                        <h6 class="m-0">Progreso para alcanzar la meta</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-3">
                            <div class="mb-2">
                                <div class="progress mb-3 ">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="35"
                                        aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- /progress --}}
            </div>

        </div>
        {{-- content body --}}

        @include('objectives_and_goals.objectives.modal_objetives')

        
    </div>
@endsection
