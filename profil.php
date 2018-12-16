<?php 
include "koneksi.php";
?>
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