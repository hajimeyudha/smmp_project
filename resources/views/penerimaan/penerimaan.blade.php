{{-- Membuat Element Child dari Main Layout --}}
@extends('layouts.main-layout-admin')
{{-- Judul halaman --}}
@section('title', 'Penerimaan')
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
            <div class="box-judul">
                <img class="judulGambar" src="{{ asset('images/check.png') }}" />
                <p class="judul judulRekap">Rekapitulasi Penerimaan</p>
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
                <input type="text" name="cari" class="form-control tanggalDisini" placeholder="Cari Data"
                    aria-label="cari" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>

    <section class="section bg-setting" id="edit">
        <div class="container">
            <div class="row atasan">
                <div class="col-md-4">
                    <input type="number" min="2023" max="2199" step="1" value="2023" />
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
                    <th rowspan="2">Nama</th>
                    <th rowspan="2">Status</th>
                    <th rowspan="2">Bulan</th>
                    <th rowspan="2">Alokasi</th>
                    <th colspan="4">Minggu ke-</th>
                    <th rowspan="2">Action</th>
                </tr>
                <tr>
                    <td><strong>01</strong></td>
                    <td><strong>02</strong></td>
                    <td><strong>03</strong></td>
                    <td><strong>04</strong></td>
                </tr>
                @foreach ($ListPenerimaan as $item)
                    <tr>
                        <td>C-{{ $item->id_data_penerimaan }}</td>
                        <td>PERTAMINA</td>
                        <td>{{ $item->status_penerimaan }}</td>
                        <td>{{ $item->bulan_penerimaan }}</td>
                        <td>500</td>
                        <td>{{ $item->minggu_1 }}</td>
                        <td>{{ $item->minggu_2 }}</td>
                        <td>{{ $item->minggu_3 }}</td>
                        <td>{{ $item->minggu_4 }}</td>
                        <td><a href="<?php echo url("/penerimaan/update/{$item->id_data_penerimaan}");?>" class="modal-link-kary edit-button"><b>UPDATE</b></a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <br>
            {{ $ListPenerimaan->links() }}
        </div>
        <!-- <div class="edit">
                          <a href="#" class="edit-btn modal-link-save">Save</a>
                        </div> -->
    </section>
@endsection
