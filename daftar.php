<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--My Css-->
    <link rel="stylesheet" href="css/style.css">

    <!--Font Awsome-->
    <script src="https://kit.fontawesome.com/0772023ee0.js" crossorigin="anonymous"></script>

    <title>RdPegawai</title>
  </head>
  <body>
    <div class="container d-flex justify-content-center" style="margin-top: 10rem;">
      <div class="card " style="width: 18rem;">
        <div class="card-body">
          <h3 class="card-title d-flex justify-content-center">Daftar User</h3>
            <form action="simpan.php" method="post">
                <div class="form-group">
                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                  </div>
                <div class="form-group">
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
                </div>
                <div class="form-group">
                  <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                <div class="container d-flex justify-content-center">
                  <button type="submit" class="btn btn-info" name="Daftar"><i class="fas fa-user-plus"></i> Daftar</button>
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