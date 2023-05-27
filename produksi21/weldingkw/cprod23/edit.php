<?php
include 'koneksi.php';
if(isset($_POST["update"])){
    $tanggal = $_POST["tanggal"];
    $no = $_POST["no"];
    $kode = $_POST["kode"];
    $bagian = $_POST["bagian"];   
    $jenis_perbaikan = $_POST["jenis_perbaikan"];   
    $nama_pengaju = $_POST["nama_pengaju"];    
    $permasalahan = $_POST["permasalahan"]; 
    $status = $_POST["status"];
    $penyebab = $_POST["penyebab"];
    $perbaikan = $_POST["perbaikan"];  
    $part = $_POST["part"];
    $waktu = $_POST["waktu"];
    $tout = $_POST["tout"];


    $query = "UPDATE cprod23 SET tanggal='$tanggal',kode='$kode',no='$no',bagian='$bagian',jenis_perbaikan='$jenis_perbaikan',nama_pengaju='$nama_pengaju',permasalahan='$permasalahan',status='$status', penyebab='$penyebab', perbaikan='$perbaikan',part='$part',waktu='$waktu',tout='$tout' WHERE `kode`='$kode'";
    $sql = mysqli_query($conn,$query);

    if($sql){
       header("location: index.php");
    }else {
    //tampilkan pesan error jika gagal
    echo "Error: " . mysqli_error($conn);
    }

}
?>