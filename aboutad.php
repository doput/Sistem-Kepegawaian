<?php
  session_start()
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--My Css-->
    <link rel="stylesheet" href="css/absensi.css">

    <!--Font Awsome-->
    <script src="https://kit.fontawesome.com/0772023ee0.js" crossorigin="anonymous"></script>

    <title>RdPegawai</title>
  </head>
  <body>
    <!-- brand and text -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
    <a class="navbar-brand" href="landing.html">
      <img src="asset/brand/admin.png" width="30" height="30" class="d-inline-block align-top" alt="">
      <span>Welcome  <?php
        if(isset($_SESSION['nama'])){
          echo $_SESSION['nama'];
        }else{
          echo "admin";
        }
      ?></span>
    </a>
    <!--Isi navbar-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="adminlan.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="absensiad.php">Absensi</a>
          <a class="nav-item nav-link" href="DataPegawai.php">Data Pegawai</a>
          <a class="nav-item nav-link active" href="aboutad.php">About</a>
          <a class="nav-item nav-link" >
            <?php if($_SESSION['status'] == 'login'){ ?>
              <a class="nav-link btn btn-danger text-light sign-up-button" href="logout.php" tabindex="-1" aria-disabled="true"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
            <?php }else{ ?>
              <a class="nav-link btn btn-primary sign-up-button" href="sign.php" tabindex="-1" aria-disabled="true">LOGIN</a>
            <?php } ?>
          </a>
        </div>
      </div>
  </nav>

  <!--Content-->  
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">RD Pegawai</h1>
      <p class="lead">Aplikasi ini Rd Solutions di ciptakan dalam rangka
          development human resource yang ada di dalam perusahaan, tujuannya
        adalah tidak lain dan tidak bukan untuk mendisiplinkan pekerja</p>
    </div>
  </div>
  <div class="alert alert-info" role="alert">
    <h4 class="alert-heading">SEMOGA</h4>
    <p>Apa yang kita kerjakan semua itu dalam rangka kedisiplinan dan perputaran ekonomi kehidupan.</p>
    <hr>
    <p class="mb-0">By Dewa Gede Aditya Putra</p>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>