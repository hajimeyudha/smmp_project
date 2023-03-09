<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Template Mo" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" />
    <title>Landing Page | PT Subur Makmur Migas Pratama</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/templatemo-art-factory.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="{{asset('images/sm.png')}}" alt="" class="navvy-img">
        <a class="navbar-brand navvy" href="#">PT SUBUR MAKMUR MIGAS PRATAMA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/logon">LOGIN <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <p class="nav-link" href="#">|</p>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="landing#footer-upper">KONTAK</a>
            </li>
            {{-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> --}}
          </ul>
        </div>
      </nav>
    {{-- section home started --}}
    <section class="section" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{ asset('images/left-image.png') }}" class="rounded img-fluid d-block mx-auto"
                        alt="App" />
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
                    <a href="https://goo.gl/maps/HF2piHc3RH4HKRJ89" target="_blank"><img
                            src="{{ asset('images/tangan.png') }}" /></a>
                    <a href="https://goo.gl/maps/HF2piHc3RH4HKRJ89" target="_blank"><img
                            src="{{ asset('images/name.png') }}" id="tulisan" /></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    {{-- footer --}}
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
    {{-- end of footer --}}
    {{-- foot footer --}}
    <section class="section" id="footer">
        <div class="footer-content nice">
          <a href="/home#home" class="logo">PT SUBUR MAKMUR MIGAS PRATAMA</a>
        </div>
      </section>
      <section class="section mantep" id="footer">
        <div class="footer-content anjayyy">
          <a href="/home#home" class="logo anjayani">Tim Developer @2023 All Rights Reserved</a>
          <p class="uhuy">Hand-crafted & Made with ♡</p>
        </div>
      </section>
</body>
<!-- ***** Features Big Item End ***** -->

{{-- JS --}}
<script src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
<script src="https://kit.fontawesome.com/59bcfd8744.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $(".modal-link-save").click(function() {
            $(".modal-scs").show();
            $(".modal-bg-scs").show();
        });
        $(".modal-scs .close").click(function() {
            $(".modal-scs").hide();
            $(".modal-bg-scs").hide();
        });
    });

    let width = screen.width;
    console.log(width);
    if (width < 991) {
        document.getElementById("img");
        var imageshown = "../public/assets/images/logo-mob.png";
    } else {
        document.getElementById("img");
        var imageshown = "../public/assets/images/logo.png";
    }
    document.getElementById("img").src = imageshown;
</script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</html>
