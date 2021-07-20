<?php
session_start();
include_once("mysql.php");

if(!empty($_POST['email']) && !empty($_POST['password'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql ="SELECT * FROM users WHERE email = '$email'";
    $check = $conn->query($sql);

    if(mysqli_num_rows($check) > 0){
      
      foreach ($check as $item) {
        if(password_verify($password,$item['password'])){


          $_SESSION['nama'] = $item['nama'];
          $_SESSION['status'] = "login";
          $_SESSION['id'] = $item["id"];
          $_SESSION['email'] = $item['email'];

          if($_SESSION['email']=='admin1@gmail.com'){
            header('Location: adminlan.php');
          }
          else{
            header ('Location: userlan.php');
          }
          // echo $_SESSION['nama'];         
        }
        else{
          echo "Password Anda Salah";
        }
      }

    }else{
      echo "Gagal";
    }

}else{
    echo "Field ada yang Kosong";
}


// $query="insert into user(nama,email,password) values ('$nama','$email','$password')";
// mysqli_query($conn,$query);


// header('location:sign.php');
?>