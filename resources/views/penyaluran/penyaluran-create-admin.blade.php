{{-- Membuat Element Child dari Main Layout --}}
@extends('layouts.main-layout-cssjs')
{{-- Judul halaman --}}
@section('title', 'Create Admin')
{{-- CONTENT START --}}
@section('content')
<body>
  <div class="welcome-area" id="welcome-first">
    <div class="create-screen">
      <a href="Admin-create-penyaluran.html"><i class="close far fa-times-circle"></i></a>
      <h5 class="text-center" style="margin-bottom: 2rem">
        Create Admin Penyaluran
      </h5>
      <form action="{{url('/penyaluran/create/tambah')}}" method="POST">
      <div class="form-input">
        <div class="form-group">
          <div class="col-md-2">
            <label><b>Nama Pangkalan</b></label>
          </div>
          <div class="col-md-8">
            <input type="text" name="nama" class="form-control shadow p-3 mb-2 rounded-lg readonly" placeholder="MASUKKAN NAMA CUSTOMER"
              autofocus/>
          </div>
        </div>
        <!-- Status Dropdown -->
        <div class="form-group">
          <div class="col-md-2">
            <label><b>Status Pembayaran</b></label>
          </div>
          <div class="col-md-8">
            <select class="custom-select shadow bg-white rounded-lg" id="inputGroupSelect01" required>
              <option selected>PILIH STATUS TRANSAKSI</option>
              <option value="BELUM LUNAS">BELUM LUNAS</option>
              <option value="LUNAS">LUNAS</option>
            </select>
          </div>
        </div>
        <!-- End of status dropdown -->
        <div class="form-group">
          <div class="col-md-2">
            <label><b>Tanggal Order</b></label>
          </div>
          <div class="col-md-8">
            <input type="date" class="form-control shadow p-3 mb-2 bg-white rounded-lg" placeholder="MASUKKAN TANGGAL PEMESANAN"
              required />
          </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
              <label><b>Tanggal Jatuh Tempo</b></label>
            </div>
            <div class="col-md-8">
              <input type="date" class="form-control shadow p-3 mb-2 bg-white rounded-lg" placeholder="MASUKKAN TANGGAL JATUH TEMPO"
                required />
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-2">
              <label><b>Gas On Site</b></label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control shadow p-3 mb-2 rounded-lg readonly" placeholder="JUMLAH GAS DI GUDANG"/>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-2">
              <label><b>Keterangan</b></label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control shadow p-3 mb-2 rounded-lg readonly" placeholder="MASUKKAN KETERANGAN"/>
            </div>
          </div>

                  <!-- Status Dropdown -->
        <div class="form-group">
            <div class="col-md-2">
              <label><b>Status Pemesanan</b></label>
            </div>
            <div class="col-md-8">
              <select class="custom-select shadow bg-white rounded-lg" id="inputGroupSelect01" required>
                <option selected disabled value="">PILIH STATUS PEMESANAN</option>
                <option value="pesan">Barang Dipesan</option>
                <option value="kirim">Barang Dikirim</option>
                <option value="selesai">Selesai</option>
              </select>
            </div>
          </div>
          
          <!-- End of status dropdown -->
        </form>
        <!-- End of form -->
        <div class="button-space">
          <button class="btn btn-success" type="submit"><b>Save</b></button>
          
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
@endsection
