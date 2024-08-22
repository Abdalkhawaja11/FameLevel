<?php
session_start(); 

if (isset($_SESSION['fullname'])) {
    $fullname = $_SESSION['fullname'];
} else {
    $fullname = "Guest"; 
}


?>
<html>
<head>
    <title>FameLevel</title>
    <!-- <link rel="icon" href="./img/apple2.png" > -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/all.min.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/bootstrap.min.css.map">
      <link rel="stylesheet" href="js/all.min.js">
      <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
      <link rel="stylesheet" href="js/bootstrap.bundle.min.js.map">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,260,260i,600,600i,700,700i|Poppins:300,300i,400,400i,260,260i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
 <body class="bg-body-tertiary">
 <div class="cc">
 
 <div class="text-center">
     <div class="row">
         <div class="col-md-6">
     <img src="./img/logo.jpeg" alt="" class="fame"></div>
     <div class="col-md-6 llg">
     <p class="text-uppercase fw-bold text-white">Hello <?php echo htmlspecialchars($fullname); ?></p>
     <p class="text-white">What do you want to do today?</p></div>
 </div>
 <div class="text-center">
     <div class="row">
         <div class="col-md-6 ">
     <img src="./img/careem.png" alt="" class="careem"></div>
     <div class="col-md-6 cre">
     <h4 class="text-white">Careem</h4></div></div>
     <div class="row">
         <div class="col-md-6">
     <button class="up ms-3"><i class="fa-solid fa-upload mt-3" style=" height: 40px; color: #31d36a;"></i></button></div>
     <div class="col-md-6">
     <button class="up ms-3"><i class="fa-solid fa-percent mt-3" style=" height: 40px; color: #31d36a;"></i></button></div></div>
 </div>
 <hr class="bg-white">
 <div class="text-center">
     <div class="row">
         <div class="col-md-6">
     <img src="./img/talabat.png" alt="" class="careem"></div>
     <div class="col-md-6 cre">
     <h4 class="text-white">Talabat</h4></div></div>
     <div class="row">
         <div class="col-md-6">
     <button class="up1 ms-3"><i class="fa-solid fa-upload mt-3" style="height: 40px; color:#FF5722;"></i></button></div>
     <div class="col-md-6">
     <button class="up1 ms-3"><i class="fa-solid fa-percent mt-3" style="height: 40px; color: #FF5722;"></i></button></div></div>
 </div>
 <hr class="bg-white">
 <ul class="mt-4">
    <li class="u1">
        <a href="index.php" class="u1"><i class="bi bi-person me-3"></i><span>Client</span></a>
    </li>
    <li class="u1">
        <a href="./careemsheet.php" class="u1"><i class="bi bi-file-earmark me-3"></i><span>Careem Sheets</span></a>
    </li>
    <li class="u1">
        <a href="./talbatsheet.php" class="u1"><i class="bi bi-file-earmark me-3"></i><span>Talabat Sheets</span></a>
    </li>
    <li class="u1">
        <a href="./careemoffer.php" class="u1"><i class="bi bi-percent me-3"></i><span>Careem Offers</span></a>
    </li>
    <li class="u1">
        <a href="./talabatoffer.php" class="u1"><i class="bi bi-percent me-3"></i><span>Talabat Offers</span></a>
    </li>
    <li class="u1">
        <a href="./dashbord.php" class="u1"><i class="bi bi-person-gear me-3"></i><span>Dashboard Users</span></a>
    </li>
</ul>
 <hr class="bg-white">
 <div class="text-center">
     <div class="row">
         <div class="col-md-6">
     <a href="" class="lan"><i class="bi bi-translate me-2"></i> <span>Language</span></a></div>
     <!-- <div class="vr ms-5" style="height: 25px;"></div> -->
     <div class="col-md-6">
     <a href="login.html" class="lam"><i class="bi bi-box-arrow-left me-2"></i> <span>Log Out</span></a></div>
 </div>
</div>
</div>
</div>

    <div class="content">
        <nav class="navbar navbar-expand bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="bi bi-person me-3 bg-dark text-white w-50 h-50"></i>CareemOffer</a>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-flex sea" role="search">
                        <input class="form-control rounded-pill me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </div>
        </nav>
    
        <div class="container pp">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        
                        <div class="card-body">
                            <div class="offer-item">
                                <p><a href="#" class="text-dark">#78997</a></p>
                                <p>20 June 2024 - 20 July 2024</p>
                                <p>Branches: Abdali Branch, Khalda Branch</p>
                                <p>Offer Type: CBC</p>
                                <p><i class="fas fa-car"></i> Careem Offer</p>
                                <p class="offer-percentage">20%</p>
                            </div>
                            <div class="offer-item">
                                <p><a href="#" class="text-dark">#78997</a></p>
                                <p>20 June 2024 - 20 July 2024</p>
                                <p>Branches: Abdali Branch, Khalda Branch</p>
                                <p>Offer Type: CBC</p>
                                <p><i class="fas fa-car"></i> Careem Offer</p>
                                <p class="offer-percentage">20%</p>
                            </div>
                            <div class="offer-item">
                                <p><a href="#" class="text-dark">#78997</a></p>
                                <p>20 June 2024 - 20 July 2024</p>
                                <p>Branches: Abdali Branch, Khalda Branch</p>
                                <p>Offer Type: CBC</p>
                                <p><i class="fas fa-car"></i> Careem Offer</p>
                                <p class="offer-percentage">20%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        
                        <div class="card-body">
                            <div class="offer-item">
                                <p><a href="#" class="text-dark">#78997</a></p>
                                <p>20 June 2024 - 20 July 2024</p>
                                <p>Branches: Abdali Branch, Khalda Branch</p>
                                <p>Offer Type: CBC</p>
                                <p><i class="fas fa-car"></i> Careem Offer</p>
                                <p class="offer-percentage">20%</p>
                            </div>
                            <div class="offer-item">
                                <p><a href="#" class="text-dark">#78997</a></p>
                                <p>20 June 2024 - 20 July 2024</p>
                                <p>Branches: Abdali Branch, Khalda Branch</p>
                                <p>Offer Type: CBC</p>
                                <p><i class="fas fa-car"></i> Careem Offer</p>
                                <p class="offer-percentage">20%</p>
                            </div>
                            <div class="offer-item">
                                <p><a href="#" class="text-dark">#78997</a></p>
                                <p>20 June 2024 - 20 July 2024</p>
                                <p>Branches: Abdali Branch, Khalda Branch</p>
                                <p>Offer Type: CBC</p>
                                <p><i class="fas fa-car"></i> Careem Offer</p>
                                <p class="offer-percentage">20%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        
                        <div class="card-body">
                            <div class="offer-item">
                                <p><a href="#" class="text-dark">#78997</a></p>
                                <p>20 June 2024 - 20 July 2024</p>
                                <p>Branches: Abdali Branch, Khalda Branch</p>
                                <p>Offer Type: CBC</p>
                                <p><i class="fas fa-car"></i> Careem Offer</p>
                                <p class="offer-percentage">20%</p>
                            </div>
                            <div class="offer-item">
                                <p><a href="#" class="text-dark">#78997</a></p>
                                <p>20 June 2024 - 20 July 2024</p>
                                <p>Branches: Abdali Branch, Khalda Branch</p>
                                <p>Offer Type: CBC</p>
                                <p><i class="fas fa-car"></i> Careem Offer</p>
                                <p class="offer-percentage">20%</p>
                            </div>
                            <div class="offer-item">
                                <p><a href="#" class="text-dark">#78997</a></p>
                                <p>20 June 2024 - 20 July 2024</p>
                                <p>Branches: Abdali Branch, Khalda Branch</p>
                                <p>Offer Type: CBC</p>
                                <p><i class="fas fa-car"></i> Careem Offer</p>
                                <p class="offer-percentage">20%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="careemsheet.js"></script>
 </body>
 </html>