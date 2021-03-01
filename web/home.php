<?php
//nampilkan format tanggal
$tanggal = mktime(date('m'), date("d"), date('Y'));
echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . "</b>";
date_default_timezone_set("Asia/Jakarta");
$jam = date ("H:i:s");
echo " | Pukul : <b> " . $jam . " " ." </b> ";
$a = date ("H");
if (($a>=6) && ($a<=11)) {
    echo " <b>, Selamat Pagi !! </b>";
}else if(($a>=11) && ($a<=15)){
    echo " , Selamat  Pagi !! ";
}elseif(($a>15) && ($a<=18)){
    echo ", Selamat Siang !!";
}else{
    echo ", <b> Selamat Malam </b>";
}

?>
 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


</head>
<body>

<!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
        </nav>
    
   

<!--konten bawah--->

      <div class="row " >
      <!--konten kiri-->
        <div class="col-7  " >
            <div class="latest">
                <h3>Latest</h3>
            <div class="card mb-3 " style="max-width: 740px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="guyagun flip.jpg" class="figure-img img-fluid rounded" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text">
                            <small class="text-muted"> Last updated 3 mins ago</small>

                    
                       </p>
                    </div>
                  </div>
                </div>
              </div>

              <button type="button" class="btn btn-info ">Gas Skuy</button>
            </div>
        </div>
        <!--konten kiri-->
        <div class="col ">
            <div class="hangat">
            <h3>Hot News</h3>
            <div class="card mb-3 " style="max-width: 550px;">
                <div class="row g-0">
                  <div class="col-md-2">
                    <img src="guyagun flip.jpg" class="figure-img img-fluid rounded" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title ">Card title</h5>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="trending">
            <h3>Populer</h3>
            <div class="card mb-3 " style="max-width: 550px;">
                <div class="row g-0">
                  <div class="col-md-2">
                    <img src="guyagun flip.jpg" class="figure-img img-fluid rounded" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title ">Card title</h5>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>


      </div>





    
     
        <div class="footer-bottom">
                <div class="container-fluid text-center">
                    <p>Copyright &copy; 2021, Developed by</p>
                </div>
        </div>  
    
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<!--load--->

</body>
</html>