<?php
include 'koneksip21.php';

if(isset($_POST["submit"])){
    $tanggal = $_POST["tanggal"];
    $kode = $_POST["kode"];
    $no_uclean = $_POST["no_uclean"];
    $silinder = $_POST["silinder"];
    $solenoid = $_POST["solenoid"];
    $selang = $_POST["selang"]; 
    $fit_speed = $_POST["fit_speed"];   
    $sensor = $_POST["sensor"];
    $frl = $_POST["frl"];
    $panel = $_POST["panel"];
    $kabel = $_POST["kabel"];
    $hmi = $_POST["hmi"];
    $baut = $_POST["baut"];
    $pelumasan = $_POST["pelumasan"];
    $konektor = $_POST["konektor"];
    $bak_wash = $_POST["bak_wash"];
    $bak_rins = $_POST["bak_rins"];
    $dryer = $_POST["dryer"];
    $thermocouple = $_POST["thermocouple"];
    $generator = $_POST["generator"];
    $traffo = $_POST["traffo"];
    $catatan = $_POST["catatan"];
   
    $query = "INSERT INTO wcuclean VALUES('$tanggal','$kode','$no_uclean','$silinder','$solenoid','$selang','$fit_speed',' $sensor','$frl','$panel','$kabel','$hmi','$baut','$pelumasan','$konektor','$bak_wash','$bak_rins','$dryer','$thermocouple','$generator','$traffo','$catatan')";
    
    $sql = mysqli_query($conn,$query);
    if($sql){
        header("location: index.php");
    }
   
}
?>
