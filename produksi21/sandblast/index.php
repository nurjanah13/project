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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>PRODUCTION ENGINEERING</title>
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
                  <li><a class="dropdown-item" href="/engineer/ProductionEngineering/produksi11">Produksi 1.1</a></li>
                  <li><a class="dropdown-item" href="/engineer/ProductionEngineering/produksi12">Produksi 1.2</a></li>                  
                </ul>
              </li> 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Produksi 2
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/engineer/ProductionEngineering/produksi21">Produksi 2.1</a></li>
                  <li><a class="dropdown-item" href="/engineer/ProductionEngineering/produksi23">Produksi 2.3</a></li>                  
                </ul>
              </li>                         
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/engineer/logout.php">Logout</a></li>
            </ul>
        </li>
    </ul>
   </nav>
    <!--layout  -->
    <div class="container-fluid" style="height: 100%">             
      <div class="row text-center align-items-center text-bg-dark mt-3">
         <div class="col-12" style="height: 20vh; margin: 20px">
           <h1 class="mt-5">SAND BLASTING</h1>              
         </div>            
      </div>
      <div style="margin: 30px;">
      <div class="row mt-5">       
       <div class="col-sm-3 mb-3 mb-sm-0">          
         <div class="card align-items-center">
           <img src="https://cdn.pixabay.com/photo/2012/04/01/19/40/wrench-24261__340.png" style="height: 50%; width: 50%"/>
           <div class="card-body text-center">
             <h3 class="card-title">DAILY CHECK</h3>              
             <a href="dcsandblast" class="btn btn-primary">MASUK</a>
           </div>
         </div>
       </div>
       <div class="col-sm-3">
         <div class="card align-items-center">
           <img src="https://cdn.pixabay.com/photo/2012/04/01/19/40/wrench-24261__340.png" style="height: 50%; width: 50%"/>
           <div class="card-body text-center">
             <h3 class="card-title">WEEKLY CHECK</h3>              
             <a href="wcsandblast" class="btn btn-primary">MASUK</a>
           </div>
         </div>
       </div>
       <div class="col-sm-3">
        <div class="card align-items-center">
          <img src="https://cdn.pixabay.com/photo/2012/04/01/19/40/wrench-24261__340.png" style="height: 50%; width: 50%"/>
          <div class="card-body text-center">
            <h3 class="card-title">FORM PM</h3>              
            <a href="fpmsandblast" class="btn btn-primary">MASUK</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
       <div class="card align-items-center">
         <img src="https://cdn.pixabay.com/photo/2012/04/01/19/40/wrench-24261__340.png" style="height: 50%; width: 50%"/>
         <div class="card-body text-center">
           <h3 class="card-title">CORRECTIVE</h3>              
           <a href="cprod21" class="btn btn-primary">MASUK</a>
         </div>
       </div>
     </div>
     </div>    
   </div>      
   </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>