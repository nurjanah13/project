<?php
include 'koneksip21.php';

if(isset($_POST["submit"])){
    $tanggal = $_POST["tanggal"];
    $kode = $_POST["kode"];
    $no_blank = $_POST["no_blank"];
    $switch = $_POST["switch"];
    $slctr = $_POST["slctr"];
    $lampu = $_POST["lampu"]; 
    $timer = $_POST["timer"];   
    $body = $_POST["body"];
    $penekan = $_POST["penekan"];
    $catatan = $_POST["catatan"];
   
    $query = "INSERT INTO dcblank VALUES('$tanggal','$kode','$no_blank','$switch','$slctr','$lampu','$timer',' $body','$penekan','$catatan')";
    
    $sql = mysqli_query($conn,$query);
    if($sql){
        header("location: index.php");
    }
   
}
?>
