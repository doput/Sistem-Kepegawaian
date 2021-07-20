<?php
  session_start();
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
          <a class="nav-item nav-link" href="absensiad.php">Absensi</a>
          <a class="nav-item nav-link active" href="DataPegawai.php">Data Pegawai</a>
          <a class="nav-item nav-link" href="aboutad.php">About</a>
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
  <div class="card">
  <div class="card-header">
  <label for="">
      <h2>Data Pegawai</h2>
      <a type="button" class="btn btn-primary" href="tbpegawai.php"><i class="fas fa-user-plus" ></i> Tambah Pegawai</a>
    </label>
  </div>
  <div class="card-body">
  <table class="table" style="margin-top: 1rem;">
    <?php
          $connection = mysqli_connect("localhost","root","");
          $db = mysqli_select_db($connection, 'rdpegawai');

          $query = "SELECT * FROM pegawai";
          $query_run = mysqli_query($connection, $query);
        ?>
      <thead class="thead-dark">
        <tr>
          <th scope="col">no</th>
          <th scope="col">Nama Pegawai</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Alamat</th>
          <th scope="col">No Telp</th>
          <th scope="col">Jabatan</th>
          <th scope="col">Join Date</th>
          <th scope="col">Status</th>
          <th scope="col">
            <th>
              <th>Action</th>
            </th>
          </th>
        </tr>
      </thead>
      <?php
        if($query_run)
        {
          foreach($query_run as $row)
          {
        ?>
          <tbody>
            <tr>
              <td><?php echo $row ['id_pegawai']; ?></td>
              <td><?php echo $row ['nama_pegawai']; ?></td>
              <td><?php echo $row ['tanggal_lahir']; ?></td>
              <td><?php echo $row ['jenis_kelamin']; ?></td>
              <td><?php echo $row ['alamat']; ?></td>
              <td><?php echo $row ['no_telp']; ?></td>
              <td><?php echo $row ['id_roles']; ?></td>
              <td><?php echo $row ['join_date']; ?></td>
              <td><?php echo $row ['status']; ?></td>
              <td>
                  <td>
                    <a type="button" class="btn btn-warning editbtn" href="tbpegawai.php" style="color:white;"><i class="fas fa-user-plus" style="color:white;" ></i> Edit</a>
                  </td>
                  
                  <td>
                    <a type="button" class="btn btn-danger deletebtn" href="tbpegawai.php"><i class="far fa-trash-alt"></i> Hapus</a>
                  </td>
              </td>
            </tr>
          </tbody>
        <?php
          }
        }
        else
        {
          echo "no Record Data";
        }
        ?>
    </table>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>