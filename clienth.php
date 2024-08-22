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
                <a class="navbar-brand" href="#"><i class="bi bi-person me-3 bg-dark text-white w-50 h-50"></i>Client Details</a>
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
        <div class="container">
            <div class="row">                
                <div class="col-md-3">
                    <div class="card-custom cc12">
                        <img src="./img/sushi.png" alt="Client Logo">
                        <h5>Client's Name</h5>
                        <p class="date1">20 June 2024</p>
                        
                        <button class="btn1 view-details">Update Information</button><br>
                        <button class="btn2 view-details" id="openModalBtn2">Add Branch</button>
                        <button class="btn3 view-details" id="openModalBtn">View Branches</button>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card-custom cc13">
                    <div class="stats1">
                        <div class="stat1">
                            <i class="fas fa-file-alt icon1 bg-primary-subtle rounded-circle"></i>
                            <div class="stat-number1">39</div>
                            <div class="stat-label1">Total Reports</div>
                        </div>
                        <div class="stat1">
                            <i class="fas fa-percentage icon2 bg-success bg-gradient rounded-circle"></i>
                            <div class="stat-number1">16</div>
                            <div class="stat-label1">Careem Offers</div>
                        </div>
                        <div class="stat1">
                            <i class="fas fa-percentage icon3 rounded-circle"></i>
                            <div class="stat-number1">16</div>
                            <div class="stat-label1">Talabat Offers</div>
                        </div>
                        <div class="stat1">
                            <i class="fas fa-map-marker-alt icon4 bg-dark rounded-circle"></i>
                            <div class="stat-number1">04</div>
                            <div class="stat-label1">Branches</div>
                        </div>
                    </div>
                </div>
            </div>
              

                
            </div>
        </div>
    
    <div class="container ">
        <div class="row">            
            <div class="col-md-4">
                <div class="card">
                    <div class="he">
                        <h5 class="card-title">Daily Reports</h5>
                    </div>
                    <div class="card-body">
                        <div class="report-item">
                            <p><a href="#">#78997</a></p>
                            <p>20 June 2024</p>
                            <p>2,390.0 JD</p>
                            <button class="btn btn-download" id="openModalBtn3"><i class="fas fa-download"></i></button>
                            
                        </div>
                        <div class="report-item">
                            <p><a href="#">#78997</a></p>
                            <p>20 June 2024</p>
                            <p>2,390.0 JD</p>
                            <button class="btn btn-download"><i class="fas fa-download"></i></button></div>
                            <div class="report-item">
                                <p><a href="#">#78997</a></p>
                                <p>20 June 2024</p>
                                <p>2,390.0 JD</p>
                                <button class="btn btn-download"><i class="fas fa-download"></i></button></div>
                                <div class="report-item">
                                    <p><a href="#">#78997</a></p>
                                    <p>20 June 2024</p>
                                    <p>2,390.0 JD</p>
                                    <button class="btn btn-download"><i class="fas fa-download"></i></button></div>
                        
                    </div>
                </div>
            </div>

           
            <div class="col-md-4">
                <div class="card">
                    <div class="he d-flex justify-content-between">
                        <h5 class="card-title">Monthly Reports</h5>
                        <button class="btn btn-add"><i class="fas fa-plus"></i></button>
                    </div>
                    <div class="card-body">
                        <div class="report-item">
                            <p><a href="#" class="text-dark">#78997</a></p>
                            <p>20 June 2024</p>
                            <p>2,390.0 JD</p>
                            <p><i class="fas fa-car"></i> Careem Report</p>
                        </div>
                        <div class="report-item">
                            <p><a href="#" class="text-dark">#78997</a></p>
                            <p>20 June 2024</p>
                            <p>2,390.0 JD</p>
                            <p><i class="fas fa-car"></i> Careem Report</p>
                        </div>
                        <div class="report-item">
                            <p><a href="#" class="text-dark">#78997</a></p>
                            <p>20 June 2024</p>
                            <p>2,390.0 JD</p>
                            <p><i class="fas fa-car"></i> Careem Report</p>
                        </div>
                        <div class="report-item">
                            <p><a href="#" class="text-dark">#78997</a></p>
                            <p>20 June 2024</p>
                            <p>2,390.0 JD</p>
                            <p><i class="fas fa-car"></i> Careem Report</p>
                        </div>
                    </div>
                </div>
            </div>

           
            <div class="col-md-4">
                <div class="card">
                    <div class="he d-flex justify-content-between">
                        <h5 class="card-title">Created Offers</h5>
                        <button class="btn btn-add"><i class="fas fa-plus"></i></button>
                    </div>
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
    
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel"> Client Branch</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">                                                       
                 <div class="report-item1">
                    <div class="header" style="display: flex;">
                  <h5 class="card-title1">Abdali Branch</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.851148571455!2d35.88110667542481!3d31.964934674013648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca1bdcf1dd593%3A0x4b4acc2efaf710dc!2sHUDHUD%20Information%20Technology!5e0!3m2!1sen!2sjo!4v1723705306298!5m2!1sen!2sjo" width="200" height="90" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                
                </div>
                    
                
            </div>
            <div class="modal-body">                                                       
                <div class="report-item1">
                    <div class="header" style="display: flex;">
                 <h5 class="card-title1">Khalda Branch</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.851148571455!2d35.88110667542481!3d31.964934674013648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca1bdcf1dd593%3A0x4b4acc2efaf710dc!2sHUDHUD%20Information%20Technology!5e0!3m2!1sen!2sjo!4v1723705306298!5m2!1sen!2sjo" width="200" height="90" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                               
               </div>
                   
               
           </div>
           <button type="button" class="btn btn-dark done " data-dismiss="modal">Done</button>
        </div>
    </div>
    </div>
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel"> Add Branch</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">   
                    <form action="" method="post" enctype="multipart/form-data">                                                    
                 <div class="report-item2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.851148571455!2d35.88110667542481!3d31.964934674013648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca1bdcf1dd593%3A0x4b4acc2efaf710dc!2sHUDHUD%20Information%20Technology!5e0!3m2!1sen!2sjo!4v1723705306298!5m2!1sen!2sjo" width="445" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                
                </div>
                    
                
            
                <b><label class="mt-4 mb-2 l1">Branch Title</label></b><br>
            <input type="text" placeholder="Branch Title" required class="custom-input mt-2 mb-2 l2"><br>
            <input type="submit" class="btn btn-dark add ms-4" value="Add">
                <input type="reset" class="btn btn-danger add" value="Back">
        </form>
        </div>
    </div>
    </div>
    </div>
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Download Daily Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">                                                       
                 <div class="report-item2">
                    <form>
                        <p>Select the report you wish to download:</p>
                        <div class="radio-group">
                            <input type="radio" id="careem" name="img" value="careem">
                            <label for="careem">
                                <img src="./img/careemimg.jpeg" alt="Careem Report">
                            </label>
                        
                        
                            <input type="radio" id="talabat" name="img" value="talabat">
                            <label for="talabat">
                                <img src="./img/talabatimg.webp" alt="Talabat Report">
                            </label>
                        
                        
                            <input type="radio" id="logo" name="img" value="logo">
                            <label for="logo">
                                <img src="./img/logo.jpeg" alt="Logo Report">
                            </label>
                        </div>
                      <br>  
                    
                      <p>Please select your age:</p>
                      <input type="radio" id="Abdali" name="Branch" value="Abdali">
                      <label for="age1">Abdali Branch</label>
                      <input type="radio" id="Khalda" name="Branch" value="Khalda">
                      <label for="age2">Khalda Branch</label>  
                      <input type="radio" id="Abdoun" name="Branch"  value="Abdoun">
                      <label for="age3">Abdoun Branch</label><br><br>
                                       
            <button type="button" class="btn btn-dark  add " data-dismiss="modal">Download</button>
            <button type="button" class="btn btn-danger  add " data-dismiss="modal">Back</button>
        </form>
        </div>
    </div>
    </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
 </body>
</html>