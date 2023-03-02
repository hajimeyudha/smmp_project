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
                <tr>
                    <td>A-001</td>
                    <td>PERTAMINA</td>
                    <td>AKTIF</td>
                    <td>Januari</td>
                    <td>500</td>
                    <td>60</td>
                    <td>24</td>
                    <td>50</td>
                    <td>0</td>
                    <td><a href="#" class="modal-link-kary edit-button">UPDATE</a></td>
                </tr>
                <tr>
                    <td>A-002</td>
                    <td>PERTAMINA</td>
                    <td>AKTIF</td>
                    <td>Februari</td>
                    <td>500</td>
                    <td>0</td>
                    <td>67</td>
                    <td>20</td>
                    <td>15</td>
                    <td><a href="#" class="modal-link-kary edit-button">UPDATE</a></td>
                </tr>
                <tr>
                    <td>A-003</td>
                    <td>PERTAMINA</td>
                    <td>AKTIF</td>
                    <td>Maret</td>
                    <td>500</td>
                    <td>0</td>
                    <td>100</td>
                    <td>15</td>
                    <td>19</td>
                    <td><a href="#" class="modal-link-kary edit-button">UPDATE</a></td>
                </tr>
                <tr>
                    <td>A-004</td>
                    <td>PERTAMINA</td>
                    <td>AKTIF</td>
                    <td>April</td>
                    <td>500</td>
                    <td>0</td>
                    <td>100</td>
                    <td>15</td>
                    <td>1</td>
                    <td><a href="#" class="modal-link-kary edit-button">UPDATE</a></td>
                </tr>
                <tr>
                    <td>A-005</td>
                    <td>PERTAMINA</td>
                    <td>AKTIF</td>
                    <td>Mei</td>
                    <td>500</td>
                    <td>5</td>
                    <td>110</td>
                    <td>19</td>
                    <td>11</td>
                    <td><a href="#" class="modal-link-kary edit-button">UPDATE</a></td>
                </tr>
                <tr>
                    <td>A-006</td>
                    <td>PERTAMINA</td>
                    <td>AKTIF</td>
                    <td>Juni</td>
                    <td>500</td>
                    <td>7</td>
                    <td>130</td>
                    <td>100</td>
                    <td>10</td>
                    <td><a href="#" class="modal-link-kary edit-button">UPDATE</a></td>
                </tr>
                <tr>
                    <td>A-007</td>
                    <td>PERTAMINA</td>
                    <td>AKTIF</td>
                    <td>Juli</td>
                    <td>500</td>
                    <td>0</td>
                    <td>150</td>
                    <td>11</td>
                    <td>0</td>
                    <td><a href="#" class="modal-link-kary edit-button">UPDATE</a></td>
                </tr>
                <tr>
                    <td>A-008</td>
                    <td>PERTAMINA</td>
                    <td>AKTIF</td>
                    <td>Agustus</td>
                    <td>500</td>
                    <td>2</td>
                    <td>170</td>
                    <td>10</td>
                    <td>0</td>
                    <td><a href="#" class="modal-link-kary edit-button">UPDATE</a></td>
                </tr>
                <tr>
                    <td>A-009</td>
                    <td>PERTAMINA</td>
                    <td>AKTIF</td>
                    <td>September</td>
                    <td>500</td>
                    <td>0</td>
                    <td>100</td>
                    <td>11</td>
                    <td>10</td>
                    <td><a href="#" class="modal-link-kary edit-button">UPDATE</a></td>
                </tr>
                <tr>
                    <td>A-010</td>
                    <td>PERTAMINA</td>
                    <td>AKTIF</td>
                    <td>Oktober</td>
                    <td>500</td>
                    <td>0</td>
                    <td>100</td>
                    <td>15</td>
                    <td>1</td>
                    <td><a href="#" class="modal-link-kary edit-button">UPDATE</a></td>
                </tr>
                <tr>
                    <td>A-011</td>
                    <td>PERTAMINA</td>
                    <td>AKTIF</td>
                    <td>November</td>
                    <td>500</td>
                    <td>5</td>
                    <td>110</td>
                    <td>19</td>
                    <td>11</td>
                    <td>
                        <a href="#" class="modal-link-kary edit-button">UPDATE</a>
                        <div class="modal-kary" style="display: none;">
                            <div style="background: white;height: 65%;">
                                <a href="#" style="padding-top: 2rem;"><i class="close far fa-times-circle"></i></a>
                                <div id="form" style="margin-top: 20px;">
                                    <h5 class="text-center my-5" style="padding-top: 2rem;">Update</h5>
                                    <div class="form-input">

                                        <div class="form-group">
                                            <div class="col-md-2"><label><b>Id Registrasi</b></label></div>
                                            <div class="col-md-8"><input type="number"
                                                    class="form-control shadow p-3 mb-2 bg-white rounded-lg"></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-2"><label><b>Nama Pangkalan</b></label></div>
                                            <div class="col-md-8"><input type="text"
                                                    class="form-control shadow p-3 mb-2 bg-white rounded-lg">
                                            </div>
                                        </div>
                                        <div class="form-group" id="drop">
                                            <div class="col-md-2"><label><b>Status</b></label></div>
                                            <div class="col-md-8">
                                                <label class="select" for="slct" style="width: 100%;">
                                                    <select id="slct-1" required="required">
                                                        <option value="" disabled="disabled" selected="selected">
                                                            Status</option>
                                                        <option value="#">AKTIF</option>
                                                        <option value="#">NONAKTIF</option>
                                                    </select>
                                                    <svg>
                                                        <use xlink:href="#select-arrow-down"></use>
                                                    </svg>
                                                </label>
                                                <!-- SVG Sprites-->
                                                <svg class="sprites">
                                                    <symbol id="select-arrow-down" viewbox="0 0 10 6">
                                                        <polyline points="1 1 5 5 9 1"></polyline>
                                                    </symbol>
                                                </svg>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-2"><label><b>Alokasi</b></label></div>
                                            <div class="col-md-8"><input id="aa" type="number"
                                                    class="form-control shadow p-3 mb-2 bg-white rounded-lg"></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-2"><label><b>Minggu ke-01</b></label></div>
                                            <div class="col-md-8"><input type="number"
                                                    class="form-control shadow p-3 mb-2 bg-white rounded-lg"></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-2"><label><b>Minggu ke-02</b></label></div>
                                            <div class="col-md-8"><input type="number"
                                                    class="form-control shadow p-3 mb-2 bg-white rounded-lg"></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-2"><label><b>Minggu ke-03</b></label></div>
                                            <div class="col-md-8"><input type="number"
                                                    class="form-control shadow p-3 mb-2 bg-white rounded-lg"></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-2"><label><b>Minggu ke-04</b></label></div>
                                            <div class="col-md-8"><input type="number"
                                                    class="form-control shadow p-3 mb-2 bg-white rounded-lg"></div>
                                        </div>
                                    </div>
                                    <div class="button-space my-3">
                                        <a href="#" class="main-button my-3 modal-link-savee"><b>Save</b></a>
                                    </div>

                                    <div class="modal-scs" style="display: none;">
                                        <a href="#"><i class="close far fa-times-circle"></i></a>
                                        <p class="text-center">Berhasil Menyimpan</p>
                                    </div>
                                    <div class="modal-bg-scs" style="display: none;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-bg" style="display: none;"></div>
                    </td>
                </tr>
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
