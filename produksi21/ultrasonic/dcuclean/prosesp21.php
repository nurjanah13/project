<?php
include 'koneksip21.php';

if(isset($_POST["submit"])){
    $tanggal = $_POST["tanggal"];
    $kode = $_POST["kode"];
    $no_uclean = $_POST["no_uclean"];
    $box = $_POST["box"];
    $push_btn = $_POST["push_btn"];
    $switch = $_POST["switch"];
    $thermocontrol = $_POST["thermocontrol"];
    $body = $_POST["body"];   
    $volt = $_POST["volt"];
    $catatan = $_POST["catatan"];
   
    $query = "INSERT INTO dcuclean VALUES('$tanggal','$kode','$no_uclean','$box','$thermocontrol','$body',' $push_btn','$switch','$volt','$catatan')";
    
    $sql = mysqli_query($conn,$query);
    if($sql){
        header("location: index.php");
    }
   
}
?>
