<?php
include 'koneksip21.php';

if(isset($_POST["submit"])){
    $tanggal = $_POST["tanggal"];
    $kode = $_POST["kode"];
    $no_sandblast = $_POST["no_sandblast"];
    $valve = $_POST["valve"];
    $selang = $_POST["selang"];
    $switch = $_POST["switch"];
    $kaca = $_POST["kaca"]; 
    $selang_flux = $_POST["selang_flux"];   
    $selang_angin = $_POST["selang_angin"];
    $nozzle = $_POST["nozzle"];
    $siklon = $_POST["siklon"];
    $pedal = $_POST["pedal"];
    $hisapan = $_POST["hisapan"];
    $catatan = $_POST["catatan"];
   
    $query = "INSERT INTO wcsandblast VALUES('$tanggal','$kode','$no_sandblast','$valve','$selang','$switch','$kaca','$selang_flux',' $selang_angin','$nozzle','$siklon','$pedal','$hisapan','$catatan')";
    
    $sql = mysqli_query($conn,$query);
    if($sql){
        header("location: index.php");
    }
   
}
?>
