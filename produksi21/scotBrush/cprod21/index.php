<?php
session_start();
$host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'login';
  $conn = mysqli_connect($host, $user, $pass, $db);
  if($conn){
    //echo "koneksi berhasil";
  }
  mysqli_select_db($conn,$db);
if (isset($_SESSION['session_username'])) {
    $username = $_SESSION['session_username'];
    $sql2 = "SELECT * FROM user WHERE username = '$username'";
    $q2 = mysqli_query($conn, $sql2);
    $r2 = mysqli_fetch_array($q2);

    if ($r2['username'] = 'admin') {
        header("location: /engineer/admin/"); 
        exit();
    }
} else {
    $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
    header("location: /engineer/login.php"); // Redirect ke halaman login jika belum login
    exit();
}
$conn->close();
include 'koneksi.php';

$query1 = "SELECT MAX(RIGHT(kode, 4)) AS max_kode FROM cprod21";
$hasil1 = mysqli_query($conn, $query1);
$data1 = mysqli_fetch_assoc($hasil1);
$kode_barang = $data1['max_kode'];
$kode_barang++;
$kode_barang = sprintf("%04s", $kode_barang);
$kode_otomatis = "CBK21" . $kode_barang;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>CORRECTIVE SCOT BRUSH</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary text-light fixed-top" >
        <div class="container-fluid">
          <a class="navbar-brand" href="/engineer/ProductionEngineering">Prod-Eng's Page</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/engineer/ProductionEngineering">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Produksi 1
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/engineer/ProductionEngineering/produksi11/">Produksi 1.1</a></li>
                  <li><a class="dropdown-item" href="/engineer/ProductionEngineering/produksi12/">Produksi 1.2</a></li>                  
                </ul>
              </li> 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Produksi 2
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/engineer/ProductionEngineering/produksi21/">Produksi 2.1</a></li>
                  <li><a class="dropdown-item" href="/engineer/ProductionEngineering/produksi23/">Produksi 2.3</a></li>                  
                </ul>
              </li>                         
            </ul>
          </div>
        </div>
    </nav>
  <!-- nav end -->
  <!--layout  -->
  <div class="container-fluid" style="height: 100%">
    <div class="row text-center align-items-center text-bg-dark mt-3">
      <div class="col-12" style="height: 20vh; margin-top: 30px">
        <h1 class="mt-5">CORRECTIVE PRODUKSI 2.1</h1>
      </div>
    </div>
    <div class="container-fluid px-4">
      <h2 class="mt-4">CORRECTIVE SCOT BRUSH</h2>
      <ol class="breadcrumb mb-2">
        <li class="breadcrumb-item active"></li>
      </ol>
      <div class="alert alert-danger alert-dismissible fade show" id="alert-notif" role="alert">
        <i class="bi bi-exclamation-triangle-fill"> Anda Memiliki <span id="ticketCount"></span> Tiket Corrective Baru!</i>   
      </div>   
      <audio id="myAudio">
        <source src="alarm.mp3" type="audio/mpeg">
      </audio>
      <script>
      $(document).ready(function() {
        function updateCout() {
          $.ajax({
            url: 'get_total_tickets.php',
            type: 'GET',
            success: function(response) {
                var totalTickets = parseInt(response);
                var audio = document.getElementById("myAudio");
                var alert = document.getElementById("alert-notif");
                var ticketCount = document.getElementById("ticketCount");
                if (totalTickets < 1) {
                  alert.style.display = "none";
                } else {
                  alert.style.display = "block";
                  ticketCount.innerText = totalTickets;
                  audio.play();  
                }
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    }                                        
      updateCout();
      
      setInterval(function() {
      updateCout();
      }, 4000);                                         
    });
  </script>   
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-light mb-3" style="background: brown; color: white;" data-bs-toggle="modal"
        data-bs-target="#create">
        <i class="bi bi-plus-lg"> Permintaan Perbaikan</i>
      </button>
      <!-- Modal Permintaan-->
      <form method="post" action="proses.php" autocomplete="off" id="input-form" >
        <div class="modal fade" id="create" tabindex="-1" aria-labelledby="createLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="createLabel">Tiket Perbaikan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="col-md-12">
                  <label for="tanggal" class="form-label">
                    <h6>Tanggal</h6>
                  </label>
                  <input type="date" name="tanggal" class="form-control" id="tanggal">
                  <input type="hidden" name="kode" required="required" value="<?php echo $kode_otomatis ?>" readonly>
                </div>
                <div class="col-12 mt-3">
                  <label for="no" class="form-label">
                    <h6>Nomor Mesin</h6>
                  </label>
                  <select id="no" name="no" class="form-select" required>
                    <option value="Scot Brush 1">Scot Brush 1</option>
                    <option value="Scot Brush 2">Scot Brush 2</option>
                  </select>
                </div>
                <div class="col-md-12 mt-2">
                  <div class="col-md-12 mt-2">
                    <label for="bagian" class="form-label">
                      <h6>Bagian Mesin</h6>
                    </label>
                    <input type="text" class="form-control" id="bagian" name="bagian" required value="">
                  </div>
                </div>
                <div class="col-12 mt-2">
                  <label>
                    <h6>Jenis Perbaikan</h6>
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis_perbaikan" id="jenis_perbaikan"
                    value="Downtime">
                  <label class="form-check-label" for="jenis_perbaikan">Downtime</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis_perbaikan" id="jenis_perbaikan"
                    value="Non Downtime">
                  <label class="form-check-label" for="jenis_perbaikan">Non Downtime</label>
                </div>
                <div class="col-md-12 mt-2">
                  <label for="nama_pengaju" class="form-label">
                    <h6>Nama Pengaju</h6>
                  </label>
                  <input type="text" class="form-control" id="nama_pengaju" name="nama_pengaju" required value="">
                </div>
                <div class="col-md-12 mt-2">
                  <label for="permasalahan" class="form-label">
                    <h6>Permasalahan</h6>
                  </label>
                  <input type="text" class="form-control" id="permasalahan" name="permasalahan" required value="">
                </div>
                <input type="hidden" class="form-control" value="0" id="status" name="status">
                <input type="hidden" class="form-control" id="penyebab" name="penyebab">
                <input type="hidden" class="form-control" id="perbaikan" name="perbaikan">
                <input type="hidden" class="form-control" id="part" name="part">
                <input type="hidden" class="form-control" id="waktu" name="waktu">
                <input type="hidden" class="form-control" id="tout" name="tout">                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button name="submit" id="input-button" type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class="row">
        <input type="text" id="search" class="boxSearch mb-4" placeholder="Search..." />
        <div class="card col-xl-12 mb-4">
          <div class="card-header">
            <i class="fas fa-table me-1"></i>
          </div>
          <div class="row">
            <div class="col-6">
                <form action="index.php" method="get" style="margin: 10px">
                  <input type="date" name="tglawal"> to
                  <input type="date" name="tglakhir">
                  <input type="submit" value="Filter" name="Filter" class="btn btn-secondary">
                </form>
              </div>
              <div class="col-6 align-items-center">
                <form action="export.php" method="post" style="margin: 10px">
                  <input type="date" name="tglawal"> to
                  <input type="date" name="tglakhir">
                  <input type="submit" value="Export" name="Export" class="btn btn-secondary">
                </form>
              </div>
            </div>

            <div class="table-responsive" style="margin: 5px; height:60vh">
              <table id="example" class="table table-bordered table-sm table-hover" style="width:100%">
                <thead class="table-light">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Kode</th>
                    <th scope="col">No Mesin</th>
                    <th scope="col">Bagian Mesin</th>
                    <th scope="col">Jenis Perbaikan</th>
                    <th scope="col">Nama Pengaju</th>
                    <th scope="col">Permasalahan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Penyebab</th>
                    <th scope="col">Tindakan Perbaikan</th>
                    <th scope="col">Pergantian Part</th>
                    <th scope="col">Tiket Perbaikan</th>
                    <th scope="col">Total Waktu</th>
                  </tr>
                    </thead>
                    <tbody>
                      <?php
                      include "koneksi.php";

                      $query = 'SELECT * FROM cprod21 ORDER BY RIGHT(kode, 4) DESC';
                      $sql = mysqli_query($conn, $query);
                      $no = 0;

                      if (isset($_GET['Filter'])) {
                        $tglawal = $_GET['tglawal'];
                        $tglakhir = $_GET['tglakhir'];
                        $tampil = mysqli_query($conn, "SELECT * FROM cprod21 WHERE tanggal BETWEEN '" . $tglawal . "' AND '" . $tglakhir . "'");
                        
                      } else {
                        $tampil = mysqli_query($conn, $query);
                      }

                      while ($result = mysqli_fetch_array($tampil)) {

                      ?>
                  <tr>
                    <td>
                    <?php echo ++$no; ?>
                    </td>
                    <td>
                    <?php echo $result['tanggal']; ?>
                    </td>
                    <td>
                    <?php echo $result['kode']; ?>
                    </td>
                    <td>
                    <?php echo $result['no']; ?>
                    </td>
                    <td>
                    <?php echo $result['bagian']; ?>
                    </td>
                    <td>
                    <?php echo $result['jenis_perbaikan']; ?>
                    </td>
                    <td>
                    <?php echo $result['nama_pengaju']; ?>
                    </td>
                    <td>
                    <?php echo $result['permasalahan']; ?>
                    </td>
                    <td>
                    <?php 
                    $status = $result['status'];
                    $tout = $result['tout'];
                    if ($status == "0") {
                        echo '<button class="btn btn-warning">Open</button>';
                    } elseif ($tout == "00:00:00"){
                      echo '<button class="btn btn-light">Pengerjaan</button>';
                    } else {
                        echo '<button class="btn btn-success">Close</button>';
                    }
                    ?>
                    </td>
                    <td>
                    <?php echo $result['penyebab']; ?>
                    </td>
                    <td>
                    <?php echo $result['perbaikan']; ?>
                    </td>
                    <td>
                    <?php echo $result['part']; ?>
                    </td>
                    <td>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#edit<?php echo $result['kode']; ?>">
                        Tiket Perbaikan
                      </button>
                      <!-- Modal Update-->
                      <form method="post" action="edit.php" autocomplete="off" id="update-form">
                        <div class="modal fade" id="edit<?php echo $result['kode']; ?>" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="editLabel">Tiket Perbaikan</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <!-- <input type="hidden" name="id" value="<?//= $result['id']; ?>"> -->
                                  <div class="col-md-12">
                                    <label for="tanggal" class="form-label">
                                      <h6>Tanggal</h6>
                                    </label>
                                    <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?php echo $result['tanggal']; ?>">
                                    <input type="hidden" name="kode" required="required"value="<?= $result['kode']; ?>" >
                                  </div>
                                  <div class="col-12 mt-3">
                                    <label for="no" class="form-label">
                                      <h6>Nomor Mesin</h6>
                                    </label>
                                    <select id="no" name="no" class="form-select">
                                      <option selected value="<?php echo $result['no']; ?>"><?php echo $result['no']; ?></option>                                    
                                    </select>
                                  </div>
                                  <div class="col-md-12 mt-2">
                                    <label for="bagian" class="form-label">
                                      <h6>Bagian Mesin</h6>
                                    </label>
                                    <input type="text" class="form-control" id="bagian" name="bagian"value="<?php echo $result['bagian']; ?>">
                                  </div>
                                  <div class="col-12 mt-2">
                                    <label class="col-12">
                                      <h6>Jenis Perbaikan</h6>
                                    </label>
                                    <div class="form-check form-check-inline col-6">
                                      <input class="form-check-input" type="radio" name="jenis_perbaikan"id="jenis_perbaikan" value="<?php echo $result['jenis_perbaikan']; ?>" checked>
                                      <label class="form-check-label" for="jenis_perbaikan">
                                        <?php echo $result['jenis_perbaikan']; ?>
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-md-12 mt-2">
                                    <label for="nama_pengaju" class="form-label">
                                      <h6>Nama Pengaju</h6>
                                    </label>
                                    <input type="text" class="form-control" id="nama_pengaju" name="nama_pengaju"value="<?php echo $result['nama_pengaju']; ?>">
                                  </div>
                                  <div class="col-md-12 mt-2">
                                    <label for="permasalahan" class="form-label">
                                      <h6>Permasalahan</h6>
                                    </label>
                                    <input type="text" class="form-control" id="permasalahan" name="permasalahan"value="<?php echo $result['permasalahan']; ?>">
                                  </div>
                                  <input type="hidden" class="form-control" id="status" name="status" value="1">
                                  <div class="mt-1 mb-3">
                                    <label class="form-label">
                                      <h6>Penyebab</h6>
                                    </label>
                                    <textarea class="form-control" name="penyebab" rows="2"value="<?php echo $result['penyebab']; ?>"><?php echo $result['penyebab']; ?></textarea>
                                  </div>
                                  <div class="mt-1 mb-3">
                                    <label class="form-label">
                                      <h6>Tindakan Perbaikan</h6>
                                    </label>
                                    <textarea class="form-control" name="perbaikan" rows="2"value="<?php echo $result['perbaikan']; ?>"><?php echo $result['perbaikan']; ?></textarea>
                                  </div>
                                  <div class="mt-1 mb-3">
                                    <label class="form-label">
                                      <h6>Pergantian Part</h6>
                                    </label>
                                    <textarea class="form-control" name="part" rows="2"value="<?php echo $result['part']; ?>"placeholder="Tuliskan nama part, spesifikasi, dan jumlah"><?php echo $result['part']; ?></textarea>
                                  </div>
                                  <div class="row">
                                    <div class="col-6">
                                    Mulai:<input class="form-control col-6" type="time" id="waktu" name="waktu" value="<?php echo $result['waktu']; ?>"></div>
                                    <div class="col-6">
                                    Selesai:<input class="form-control col-6" type="time" id="tout" name="tout" value="<?php echo $result['tout']; ?>"></div>
                                    </div>
                                  </div>
                                
                                <div class="modal-footer">                               
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button name="update" id="update-button" type="submit"class="btn btn-primary" >Update</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                      <script>
                        const myModal = document.getElementById('myModal')
                        const myInput = document.getElementById('myInput')
                          
                        myModal.addEventListener('shown.bs.modal', () => {
                        myInput.focus()
                        })
                      </script>
                    </td> 
                    <td>
                    <?php 
                    $waktu = $result['waktu'];
                    $tout = $result['tout'];
                    if ($tout > "0") {
                      $selisih_waktu = strtotime($tout) - strtotime($waktu);
                      echo "" . gmdate("H:i:s", $selisih_waktu) . "";
                    } else {
                      echo "0";
                    }
                    ?>
                    </td>                     
                  </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $("#search").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("table tbody tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

    </script>
</body>
</html>