<?php
include 'koneksip23.php';

if(isset($_POST["submit"])){
    $tanggal = $_POST["tanggal"];
    $kode = $_POST["kode"];
    $no_welhf = $_POST["no_welhf"];
    $silinder = $_POST["silinder"];
    $solenoid = $_POST["solenoid"];
    $selang = $_POST["selang"]; 
    $fit_speed = $_POST["fit_speed"];   
    $regulator = $_POST["regulator"];
    $angin = $_POST["angin"];
    $volt = $_POST["volt"];
    $ampere = $_POST["ampere"]; 
    $switch = $_POST["switch"];
    $slctr_heater = $_POST["slctr_heater"];
    $timer = $_POST["timer"];
    $lampu = $_POST["lampu"];   
    $counter = $_POST["counter"];
    $slctr_current = $_POST["slctr_current"];
    $baut = $_POST["baut"];
    $screw = $_POST["screw"];
    $pedal = $_POST["pedal"];
    $pegas = $_POST["pegas"];
    $var_condenser = $_POST["var_condenser"];
    $fix_condenser = $_POST["fix_condenser"];
    $fswitch = $_POST["fswitch"];
    $arc_supressor = $_POST["arc_supressor"];
    $plate = $_POST["plate"];
    $body = $_POST["body"];
    $traffo = $_POST["traffo"];
    $mcb = $_POST["mcb"];
    $relay = $_POST["relay"];
    $main_switch = $_POST["main_switch"];
    $heater = $_POST["heater"];
    $vregulator = $_POST["vregulator"];
    $oscilation = $_POST["oscilation"];
    $catatan = implode(",",$_POST["catatan"]);
    $analisa = implode(",",$_POST["analisa"]);
    $tindakan = implode(",",$_POST["tindakan"]);
    $status = implode(",",$_POST["status"]);
    $part = implode(",",$_POST["part"]);
    $spec = implode(",",$_POST["spec"]);
    $jmlh = implode(",",$_POST["jmlh"]);
   
    $query = "INSERT INTO fpmwelhf VALUES('$tanggal','$kode','$no_welhf','$silinder','$solenoid','$selang','$fit_speed',' $regulator','$angin','$volt','$ampere','$switch','$slctr_heater','$timer','$lampu',' $counter','$slctr_current','$baut','$screw','$pedal','$pegas','$var_condenser','$fix_condenser','$fswitch','$arc_supressor',$plate','$body','$traffo','$mcb','$relay','$main_switch','$heater','$vregulator','$oscilation','$catatan','$analisa','$tindakan','$status','$part','$part','$spec','$jmlh')";
    
    $sql = mysqli_query($conn,$query);
    if($sql){
        header("location: index.php");
    }
   
}
?>
