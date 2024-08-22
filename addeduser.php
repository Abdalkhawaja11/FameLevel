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
$sql = "SELECT Username, image_base64, Phone, DashboardUsername, DashboardPassword FROM user2";
$result = $conn->query($sql);

$users = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
} else {
    echo "No users found";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>FameLevel</title>
    <!-- الروابط الخاصة بـ CSS و JavaScript -->
</head>
<body class="bg-body-tertiary">
    <div class="cc">
        <!-- بقية تصميم HTML -->
    </div>
    <div class="content">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="bi bi-person me-3 bg-dark text-white w-50 h-50"></i>Dashboard Users</a>
                <!-- بقية مكونات التنقل -->
            </div>
        </nav>    
        <div class="container">
            <div class="row">
                <?php foreach($users as $user): ?>
                    <div class="col-md-3">
                        <div class="card-custom">
                            <img src="data:image/jpeg;base64,<?php echo $user['image_base64']; ?>" alt="User Image" class="rounded-circle">
                            <h5><?php echo $user['Username']; ?></h5>
                            <p class="date"><?php echo $user['Phone']; ?></p>
                            <p class="date"><?php echo $user['DashboardUsername']; ?></p>
                            <button class="btn view-details bg-dark">Update information</button>
                            <button class="btn view-details bg-danger w-100">Delete User</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- بقية تصميم HTML -->
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
