<?php
include 'koneksip23.php';

if(isset($_POST["submit"])){
    $tanggal = $_POST["tanggal"];
    $kode = $_POST["kode"];
    $no_welkw = $_POST["no_welkw"];
    $angin = $_POST["angin"];
    $volt = $_POST["volt"];
    $ampere = $_POST["ampere"]; 
    $switch = $_POST["switch"];
    $lampu = $_POST["lampu"];   
    $counter = $_POST["counter"];
    $timer = $_POST["timer"];
    $slctr = $_POST["slctr"];
    $fswitch = $_POST["fswitch"];
    $body = $_POST["body"];
    $catatan = $_POST["catatan"];
   
    $query = "INSERT INTO dcwelkw VALUES('$tanggal','$kode','$no_welkw','$angin','$volt','$ampere','$lampu',' $counter','$switch','$timer','$slctr','$fswitch','$body','$catatan')";
    
    $sql = mysqli_query($conn,$query);
    if($sql){
        header("location: index.php");
    }
   
}
?>
