@extends('app.layouts.app')

@section('title')
    Tu peso ideal
@endsection

@section('Tu_peso_ideal')
    active
@endsection

@section('content')
    <div class="main-content-container container-fluid px-4 pb-4">

        {{-- title content header --}}
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Tu peso ideal</span>
                <h3 class="page-title">Peso ideal IMC</h3>
            </div>
        </div>
        {{-- /title content header --}}

        {{-- content body --}}
        <div class="row">
            <div class="col-lg-8">
                <div class="card card-small mb-4">
                    {{-- title --}}
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Calcula tu peso ideal</h6>
                    </div>
                    {{-- /content --}}
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <div class="row">
                                <div class="col">
                                    {{-- form --}}
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="feInputState">Altura</label>
                                                <select id="feInputState" class="form-control">
                                                    <option selected=""></option>
                                                    <option>100</option>
                                                    <option>230</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="feInputState">Peso</label>
                                                <select id="feInputState" class="form-control">
                                                    <option selected=""></option>
                                                    <option>30</option>
                                                    <option>199</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="feInputState">Edad</label>
                                                <select id="feInputState" class="form-control">
                                                    <option selected=""></option>
                                                    <option>1</option>
                                                    <option>104</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="feInputState">Sexo</label>
                                                <select id="feInputState" class="form-control">
                                                    <option selected="">
                                                    <option>
                                                    <option>F</option>
                                                    <option>M</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="feInputState">Actividad Fisica</label>
                                                <select id="feInputState" class="form-control">
                                                    <option selected=""></option>
                                                    <option>Ligera</option>
                                                    <option>Moderada</option>
                                                    <option>Intensa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-accent" data-toggle="modal"
                                            data-target="#exampleModal">
                                            Calcular IMC
                                        </button>
                                    </form>
                                    {{-- /form --}}
                                </div>
                            </div>
                        </li>
                    </ul>
                    {{-- /content --}}
                </div>
            </div>

            {{-- window modal --}}
            @include('app.ideal_weight.modal')
            {{-- /window modal --}}

            <div class="col-lg-4">
                <div class="card card-small">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">IMC</h6>
                        <div class="block-handle"></div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-small list-group-flush">
                            <li class="list-group-item d-flex px-3">
                                <span class="text-semibold text-fiord-blue">Bajo peso</span>
                                <span class="ml-auto text-right text-semibold text-reagent-gray">
                                    < 18.5</span>
                            </li>
                            <li class="list-group-item d-flex px-3">
                                <span class="text-semibold text-fiord-blue">Normal</span>
                                <span class="ml-auto text-right text-semibold text-reagent-gray"> 18.5 - 24.9</span>
                            </li>
                            <li class="list-group-item d-flex px-3">
                                <span class="text-semibold text-fiord-blue">Sobrepeso</span>
                                <span class="ml-auto text-right text-semibold text-reagent-gray">25 -29.9</span>
                            </li>
                            <li class="list-group-item d-flex px-3">
                                <span class="text-semibold text-fiord-blue">Obesidad</span>
                                <span class="ml-auto text-right text-semibold text-reagent-gray">
                                    < 30</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <p>Puedes calcularlo manualmente dividiendo el peso total por la estatura elevada al cuadrado de personas
                    mayores de 15 años:
                    IMC = Peso (kg) / Estatura2 (m 2).
                    Una vez obtenido el resultado, se compara con la tabla IMC.</p>
            </div>
        </div>
        {{-- /content body --}}
    </div>
@endsection
