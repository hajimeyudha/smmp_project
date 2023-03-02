{{-- Membuat Element Child dari Main Layout --}}
@extends('layouts.main-layout-cssjs')
{{-- Judul halaman --}}
@section('title', 'Update Admin')
{{-- CONTENT START --}}
@section('content')

    <body>

        <div class="welcome-area" id="welcome-first">
            <div class="create-screen">
                <a href="/penerimaan"><i class="close far fa-times-circle"></i></a>
                <h5 class="text-center" style="margin-bottom: 2rem">
                    Update Admin penerimaan
                </h5>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="<?php echo url("/penerimaan/update/ubah/{$data->id_data_penerimaan}"); ?>">
                    @csrf
                    <div class="form-input">
                        <div class="form-group">
                            <div class="col-md-2">
                                <label><b>Id Registrasi</b></label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" value="{{ $data->id_data_penerimaan }}"
                                    class="form-control shadow p-3 mb-2 rounded-lg" disabled placeholder="ID" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2">
                                <label><b>Nama</b></label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control shadow p-3 mb-2 rounded-lg readonly"
                                    name="nama" id="nama" value="PERTAMINA" placeholder="PERTAMINA" disabled />
                            </div>
                        </div>
                        <!-- Status Dropdown -->
                        <div class="form-group">
                            <div class="col-md-2">
                                <label><b>Status</b></label>
                            </div>
                            <div class="col-md-8">
                                <select name="status" id="status" class="custom-select shadow bg-white rounded-lg"
                                    id="inputGroupSelect01" required>
                                    <option>PILIH STATUS TRANSAKSI</option>
                                    <option selected value="AKTIF">AKTIF</option>
                                    <option value="PENDING">PENDING</option>
                                    <option value="SELESAI">SELESAI</option>
                                </select>
                            </div>
                        </div>
                        <!-- End of status dropdown -->
                        <!-- Status Dropdown -->
                        {{-- <div class="form-group">
                      <div class="col-md-2">
                          <label><b>Bulan Penerimaan</b></label>
                      </div> --}}
                        {{-- <div class="col-md-8">
                          <select name="bulan" id="bulan" class="custom-select shadow bg-white rounded-lg" id="inputGroupSelect01" required>
                              <option>PILIH BULAN TRANSAKSI</option>
                              <option selected value="Januari">Januari</option>
                              <option value="Februari">Februari</option>
                              <option value="Maret">Maret</option>
                              <option value="April">April</option>
                              <option value="Mei">Mei</option>
                              <option value="Juni">Juni</option>
                              <option value="Juli">Juli</option>
                              <option value="Agustus">Agustus</option>
                              <option value="September">September</option>
                              <option value="Oktober">Oktober</option>
                              <option value="November">November</option>
                              <option value="Desember">Desember</option>
                          </select>
                      </div> --}}
                        {{-- </div> --}}
                        <!-- End of status dropdown -->
                        <div class="form-group">
                            <div class="col-md-2">
                                <label><b>Penerimaan Minggu 1</b></label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="minggu_1" id="minggu_1" value="{{ $data->minggu_1 }}"
                                    class="form-control shadow p-3 mb-2 bg-white rounded-lg" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2">
                                <label><b>Penerimaan Minggu 2</b></label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="minggu_2" id="minggu_2" value="{{ $data->minggu_2 }}"
                                    class="form-control shadow p-3 mb-2 bg-white rounded-lg" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2">
                                <label><b>Penerimaan Minggu 3</b></label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="minggu_3" id="minggu_3" value="{{ $data->minggu_3 }}"
                                    class="form-control shadow p-3 mb-2 bg-white rounded-lg" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2">
                                <label><b>Penerimaan Minggu 4</b></label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="minggu_4" id="minggu_4" value="{{ $data->minggu_4 }}"
                                    class="form-control shadow p-3 mb-2 bg-white rounded-lg" />
                            </div>
                        </div>
                        <div class="button-space">
                            <button class="btn btn-success" type="submit"><b>Save</b></button>
                        </div>

                        <div class="modal-scs" style="display: none">
                            <a href="#"><i class="close far fa-times-circle"></i></a>
                            <p class="text-center">Berhasil Menyimpan</p>
                        </div>
                        <div class="modal-bg-scs" style="display: none"></div>
                    </div>
                </form>
            </div>
        </div>
    </body>
