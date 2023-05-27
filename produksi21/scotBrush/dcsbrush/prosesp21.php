<?php
include 'koneksip21.php';

if(isset($_POST["submit"])){
    $tanggal = $_POST["tanggal"];
    $kode = $_POST["kode"];
    $no_sbrush = $_POST["no_sbrush"];
    $vbelt = $_POST["vbelt"];
    $pulley = $_POST["pulley"];
    $matabrush = $_POST["matabrush"]; 
    $shaft = $_POST["shaft"];   
    $body = $_POST["body"];
    $cbl_pwr_mtr = $_POST["cbl_pwr_mtr"];
    $cbl_pwr_utama = $_POST["cbl_pwr_utama"];
    $tombol = $_POST["tombol"];
    $catatan = $_POST["catatan"];
   
    $query = "INSERT INTO dcsbrush VALUES('$tanggal','$kode','$no_sbrush','$vbelt','$pulley','$vbelt','$shaft',' $body','$cbl_pwr_mtr','$cbl_pwr_utama','$$tombol','$catatan')";
    
    $sql = mysqli_query($conn,$query);
    if($sql){
        header("location: index.php");
    }
   
}
?>
