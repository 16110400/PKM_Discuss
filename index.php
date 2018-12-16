<?php
$hal = "";
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">

  <title>Discuss Indonesia</title>
</head>

<body>
  <!-- Start Header -->
  <nav class="navbar navbar-light" style="background-color: #fff;">
      <a class="navbar-brand">Discuss ID</a>
    <form class="form-inline">
      <button class="btn btn-dark m-1">
        <a class="link text-white px-2" data-toggle="modal" href="#modalMasuk" style="text-decoration:none">Login</a>
      </button>
      <button class="btn btn-dark m-1">
        <a class="link text-white px-2" data-toggle="modal" href="#modalDaftar" style="text-decoration:none">Registrasi</a>
      </button>
    </form>
  </nav>
  <!-- End Header -->

  <!-- Start Nav -->
  <div class="container-fluid startnav">
    <div class="row">
      <div class="col navbtn"><a href="index.php?hal=home" class="navbtnlink">
          <i class="material-icons material-icons-i">home</i></a></div>
      <div class="col navbtn">
        <a href="index.php?hal=list" class="navbtnlink"><i class="material-icons material-icons-i">view_module
          </i></a></div>
      <div class="col navbtn">
        <a href="index.php?hal=upload" class="navbtnlink"><i class="material-icons material-icons-i">photo_camera
          </i></a></div>
      <div class="col navbtn">
        <a href="index.php?hal=profile" class="navbtnlink"><i class="material-icons material-icons-i">account_circle
          </i></a></div>
      <div class="col navbtn">
        <a href="#" class="navbtnlink"><i class="material-icons material-icons-i">build
          </i></a></div>
    </div>
  </div>
  </div>
  <!-- End Nav -->

  <!-- Start Content -->
  <div class="container">
    <div class="row">
      <?php
      $default = "home.php";
      @$hal = $_GET['hal'];

      if (!$hal) {
        require_once "$default";
      } else {
        switch ($hal) {
          case "home":
            require_once('home.php');
            break;
          case "list":
            require_once('list.php');
            break;
          case "upload":
            require_once('upload.php');
            break;
          case "profile":
            require_once('profil.php');
            break;
          default:
            require_once('home.php');
            break;
        }
      }
      ?>
    </div>
  </div>
  <!-- End Content -->

  <!--Popup Masuk-->

<div class="container my-4">
  <div class="row">
    <div class="col-4 p-2 m-auto mt-3 align-self-center modal" id="modalMasuk">
        <!-- Card -->
<div class="modal-dialog modal-background">

    <!-- Card body -->
    <div class="modal-content">
      <div class="modal-body">

        <!-- Material form register -->
        <form action="/fungsi/login_user.php">
            <p class="h4 text-left py-4"> <button type="button" class="close waves-effect waves-light text-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button></button>

            <!-- Material input email -->
            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <label for="materialFormCardEmailEx" class="font-weight-light">Email</label>
                <input type="email" id="materialFormCardEmailEx" class="form-control">   
            </div>

            <!-- Material input password -->
            <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                <label for="materialFormCardPasswordEx" class="font-weight-light">Kata Sandi</label>
                <input type="password" id="materialFormCardPasswordEx" class="form-control">    
            </div>

            <div class="text-center py-4 mt-3">
                <button class="btn btn-dark"><a class="text-white" href="">Login</a></button>
                <p>
                <br/>
                  Belum punya akun <a class="link closemdLogin" data-toggle="modal" data-dismiss="modal" href="#modalDaftar">Daftar</a>
            </div>
        </form>
        <!-- Material form register -->

    </div>
    </div>
    <!-- Card body -->

</div>
</div>
</div>
</div>

<!--End Popup Masuk-->

<!--Popup Daftar-->
<div class="container my-4">
  <div class="row">
    <div class="col-4 p-2 m-auto mt-3 align-self-center modal" id="modalDaftar">
        <!-- Card -->
<div class="modal-dialog modal-background">

    <!-- Card body -->
    <div class="modal-content">
      <div class="modal-body">

        <!-- Material form register -->
        <form action="fungsi/register.php" method="POST">
            <p class="h4 text-left py-4">Daftar <button type="button" class="close waves-effect waves-light text-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button></p>
            
            <!-- Material input nama lengkap -->
            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <label for="materialFormCardEmailEx" class="font-weight-light">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="materialFormCardNamaEx" class="form-control">
            </div>

            <!-- Material input email -->
            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <label for="materialFormCardEmailEx" class="font-weight-light">Email</label>
                <input type="email" name="email" id="materialFormCardUsenameEx" class="form-control">
            </div>

            <!-- Material input jenis-kelamin -->
            <div class="md-form mt-2 mb-2">
                <i class="fa fa-envelope prefix grey-text"></i>
                <label for="materialFormCardEmailEx" class="font-weight-light">Jenis Kelamin</label>
                <label class="radio-inline ml-3"><input type="radio" name="jk" value="Laki-Laki" checked>Laki-Laki</label>
                <label class="radio-inline ml-3"><input type="radio" name="jk" value="Perempuan">Perempuan</label>
            </div>

            <!-- Material input alamat -->
            <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="1"></textarea>
            </div>
            <!-- Material input telepon -->
            <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                <label for="materialFormCardPasswordEx" class="font-weight-light">No Handphone</label>
                <input type="text" name="no_hp" id="materialFormCardPasswordEx" class="form-control">
            </div>
            <!-- Material input password -->
            <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                <label for="materialFormCardPasswordEx" class="font-weight-light">Kata Sandi</label>
                <input type="password" name="password" id="materialFormCardPasswordEx" class="form-control">
            </div>

            <div class="text-center py-2 mt-1">
                <button name="daftar" class="btn btn-dark">Daftar</button>
            </div> 
        </form>
        <!-- Material form register -->

    </div>
    </div>
    <!-- Card body -->

</div>
</div>
</div>
</div>

<!--End Popup Daftar-->



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
 

  <script>
    var loadFile = function (event) {
      var reader = new FileReader();
      reader.onload = function () {
        var output = document.getElementById('respond-1');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };

    $(document).on("change", ".file_multi_video", function (evt) {
      var $source = $('#video_here');
      $source[0].src = URL.createObjectURL(this.files[0]);
      $source.parent()[0].load();
    });

    var current = null;

    function showresponddiv(messagedivid) {
      var id = messagedivid.replace("message-", "respond-"),
        div = document.getElementById(id);

      // hide previous one
      if (current && current != div) {
        current.style.display = 'none';
      }

      if (div.style.display == "none") {
        div.style.display = "inline";
        current = div;
      } else {
        div.style.display = "none";
      }
    }
  </script>
</body>

</html>