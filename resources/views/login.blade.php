<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>PT Subur Makmur Migas Pratama</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">

    <style>
      .form-group .p-viewer {
        z-index: 9999;
        position: absolute;
        right: 250px;
        margin-top: -40px;
      }

      @media (max-width: 991px) {
        .form-group .p-viewer {
          right: 75px;
        }
      }
      
    </style>
  </head>

<body>
 <div class="welcome-area" id="welcome-first">
    <div class="login-screen">
      <div class="title">
        <img src="./assets/images/sm.png">
        <h5><b>PT SUBUR MAKMUR MIGAS PRATAMA</b></h5>
      </div>
      <h5 class="grey-text">Welcome Back</h5> 
      <form>
        <div class="form-group">
          <input type="email" name="email" class="form-control shadow p-3 mb-2 bg-white rounded-lg" id="email" aria-describedby="emailHelp" placeholder="Email Address">
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control shadow p-3 mb-2 bg-white rounded" id="password" placeholder="Password">
          <span class="p-viewer">
            <i class="bi bi-eye-slash" id="togglePassword"></i>
            </span>
        </div>
        <div class="button-space">
          <a href="home.html" class="main-button">Sign in</a>
        </div>
      </form>
      <a href="forgot-password.html"><h5 class="forgot-pass">Forgot password ?</h5></a>
    </div>
  </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');
  togglePassword.addEventListener('click', () => {
  const type = password
      .getAttribute('type') === 'password' ?
      'text' : 'password';  
  password.setAttribute('type', type);
  this.classList.toggle('bi-eye');
  });

  let width = screen.width;
  console.log(width);
  if (width < 991) {
    document.getElementById("img")
    var imageshown = "./assets/images/logo-mob.png"
  } else {
    document.getElementById("img")
    var imageshown = "./assets/images/logo.png"
  }
  document.getElementById('img').src = imageshown;
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>