@extends("app.layouts.app")

@section('title')
  Páginas del diario personal
@endsection

@section('Diario_de_vida')
active
@endsection

@section('button')
    @include('app.diaries.pages_personal.button')
@endsection

@section('filters')
  @include('app.diaries.pages_personal.filters')
@endsection

@section('content')
    <div class="main-content-container container-fluid px-4">

        {{-- title content header --}}
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Mi diario</span>
                <h3 class="page-title">Primeros pasos de mi vida</h3>
            </div>
            <div class="col-lg-12 col-sm-4 text-right text-sm-right mb-0">
                <span class="text-uppercase page-subtitle">Julio del 2020</span>
            </div>
        </div>
        {{-- /title content header --}}

        {{-- content body --}}
        <div class="row">
            <div class="col-lg-6 col-sm-12 mb-4">
                <a href="{{url('Mostrar_pagina')}}" class="text-fiord-blue" style="text-decoration: none;">
                    <div class="card card-small card-post card-post--aside card-post--1">
                        {{-- card images --}}
                        <div class="card-post__image" style="background-image: url('img/images_page/1.jpg');">
                            <div class="card-post__category badge badge-pill badge-info" style="background-color: #4f6ed1;">
                                Pág. 2
                            </div>
                        </div>
                        {{-- /card images --}}

                        {{-- card body --}}
                        <div class="card-body">

                            {{-- title --}}
                            <h5 class="card-title">
                                <div class="text-fiord-blue">
                                    Mi primer día en el Jardin Infantil
                                    <i class="em em-blush" aria-role="presentation"
                                        aria-label="SMILING FACE WITH SMILING EYES"></i>
                                </div>
                            </h5>
                            {{-- /title --}}

                            {{-- description --}}
                            <p class=" d-inline-block mb-3" style="font-size: small; ">
                                Cuando salí de mi casa mire al cielo y vi que estaba nevando, era la primera
                                ves que en mi ciudad natal pasaba eso.
                                Entonces tome mi mochila y me fui corriendo a mi jardin infantil, en donde
                                descubri que ...
                            </p>
                            {{-- /description --}}

                            {{-- footer --}}
                            <div class="row">
                                <div class="d-flex flex-column  justify-content-center col-lg-12 col-sm-12 ">
                                    <small class="text-muted">
                                        <i class="material-icons">calendar_today</i>
                                        16 Julio 2020 -
                                        <i class="material-icons">room</i>Arturo prat 102 -
                                        <i class="material-icons">local_offer</i>Ideas</small>
                                </div>
                                <div class="page-header">
                                    <div class="col-lg-12 col-sm-12 text-right text-sm-right mb-0">

                                    </div>
                                </div>
                            </div>
                            {{-- /footer --}}

                        </div>

                        {{-- /card body --}}
                    </div>
                </a>
            </div>
        </div>
        {{-- /content body --}}

        {{-- title content header --}}
        <div class="page-header row no-gutters py-4">
            <div class="col-lg-12 col-sm-4 text-right text-sm-right mb-0">
                <hr />
                <span class="text-uppercase page-subtitle">Junio del 2020</span>
            </div>
        </div>
        {{-- /title content header --}}

        {{-- content body --}}
        <div class="row">
            <div class="col-lg-6 col-sm-12 mb-4">
                <a href="{{url('Mostrar_pagina')}}" class="text-fiord-blue" style="text-decoration: none;">
                    <div class="card card-small card-post card-post--aside card-post--1">
                        {{-- card images --}}
                        <div class="card-post__image" style="background-image: url('img/images_page/1.jpg');">
                            <div class="card-post__category badge badge-pill badge-info" style="background-color: #4f6ed1;">
                                Pág. 1
                            </div>
                        </div>
                        {{-- /card images --}}

                        {{-- card body --}}
                        <div class="card-body">

                            {{-- title --}}
                            <h5 class="card-title">
                                <div class="text-fiord-blue">
                                    Mi primer día en el Jardin Infantil
                                    <i class="em em-blush" aria-role="presentation"
                                        aria-label="SMILING FACE WITH SMILING EYES"></i>
                                </div>
                            </h5>
                            {{-- /title --}}

                            {{-- description --}}
                            <p class=" d-inline-block mb-3" style="font-size: small; ">
                                Cuando salí de mi casa mire al cielo y vi que estaba nevando, era la primera
                                ves que en mi ciudad natal pasaba eso.
                                Entonces tome mi mochila y me fui corriendo a mi jardin infantil, en donde
                                descubri que ...
                            </p>
                            {{-- /description --}}

                            {{-- footer --}}
                            <div class="row">
                                <div class="d-flex flex-column  justify-content-center col-lg-12 col-sm-12 ">
                                    <small class="text-muted">
                                        <i class="material-icons">calendar_today</i>
                                        16 Julio 2020 -
                                        <i class="material-icons">room</i>Arturo prat 102 -
                                        <i class="material-icons">local_offer</i>Ideas</small>
                                </div>
                                <div class="page-header">
                                    <div class="col-lg-12 col-sm-12 text-right text-sm-right mb-0">

                                    </div>
                                </div>
                            </div>
                            {{-- /footer --}}

                        </div>

                        {{-- /card body --}}
                    </div>
                </a>
            </div>
        </div>
        {{-- /content body --}}

    </div>
@endsection
