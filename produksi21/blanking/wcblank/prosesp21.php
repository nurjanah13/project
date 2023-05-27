<?php
include 'koneksip21.php';

if(isset($_POST["submit"])){
    $tanggal = $_POST["tanggal"];
    $kode = $_POST["kode"];
    $no_blank = $_POST["no_blank"];
    $switch = $_POST["switch"];
    $silinder = $_POST["silinder"];
    $selang = $_POST["selang"]; 
    $oli = $_POST["oli"]; 
    $slider = $_POST["slider"];  
    $pelumasan = $_POST["pelumasan"];
    $baut = $_POST["baut"];
    $catatan = $_POST["catatan"];
   
    $query = "INSERT INTO wcblank VALUES('$tanggal','$kode','$no_blank','$switch','$silinder','$selang','$oli','$slider',' $pelumasan','$baut','$catatan')";
    
    $sql = mysqli_query($conn,$query);
    if($sql){
        header("location: index.php");
    }
   
}
?>
