<?php
$hal="";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Discuss Indonesia</title>
  </head>
  <body>
    <!-- Start Header -->
    <nav class="navbar navbar-light" style="background-color: #fff;">
     <a class="navbar-brand">Discuss ID</a>
      <form class="form-inline">
        <button class="btn btn-outline-custom m-1" type="button">login</button>
        <button class="btn btn-outline-custom m-1" type="button">Register</button>
      </form>
    </nav>
    <!-- End Header -->

    <!-- Start Nav -->
    <div class="container-fluid startnav">
      <div class="row">
        <div class="col navbtn">
          <a href="index.php?hal=home" class="navbtnlink"><i class="material-icons material-icons-i">home
        </i></a></div>
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
    <div class="row mt-3">
        <?php
            $default="home.php";
            @$hal=$_GET['hal'];

            if (!$hal) {
                require_once "$default";
            }else{
                switch($hal){
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        var loadFile = function(event) {
          var reader = new FileReader();
          reader.onload = function(){
            var output = document.getElementById('respond-1');
            output.src = reader.result;
          };
          reader.readAsDataURL(event.target.files[0]);
        };

        $(document).on("change", ".file_multi_video", function(evt) {
            var $source = $('#video_here');
            $source[0].src = URL.createObjectURL(this.files[0]);
            $source.parent()[0].load();
        });

        var current = null;
        function showresponddiv(messagedivid){
        var id = messagedivid.replace("message-", "respond-"),
        div = document.getElementById(id);

        // hide previous one
        if(current && current != div) {
        current.style.display =  'none';
        }   

        if (div.style.display=="none"){
        div.style.display="inline";
        current = div;
        } 
        else {
        div.style.display="none";
        }
    }
      </script>
</body>
	
</html>