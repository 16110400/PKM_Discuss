<?php 
  include "koneksi.php";
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">

  <title>Profil</title>
</head>

<body>
  <!-- navbar -->
  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand text-success" href="#">DISCUSS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">
        <div class="collapse navbar-collapse justify-content-center float-right" id="navbarSupportedContent">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 mr-3 my-sm-0" type="submit">Search</button>
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown border border-white rounded bg-white">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <img src="images/foto_profil.png" class="rounded-circle" alt="">
                  PKM OYE
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item active" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log Out</a>
                </div>
              </li>
            </ul>
          </form>

        </div>
      </div>
    </div>
  </nav> -->
  <!-- akhir navbar -->

  <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid jb1 shadow">
    <div class="container text-center">
      <img src="images/foto_profil.png" class="mt-4 rounded-circle" alt="">
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
  <?php  
    $koneksi = mysqli_connect("localhost","root","","discuss");
    $q = "SELECT * from video";
    $query = mysqli_query($koneksi,$q);
    $i = 0;
    $konten = '<section class="gallery-block cards-gallery">
    <div class="container">';
    while($row = mysqli_fetch_array($query)){
    ?>
    <section class="gallery-block cards-gallery">
      <div class="container">
        <div class="row">        
          <div class="col-md-6 col-lg-6">
            <div class="card border-0 transform-on-hover">
              <a class="lightbox" target="_blank" href="<?php echo "video/".$row['nama_video']; ?>">
                <video class="col-lg-12 pt-2" src="<?php echo "video/".$row['nama_video']; ?>" controls></video>
              </a>
              <div class="card-body">
                <h6><a href="#">Lorem Ipsum</a></h6>
                <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam
                  urna.</p>
                <a href=""><input type="submit" value="view"></a>
              </div>
            </div>
          </div>
        </div>         
      </div>
    </section>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
  <script>
    baguetteBox.run('.cards-gallery', {
      animation: 'slideIn'
    });
  </script>
  <!-- akhir gallery konten -->
  <?php 
    }
  ?>












  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>