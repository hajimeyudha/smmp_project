{{-- Membuat Element Child dari Main Layout --}}
@extends('layouts.main-layout-admin')
{{-- Judul halaman --}}
@section('title', 'Penyaluran')
@section('css')
    <style>
        html,
        body {
            background-color: rgb(236, 234, 234);
        }

        .edit {
            margin-left: 85px;
        }

        .edit-btn {
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
            color: #000;
            border-radius: 10px;
            padding: 10px 60px;
            background-color: #3DE22E;
            letter-spacing: 0.25px;
            font-weight: 800;
        }

        .datepicker {
            margin-top: 100px;
        }

        @media (max-width: 991px) {
            #date-input {
                width: 90%;
                margin-bottom: 5px;
            }

            .datepicker {
                margin-left: 300px;
            }
        }

        .form-input {
            text-align: left;
        }
    </style>
@endsection
@section('content')

    <!--  -->
    <div class="row top-mini-nav">
        <div class="color-btn">
            <div class="box-judul">
                <img class="judulGambar" src="{{ asset('images/check.png') }}" />
                <p class="judul judulRekap">Rekapitulasi Penyaluran</p>
            </div>
            <div class="col-sm-1 btn"><a class="mini-button" id="info-1">LPG 3 KG</a></div>
            <div class="col-sm-1 btn"><a class="mini-button" id="info-2">BG 5,5 KG</a></div>
            <div class="col-sm-1 btn"><a class="mini-button" id="info-3">BG 12 KG</a></div>
            <div class="col-sm-1 btn"><a class="mini-button" id="info-4">LPG 12 KG</a></div>
            <div class="col-sm-1 btn"><a class="mini-button" id="info-5">LPG 50 KG</a></div>
            <div class="input-group mb-3" style="width: 220px">
                <div class="input-group-prepend">
                    <span class="input-group-text textSearch" id="basic-addon1">@</span>
                </div>
                <input type="text" name ="cari" class="form-control tanggalDisini" placeholder="Cari Data" aria-label="cari"
                    aria-describedby="basic-addon1">
            </div>
        </div>
    </div>

    <section class="section bg-setting" id="edit">
        <div class="container">
            <div class="row atasan">
                <div class="col-sm-4">
                    <input type="date" class="form-control shadow p-3 mb-2 bg-white rounded-lg"
                        placeholder="MASUKKAN TANGGAL PEMESANAN" required />
                </div>
                <button class="col-sm-2 btn btn-light tombolLPG"><b>LPG 3 KG</b></button>
                <div class="col-sm-2">
                    <div class="dropdown">
                        <button type="button" id="btn-download" class="btn dropdown-toggle download"
                            data-toggle="dropdown">
                            Download Bentuk
                            <a href="javascript:void(0);" class="icon">
                                <!-- <i onclick="myFunction(this)"class="fa fa-arrow-down"></i> -->
                                <img src="{{ asset('images/arrow-down-download.png') }}" onclick="myFunction(this)" />
                            </a>
                        </button>
                        <div class="dropdown-menu download">
                            <div class="select-download">
                                <img src="./assets/images/kiri.png" class="pl-2" />
                                <a class="dropdown-item modal-link">PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-scs" style="display: none;">
                <a href="#"><i class="close far fa-times-circle"></i></a>
                <p class="text-center">Berhasil Mengunduh</p>
            </div>
            <div class="modal-bg-scs" style="display: none;"></div>
        </div>
        </div>
        {{-- Tabel --}}
        <div class="edit-table">
            <table>
                <tr>
                    <th rowspan="2">Id Registrasi</th>
                    <th rowspan="2">Nama Pangkalan</th>
                    <th rowspan="2">Status Pembayaran</th>
                    <th rowspan="2">Tanggal Order</th>
                    <th rowspan="2">Tanggal Jatuh Tempo</th>
                    <th rowspan="2">Jumlah Pesanan</th>
                    <th rowspan="2">Keterangan</th>
                    <th rowspan="1">Action</th>
                </tr>
                <tr>
                    <td><a href="penyaluran/create" class="edit-button"
                            style="background-color: #3DE22E; color:#000;"><b>CREATE</b></a></td>
                </tr>
                @foreach ($ListPenyaluran as $item)
                    <tr>
                        <td>B-{{ $item->id_data_penyaluran }}</td>
                        <td>CV INDOPERTA</td>
                        <td>{{ $item->status_penyaluran }}</td>
                        <td>{{ date('d-m-Y', strtotime($item->tanggal_penyaluran)) }}</td>
                        <td>{{ date('d-m-Y', strtotime($item->tempo_penyaluran)) }}</td>
                        <td>{{ $item->gas_dipesan }}</td>
                        <td>{{ $item->keterangan_penyaluran }}</td>
                        <td><a href="<?php echo url("/penyaluran/update/{$item->id_data_penyaluran}");?>" class="modal-link-kary edit-button"><b>UPDATE</b></a>
                            <a href="<?php echo url("/penyaluran/delete/{$item->id_data_penyaluran}");?>" class="modal-link-kary edit-button cancel"><b>DELETE</b></a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <br>
            {{ $ListPenyaluran->links() }}
        </div>
        <!-- <div class="edit">
                          <a href="#" class="edit-btn modal-link-save">Save</a>
                        </div> -->
    </section>
@endsection


@section('tambahanFoot')

    <div class="modal-scs" style="display: none;">
        <a href="#"><i class="close far fa-times-circle"></i></a>
        <p class="text-center">Berhasil Menyimpan</p>
    </div>
    <div class="modal-bg-scs" style="display: none;"></div>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/59bcfd8744.js" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- <script src="./assets/js/karyawan.js"></script> -->
    <script>
        $(document).ready(function() {
            $('.modal-link-kary').click(function() {
                console.log('buka');
                $('.modal-kary').show();
                $('.modal-bg').show();
            });
            $('.modal-kary .close').click(function() {
                $('.modal-kary').hide();
                $('.modal-bg').hide();
            });
            $('.modal-kary a.main-button').click(function() {
                $('.modal-kary').hide();
                $('.modal-bg').hide();
            })
        })

        $(document).ready(function() {
            $('.modal-link').click(function() {
                console.log('buka');
                $('.modal-scs').show();
                $('.modal-bg-scs').show();
                console.log('modal-bg')
            });
            $('.modal-scs .close').click(function() {
                $('.modal-scs').hide();
                $('.modal-bg-scs').hide();
            });
        })

        $(document).ready(function() {
            $('.modal-link-save').click(function() {
                console.log('baru');
                $('.modal-scs').show();
                $('.modal-bg-scs').show();
            });
            $('.modal-scs-save .close').click(function() {
                $('.modal-scs').hide();
                $('.modal-bg-scs').hide();
            });
        })

        $(document).ready(function() {
            $('.modal-link-savee').click(function() {
                console.log('baru');
                $('.modal-scs').show();
                $('.modal-bg-scs').show();
            });
            $('.modal-scs-save .close').click(function() {
                $('.modal-scs').hide();
                $('.modal-bg-scs').hide();
            });
        })

        $(function() {
            $('#scrollToTop').bind("click", function() {
                console.log('naik')
                $('html, body').animate({
                    scrollTop: 0
                }, 1200);
                return false;
            });
        });

        function setDatepicker(_this) {
            let className = $(_this).parent()
                .parent().parent().attr('class');
            let removeSpace = className.replace(' ', '.');
            $("." + removeSpace).datepicker({
                format: "dd/mm/yyyy",
                orientation: "bottom auto",
                autoclose: true,
                showOnFocus: "false"
            });
        }

        var body = document.body,
            html = document.documentElement;

        var height = Math.max(body.scrollHeight, body.offsetHeight,
            html.clientHeight, html.scrollHeight, html.offsetHeight);
        console.log(height);
    @endsection
