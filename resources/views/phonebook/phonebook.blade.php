@extends('layouts.app')

@section('title')
    Agensda_telefonica
@endsection

@section('Agenda_telefonica')
    active
@endsection

@section('button')
    @include('phonebook.button_modal_phonebook')
@endsection

@section('content')

    <div class="main-content-container container-fluid px-4 mb-4">

        {{-- title content header --}}
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-4 mb-sm-0">
                <span class="text-uppercase page-subtitle">Agenda telefonica</span>
                <h3 class="page-title">Mi agenda telefonica</h3>
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
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Raúl Antonio Morales Barros
                    </td>
                    <td>
                        <span class="text-success">(+569) 62206777</span>
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
        

    </div>

    @endsection
