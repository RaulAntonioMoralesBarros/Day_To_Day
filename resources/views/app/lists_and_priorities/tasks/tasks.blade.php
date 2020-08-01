@extends('app.layouts.app')

@section('title')
    Tareas
@endsection

@section('filters')
    @include('app.lists_and_priorities.tasks.filters')
@endsection

@section('Listas_y_prioridades')
    active
@endsection

@section('content')
    <div class="main-content-container container-fluid px-4 pb-4">

        {{-- /title content header --}}
        <div class="page-header row no-gutters py-4">
            <div class="col-lg-8 col-sm-12 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Listas y prioridades</span>
                <h3 class="page-title">Oficina</h3>
                <a href="{{ url('Listas_y_prioridades') }}" style="color: #007bff;"><i class="material-icons">
                        keyboard_backspace
                    </i>Volver</a>
            </div>
            <div class="col-lg-4 col-sm-12 text-right text-sm-right mb-0">
                <span class="text-uppercase page-subtitle">22 de Julio del 2020</span><br>
                <a href="" style="color: red;"><i class="material-icons">&#xE872;</i>Eliminar todo</a>
            </div>
        </div>
        {{-- /title content header --}}

        {{-- content body --}}
        <div class="card card-small mb-3">

            {{-- title --}}
            <div class="card-header border-bottom">
                <h6 class="m-0">Tareas</h6>
            </div>
            {{-- /title --}}

            {{-- body --}}
            <div class="card-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex px-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Agregar nuevas tareas"
                                aria-label="Agregar nuevas tareas" aria-describedby="basic-addon2" />
                            <div class="input-group-append">
                                <button class="btn btn-white px-2" type="button" >
                                    <i class="material-icons">add</i>
                                </button>
                            </div>
                        </div>
                    </li>

                    {{-- content --}}
                    <li class="list-group-item px-3 pb-2">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" id="tarea1" checked />
                            <label class="custom-control-label" style="text-decoration: line-through;" for="tarea1">
                                <a data-toggle="modal" data-target="#tarea">
                                    Ordenar la cocina
                                </a>
                            </label>

                            <span style="text-align: left; font-size: 12px;">
                                <i class="material-icons">notifications_none</i></span>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" id="tarea1" />
                            <label class="custom-control-label" for="tarea1">Ver television
                            </label>
                            <span style="text-align: left; font-size: 12px;">
                                <i class="material-icons">notifications_none</i></span>
                            <span style="text-align: left; font-size: 12px;">
                                <i class="material-icons">content_paste</i></span>
                           
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" id="tarea2" />
                            <label class="custom-control-label" for="tarea2">Comer</label>
                        </div>
                    </li>
                    {{-- /content --}}

                </ul>
            </div>
            {{-- /body --}}

        </div>
        {{-- /content body --}}

        {{-- modal_tasks --}}
        @include('app.lists_and_priorities.tasks.modal_task')
        {{-- /modal_tasks --}}

    </div>
@endsection
