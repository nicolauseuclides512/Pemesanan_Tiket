@extends('layouts.master')
@section('content')
    <div class="container text-center" style="margin: 5% auto auto auto">
        <h1>Galeri Wisata</h1>
    </div>
    <div class="container col-md 12" style="margin-bottom: 2%">
        <div class="row">
            <div class="col-6">
                <img src="{{asset('storage/image/dufan.jpg')}}" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="col-6">
                <img src="{{asset('storage/image/baturaden.jpg')}}" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
            </div>
        </div>
        <div class="row" style="margin-top: 5%">
            <div class="col-12">
                <img src="{{asset('storage/image/dieng.jpg')}}" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
            </div>
        </div>

        <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">

                <div class="mySlides">
                    <div class="numbertext">1 / 3</div>
                    <img src="{{asset('storage/image/dufan.jpg')}}" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 3</div>
                    <img src="{{asset('storage/image/baturaden.jpg')}}" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 3</div>
                    <img src="{{asset('storage/image/dieng.jpg')}}" style="width:100%">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>


                <div class="row">
                    <div class="column">
                        <img class="demo cursor" src="{{asset('storage/image/dufan.jpg')}}" style="width:100%" onclick="currentSlide(1)">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="{{asset('storage/image/baturaden.jpg')}}" style="width:100%" onclick="currentSlide(2)">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="{{asset('storage/image/dieng.jpg')}}" style="width:100%" onclick="currentSlide(3)">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    function openModal() {
        document.getElementById('myModal').style.display = "block";
    }

    function closeModal() {
        document.getElementById('myModal').style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
        crossorigin="anonymous"></script>
@endsection
