{{-- Membuat Element Child dari Main Layout --}}
@extends('layouts.main-layout-admin')
{{-- Judul halaman --}}
@section('title', 'Tentang Kami')
{{-- CONTENT START --}}
@section('content')
@if ($message = Session::get('sukses'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
  <section class="section" id="home">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
          <img src="{{asset('images/left-image.png')}}" class="rounded img-fluid d-block mx-auto" alt="App" />
        </div>
        <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
          <div class="left-heading">
            <h5 class="teks_roman">PT Subur Makmur Migas Pratama</h5>
          </div>
          <div class="left-text">
            <p>
              PT Subur Makmur Migas Pratama merupakan distributor gas
              Pertamina terbesar domisili Kabupaten Demak yang beralamat di
              Jalan Raya Demak, Jepara, Bakung, Mijen, Demak, Jawa Tengah.
              Berdiri secara resmi sejak tahun 2013 dan didirikan oleh Bapak
              Aditya Chandra Suparman. Sebagai distributor gas terbesar, PT
              Subur Makmur Migas Pratama selalu konsisten dalam memberikan
              pelayanan kepada konsumen atau pelanggan. Pada proses
              distribusinya, produsen tersebut mempercayakan kepada
              distributor (dalam hal ini adalah PT Subur Makmur Migas Pratama)
              dalam menyalurkan produk kepada pengecer. Selanjutnya, pengecer
              tersebut yang akan menyalurkan kepada konsumen akhir.
            </p>
            <!-- <a href="#stok" class="main-button">Discover More</a> -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 maps-link">
          <a href="https://goo.gl/maps/HF2piHc3RH4HKRJ89" target="_blank"><img src="{{asset('images/tangan.png')}}" /></a>
          <a href="https://goo.gl/maps/HF2piHc3RH4HKRJ89" target="_blank"><img src="{{asset('images/name.png')}}"
              id="tulisan" /></a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="hr"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Features Big Item End ***** -->

  <!-- section gas info -->
  <section class="section" id="gas-info">
    <div class="container">
      
      <div class="col d-flex justify-content-center">
        <button class="btn btn-kiri"><i class="fa fa-arrow-circle-left fa-3x" aria-hidden="true"></i></button>
        <div class="card gasone" style="width: 18rem;">
          <img src="{{asset('images/elpiji-3kg.png')}}" class="card-img-top" alt="gas 3 kg" width="100px">
          <div class="card-body">
            <a href="#" class="btn btn-primary">INFO</a>
          </div>
          <button class="btn btn-kanan"><i class="fa fa-arrow-circle-right fa-3x" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
  </section>

  <!-- ATASNYA FOOTER -->
  <section class="section" id="footer-upper">
    <div class="container">
      <div class="footer-upper">
        <p class="follow">Follow us!</p>
        <img src="{{asset('images/linkedin.png')}}" alt="" class="linkedin img-responsive text-center" width="80px" />
        <p class="company">PT Subur Makmur Migas Pratama</p>

        <div class="kontakBungkus">
          <p class="contact">Contact us!</p>
          <div class="kontak1">
            <img src="assets/images/whatsapp.png" alt="" class="whatsapp img-fluid rounded" />
            <a href="wa.me/#" class="aditya">Aditya Chandra Suparman</a>
          </div>
          <div class="kontak2">
            <img src="assets/images/whatsapp.png" alt="" class="whatsapp2" />
            <a href="wa.me/#" class="sadullah">Sadullah</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection

  