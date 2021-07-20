<?php
    session_start();
    if(!isset($_SESSION['status'])){
        header("location: login.php");
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Font Awsome-->
    <script src="https://kit.fontawesome.com/0772023ee0.js" crossorigin="anonymous"></script>

    <!--My Css-->
    <link rel="stylesheet" href="css/landing.css">
    <title>RdPegawai</title>
  </head>
  <body>
    <!-- brand and text -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="useredit.html">
      <img src="asset/brand/profile.png" width="30" height="30" class="d-inline-block align-top" alt="">
      <span>Welcome  <?php
              if(isset($_SESSION['nama'])){
                echo $_SESSION['nama'];
              }else{
                echo "Pengguna";
              }
            ?></span>
    </a>
    <!--Isi navbar-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="userlan.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Absensi</a>
          <a class="nav-item nav-link" href="#">Jadwal</a>
          <a class="nav-item nav-link" href="about.html">About</a>
          <a class="nav-item nav-link" >
            <?php if($_SESSION['status'] == 'login'){ ?>
              <a class="nav-link btn btn-danger text-light sign-up-button" href="logout.php" tabindex="-1" aria-disabled="true">LOGOUT</a>
            <?php }else{ ?>
              <a class="nav-link btn btn-primary sign-up-button" href="sign.php" tabindex="-1" aria-disabled="true">LOGIN</a>
            <?php } ?>
          </a>
        </div>
      </div>
  </nav>

  <!--Content-->


  <div class="container d-flex justify-content-center" style="margin-top: 10rem;">
    <div class="card " style="width: 18rem;">
      <div class="card-body">
        <h3 class="card-title d-flex justify-content-center">Edit Profile</h3>
          <form action="update.php" method="post">
              <div class="form-group">
                  <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="<?= $_SESSION['nama'] ?>">
                </div>
              <div class="form-group">
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email" value="<?= $_SESSION['nama'] ?>">
              </div>
              <div class="form-group">
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="container d-flex justify-content-center">
                <button type="submit" class="btn btn-info" name="Daftar"><i class="far fa-edit"></i> Update</button>
              </div>
            </form>
      </div>
    </div>
  </div>
  <br>
  <div class="container" style="width:9rem;" >
    
  </div>
                

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>