<?php
session_start();
include_once("mysql.php");
// $nama=$_POST['nama'];
// $email=$_POST['email'];
// $password=$_POST['password'];


if(!empty($_POST['nama']) && !empty($_POST['email']) && !empty($_POST['password'])){
    
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT,['cost' => 10]);
    

    $sql = "UPDATE users SET nama = '$nama' ,email = '$email' ,password = '$password' where email = '$_SESSION[email]'";
    // echo $sql;
    $query = $conn->query($sql);

    if($query){
        $_SESSION['nama'] = $nama;
        $_SESSION['email'] = $email;
        header('Location: userlan.php');
    }
    else{
        echo "Gagal Nichhhhh :(";
    }

}else{
    echo "Ada Yang Kosong Nichhh";
}


// $query="insert into user(nama,email,password) values ('$nama','$email','$password')";
// mysqli_query($conn,$query);


// header('location:sign.php');
?>