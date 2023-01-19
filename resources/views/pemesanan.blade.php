@extends('layouts.master')
@section('content')
    <div class="container text-center" style="margin: 5% auto auto auto">
        <h1>Form Pemesanan</h1>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 justify-center">
            <div class="container">
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
                                        <small class="error" id="nama_error"></small>
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
                                        <small class="error" id="identitas_error"></small>
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
                                        <small class="error" id="nomor_error"></small>
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
                                                <option value="{{$wisata->id}}"
                                                        harga_tiket="{{$wisata->harga_tiket}}">{{$wisata->nama_tempat_wasata}}</option>
                                            @endforeach
                                        </select>
                                        <small class="error" id="wisata_error"></small>
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
                                        <input type="date" class="form-control" id="tanggal_kunjungan" name="tanggal"
                                               onchange="TDate()">
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
                                        <input type="number" class="form-control" id="pengunjung_dewasa"
                                               name="pengunjung_dewasa">
                                        <small class="error" id="pengunjung_dewasa_error"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="pengunjung_anak_anak">Pengunjung Anak-anak</label>
                                        <br/>
                                        <small>usia di bawah 12 tahun</small>
                                    </div>
                                    <div class="col-8">
                                        <input type="number" class="form-control" id="pengunjung_anak_anak"
                                               name="pengunjung_anak">
                                        <small class="error" id="pengunjung_anak_error"></small>
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
                                        <input readonly type="text" class="form-control" id="harga_tiket"
                                               name="harga_tiket">
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
                                        <input readonly type="text" class="form-control" id="total_bayar"
                                               name="total_bayar">
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
                                <small class="error" id="persetujuan_error"></small>
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
@endsection
@section('script')
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
        $(function () {
            $("#nama_tempat_wisata").change(function () {
                var element = $(this);
                var harga_tiket = $("option:selected", this).attr('harga_tiket');
                $("#harga_tiket").val(harga_tiket)
            });
        });

        $("#pengunjung_dewasa").keyup(function () {
            var harga_tiket = parseInt($("#harga_tiket").val());
            var pengunjung_dewasa = parseInt($(this).val());
            var total_bayar = 0;
            if (pengunjung_dewasa > 0) {
                total_bayar = harga_tiket * pengunjung_dewasa;
                $("#total_bayar").val(total_bayar);
            } else if (pengunjung_dewasa <= 0) {
                $("#total_bayar").val(0);
            }

        });

        $("#pengunjung_anak_anak").keyup(function () {
            var harga_tiket = parseInt($("#harga_tiket").val());
            var pengunjung_anak_anak = parseInt($(this).val());
            var total_bayar = parseInt($("#total_bayar").val());
            if (pengunjung_anak_anak > 0) {
                total_bayar = total_bayar + (harga_tiket * 0.5 * pengunjung_anak_anak);
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

        document.forms['form_pemesanan'].onsubmit = function (event) {
            if ($("#nama_lengkap").val().trim() === "") {
                document.querySelector("#nama_error").innerHTML = "Masukkan nama lengkap anda";
                document.querySelector("#nama_error").style.display = "block";
                document.querySelector("#nama_error").style.color = "red";
                event.preventDefault();
                return false;
            }

            if ($("#nomor_identitas").val().trim() === "") {
                document.querySelector("#identitas_error").innerHTML = "Masukkan nomor identitas anda";
                document.querySelector("#identitas_error").style.display = "block";
                document.querySelector("#identitas_error").style.color = "red";
                event.preventDefault();
                return false;
            }

            if ($("#nomor_identitas").val().length > 16 || $("#nomor_identitas").val().length < 10) {
                document.querySelector("#identitas_error").innerHTML = "Nomor identitas kurang dari 10 digit atau lebih dari 16 digit";
                document.querySelector("#identitas_error").style.display = "block";
                document.querySelector("#identitas_error").style.color = "red";
                event.preventDefault();
                return false;
            }

            if ($("#no_hp").val().trim() === "") {
                document.querySelector("#nomor_error").innerHTML = "Masukkan nomor hp anda";
                document.querySelector("#nomor_error").style.display = "block";
                document.querySelector("#nomor_error").style.color = "red";
                event.preventDefault();
                return false;
            }
            if ($("#no_hp").val().length > 13 || $("#no_hp").val().length < 10) {
                document.querySelector("#nomor_error").innerHTML = "Nomor hp kurang dari 10 digit atau lebih dari 13 digit";
                document.querySelector("#nomor_error").style.display = "block";
                document.querySelector("#nomor_error").style.color = "red";
                event.preventDefault();
                return false;
            }

            if ($("#nama_tempat_wisata").val().trim() === "Pilih Tempat Wisata") {
                document.querySelector("#wisata_error").innerHTML = "Pilih tujuan wisata anda";
                document.querySelector("#wisata_error").style.display = "block";
                document.querySelector("#wisata_error").style.color = "red";
                event.preventDefault();
                return false;
            }

            if (!$("#persetujuan").val().checked) {
                document.querySelector("#persetujuan_error").innerHTML = "Mohon centang bagian persetujuan";
                document.querySelector("#persetujuan_error").style.display = "block";
                document.querySelector("#persetujuan_error").style.color = "red";
                event.preventDefault();
                return false;
            }
        }
    </script>
@endsection
