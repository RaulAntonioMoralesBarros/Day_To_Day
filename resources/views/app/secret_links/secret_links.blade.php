@extends('app.layouts.app')

@section('title')
    Enlaces_secretos
@endsection


@section('button')
    @include('app.secret_links.button_modal_secret_link')
@endsection


@section('Enlaces_secretos')
    active
@endsection

@section('content')

    <div class="main-content-container container-fluid px-4 pb-4">

        {{-- title content header --}}
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Enlaces secretos</span>
                <h3 class="page-title">Mis lista de enlaces</h3>
            </div>
        </div>
        {{-- /title content header --}}

        {{-- content body --}}
        <table class="file-manager file-manager-list d-none table-responsive">
            <thead>
                <tr>
                    <th style="width: 10px;" class="hide-sort-icons"></th>
                    <th class="text-left">Nombre</th>
                    <th>URL</th>
                    <th class="text-right">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="file-manager__item-icon">
                        <div>
                            <a href="life_diary.html">
                                <i class="material-icons">web</i>
                            </a>
                        </div>
                    </td>
                    <td class="text-left">
                        <a href="https://www.youtube.com">
                            <h5 class="file-manager__item-title">Youtube</h5>
                            <span class="file-manager__item-meta">Creado el 10 de diciembre del 2019.</span>
                        </a>
                    </td>
                    <td><a href="https://www.youtube.com">https://www.youtube.com/?hl=es-419&gl=CL</a></td>
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
        @include('app.secret_links.button_modal_secret_links_help')

    </div>

@endsection
