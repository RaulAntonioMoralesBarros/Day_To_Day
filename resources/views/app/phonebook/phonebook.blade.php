@extends('app.layouts.app')

@section('title')
    Agenda_telefónica
@endsection

@section('Agenda_telefonica')
    active
@endsection

@section('button')
    @include('app.phonebook.button_modal_phonebook')
@endsection

@section('content')
    <div class="main-content-container container-fluid px-4 pb-4">

        {{-- title content header --}}
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Agenda telefónica</span>
                <h3 class="page-title">Mi agenda telefónica</h3>
            </div>
        </div>
        {{-- /title content header --}}

        {{-- content body --}}
        <table class="transaction-history d-none">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Nº telefono/celular</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Raúl Antonio Morales Barros
                    </td>
                    <td>
                        <span class="text-success">(+56)9 62206777</span>
                    </td>
                    <td>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Table row actions">
                            <button type="button" class="btn btn-white">
                                <i class="material-icons">&#xE254;</i>
                            </button>
                            <button type="button" class="btn btn-white">
                                <i class="material-icons">&#xE872;</i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        {{-- /content body --}}
        @include('app.phonebook.button_modal_phonebook_help')

    </div>
@endsection
