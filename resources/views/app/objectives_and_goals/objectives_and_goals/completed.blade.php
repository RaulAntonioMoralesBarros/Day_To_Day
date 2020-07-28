@extends('app.layouts.app')

@section('title')
    Completadas
@endsection

@section('Objetivos_y_metas')
    active
@endsection

@section('Completadas_metas')
    active
@endsection

@section('filters')
    @include('app.objectives_and_goals.objectives_and_goals.filters')
@endsection

@section('content')
    <div class="main-content-container container-fluid px-4 pb-4">

        {{-- title content header --}}
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Objetivos y metas</span>
                <h3 class="page-title">Metas completadas</h3>
                <a href="{{ url('Objetivos_y_metas') }}" style="color: #007bff;"><i class="material-icons">
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
                        <h6 class="m-0">Todas mis metas</h6>
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
                            <p>Se marcó la meta <a href="#">bajar de peso </a> como <span
                                    class="badge badge-pill badge-outline-success">Completada</span>
                        </div>
                        <div class="user-activity__item__action ml-auto">
                            <button class="ml-auto btn btn-sm btn-white">Ver meta y objetivos</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- /content body --}}

    </div>
@endsection
