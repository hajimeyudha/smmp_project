{{-- Membuat Element Child dari Main Layout --}}
@extends('layouts.main-layout-cssjs')
{{-- Judul halaman --}}
@section('title', 'Update Admin')
{{-- CONTENT START --}}
@section('content')

    <body>

        <div class="welcome-area" id="welcome-first">
            <div class="create-screen">
                <a href="/laporan"><i class="close far fa-times-circle"></i></a>
                <h5 class="text-center" style="margin-bottom: 2rem">
                    Update Admin Laporan
                </h5>
                <form action="<?php echo url("/laporan/update/ubah/{$data->id_laporan}");?>">
                  @csrf
                <div class="form-input">
                    <div class="form-group">
                        <div class="col-md-2">
                            <label><b>Tanggal Laporan</b></label>
                        </div>
                        <div class="col-md-8">
                            <?php
                            $date = $data->tanggal_laporan;
                            $date2 = strtotime($date);
                            $date3 = date('Y-m-d', $date2);
                            ?>
                            <input name="tanggal_laporan" id="tanggal_laporan" type="date" value="{{ $date3 }}"
                                class="form-control shadow p-3 mb-2 rounded-lg" placeholder="MASUKKAN BULAN" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2">
                            <label><b>Uang Masuk</b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="uang_masuk" id="uang_masuk" value="{{ $data->uang_masuk }}" class="form-control shadow p-3 mb-2 bg-white rounded-lg" />
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
                            <label><b>Uang Keluar</b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="uang_keluar" id="uang_keluar" value="{{ $data->uang_keluar }}" class="form-control shadow p-3 mb-2 bg-white rounded-lg" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2">
                            <label><b>Keterangan</b></label>
                        </div>
                        <div class="col-md-8">
                            <input type="textarea" name="keterangan_laporan" id="keterangan_laporan" value="{{ $data->keterangan_laporan }}"  class="form-control shadow p-3 mb-2 bg-white rounded-lg" />
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
