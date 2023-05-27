<?php
include 'koneksi.php';

if(isset($_POST["submit"])){
    $tanggal = $_POST["tanggal"];
    $kode = $_POST["kode"];
    $no = $_POST["no"];
    $bagian = $_POST["bagian"];   
    $jenis_perbaikan = $_POST["jenis_perbaikan"];   
    $nama_pengaju = $_POST["nama_pengaju"];    
    $permasalahan = $_POST["permasalahan"]; 
    $status = $_POST["status"];
    $penyebab = $_POST["penyebab"];
    $perbaikan = $_POST["perbaikan"];  
    $part = $_POST["part"];
    $waktu = $_POST["waktu"];
    $tout = $_POST["tout"];

    $query = "INSERT INTO cprod23 VALUES ('$tanggal','$kode','$no','$bagian','$jenis_perbaikan','$nama_pengaju','$permasalahan','$status','$penyebab','$perbaikan','$part','$waktu','$tout')";
    $sql = mysqli_query($conn,$query);

    if($sql){
       header("location: index.php");
    }

}
                           
?>
