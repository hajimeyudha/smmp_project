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
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/create.css')}}" />
  <!-- <link rel="stylesheet" type="text/css" href="assets/css/templatemo-art-factory.css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
</head>

@yield('content')

<script src="{{asset('js/jquery-2.1.0.min.js')}}"></script>
<script src="https://kit.fontawesome.com/59bcfd8744.js" crossorigin="anonymous"></script>
<script>
  $(document).ready(function () {
    $(".modal-link-save").click(function () {
      $(".modal-scs").show();
      $(".modal-bg-scs").show();
    });
    $(".modal-scs .close").click(function () {
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
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</html>
