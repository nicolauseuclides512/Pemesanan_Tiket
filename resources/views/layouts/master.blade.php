<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garuda Tiket</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
          href="{{asset('storage/css/main.css')}}">
    @yield('style')
</head>

<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Garuda Tiket</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse" style="margin-left: 5px">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active" id="home">
                    <a class="nav-link" href="{{route('index')}}" methods="get">Home</a>
                </li>
                {{--                <li class="nav-item" id="">--}}
                {{--                    <a class="nav-link" href="">Paket Wisata</a>--}}
                {{--                </li>--}}
                <li class="nav-item" id="galeri">
                    <a class="nav-link" href="{{route('galeri')}}" methods="get">Galeri Wisata</a>
                </li>
                <li class="nav-item" id="pemesanan">
                    <a class="nav-link" href="{{route('pemesanan')}}" methods="get">Pemesanan</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

    @yield('content')


<!-- FOOTER -->
<footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p><a target="_blank" href="https://wa.me/+6285729094483">Whatsapp: 085729094483</a></p>
</footer>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
@yield('script')
</html>
