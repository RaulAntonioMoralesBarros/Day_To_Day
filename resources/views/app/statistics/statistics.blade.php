@extends('app.layouts.app')

@section('title')
    Estadisticas
@endsection

@section('content')
    <div class="main-content-container container-fluid px-4">

        {{-- title content header --}}
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Estadisticas</span>
                <h3 class="page-title">Mis estadisticas</h3>
            </div>
        </div>
        {{-- /title content header --}}

        {{-- content body target--}}
        <div class="row">

            {{-- number of diary --}}
            <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                    <div class="card-body p-0 d-flex">
                        <div class="d-flex flex-column m-auto">
                            <div class="stats-small__data text-center">
                                <span class="stats-small__label text-uppercase">Diarios</span>
                                <h6 class="stats-small__value count my-3">2</h6>
                            </div>
                            <div class="stats-small__data">
                                <span class="stats-small__percentage stats-small__percentage--increase">100%</span>
                            </div>
                        </div>
                        <canvas height="120" class="blog-overview-stats-small-1"></canvas>
                    </div>
                </div>
            </div>
            {{-- /number of diary --}}

            {{-- number of pages --}}
            <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                    <div class="card-body p-0 d-flex">
                        <div class="d-flex flex-column m-auto">
                            <div class="stats-small__data text-center">
                                <span class="stats-small__label text-uppercase">Páginas</span>
                                <h6 class="stats-small__value count my-3">182</h6>
                            </div>
                            <div class="stats-small__data">
                                <span class="stats-small__percentage stats-small__percentage--increase">91%</span>
                            </div>
                        </div>
                        <canvas height="120" class="blog-overview-stats-small-2"></canvas>
                    </div>
                </div>
            </div>
            {{-- /number of pages --}}

            {{-- number of goals --}}
            <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                    <div class="card-body p-0 d-flex">
                        <div class="d-flex flex-column m-auto">
                            <div class="stats-small__data text-center">
                                <span class="stats-small__label text-uppercase">Metas</span>
                                <h6 class="stats-small__value count my-3">8</h6>
                            </div>
                            <div class="stats-small__data">
                                <span class="stats-small__percentage stats-small__percentage--decrease">100%</span>
                            </div>
                        </div>
                        <canvas height="120" class="blog-overview-stats-small-3"></canvas>
                    </div>
                </div>
            </div>
            {{-- /number of goals --}}

            {{-- memory in use --}}
            <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                    <div class="card-body p-0 d-flex">
                        <div class="d-flex flex-column m-auto">
                            <div class="stats-small__data text-center">
                                <span class="stats-small__label text-uppercase">Memoria en uso</span>
                                <h6 class="stats-small__value count my-3">12 GB</h6>
                            </div>
                            <div class="stats-small__data">
                                <span class="stats-small__percentage stats-small__percentage--decrease">94%</span>
                            </div>
                        </div>
                        <canvas height="120" class="blog-overview-stats-small-5"></canvas>
                    </div>
                </div>
            </div>
            {{-- /memory in use --}}

        </div>
        {{-- /content body target--}}

        {{-- content body tables --}}
        <div class="row">

            {{-- summary of objectives --}}
            <div class="col-lg-8 mb-4">
                <div class="card card-small go-stats">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Resumen de objetivos</h6>
                        <div class="block-handle"></div>
                    </div>
                    <div class="card-body py-0">
                        <ul class="list-group list-group-small list-group-flush">
                            <li class="list-group-item d-flex row px-0">
                                <div class="col-lg-6 col-md-8 col-sm-8 col-6">
                                    <h6 class="go-stats__label mb-1">Aprender canción Chop Suey - SOAD</h6>
                                    <div class="go-stats__meta">
                                        <span class="mr-2">
                                            <strong>4</strong> completados</span>
                                        <span class="d-block d-sm-inline">
                                            <strong class="text-success">20</strong> incompletos</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-4 col-sm-4 col-6 d-flex">
                                    <div class="go-stats__value text-right ml-auto">
                                        <h6 class="go-stats__label mb-1">30.2%</h6>
                                        <span class="go-stats__meta">porcentaje completado</span>
                                    </div>
                                    <div class="go-stats__chart d-flex ml-auto">
                                        <canvas style="width: 45px; height: 45px;" class="my-auto"
                                            id="analytics-overview-goal-completion-4"></canvas>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- /summary of objectives --}}
            
            {{-- summary of my diary --}}
            <div class="col-lg-4 col-sm-12 mb-4">
                <div class="card card-small">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Mis diarios</h6>
                        <div class="block-handle"></div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-small list-group-flush">
                            <li class="list-group-item d-flex px-3">
                                <span class="text-semibold text-fiord-blue">Primeros pasos de mi vida</span>
                                <span class="ml-auto text-right text-semibold text-reagent-gray">20 página</span>
                            </li>
                            <li class="list-group-item d-flex px-3">
                                <span class="text-semibold text-fiord-blue">Historias de mi trabajo</span>
                                <span class="ml-auto text-right text-semibold text-reagent-gray">11 páginas</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- summary of my diary --}}

        </div>
        {{-- /content body tables --}}
    </div>
@endsection
