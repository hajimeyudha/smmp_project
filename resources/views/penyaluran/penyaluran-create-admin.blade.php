{{-- Membuat Element Child dari Main Layout --}}
@extends('layouts.main-layout-cssjs')
{{-- Judul halaman --}}
@section('title', 'Create Admin')
{{-- CONTENT START --}}
@section('content')

    <body>
        <div class="welcome-area" id="welcome-first">
            <div class="create-screen">
                <a href="/penyaluran"><i class="close far fa-times-circle"></i></a>
                <h5 class="text-center" style="margin-bottom: 2rem">
                    Create Admin Penyaluran
                </h5>

                <form action="/tambah" method="POST">
                    @csrf
                    <div class="form-input">
                      <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <div class="form-group">
                            <div class="col-md-2">
                                <label><b>Nama Pangkalan</b></label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="nama" id="nama"
                                    class="form-control shadow p-3 mb-2 rounded-lg readonly"
                                    placeholder="MASUKKAN NAMA CUSTOMER" value="INDOPERTA" disabled />
                            </div>
                        </div>
                        <!-- Status Dropdown -->
                        <div class="form-group">
                            <div class="col-md-2">
                                <label><b>Status Pembayaran</b></label>
                            </div>
                            <div class="col-md-8">
                                <select class="custom-select shadow bg-white rounded-lg"
                                    name="statusPembayaran"id="statusPembayaran" >
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
                                <input type="date" name="tanggalOrder" id="tanggalOrder"
                                    class="form-control shadow p-3 mb-2 bg-white rounded-lg"
                                    placeholder="MASUKKAN TANGGAL PEMESANAN"  />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2">
                                <label><b>Tanggal Jatuh Tempo</b></label>
                            </div>
                            <div class="col-md-8">
                                <input type="date" name="tanggalTempo" id="tanggalTempo"
                                    class="form-control shadow p-3 mb-2 bg-white rounded-lg"
                                    placeholder="MASUKKAN TANGGAL JATUH TEMPO"  />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2">
                                <label><b>Gas Dipesan</b></label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="gasDipesan" id="gasDipesan"
                                    class="form-control shadow p-3 mb-2 rounded-lg readonly"
                                    placeholder="JUMLAH GAS DIPESAN" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2">
                                <label><b>Keterangan</b></label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="keterangan" id="keterangan"
                                    class="form-control shadow p-3 mb-2 rounded-lg readonly"
                                    placeholder="MASUKKAN KETERANGAN" />
                            </div>
                        </div>

                        <!-- Status Dropdown -->
                        <div class="form-group">
                            <div class="col-md-2">
                                <label><b>Status Pemesanan</b></label>
                            </div>
                            <div class="col-md-8">
                                <select class=" custom-select shadow bg-white rounded-lg" name="statusPemesanan"
                                    id="statusPemesanan" >
                                    <option selected disabled value="">PILIH STATUS PEMESANAN</option>
                                    <option value="Barang Dipesan">Barang Dipesan</option>
                                    <option value="Barang Dikirim">Barang Dikirim</option>
                                    <option value="Pesanan Selesai">Pesanan Selesai</option>
                                </select>
                            </div>
                        </div>

                        <!-- End of status dropdown -->
                </form>
                <!-- End of form -->
                <div class="button-space">
                    <button class="btn btn-success" type="submit"><b>Save</b></button>
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
