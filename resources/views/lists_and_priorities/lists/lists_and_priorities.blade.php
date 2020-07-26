@extends('layouts.app')

@section('title')
    Mi lista
@endsection

@section('Listas_y_prioridades')
    active
@endsection

@section('button')
    @include('lists_and_priorities.lists.button_modal_lists_and_priorities')
@endsection

@section('content')
<div class="main-content-container container-fluid px-4 pb-4">

    {{-- title content header --}}
    <div class="page-header row no-gutters py-4">
      <div class="col">
        <span class="text-uppercase page-subtitle">Listas y prioridades</span>
        <h3 class="page-title">Mis Listas de tareas</h3>
      </div>      
    </div>
    {{-- /title content header  --}}

    {{-- content body --}}
    <table class="file-manager file-manager-list d-none table-responsive">
      <thead>
        <tr>
          <th style="width: 10px;" class="hide-sort-icons"></th>
          <th class="text-left">Nombre</th>
          <th>Nº de tareas</th>
          <th class="text-right">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="file-manager__item-icon">
            <div>
            <a href="{{url('Tareas')}}">
                <i class="material-icons">fact_check</i>
            </a>
            </div>
          </td>
          <td class="text-left">
            <a href="{{url('Tareas')}}">
            <h5 class="file-manager__item-title">Oficina</h5>
            <span class="file-manager__item-meta">Creado el 2 de diciembre del 2019.</span>
            </a>
          </td>
          <td>6</td>
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
