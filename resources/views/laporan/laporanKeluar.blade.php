{{-- Membuat Element Child dari Main Layout --}}
@extends('layouts.main-layout-admin')
{{-- Judul halaman --}}
@section('title', 'Laporan Keuangan')
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
    <!--  -->
    <div class="row top-mini-nav">
        <div class="color-btn">
            <div class="box-judul judulon">
                {{-- <img class="judulGambar judulan" src="{{ asset('images/check.png') }}" /> --}}
                <p class="judul judulRekap judulin">Rekapitulasi Laporan Keuangan</p>
            </div>

            {{-- <div class="input-group mb-3" style="width: 220px">
                <div class="input-group-prepend">
                    <span class="input-group-text textSearch" id="basic-addon1">@</span>
                </div>
                <input type="text" name="cari" class="form-control tanggalDisini" placeholder="Cari Data"
                    aria-label="cari" aria-describedby="basic-addon1">
            </div> --}}
        </div>
    </div>

    <section class="section bg-setting" id="edit">
        <div class="container">
            <div class="row atasan">
                {{-- <div class="col-sm-4">
                    <input type="date" class="form-control shadow p-3 mb-2 bg-white rounded-lg"
                        placeholder="MASUKKAN TANGGAL PEMESANAN" required />
                </div> --}}
                <div class="col-sm-2 dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Uang Keluar
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="/laporan/masuk">Uang Masuk</a>
                      <a class="dropdown-item" href="/laporan/keluar">Uang Keluar</a>
                    </div>
                  </div>
                <div class="col-sm-2">
                    <div class="dropdown transaksi">
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
                    <th rowspan="2">Tanggal</th>
                    <th rowspan="2">Uang Keluar</th>
                    <th rowspan="2">Keterangan</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td><a href="laporan/create" class="edit-button"
                            style="background-color: #3DE22E; color:#000;"><b>CREATE</b></a></td>
                </tr>
                @foreach ($ListLaporan as $item)
                    <tr>
                        
                        <td>{{ date('d-m-Y', strtotime($item->tanggal_laporan)) }}</td>
                        <td>Rp {{ number_format($item->uang_keluar) }}</td>
                        <td>{{ $item->keterangan_laporan }}</td>
                        <td><a href="<?php echo url("/laporan/updateKeluar/{$item->id_laporan}");?>" class="modal-link-kary edit-button laporan"><b>UPDATE</b></a>
                            <a href="<?php echo url("/laporan/delete/{$item->id_laporan}");?>" class="modal-link-kary edit-button cancel"><b>DELETE</b></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <!-- <div class="edit">
          <a href="#" class="edit-btn modal-link-save">Save</a>
        </div> -->
    </section>

    <div class="modal-scs" style="display: none;">
        <a href="#"><i class="close far fa-times-circle"></i></a>
        <p class="text-center">Berhasil Menyimpan</p>
    </div>
    <div class="modal-bg-scs" style="display: none;"></div>

@endsection
