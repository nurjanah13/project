<?php
include 'koneksip21.php';

if(isset($_POST["submit"])){
    $tanggal = $_POST["tanggal"];
    $kode = $_POST["kode"];
    $no_sandblast = $_POST["no_sandblast"];
    $regulator = $_POST["regulator"];
    $angin = $_POST["angin"];
    $frl = $_POST["frl"]; 
    $gauge = $_POST["gauge"];   
    $tombol = $_POST["tombol"];
    $tombol_emg = $_POST["tombol_emg"];
    $tuas = $_POST["tuas"];
    $kaca = $_POST["kaca"];
    $sarung_tangan = $_POST["sarung_tangan"];
    $lampu = $_POST["lampu"];
    $body = $_POST["body"];
    $catatan = $_POST["catatan"];
   
    $query = "INSERT INTO dcsandblast VALUES('$tanggal','$kode','$no_sandblast','$regulator','$angin','$frl','$gauge',' $tombol','$tombol_emg','$tuas','$kaca','$sarung_tangan','$lampu','$body','$catatan')";
    
    $sql = mysqli_query($conn,$query);
    if($sql){
        header("location: index.php");
    }
   
}
?>
