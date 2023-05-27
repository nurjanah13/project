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
    $angin = $_POST["angin"];
    $panel = $_POST["panel"];
    $tombol = $_POST["tombol"];
    $switch = $_POST["switch"];
    $thermocontrol = $_POST["thermocontrol"];
    $kabel = $_POST["kabel"];
    $hmi = $_POST["hmi"];
    $box = $_POST["box"];
    $baut = $_POST["baut"];
    $motion = implode(",",$_POST["motion"]);
    $pelumasan = $_POST["pelumasan"];
    $konektor = $_POST["konektor"];
    $body = $_POST["body"];   
    $bak_wash = $_POST["bak_wash"];
    $bak_rins = $_POST["bak_rins"];
    $dryer = $_POST["dryer"];
    $thermocouple = $_POST["thermocouple"];
    $heater = $_POST["heater"];
    $air_generator = $_POST["air_generator"];
    $generator = $_POST["generator"];
    $traffo = $_POST["traffo"];
    $volt = $_POST["volt"];
    $catatan = $_POST["catatan"];
   
    $query = "INSERT INTO fpmuclean VALUES('$tanggal','$kode','$no_uclean','$silinder','$solenoid','$selang','$fit_speed',' $sensor','$frl','$angin','$panel','$tombol','$switch','$thermocontrol','$kabel','$hmi','$box','$baut','$motion','$pelumasan','$konektor','$body','$bak_wash','$bak_rins','$dryer','$thermocouple','$heater','$air_generator','$generator','$traffo','$volt','$catatan')";
    
    $sql = mysqli_query($conn,$query);
    if($sql){
        header("location: index.php");
    }
   
}
?>
