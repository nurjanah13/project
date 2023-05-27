<?php
include 'koneksip21.php';

if(isset($_POST["submit"])){
    $tanggal = $_POST["tanggal"];
    $kode = $_POST["kode"];
    $no_sandblast = $_POST["no_sandblast"];
    $valve = $_POST["valve"];
    $frl = $_POST["frl"]; 
    $angin = $_POST["angin"];
    $selang = $_POST["selang"];
    $frl_mesin = $_POST["frl_mesin"];
    $gauge = $_POST["gauge"];
    $tombol = $_POST["tombol"]; 
    $tombol_emg = $_POST["tombol_emg"];
    $tuas = $_POST["tuas"];  
    $switch = $_POST["switch"];
    $pedal = $_POST["pedal"];
    $kaca = implode (", ",$_POST["kaca"]);
    $sarung_tangan = $_POST["sarung_tangan"];
    $selang_flux = $_POST["selang_flux"];   
    $selang_angin = $_POST["selang_angin"];
    $nozzle = $_POST["nozzle"];
    $lampu = $_POST["lampu"];
    $body = $_POST["body"];
    $ruang_siklon = $_POST["ruang_siklon"];
    $siklon = $_POST["siklon"];
    $saluran = $_POST["saluran"];
    $catrige = $_POST["catrige"];
    $catatan = $_POST["catatan"];
   
    $query = "INSERT INTO fpmsandblast VALUES ('$tanggal','$kode','$no_sandblast','$valve','$frl','$angin','$selang','$frl_mesin','$gauge',' $tombol','$tombol_emg','$tuas','$switch','$pedal','$kaca','$sarung_tangan','$selang_flux',' $selang_angin','$nozzle','$lampu','$body','$ruang_siklon','$siklon','$saluran','$catrige','$catatan')";
    
    $sql = mysqli_query($conn,$query);
    if($sql){
        header("location: index.php");
    }
   
}
?>
