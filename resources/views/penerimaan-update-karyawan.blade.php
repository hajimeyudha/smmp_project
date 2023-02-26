<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="Template Mo" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" />

  <title>PT Subur Makmur Migas Pratama</title>
  <!-- Additional CSS Files -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/create.css" />
  <!-- <link rel="stylesheet" type="text/css" href="assets/css/templatemo-art-factory.css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
</head>

<body>
  <div class="welcome-area" id="welcome-first">
    <div class="create-screen">
      <a href="penerimaan.html"><i class="close far fa-times-circle"></i></a>
      <h5 class="text-center" style="margin-bottom: 2rem">
        Update Karyawan Penerimaan
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
            <input type="text" class="form-control shadow p-3 mb-2 rounded-lg readonly" placeholder="PERTAMINA"
              disabled />
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
            <label><b>Bulan</b></label>
          </div>
          <div class="col-md-8">
            <input type="month" class="form-control shadow p-3 mb-2 rounded-lg" placeholder="MASUKKAN BULAN"
              readonly />
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-2">
            <label><b>Minggu ke-1</b></label>
          </div>
          <div class="col-md-8">
            <input type="text" class="form-control shadow p-3 mb-2 bg-white rounded-lg" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-2">
            <label><b>Minggu ke-2</b></label>
          </div>
          <div class="col-md-8">
            <input type="text" class="form-control shadow p-3 mb-2 bg-white rounded-lg" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-2">
            <label><b>Minggu ke-3</b></label>
          </div>
          <div class="col-md-8">
            <input type="text" class="form-control shadow p-3 mb-2 bg-white rounded-lg" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-2">
            <label><b>Minggu ke-4</b></label>
          </div>
          <div class="col-md-8">
            <input type="text" class="form-control shadow p-3 mb-2 bg-white rounded-lg" />
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
<script src="assets/js/jquery-2.1.0.min.js"></script>
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
    var imageshown = "./assets/images/logo-mob.png";
  } else {
    document.getElementById("img");
    var imageshown = "./assets/images/logo.png";
  }
  document.getElementById("img").src = imageshown;
</script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</html>