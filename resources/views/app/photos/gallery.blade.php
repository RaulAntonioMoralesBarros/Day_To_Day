@extends('app.layouts.app')

@section('title')
    Galeria
@endsection

@section('content')
    <div class="main-content-container container-fluid px-4">

        {{-- title content header --}}
        <div class="page-header row no-gutters py-4">
            <div class="col-lg-12 col-sm-12 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Galeria</span>
                <h3 class="page-title">Mis fotos</h3>
            </div>
        </div>
        {{-- /title content header --}}

        {{-- content body --}}
        <div class="row">


            <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                <a href="../img/images_page/1.jpg" class="fancybox" rel="ligthbox">
                    <img src="../img/images_page/1.jpg" class="zoom img-fluid " alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                <a href="../img/images_page/1.jpg" class="fancybox" rel="ligthbox">
                    <img src="../img/images_page/1.jpg" class="zoom img-fluid " alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                <a href="../img/images_page/1.jpg" class="fancybox" rel="ligthbox">
                    <img src="../img/images_page/1.jpg" class="zoom img-fluid " alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                <a href="../img/images_page/1.jpg" class="fancybox" rel="ligthbox">
                    <img src="../img/images_page/1.jpg" class="zoom img-fluid " alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                <a href="../img/images_page/1.jpg" class="fancybox" rel="ligthbox">
                    <img src="../img/images_page/1.jpg" class="zoom img-fluid " alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6 thumb">
                <a href="../img/images_page/1.jpg" class="fancybox" rel="ligthbox">
                    <img src="../img/images_page/1.jpg" class="zoom img-fluid " alt="">
                </a>
            </div>
            

        </div>
        {{-- /content body--}}
        
    </div>

@endsection
