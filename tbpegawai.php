<?php
  session_start();
  include "mysql.php";
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

    <title>RdPegawai</title>
  </head>
  <body>
    <!-- brand and text -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary ">
    <a class="navbar-brand" href="useredit.php">
      <img src="asset/brand/admin.png" width="30" height="30" class="d-inline-block align-top" alt="">
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
          <a class="nav-item nav-link" href="adminlan.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="absensi.html">Absensi</a>
          <a class="nav-item nav-link active" href="DataPegawai.php">Data Pegawai</a>
          <a class="nav-item nav-link" href="about.html">About</a>
          <a class="nav-item nav-link" >
            <?php if($_SESSION['status'] == 'login'){ ?>
              <a class="nav-link btn btn-danger text-light sign-up-button" href="logout.php" tabindex="-1" aria-disabled="true"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
            <?php }else{ ?>
              <a class="nav-link btn btn-primary sign-up-button" href="login.php" tabindex="-1" aria-disabled="true">LOGIN</a>
            <?php } ?>
          </a>
        </div>
      </div>
  </nav>

  <!--Content-->  
  <div class="container d-flex justify-content-center" style="margin-top: 5rem;">
    <div class="card " id="editmodal" style="width: 35rem;">
      <div class="card-body">
        <h2 class="card-title d-flex justify-content-center">Tambah Pegawai</h2>
          <form action="simpanP.php" method="post">
              <div class="form-group">
                <label for="inputName">Nama Lengkap</label>
                  <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pegawai">
                </div>
              <div class="form-group">
                <label for="inputTanggal">Tanggal Lahir</label>
                <input name="date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tanggal Lahir">
              </div>
              <fieldset class="form-group">
                <label for="inputTanggal">Jenis Kelamin</label>
                <div class="row">
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="L" checked>
                      <label class="form-check-label" for="gridRadios1">
                        L
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="P">
                      <label class="form-check-label" for="gridRadios2">
                        P
                      </label>
                    </div>
                  </div>
                </div>
              </fieldset>
              <div class="form-group">
                <label for="inputTanggal">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="exampleInputPassword1" placeholder="Jalan, Gang, Kelurahan, kabupaten, provinsi">
              </div>
              <div class="form-group">
                <label for="telp">Nomor Telpon (WA)</label>
                <input name="telp" type="text" class="form-control" id="exampleInputPassword1" placeholder="+62">
              </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jabatan</label>
                    <select name="roles" class="form-control" id="exampleFormControlSelect1">
                    <?php
                    include "mysql.php";
	                    $query =  mysqli_query ($conn, "SELECT id_roles, roles FROM roles ORDER BY roles");
                      while ($hasil = mysqli_fetch_array($query)) {
                    ?>
                        <option value="<?=$hasil['roles'];?>">
                          <?php 
                            echo $hasil['roles'];
                          ?>
                        </option>
                        <?php
                        }
                      ?>
                    </select>
                  </div>
                <div class="form-group">
                    <label for="joindate">Tanggal Join</label>
                    <input name="joindate" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Status</label>
                    <select name="status" class="form-control" id="exampleFormControlSelect2">
                    <?php
                    include "mysql.php";
	                    $query =  mysqli_query ($conn, "SELECT id_status, status, desk FROM status ORDER BY status ");
                      while ($tampil = mysqli_fetch_array($query)) {
                    ?>
                        <option value="<?=$tampil['status'];?>">
                          <?php 
                            echo $tampil['status'];
                          ?>
                        </option>
                        <?php
                        }
                      ?>
                    </select>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-info" name="Serahkan" style="width: 35rem;">Serahkan</button>
                </div>
            </form>
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