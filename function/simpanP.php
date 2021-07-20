<?php
include_once("mysql.php");
// $nama=$_POST['nama'];
// $email=$_POST['email'];
// $password=$_POST['password'];

print_r($_POST);

if(!empty($_POST['nama']) && !empty($_POST['date']) && !empty($_POST['jenis_kelamin']) && !empty($_POST['alamat']) && !empty($_POST['telp']) && !empty($_POST['roles']) && !empty($_POST['joindate']) && !empty($_POST['status'])){
    
    $nama = $_POST['nama'];
    $date = $_POST['date'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $roles = $_POST['roles'];
    $joindate = $_POST['joindate'];
    $status = $_POST['status'];

    try {
        $sql = "INSERT INTO pegawai (nama_pegawai,tanggal_lahir,jenis_kelamin,alamat,no_telp,id_roles,join_date,id_status) VALUES ('$nama','$date','$jenis_kelamin','$alamat','$telp','$roles','$joindate','$status')";
        //echo $sql;
        $query = $conn->query($sql);
        //header('Location: DataPegawai.php');
    
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