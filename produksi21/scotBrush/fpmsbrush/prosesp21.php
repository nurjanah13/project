<?php
include 'koneksip21.php';

if(isset($_POST["submit"])){
    $tanggal = $_POST["tanggal"];
    $kode = $_POST["kode"];
    $no_sbrush = $_POST["no_sbrush"];
    $kondisi = $_POST["kondisi"];
    $ampere = $_POST["ampere"]; 
    $bearing_mtr = $_POST["bearing_mtr"];
    $temp = $_POST["temp"];
    $vbelt = $_POST["vbelt"];
    $pulley = $_POST["pulley"];
    $shaft = $_POST["shaft"];   
    $matabrush = $_POST["matabrush"]; 
    $bearing_me = $_POST["bearing_me"];
    $body = $_POST["body"];
    $level = $_POST["level"];  
    $cbl_pwr_mtr = $_POST["cbl_pwr_mtr"];
    $cbl_pwr_utama = $_POST["cbl_pwr_utama"];
    $tombol = $_POST["tombol"];
    $catatan = $_POST["catatan"];
   
    $query = "INSERT INTO fpmsbrush VALUES('$tanggal','$kode','$no_sbrush','$kondisi','$ampere','$bearing_mtr','$temp','$vbelt','$pulley','$shaft','$matabrush','$bearing_me',' $body','$level','$cbl_pwr_mtr','$cbl_pwr_utama','$tombol','$catatan')";
    
    $sql = mysqli_query($conn,$query);
    if($sql){
        header("location: index.php");
    }
   
}
?>
