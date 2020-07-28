@extends('app.layouts.app')

@section('title')
    Frases_motivadoras
@endsection

@section('Frases_motivadoras')
    active
@endsection

@section('button')
    @include('app.motivational_phrases.button_modal_motivational_phrases')
@endsection

@section('content')
<div class="main-content-container container-fluid px-4 pb-4">

    {{-- title content header --}}
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Frases Motivadoras</span>
        <h3 class="page-title">Mi lista de frases</h3>
      </div>      
    </div>
    {{-- /title content header --}}

    {{-- content body --}}
    <table class="file-manager file-manager-list d-none table-responsive">
      <thead>
        <tr>
          <th style="width: 10px;" class="hide-sort-icons"></th>
          <th class="text-left">Autor</th>
          <th>Frase</th>
          <th class="text-right">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="file-manager__item-icon">
            <div>
              <a href="#">
                <i class="material-icons">favorite</i>
            </a>
            </div>
          </td>
          <td class="text-left">
            <a href="#">
            <h5 class="file-manager__item-title">Frank Marshall</h5>
            <span class="file-manager__item-meta">Creado el 10 de diciembre del 2019.</span>
            </a>
          </td>
          <td>Un mal plan, es mejor que no tener ningún plan.</td>
          <td class="file-manager__item-actions">
            <div class="btn-group btn-group-sm d-flex justify-content-end" role="group" aria-label="Table row actions">
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