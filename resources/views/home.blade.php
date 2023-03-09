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

    <!-- section gas info -->
    <section class="section" id="stok">
        <div class="container">
    <div class="left-heading">
      <h5 class="text-center">STOK BARANG PT SUBUR MAKMUR MIGAS PRATAMA</h5>
    </div>
    <div class="row" id="row1">
        <div id="container-2" class="sol-1">
          <div class="solution-details" id="sol1">
            <img src="{{ asset('images/elpiji-3kg.png')}}" id="lpg3kg" />
            <hr />
            <p><b>LPG 3 KG</b></p>
          </div>
          <div class="solution-image" id="sol-img1">
            <div class="info" id="info-1">
                <div class="isi-outer">
                <div class="isi">
                  <img src="{{ asset('images/right-one.png')}}">
                  <p class="card-text"><b>Jumlah total tabung = 100</b></p>
                </div>
                <hr />
                <div class="isi">
                    <img src="{{ asset('images/right-one.png')}}">
                    <p class="card-text"><b>Jumlah tabung on site = 40</b></p>
                </div>
                <hr />
                <div class="isi">
                    <img src="{{ asset('images/right-one.png')}}">
                    <p class="card-text"><b>Jumlah tabung di customer = 60</b></p>
                </div> 
                <!-- <hr />
                <div class="isi">
                    <img src="{{ asset('images/right-one.png')}}">
                    <p class="card-text"><b><a href="edit.html">Update Stock</a></b></p>
                </div>  -->
              </div>
            </div>
          </div>
        </div>
        <div id="container-2" class="sol-1">
          <div class="solution-details" id="sol2">
            <img src="{{ asset('images/elpiji-pink.png')}}" />
            <hr />
            <p><b>LPG 5,5 KG BRIGHT GAS</b></p>
          </div>
          <div class="solution-image"id="sol-img2">
            <div class="info" id="info-2">
                <div class="isi-outer">
                  <div class="isi">
                    <img src="{{ asset('images/right-one.png')}}">
                    <p class="card-text"><b>Jumlah total tabung = 100</b></p>
                  </div>
                  <hr />
                  <div class="isi">
                      <img src="{{ asset('images/right-one.png')}}">
                      <p class="card-text"><b>Jumlah tabung on site = 40</b></p>
                  </div>
                  <hr />
                  <div class="isi">
                      <img src="{{ asset('images/right-one.png')}}">
                      <p class="card-text"><b>Jumlah tabung di customer = 60</b></p>
                  </div> 
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="row" id="row1">
      <div id="container-2" class="sol-1">
        <div class="solution-details" id="sol3">
          <img src="{{ asset('images/elpiji-bright.png')}}"/>
          <hr />
          <p><b>LPG 12 KG BRIGHT GAS</b></p>
        </div>
        <div class="solution-image" id="sol-img3">
          <div class="info" id="info-3">
              <div class="isi-outer">
                <div class="isi">
                  <img src="{{ asset('images/right-one.png')}}">
                  <p class="card-text"><b>Jumlah total tabung = 100</b></p>
                </div>
                <hr />
                <div class="isi">
                    <img src="{{ asset('images/right-one.png')}}">
                    <p class="card-text"><b>Jumlah tabung on site = 40</b></p>
                </div>
                <hr />
                <div class="isi">
                    <img src="{{ asset('images/right-one.png')}}">
                    <p class="card-text"><b>Jumlah tabung di customer = 60</b></p>
                </div> 
              </div>
          </div>
        </div>
      </div>
      <div id="container-2" class="sol-1">
        <div class="solution-details" id="sol4">
          <img src="{{ asset('images/elpiji-12kg.png')}}" id="lpg12kg"/>
          <hr />
          <p><b>LPG 12 KG</b></p>
        </div>
        <div class="solution-image" id="sol-img4">
          <div class="info" id="info-4">
              <div class="isi-outer">
                <div class="isi">
                  <img src="{{ asset('images/right-one.png')}}">
                  <p class="card-text"><b>Jumlah total tabung = 100</b></p>
                </div>
                <hr />
                <div class="isi">
                    <img src="{{ asset('images/right-one.png')}}">
                    <p class="card-text"><b>Jumlah tabung on site = 40</b></p>
                </div>
                <hr />
                <div class="isi">
                    <img src="{{ asset('images/right-one.png')}}">
                    <p class="card-text"><b>Jumlah tabung di customer = 60</b></p>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row" id="row1">
      <div class="col-3" id="hide"></div>
      <div id="container-2" class="sol-1">
        <div class="solution-details" id="sol5">
          <img src="{{ asset('images/elpiji-50kg.png')}}" id="lpg50kg" />
          <hr />
          <p><b>LPG 50 KG</b></p>
        </div>
        <div class="solution-image" id="sol-img5">
          <div class="info" id="info-5"> 
              <div class="isi-outer">
                <div class="isi">
                  <img src="{{ asset('images/right-one.png')}}">
                  <p class="card-text"><b>Jumlah total tabung = 100</b></p>
                </div>
                <hr />
                <div class="isi">
                    <img src="{{ asset('images/right-one.png')}}">
                    <p class="card-text"><b>Jumlah tabung on site = 40</b></p>
                </div>
                <hr />
                <div class="isi">
                    <img src="{{ asset('images/right-one.png')}}">
                    <p class="card-text"><b>Jumlah tabung di customer = 60</b></p>
                </div> 
              </div>
          </div>
        </div>
      </div>
      <div class="col-3" id="hide"></div>
    </div>
        </div>
    </section>


    <!-- ATASNYA FOOTER -->
    <section class="section" id="footer-upper">
        <div class="container">
            <div class="footer-upper">
                <p class="follow">Follow us!</p>
                <img src="{{ asset('images/linkedin.png') }}" alt="" class="linkedin img-responsive text-center"
                    width="80px" />
                <a href="#" class="company">PT Subur Makmur Migas Pratama</a>

                <div class="kontakBungkus">
                    <p class="contact">Contact us!</p>
                    <div class="kontak1">
                        <img src="{{ asset('images/whatsapp.png') }}" alt="" class="whatsapp img-fluid rounded" />
                        <a href="wa.me/#" class="aditya">Aditya Chandra Suparman</a>
                    </div>
                    <div class="kontak2">
                        <img src="{{ asset('images/whatsapp.png') }}" alt="" class="whatsapp2" />
                        <a href="wa.me/#" class="sadullah">Sadullah</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        window.addEventListener("beforeunload", function(event) {
            // Send an AJAX request to log the user out
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "/logout", false); // Change the URL to match your logout endpoint
            xhr.send();
        });
    </script>
@endsection
