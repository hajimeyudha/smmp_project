{{-- Membuat Element Child dari Main Layout --}}
@extends('layouts.main-layout-cssjs')
{{-- Judul halaman --}}
@section('title', 'Create Admin')
{{-- CONTENT START --}}
@section('content')

    <body>
        <div class="welcome-area" id="welcome-first">
            <div class="create-screen">
                <a href="/laporan"><i class="close far fa-times-circle"></i></a>
                <h5 class="text-center" style="margin-bottom: 2rem">
                    Create Admin Laporan
                </h5>

                <form action="/laporan/tambah" method="POST">
                    @csrf
                    <div class="form-input">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                        {{-- tanggal --}}
                        <div class="form-group">
                            <div class="col-md-2">
                                <label><b>Tanggal Laporan</b></label>
                            </div>
                            <div class="col-md-8">
                                <input type="date" name="tanggal_laporan" id="tanggal_laporan"
                                    class="form-control shadow p-3 mb-2 bg-white rounded-lg"
                                    placeholder="MASUKKAN TANGGAL LAPORAN" />
                            </div>
                            {{-- end of tanggal --}}
                        </div>
                        {{-- uang masuk --}}
                        <div class="form-group">
                            <div class="col-md-2">
                                <label><b>Uang Masuk</b></label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="uang_masuk" id="uang_masuk"
                                    class="form-control shadow p-3 mb-2 rounded-lg readonly"
                                    placeholder="JUMLAH UANG MASUK" />
                            </div>
                        </div>
                        {{-- end of uang masuk --}}
                        {{-- uang keluar --}}
                        <div class="form-group">
                            <div class="col-md-2">
                                <label><b>Uang Keluar</b></label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="uang_keluar" id="uang_keluar"
                                    class="form-control shadow p-3 mb-2 rounded-lg readonly"
                                    placeholder="JUMLAH UANG KELUAR" />
                            </div>
                        </div>
                        {{-- end of uang keluar --}}
                        <div class="form-group">
                            <div class="col-md-2">
                                <label><b>Keterangan</b></label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="keterangan_laporan" id="keterangan_laporan"
                                    class="form-control shadow p-3 mb-2 rounded-lg readonly"
                                    placeholder="MASUKKAN KETERANGAN" />
                            </div>
                        </div>
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
