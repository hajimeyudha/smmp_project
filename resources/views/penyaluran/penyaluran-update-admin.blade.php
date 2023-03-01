{{-- Membuat Element Child dari Main Layout --}}
@extends('layouts.main-layout-cssjs')
{{-- Judul halaman --}}
@section('title', 'Update Admin')
{{-- CONTENT START --}}
@section('content')
<body>
  <div class="welcome-area" id="welcome-first">
    <div class="create-screen">
      <a href="penerimaan.html"><i class="close far fa-times-circle"></i></a>
      <h5 class="text-center" style="margin-bottom: 2rem">
        Update Admin Penyaluran
      </h5>
      <div class="form-input">
        <div class="form-group">
          <div class="col-md-2">
            <label><b>Id Registrasi</b></label>
          </div>
          <div class="col-md-8">
            <input type="text" class="form-control shadow p-3 mb-2 rounded-lg" disabled placeholder="ID" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-2">
            <label><b>Nama</b></label>
          </div>
          <div class="col-md-8">
            <input type="text" class="form-control shadow p-3 mb-2 rounded-lg readonly" placeholder="CV INDOPERTA" 
            />
          </div>
        </div>
        <!-- Status Dropdown -->
        <div class="form-group">
          <div class="col-md-2">
            <label><b>Status</b></label>
          </div>
          <div class="col-md-8">
            <select class="custom-select shadow bg-white rounded-lg" id="inputGroupSelect01" required>
              <option selected>PILIH STATUS TRANSAKSI</option>
              <option value="AKTIF">AKTIF</option>
              <option value="SELESAI">SELESAI</option>
            </select>
          </div>
        </div>
        <!-- End of status dropdown -->
        <div class="form-group">
          <div class="col-md-2">
            <label><b>Tanggal Order</b></label>
          </div>
          <div class="col-md-8">
            <input type="date" class="form-control shadow p-3 mb-2 rounded-lg" placeholder="MASUKKAN BULAN"
            />
          </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
              <label><b>Tanggal Jatuh Tempo</b></label>
            </div>
            <div class="col-md-8">
              <input type="date" class="form-control shadow p-3 mb-2 rounded-lg" placeholder="MASUKKAN BULAN"
              />
            </div>
          </div>
        <div class="form-group">
          <div class="col-md-2">
            <label><b>Jumlah Pesanan</b></label>
          </div>
          <div class="col-md-8">
            <input type="text" class="form-control shadow p-3 mb-2 bg-white rounded-lg" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-2">
            <label><b>Keterangan</b></label>
          </div>
          <div class="col-md-8">
            <input type="textarea" class="form-control shadow p-3 mb-2 bg-white rounded-lg" />
          </div>
        </div>
        <div class="button-space">
          <a href="#" class="main-button modal-link-save"><b>Save</b></a>
          <!-- <a href="#" class="edit-btn modal-link-save">Save</a> -->
        </div>

        <div class="modal-scs" style="display: none">
          <a href="#"><i class="close far fa-times-circle"></i></a>
          <p class="text-center">Berhasil Menyimpan</p>
        </div>
        <div class="modal-bg-scs" style="display: none"></div>
      </div>
    </div>
  </div>
</body>