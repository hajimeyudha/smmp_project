{{-- Membuat Element Child dari Main Layout --}}
@extends('layouts.main-layout-admin')
{{-- Judul halaman --}}
@section('title', 'Penyaluran')
@section('css')
<style>
    html,
    body {
      background-color: rgb(236, 234, 234);
    }

    .edit {
      margin-left: 85px;
    }

    .edit-btn {
      cursor: pointer;
      text-decoration: none;
      font-size: 16px;
      color: #000;
      border-radius: 10px;
      padding: 10px 60px;
      background-color: #3DE22E;
      letter-spacing: 0.25px;
      font-weight: 800;
    }

    .datepicker {
      margin-top: 100px;
    }

    @media (max-width: 991px) {
      #date-input {
        width: 90%;
        margin-bottom: 5px;
      }

      .datepicker {
        margin-left: 300px;
      }
    }

    .form-input {
      text-align: left;
    }
  </style>
@endsection
@section('content')

    <!--  -->
    <div class="row top-mini-nav">
        <div class="color-btn">
            <div class="box-judul">
                <img class="judulGambar" src="{{asset('images/check.png')}}" />
                <p class="judul judulRekap">Rekapitulasi Penyaluran</p>
            </div>
            <div class="col-sm-1 btn"><a class="mini-button" id="info-1">LPG 3 KG</a></div>
            <div class="col-sm-1 btn"><a class="mini-button" id="info-2">BG 5,5 KG</a></div>
            <div class="col-sm-1 btn"><a class="mini-button" id="info-3">BG 12 KG</a></div>
            <div class="col-sm-1 btn"><a class="mini-button" id="info-4">LPG 12 KG</a></div>
            <div class="col-sm-1 btn"><a class="mini-button" id="info-5">LPG 50 KG</a></div>
            <div class="input-group mb-3" style="width: 220px">
                <div class="input-group-prepend">
                  <span class="input-group-text textSearch" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control tanggalDisini" placeholder="Tanggal" aria-label="Username" aria-describedby="basic-addon1">
              </div>
        </div>
    </div>

    <section class="section bg-setting" id="edit">
        <div class="row mx-5 mini-wrap" id="mini-wrap">
            <div id="date-input">
                <div class="input-group date kontrolDate" style="border-radius: 50px, width: 100px;">
                    <input class="form-control tanggal" type="text" name="dob" id="dob" placeholder="2022-01" value="">
                    <span class="input-group-prepend">
                        <span class="input-group-text tanggalTeks">
                            <i class="fas fa-calendar-alt" onclick="setDatepicker(this)">
                            </i>
                        </span>
                    </span>
                </div>
            </div>

            <a href="#">
                <div class="mini-box" id="flex">
                    <p>LPG 3 KG</p>
                </div>
            </a>

            <div class="dropdown">
                <button type="button" id="btn-download" class="btn dropdown-toggle download" data-toggle="dropdown">
                    Download Bentuk
                    <a href="javascript:void(0);" class="icon">
                        <!-- <i onclick="myFunction(this)"class="fa fa-arrow-down"></i> -->
                        <img src="{{asset('images/arrow-down-download.png')}}" onclick="myFunction(this)" />
                    </a>
                </button>
                <div class="dropdown-menu download">
                    <div class="select-download">
                        <img src="./assets/images/kiri.png" class="pl-2" />
                        <a class="dropdown-item modal-link">PDF</a>
                    </div>
                    <div class="select-download">
                        <img src="./assets/images/kiri.png" class="pl-2" />
                        <a class="dropdown-item modal-link">Excel</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="modal-scs" style="display: none;">
            <a href="#"><i class="close far fa-times-circle"></i></a>
            <p class="text-center">Berhasil Mengunduh</p>
        </div>
        {{$ListPenyaluran}}

        @foreach ($ListPenyaluran as $itemm)
            <li>{{$itemm->keterangan_penyaluran}}</li>
        @endforeach
        <div class="modal-bg-scs" style="display: none;"></div>

        <div class="edit-table">
            <table>
                <tr>
                    <th rowspan="2">Id Registrasi</th>
                    <th rowspan="2">Nama Pangkalan</th>
                    <th rowspan="2">Status Pembayaran</th>
                    <th rowspan="2">Tanggal Order</th>
                    <th rowspan="2">Tanggal Jatuh Tempo</th>
                    <th rowspan="2">Jumlah Pesanan</th>
                    <th rowspan="2">Keterangan</th>
                    <th rowspan="1">Action</th>
                </tr>
                <tr>
                    <td><a href="penyaluran/create" class="edit-button"
                        style="background-color: #3DE22E; color:#000;">CREATE</a></td>
                </tr>
                @foreach ($ListPenyaluran as $item)
                <tr>
                    <td>B-{{$item->id_data_penyaluran}}</td>
                    <td>CV INDOPERTA</td>
                    <td>{{$item->status_penyaluran}}</td>
                    <td>{{$item->tanggal_penyaluran}}</td>
                    <?php  
                    $date = $item->tanggal_penyaluran;
                    $dateFix = date('Y-m-d', strtotime($date. ' + 1 days'));
                    ?>
                    <td>{{$dateFix}}</td>
                    <td>60</td>
                    <td>{{$item->keterangan_penyaluran}}</td>
                    <td><a href="#" class="modal-link-kary edit-button">UPDATE</a>
                        <a href="#" class="modal-link-kary edit-button cancel">CANCEL</a>
                    </td>
                </tr>
                @endforeach
            
            </table>
        </div>
        <!-- <div class="edit">
      <a href="#" class="edit-btn modal-link-save">Save</a>
    </div> -->
    </section>
    @endsection


    @section('tambahanFoot')
    
    <div class="modal-scs" style="display: none;">
        <a href="#"><i class="close far fa-times-circle"></i></a>
        <p class="text-center">Berhasil Menyimpan</p>
    </div>
    <div class="modal-bg-scs" style="display: none;"></div>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/59bcfd8744.js" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- <script src="./assets/js/karyawan.js"></script> -->
    <script>
        $(document).ready(function () {
            $('.modal-link-kary').click(function () {
                console.log('buka');
                $('.modal-kary').show();
                $('.modal-bg').show();
            });
            $('.modal-kary .close').click(function () {
                $('.modal-kary').hide();
                $('.modal-bg').hide();
            });
            $('.modal-kary a.main-button').click(function () {
                $('.modal-kary').hide();
                $('.modal-bg').hide();
            })
        })

        $(document).ready(function () {
            $('.modal-link').click(function () {
                console.log('buka');
                $('.modal-scs').show();
                $('.modal-bg-scs').show();
                console.log('modal-bg')
            });
            $('.modal-scs .close').click(function () {
                $('.modal-scs').hide();
                $('.modal-bg-scs').hide();
            });
        })

        $(document).ready(function () {
            $('.modal-link-save').click(function () {
                console.log('baru');
                $('.modal-scs').show();
                $('.modal-bg-scs').show();
            });
            $('.modal-scs-save .close').click(function () {
                $('.modal-scs').hide();
                $('.modal-bg-scs').hide();
            });
        })

        $(document).ready(function () {
            $('.modal-link-savee').click(function () {
                console.log('baru');
                $('.modal-scs').show();
                $('.modal-bg-scs').show();
            });
            $('.modal-scs-save .close').click(function () {
                $('.modal-scs').hide();
                $('.modal-bg-scs').hide();
            });
        })

        $(function () {
            $('#scrollToTop').bind("click", function () {
                console.log('naik')
                $('html, body').animate({ scrollTop: 0 }, 1200);
                return false;
            });
        });

        function setDatepicker(_this) {
            let className = $(_this).parent()
                .parent().parent().attr('class');
            let removeSpace = className.replace(' ', '.');
            $("." + removeSpace).datepicker({
                format: "dd/mm/yyyy",
                orientation: "bottom auto",
                autoclose: true,
                showOnFocus: "false"
            });
        }

        var body = document.body,
            html = document.documentElement;

        var height = Math.max(body.scrollHeight, body.offsetHeight,
            html.clientHeight, html.scrollHeight, html.offsetHeight);
        console.log(height);
    @endsection