<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="Template Mo" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" />

  <title>@yield('title') | PT Subur Makmur Migas Pratama</title>
  <!-- Additional CSS Files -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet"  href="{{asset('css/font-awesome.css')}}" />
  <link rel="stylesheet"  href="{{asset('css/templatemo-art-factory.css')}}" />
  <link rel="stylesheet"  href="{{asset('css/owl-carousel.css')}}" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  @yield('tambahHead')
</head>

<body>
    <!-- Header here -->
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
      <div class="container">
        <nav class="main-nav">
          <a href="/home#home"><img class="logo_smmp" src="{{asset('images/sm.png')}}" /></a>
          <a href="/home#home" class="logo">PT SUBUR MAKMUR MIGAS PRATAMA</a>
          <p class="logo_lokasi"><span>Kabupaten Demak, Jawa Tengah</span></p>
          <ul class="nav">
            <div class="box-nav">
              <i class="fas fa-home"></i>
              <li class="scroll-to-section" id="home-nav">
                <a href="/home#home">Tentang Kami</a>
              </li>
            </div>
            <li class="scroll-to-section"><a href="/home#gas-info">Info Produk</a></li>
            <li class="submenu">
              <a href="javascript:;">Proses</a>
              <ul>
                <div class="row" style="background-color:  #E7DDDD">
                  <li><a href="/penyaluran">Penyaluran</a></li>
                </div>
                <div class="row" style="background-color:  #E7DDDD">
                  <li><a href="/penerimaan">Penerimaan</a></li>
                </div>
              </ul>
            </li>
            <li class="scroll-to-section"><a href="/laporan">Laporan</a></li>
            <li class="scroll-to-section">
              <a href="/kontak">Kontak</a>
            </li>
            <li class="submenu">
              <a href="javascript:;">Admin</a>
              <ul>
                <div class="row" style="background-color:  #E7DDDD">
                  <li><a href="/penyaluran">Logout</a></li>
                </div>
              </ul>
            </li>   
          </ul>

          <a class="menu-trigger">
            <span>Menu</span>
          </a>
        </nav>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <!-- End of Header -->


    {{-- ------------------------------------------------------------------------------------- --}}


    {{-- Menampilkan konten dengan parameter atau ngambil yang isinya "content" --}}
    {{-- CONTENT START --}}
    @yield('content')
    {{-- CONTENT END --}}

    
    {{-- ------------------------------------------------------------------------------------- --}}



    <!-- FOOTER -->
  <section class="section" id="footer">
    <div class="footer-content">
      <a href="/home#home"><img src="./assets/images/sm.png" /></a>
      <a href="/home#home" class="logo">PT SUBUR MAKMUR MIGAS PRATAMA</a>
    </div>
  </section>

  <!-- jQuery -->
  <script src="assets/js/jquery-2.1.0.min.js"></script>
  <script src="https://kit.fontawesome.com/59bcfd8744.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script type="text/javascript">
    $(function () {
      $("#scrollToTop").bind("click", function () {
        $("html, body").animate({ scrollTop: 0 }, 1200);
        return false;
      });
    });
  </script>
  <!-- Bootstrap -->
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/scrollreveal.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/imgfix.min.js"></script>

  <!-- Global Init -->
  <script src="assets/js/custom.js"></script>
  @yield('tambahanFoot')
</body>

</html>