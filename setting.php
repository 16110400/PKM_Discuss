<?php

include "koneksi.php"; 
session_start();

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

  <title>Discuss Indonesia</title>
</head>

<body>
  <!-- Start Header -->
  <nav class="navbar navbar-light" style="background-color: #fff;">
    <a class="navbar-brand">Discuss ID</a>
    <li class="form-inline">
    <?php
    if(empty($_SESSION['email']))
{
    echo '<a class="btn btn-dark" data-toggle="modal" href="#modalMasuk">LOGIN</a>';
}else
{
    echo '<a class="btn btn-dark" href="logout.php">Logout</a>';
}
    
?>
</li>
  </nav>
  <!-- End Header -->

  <!-- Start Nav -->
  <div class="container-fluid startnav">
    <div class="row">
      <div class="col navbtn">
        <a href="index.php" class="navbtnlink"><i class="material-icons material-icons-i">home
          </i></a></div>
      <div class="col navbtn">
        <a href="list.php" class="navbtnlink"><i class="material-icons material-icons-i">view_module
          </i></a></div>
      <div class="col navbtn">
        <a href="upload.php" class="navbtnlink"><i class="material-icons material-icons-i">photo_camera
          </i></a></div>
      <div class="col navbtn">
        <a href="profile.php" class="navbtnlink"><i class="material-icons material-icons-i">account_circle
          </i></a></div>
      <div class="col navbtn activenavbtn">
        <a href="setting.php" class="navbtnlink"><i class="material-icons material-icons-i">build
          </i></a></div>
    </div>
  </div>
  </div>
  <!-- End Nav -->

  <!-- Start Content -->
  <div class="container mt-3">
    <div class="row">
    <div class="container bg-light p-5 rounded shadow-sm">
        <h1>Settings</h1>
        <hr>
        <div class="row">
            <!-- left column -->
            <div class="col-md-3">
                <div class="text-center rounded py-4">
                    <form>
                        <img src="images/foto_profil.png" width="220px" class="rounded-circle" alt="avatar">
                        <div class="form-group">
                            <label for="ganti_foto">
                                <img src="images/edit_photo.png" width="150px" class="btn rounded edit" alt="">
                            </label>
                            <script>
                                $("input[type='image']").click(function() {
                                    $("input[id='my_file']").click();
                                    });
                            </script>
                            <input type="file" hidden class="form-control-file" id="ganti_foto">
                        </div>
                    </form>
                </div>
            </div>

            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                <h3>Edit Profil</h3>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nama</label>
                            <input type="text" class="form-control" id="" placeholder="Username">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2">
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Email</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="">
                        <label for="inputAddress2">Alamat</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="">
                        <label for="inputAddress2">No.Telephone</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>

            </div>
        </div>
    </div>

      

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
        <form>
            <p class="h4 text-left py-4">Masuk <button type="button" class="close waves-effect waves-light text-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button></p>

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
                <a href=""><button class="btn-primary">Masuk</button></a>
                <p>
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
        <form>
            <p class="h4 text-left py-4">Daftar <button type="button" class="close waves-effect waves-light text-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button></p>
            
            <!-- Material input nama lengkap -->
            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <label for="materialFormCardEmailEx" class="font-weight-light">Nama Lengkap</label>
                <input type="email" id="materialFormCardNamaEx" class="form-control">
            </div>

            <!-- Material input username -->
            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <label for="materialFormCardEmailEx" class="font-weight-light">Username</label>
                <input type="email" id="materialFormCardUsenameEx" class="form-control">
            </div>

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
                <a href=""><button class="btn-primary">Daftar</button></a>
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
</body>

</html>