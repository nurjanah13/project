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
    $lswitch = $_POST["lswitch"];
    $silinder = $_POST["silinder"];
    $tanki = $_POST["tanki"];
    $oli = $_POST["oli"];
    $solenoid = $_POST["solenoid"];
    $pompa = $_POST["pompa"];
    $kontaktor = $_POST["kontaktor"];
    $relay = $_POST["relay"];
    $kabel = $_POST["kabel"];
    $body = $_POST["body"];
    $slider = $_POST["slider"];
    $pelumasan = $_POST["pelumasan"];
    $penekan = $_POST["penekan"];
    $baut = $_POST["baut"];
    $catatan = $_POST["catatan"];
   
    $query = "INSERT INTO fpmblank VALUES('$tanggal','$kode','$no_blank','$switch','$slctr','$lampu','$timer','$lswitch','$silinder','$tanki','$oli','$solenoid','$pompa','$kontaktor','$relay','$kabel',' $body','$slider','$pelumasan','$penekan','$baut','$catatan')";
    
    $sql = mysqli_query($conn,$query);
    if($sql){
        header("location: index.php");
    }
   
}
?>
