{{-- Membuat Element Child dari Main Layout --}}
@extends('layouts.main-layout-cssjs')
{{-- Judul halaman --}}
@section('title', 'Update Admin')
{{-- CONTENT START --}}
@section('content')

    <body>

        <div class="welcome-area" id="welcome-first">
            <div class="create-screen">
                <a href="/penyaluran"><i class="close far fa-times-circle"></i></a>
                <h5 class="text-center" style="margin-bottom: 2rem">
                    Update Admin Penyaluran
                </h5>
                <form action="<?php echo url("/penyaluran/update/ubah/{$data->id_data_penyaluran}");?>">
                  @csrf
                <div class="form-input">
                    <div class="form-group">
                        <div class="col-md-2">
                            <label><b>Id Registrasi</b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" value="{{ $data->id_data_penyaluran }}"
                                class="form-control shadow p-3 mb-2 rounded-lg" disabled placeholder="ID" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2">
                            <label><b>Nama</b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control shadow p-3 mb-2 rounded-lg readonly"  name="nama" id="nama" value="CV INDOPERTA"
                                placeholder="CV INDOPERTA" disabled/>
                        </div>
                    </div>
                    <!-- Status Dropdown -->
                    <div class="form-group">
                        <div class="col-md-2">
                            <label><b>Status</b></label>
                        </div>
                        <div class="col-md-8">
                            <select name="status" id="status" class="custom-select shadow bg-white rounded-lg" id="inputGroupSelect01" required>
                                <option>PILIH STATUS TRANSAKSI</option>
                                <option selected value="LUNAS">LUNAS</option>
                                <option value="BELUM LUNAS">BELUM LUNAS</option>
                            </select>
                        </div>
                    </div>
                    <!-- End of status dropdown -->
                    <div class="form-group">
                        <div class="col-md-2">
                            <label><b>Tanggal Order</b></label>
                        </div>
                        <div class="col-md-8">
                            <?php
                            $date = $data->tanggal_penyaluran;
                            $date2 = strtotime($date);
                            $date3 = date('Y-m-d', $date2);
                            ?>
                            <input name="tanggalOrder" id="tanggalOrder" type="date" value="{{ $date3 }}"
                                class="form-control shadow p-3 mb-2 rounded-lg" placeholder="MASUKKAN BULAN" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2">
                            <?php
                            $date = $data->tempo_penyaluran;
                            $date2 = strtotime($date);
                            $date3 = date('Y-m-d', $date2);
                            ?>
                            <label><b>Tanggal Jatuh Tempo</b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="date" name="tanggalTempo" id="tanggalTempo" class="form-control shadow p-3 mb-2 rounded-lg"
                            value="{{ $date3 }}" placeholder="MASUKKAN BULAN" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2">
                            <label><b>Jumlah Pesanan</b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="gasDipesan" id="gasDipesan" value="{{ $data->gas_dipesan }}" class="form-control shadow p-3 mb-2 bg-white rounded-lg" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2">
                            <label><b>Keterangan</b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="textarea" name="keterangan" id="keterangan" value="{{ $data->keterangan_penyaluran }}"  class="form-control shadow p-3 mb-2 bg-white rounded-lg" />
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
