<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fame";

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// جلب البيانات من قاعدة البيانات
$sql = "SELECT ClientName, image_base64, ClientPhoneNumber, ClientEmail FROM client";
$result = $conn->query($sql);

$clients = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $clients[] = $row;
    }
} else {
    echo "No clients found";
}

session_start(); 

if (isset($_SESSION['fullname'])) {
    $fullname = $_SESSION['fullname'];
} else {
    $fullname = "Guest"; 
}

$conn->close();
?>
<html>
 <head>
    <title>FameLevel</title>
     <link rel="icon" href="./img/apple2.png" > 
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
                <a class="navbar-brand" href="#"><i class="bi bi-person me-3 bg-dark text-white w-50 h-50"></i><?php echo htmlspecialchars($fullname); ?></a>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-flex sea" role="search">
                        <input class="form-control rounded-pill me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark w-75 rounded-pill text-warning bg-dark" type="button" id="openModalBtn"><i class="bi bi-plus-lg"></i> New Client</button>
                    </form>
                </div>
            </div>
        </nav>
        
        <div class="container">
    <div class="row">
        <?php foreach($clients as $client): ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card-custom text-center p-3">
                    <img src="data:image/jpeg;base64,<?php echo htmlspecialchars($client['image_base64']); ?>" alt="client Image" class="img-fluid rounded-circle mb-3" style="width: 100px; height: 100px;">
                    <h5><?php echo htmlspecialchars($client['ClientName']); ?></h5>
                    <p class="date"><?php echo date("d F Y"); ?></p>
                    <div class="stats d-flex justify-content-around mt-3">
                        <div class="stat text-center">
                            <i class="fas fa-percentage icon bg-dark rounded-circle p-2"></i>
                            <div class="stat-number">16</div>
                            <div class="stat-label">Created Offers</div>
                        </div>
                        <div class="stat text-center">
                            <i class="fas fa-file-alt icon bg-dark rounded-circle p-2"></i>
                            <div class="stat-number">39</div>
                            <div class="stat-label">Created Reports</div>
                        </div>
                        <div class="stat text-center">
                            <i class="fas fa-map-marker-alt icon bg-dark rounded-circle p-2"></i>
                            <div class="stat-number">04</div>
                            <div class="stat-label">Branches</div>
                        </div>
                    </div>
                    <a href="clienth.php" class="btn view-details mt-3 btn-dark">View Details</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>




    </div>
    

    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Add Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Please provide the details of the client.</p>
                    
                    
                </div>
                <form action="client.php" method="post" enctype="multipart/form-data">
                <input type="file" class="mt-2 mb-4 ms-4" name="img"><br>
                    <b><label class="mt-4 mb-2 l1"> Client Name</label></b><br>
                    <input type="text" name="ClientName" placeholder="Client Name" required class="custom-input mt-3 mb-1 l2"><br>
                    <b><label class="mt-3 mb-2 l1">Client Phone Number</label></b><br>
                    <input type="text" name="ClientPhoneNumber" placeholder="Client Phone Number" required class="custom-input mt-2 mb-2 l2"><br>
                    <b><label class="mt-3 mb-2 l1">Client Email</label></b><br>
                    <input type="email" name="ClientEmail" placeholder="Client Email" required class="custom-input mt-2 mb-2 l2"><br>
                   <input type="submit" class="btn btn-dark add ms-4" value="Add">
                <input type="reset" class="btn btn-danger add" value="Back">
                </form>
                
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