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
    <a class="navbar-brand" href="useredit.php">
      <img src="asset/brand/profile.png" width="30" height="30" class="d-inline-block align-top" alt="">
      <span>Welcome  <?php
        if(isset($_SESSION['nama'])){
          echo $_SESSION['nama'];
        }else{
          echo "pengguna";
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
          <a class="nav-item nav-link active" href="absensiad.php">Absensi</a>
          <a class="nav-item nav-link" href="#">Jadwal</a>
          <a class="nav-item nav-link" href="aboutad.php">About</a>
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
  <div class="container w-10 p-3" style="margin-top: 0.01rem;">
    <div class="card text-center ">
      <div class="card-header bg-primary text-light">
        <h2>ABSENSI MASUK</h2>
      </div>
      <div class="card-body">
        <h5 class="card-title">Isi Form Untuk Absensi</h5>
        <form>
          <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="id Pegawai">
          </div>
          <div class="form-group">
            
          </div>
          <button type="submit" class="btn btn-primary">Absen</button>
        </form>
      </div>
      <div class="card-footer text-muted ">
        Powered By RdSolutions
      </div>
    </div>
  </div>

  <div class="container w-10 p-3">
    <div class="card text-center">
      <div class="card-header bg-primary text-light">
        <h2>ABSENSI PULANG</h2>
      </div>
      <div class="card-body">
        <h5 class="card-title">Isi Form Untuk Absensi</h5>
        <form>
          <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="id Pegawai">
          </div>
          <div class="form-group">
            
          </div>
          <button type="submit" class="btn btn-primary">Absen</button>
        </form>
      </div>
      <div class="card-footer text-muted">
        Powered By RdSolutions
      </div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>