<?php
include 'koneksip21.php';

if(isset($_POST["submit"])){
    $tanggal = $_POST["tanggal"];
    $kode = $_POST["kode"];
    $no_dpbag = $_POST["no_dpbag"];
    $kondisi = $_POST["kondisi"];
    $temp = $_POST["temp"];
    $ampere = $_POST["ampere"]; 
    $level = $_POST["level"];   
    $catatan = $_POST["catatan"];
   
    $query = "INSERT INTO wcsbrush VALUES('$tanggal','$kode','$no_dpbag','$kondisi','$temp','$ampere','$level','$catatan')";
    
    $sql = mysqli_query($conn,$query);
    if($sql){
        header("location: index.php");
    }
   
}
?>
