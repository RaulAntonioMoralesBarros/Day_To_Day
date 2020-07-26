@extends('layouts.app')

@section('title')
    Nueva Página
@endsection


@section('content')
    <div class="main-content-container container-fluid px-4">

        {{-- title content header --}}
        <div class="page-header row no-gutters py-4">
            <div class="col-lg-8 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Diario Personal</span>
                <h3 class="page-title">Mi primer dia en el Jardin Infantil</h3>
            <a href="{{url('Paginas_del_diario_personal')}}" style="color: #007bff;"><i class="material-icons">
                        keyboard_backspace
                    </i>Volver</a>
            </div>
            <div class="col-lg-4 col-sm-4 text-right text-sm-right mb-0">
                <span class="text-uppercase page-subtitle">22 de Julio del 2020</span><br>
            </div>
        </div>
        {{-- /title content header --}}

        {{-- content body --}}
        <div class="row">
     
            <div class="col-lg-9 col-md-12">

                {{-- content --}}
                <div class="card card-small mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 text-left text-sm-left mb-0">
                                <small class="text-muted">Página nº 78</small>
                            </div>
                            <div class="col-lg-6 col-sm-6 text-right text-sm-right mb-0">
                                <small class="text-muted">Est. de ánimo: Álegre</small>
                            </div>
                        </div>
                        <form class="add-new-post">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Título de tu página">
                            <div id="editor-container" class="add-new-post__editor mb-1"></div>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile2" required="">
                                    <label class="custom-file-label" for="customFile2">Agregar imagen...</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-accent col-lg-12">Guardar Hoja personal</button>
                        </form>
                    </div>
                </div>
                {{-- /content --}}

            </div>
            
            <div class="col-lg-3 col-md-12">

                {{-- date --}}
                <div class='card card-small mb-3'>
                    <div class='card-body p-0'>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item px-3 pb-2">
                                <label for="">Modificar fecha</label>
                                <input id="input" />
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- /date --}}

                {{-- mood --}}
                <div class='card card-small mb-3'>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item p-3">
                                <label for="">Estado de animo</label>
                                <i class="em em-grin" aria-role="presentation"
                                    aria-label="GRINNING FACE WITH SMILING EYES"></i>
                                <select class="custom-select">
                                    <option value="1" selected="">Normal</option>
                                    <option value="2" selected="">Eufórico</option>
                                    <option value="3" selected="">Fatal</option>
                                    <option value="4" selected="">Mal</option>
                                    <option value="5" selected="">Alegre</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- /mood --}}

                {{-- categories --}}
                <div class='card card-small mb-3'>
                    <div class='card-body p-0'>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item px-3 pb-2">
                                <label for="">
                                    <i class="material-icons"></i> Categorias
                                </label>

                                <div class="custom-control custom-checkbox mb-1">
                                    <input type="checkbox" class="custom-control-input" id="category1">
                                    <label class="custom-control-label" for="category1">Amigos</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-1">
                                    <input type="checkbox" class="custom-control-input" id="category2">
                                    <label class="custom-control-label" for="category2">Amor</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-1">
                                    <input type="checkbox" class="custom-control-input" id="category3">
                                    <label class="custom-control-label" for="category3">Entretenimiento</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-1">
                                    <input type="checkbox" class="custom-control-input" id="category1">
                                    <label class="custom-control-label" for="category1">Negocio</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-1">
                                    <input type="checkbox" class="custom-control-input" id="category1">
                                    <label class="custom-control-label" for="category1">Que hacer</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-1">
                                    <input type="checkbox" class="custom-control-input" id="category1">
                                    <label class="custom-control-label" for="category1">Vacaciones</label>
                                </div>
                            </li>

                            <li class="list-group-item d-flex px-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Nueva categoría"
                                        aria-label="Add new category" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-white px-2" type="button">
                                            <i class="material-icons">add</i>
                                        </button>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>


                </div>
                {{-- /categories --}}

                {{-- direction --}}
                <div class='card card-small mb-3'>
                    <div class="card-body">
                        <label for=""><i class="material-icons">room</i>
                            Dirección</label>

                        <form action="">
                            <textarea name="" id="" cols="30" rows="2" class="form-control mb-3"
                                style="min-height: 50px; margin-top: 0px; margin-bottom: 16px; height: 10px;"></textarea>
                        </form>
                    </div>
                </div>
                {{-- /direction --}}

            </div>
        {{-- /content body --}}

        </div>
    </div>
@endsection
