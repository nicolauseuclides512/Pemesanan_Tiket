<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
{{--    <link href="/resources/css/mystyle.css" rel="stylesheet">--}}


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 justify-center">
            <div class="container">
                <h1>Form Pemesanan</h1>
                <form name="form_pemesanan" action="{{route('pesan')}}" method="post">
                    @csrf
                    <div class="container">
                        <div class="container">
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="nama_lengkap">Nama Lengkap</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" id="nama_lengkap" name="nama">
                                        <small class="error" id="nama_lengkap_error">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="nomor_identitas">Nomor Identitas</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" id="nomor_identitas" name="identitas">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="no_hp">No. HP</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" id="no_hp" name="nomor">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="nama_tempat_wisata">Tempat Wisata</label>
                                    </div>
                                    <div class="col-8">
                                <select class="form-control" id="nama_tempat_wisata" name="wisata">
                                    <option>Pilih Tempat Wisata</option>
                                    @foreach($data_tempat_wisata as $wisata)
                                        <option value="{{$wisata->id}}" harga_tiket="{{$wisata->harga_tiket}}">{{$wisata->nama_tempat_wasata}}</option>
                                    @endforeach
                                </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="tanggal_kunjungan">Tanggal Kunjungan</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="date" class="form-control" id="tanggal_kunjungan" name="tanggal" onchange="TDate()">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="pengunjung_dewasa">Pengunjung Dewasa</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="number" value="0" class="form-control" id="pengunjung_dewasa" name="pengunjung_dewasa">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="pengunjung_anak_anak">Pengunjung Anak-anak</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="number" value="0" class="form-control" id="pengunjung_anak_anak" name="pengunjung_anak">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="harga_tiket">Harga Tiket</label>
                                    </div>
                                    <div class="col-8">
                                        <input readonly type="text" class="form-control" id="harga_tiket" name="harga_tiket">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="total_bayar">Total Bayar</label>
                                    </div>
                                    <div class="col-8">
                                        <input readonly type="text" class="form-control" id="total_bayar" name="total_bayar">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="persetujuan" name="persetujuan">
                                <label class="form-check-label" for="persetujuan">Saya dan/atau rombongan telah membaca,
                                    memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan
                                </label>
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="col-2"></div>
    </div>

</div>
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
<script>
    $(function(){
        $("#nama_tempat_wisata").change(function ()
        {
            var element = $(this);
            var harga_tiket = $("option:selected", this).attr('harga_tiket');
            $("#harga_tiket").val(harga_tiket)
        });
    });

    $("#pengunjung_dewasa").keyup(function(){
        var harga_tiket = parseInt($("#harga_tiket").val());
        var pengunjung_dewasa = parseInt($(this).val());
        var total_bayar = 0;
        if(pengunjung_dewasa > 0){
             total_bayar = harga_tiket*pengunjung_dewasa;
        }
        $("#total_bayar").val(total_bayar);
    });

    $("#pengunjung_anak_anak").keyup(function(){
        var harga_tiket = parseInt($("#harga_tiket").val());
        var pengunjung_anak_anak = parseInt($(this).val());
        var total_bayar = parseInt($("#total_bayar").val());
        if(pengunjung_anak_anak > 0){
            total_bayar = total_bayar+(harga_tiket*0.5*pengunjung_anak_anak);
            // $("#total_bayar").text(0);
        }
        $("#total_bayar").val(total_bayar);
    });

    function TDate() {
        var UserDate = document.getElementById("tanggal_kunjungan").value;
        var ToDate = new Date();

        if (new Date(UserDate).getTime() < ToDate.getTime()) {
            alert("tanggal harus sama atau setelah tanggal sekarang");
            $("#tanggal_kunjungan").val(ToDate.getTime());
        }
        $("#tanggal_kunjungan").val(Date(UserDate).getTime());
    }

    document.forms['form_pemesanan'].onsubmit = function(event){
        if($("#nama_lengkap").val().trim() === ""){
            document.querySelector("#nama_lengkap_error").innerHTML = "Masukkan nama lengkap anda";
            document.querySelector("#nama_lengkap_error").style.display = "block";
            document.querySelector("#nama_lengkap_error").style.color = "red";
            event.preventDefault();
            return false;
        }
    }
</script>
</html>
