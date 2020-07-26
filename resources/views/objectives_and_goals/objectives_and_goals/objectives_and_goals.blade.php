@extends('layouts.app')

@section('title')
    Objetivos_y_metas
@endsection

@section('Objetivos_y_metas')
    active
@endsection

@section('filters')
    @include('objectives_and_goals.objectives_and_goals.filters')
@endsection

@section('button')
    @include('objectives_and_goals.objectives_and_goals.modal_button_objectives_and_goals')
@endsection

@section('content')
    <div class="main-content-container container-fluid px-4 pb-4">

        {{-- title content header --}}
        <div class="page-header row no-gutters py-4">
            <div class="col">
                <span class="text-uppercase page-subtitle">Objetivos y metas</span>
                <h3 class="page-title">Mis metas</h3>
            </div>
        </div>
        {{-- /title content header --}}

        {{-- content body --}}
        <table class="file-manager file-manager-list d-none table-responsive">
            <thead>
                <tr>
                    <th style="width: 10px;" class="hide-sort-icons"></th>
                    <th class="text-left">Nombre</th>
                    <th>Nº de objetivos</th>
                    <th class="text-right">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="file-manager__item-icon">
                        <div>
                            <a href="{{url('Metas')}}">
                                <i class="material-icons">leaderboard</i>
                            </a>
                        </div>
                    </td>
                    <td class="text-left">
                        <a href="{{url('Metas')}}">
                            <h5 class="file-manager__item-title">Aprender canción Chop Suey - SOAD</h5>
                            <span class="file-manager__item-meta">Creado el 22 de diciembre del 2019.</span>
                        </a>
                    </td>
                    <td>6</td>
                    <td class="file-manager__item-actions">
                        <div class="btn-group btn-group-sm d-flex justify-content-end" role="group"
                            aria-label="Table row actions">
                            <button type="button" class="btn btn-white active-light">
                                <i class="material-icons">&#xE254;</i>
                            </button>
                            <button type="button" class="btn btn-danger">
                                <i class="material-icons">&#xE872;</i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        {{-- /content body --}}

    </div>
@endsection
