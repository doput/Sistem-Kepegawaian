<?php
include_once("mysql.php");
// $nama=$_POST['nama'];
// $email=$_POST['email'];
// $password=$_POST['password'];

print_r($_POST);

if(!empty($_POST['nama']) && !empty($_POST['email']) && !empty($_POST['password'])){
    
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT,['cost' => 10]);
    $roles = $_POST['roles'];
    try {
        $sql = "INSERT INTO users (nama,email,password,id_roles) VALUES ('$nama','$email','$password','$roles')";
        //echo $sql;
        $query = $conn->query($sql);
        header('Location: login.php');
    
    } catch (Exception$th) {
        echo $th;
    }

}else{
    echo "Ada Field yang Kosong!";
}


// $query="insert into user(nama,email,password) values ('$nama','$email','$password')";
// mysqli_query($conn,$query);


// header('location:sign.php');
?>