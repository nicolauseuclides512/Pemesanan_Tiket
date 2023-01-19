@extends('layouts.master')
@section('content')
    <div class="container text-center" style="margin: 5% auto auto auto">
        <h1>Pesan Tiket Wisata ya Di sini</h1>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="carousel-image" src="{{asset('storage/image/dufan.jpg')}}">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>BELI TIKET KE DESTINASI WISATA ANDA</h1>
                        <p>Berikan liburan yang menyenangkan ke keluarga anda</p>
                        <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="carousel-image" src="{{asset('storage/image/baturaden.jpg')}}">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>TEMPAT-TEMPAT UNIK DAN MENARIK</h1>
                        <p>Destinasi wisata yang terkenal diberbagai daerah di Indonesia</p>
                        <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="carousel-image" src="{{asset('storage/image/dieng.jpg')}}">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>PEMANDANGAN YANG MENYEJUKKAN MATA</h1>
                        <p>Landscape dengan fotografi yang bagus dan seru</p>
                        <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
                    </div>
                </div>
            </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <br/>
    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img src="{{asset('storage/image/ipul.jpeg')}}" class="bd-placeholder-img rounded-circle" width="140" height="140">
                <h2>Ipul</h2>
                <p>Saya merasakan kemudahan memesan tiket di sini</p>
                <!--<p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>-->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="{{asset('storage/image/ekli.jpg')}}" class="bd-placeholder-img rounded-circle" width="140" height="140">
                <h2>Ekli</h2>
                <p>Destinasi wisata yang ditawarkan banyak banget</p>
                <!--<p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>-->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="{{asset('storage/image/engel.jpg')}}" class="bd-placeholder-img rounded-circle" width="140" height="140">
                <h2>Engel</h2>
                <p>Pesen tiket mudah cuma di Garuda Tiket</p>
                <!--<p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>-->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div>
@endsection
