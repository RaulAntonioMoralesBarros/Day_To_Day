@extends('app.layouts.app')

@section('title')
    Historial
@endsection

@section('Objetivos_y_metas')
    active
@endsection

@section('Historial_objetivos')
    active
@endsection

@section('filters')
    @include('app.objectives_and_goals.objectives.filters')
@endsection

@section('content')
    <div class="main-content-container container-fluid px-4 pb-4">

        {{-- title content header --}}
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Objetivos y metas</span>
                <h3 class="page-title">Historial</h3>
                <a href="{{ url('Metas') }}" style="color: #007bff;"><i class="material-icons">
                        keyboard_backspace
                    </i>Volver</a>
            </div>
        </div>
        {{-- /title content header --}}

        {{-- content body --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-small user-activity mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Actividades</h6>
                        <div class="block-handle"></div>
                    </div>
                    <div class="card-body p-0">
                    </div>
                    <div class="user-activity__item pr-3 py-3">
                        <div class="user-activity__item__icon">
                            <i class="material-icons"></i>
                        </div>
                        <div class="user-activity__item__content">
                            <span class="text-light">hace 2 horas</span>
                            <p>Marcaste <a href="#">1 tarea</a> como <span
                                    class="badge badge-pill badge-outline-success">Completada</span>
                        </div>
                    </div>
                    <div class="user-activity__item pr-3 py-3">
                        <div class="user-activity__item__icon">
                            <i class="material-icons"></i>
                        </div>
                        <div class="user-activity__item__content">
                            <span class="text-light">2 Days ago</span>
                            <p>Agregaste <a href="#">2 nuevas tareas</a> a la meta <a href="#">Aprender canción Chop Suey -
                                    SOAD</a>:</p>
                            <ul class="user-activity__item__task-list mt-2">
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="user-activity-task-1">
                                        <label class="custom-control-label" for="user-activity-task-1">solo final.</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="user-activity-task-2">
                                        <label class="custom-control-label" for="user-activity-task-2">estribillo
                                            final.</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="user-activity__item pr-3 py-3">
                        <div class="user-activity__item__icon">
                            <i class="material-icons"></i>
                        </div>
                        <div class="user-activity__item__content">
                            <span class="text-light">hace 2 dias</span>
                            <p>Existieron <a href="#">3 tareas</a> que fueron <span
                                    class="badge badge-pill badge-outline-danger">Eliminadas</span>
                                en la meta <a href="#">Aprender canción Chop Suey - SOAD</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- /content body --}}
        
    </div>
@endsection
