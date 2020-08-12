@extends("app.layouts.app")

@section('button')
    @include('app.diaries.personal_diary.button_modal_personal_diary')
@endsection

@section('Diario_de_vida')
    active
@endsection

@section('title')
    Diario personal
@endsection

@section('content')
    <div class="main-content-container container-fluid px-4 pb-4">

        {{-- content header --}}
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Diario Personal</span>
                <h3 class="page-title">Mis Diarios personales</h3>
            </div>
        </div>
        {{-- /content header --}}


        {{-- content body --}}
        <table class="file-manager file-manager-list d-none table-responsive">
            <thead>
                <tr>
                    <th style="width: 10px;" class="hide-sort-icons"></th>
                    <th class="text-left">Nombre</th>
                    <th>Páginas</th>
                    <th class="text-right">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="file-manager__item-icon">
                        <div>
                            <a href="{{ url('Paginas_del_diario_personal') }}">
                                <i class="material-icons">menu_book</i>
                            </a>
                        </div>
                    </td>
                    <td class="text-left">
                        <a href="{{ url('Paginas_del_diario_personal') }}">
                            <h5 class="file-manager__item-title">Primeros pasos de mi vida</h5>
                            <span class="file-manager__item-meta">Creado el 10 de diciembre del 2019.</span>
                        </a>
                    </td>
                    <td>6 pág.</td>
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
        @include('app.diaries.personal_diary.button_modal_diary_personal_help')
    </div>
@endsection
