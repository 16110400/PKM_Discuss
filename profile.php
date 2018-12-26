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
    <form class="form-inline">
      <button class="btn btn-outline-custom m-1" type="button">
        <a class="link" data-toggle="modal" href="#modalMasuk" style="text-decoration:none">login</a>
      </button>
    </form>
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
      <div class="col navbtn activenavbtn">
        <a href="profile.php" class="navbtnlink"><i class="material-icons material-icons-i">account_circle
          </i></a></div>
      <div class="col navbtn">
        <a href="setting.php" class="navbtnlink"><i class="material-icons material-icons-i">build
          </i></a></div>
    </div>
  </div>
  </div>
  <!-- End Nav -->

  <!-- Start Content -->
  <div class="container mt-3">
    <div class="row">

      <div class="col-md-12">
  <!-- jumbotron -->
  <div class="jumbotron jumbotron jb1 shadow">
    <div class="container text-center">
      <img src="images/foto_profil.png" class="mt-1 rounded-circle" alt="">
    </div>
  </div>
  <!-- akhir jumbotron -->

  <!-- info panel -->
  <div class="container info-panel">
    <div class=" row">
      <div class="col-2"></div>
      <div class="col-8 rounded bg-white shadow">
        <div class="container">
          <div class="row my-3">
            <div class="col-6">
              <h4>Haris Angriawan <img src="images/cek.jpg" class="rounded-circle " style="width:15px; height:auto;"
                  alt=""></h4>
              <p>Hey yuk diskusi !</p>
              <a href="#" class="font-weight-light">www.discuss.id</a>
            </div>
            <div class="col-6 text-right my-auto"><button type="button" class="btn btn-success btn-lg"><img src="images/upload.png"
                  class=" img-thumbnail rounded-circle" style="width:30px;" alt=""> Upload</button></div>
          </div>
        </div>
      </div>
      <div class="col-2"></div>
    </div>
  </div>
  <!-- akhir info panel -->

  <!-- gallery konten -->

  <div class="container-fluid bg-white">

    <section class="gallery-block cards-gallery">
      <div class="container">
        <div class="row">
          <?php
          for ($i = 1; $i <= 4; $i++) {
            for ($j = 1; $j <= 2; $j++) { ?>
          <div class="col-md-6">
            <div class="card border-0 transform-on-hover">
              <a class="lightbox" target="_blank" href="<?php echo " video/" . $row['nama_video']; ?>">
                <video class="col-lg-12 pt-2" src="<?php echo " video/" . $row['nama_video']; ?>" controls></video>
              </a>
              <div class="card-body">
                <h6><a href="#">Lorem Ipsum</a></h6>
                <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam
                  urna.</p>
                <a href=""><input type="submit" value="view"></a>
              </div>
            </div>
          </div>
          <?php 
        }
      } ?>
        </div>
      </div>
    </section>
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