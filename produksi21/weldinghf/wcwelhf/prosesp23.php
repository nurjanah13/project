<?php
include 'koneksip21.php';

if(isset($_POST["submit"])){
    $tanggal = $_POST["tanggal"];
    $kode = $_POST["kode"];
    $no_welhf = $_POST["no_welhf"];
    $silinder = $_POST["silinder"];
    $solenoid = $_POST["solenoid"];
    $selang = $_POST["selang"]; 
    $fit_speed = $_POST["fit_speed"];   
    $regulator = $_POST["regulator"];
    $baut = $_POST["baut"];
    $plate = $_POST["plate"];
    $oscilation = $_POST["oscilation"];
    $catatan = $_POST["catatan"];
   
    $query = "INSERT INTO wcwelhf VALUES('$tanggal','$kode','$no_welhf','$silinder','$solenoid','$selang','$fit_speed',' $regulator','$baut','$plate','$catatan')";
    
    $sql = mysqli_query($conn,$query);
    if($sql){
        header("location: index.php");
    }
   
}
?>
