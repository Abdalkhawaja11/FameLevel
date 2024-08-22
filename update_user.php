<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fame";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['user_id']; // استرجاع معرف المستخدم
    $uname = trim($_POST["Username"]);
    $phone = trim($_POST["Phone"]);
    $email = trim($_POST["DashboardUsername"]);
    $password = trim($_POST["DashboardPassword"]);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // إذا تم رفع صورة جديدة
    if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["img"]["name"]);
        move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile);
        $imgData = base64_encode(file_get_contents($targetFile));

        $sql = "UPDATE user2 SET Username=?, image_base64=?, Phone=?, DashboardUsername=?, DashboardPassword=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssi", $uname, $imgData, $phone, $email, $hashed_password, $userId);
    } else {
        $sql = "UPDATE user2 SET Username=?, Phone=?, DashboardUsername=?, DashboardPassword=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $uname, $phone, $email, $hashed_password, $userId);
    }

    if ($stmt->execute()) {
        echo "User updated successfully";
        header("Location: dashbord.php"); // إعادة التوجيه إلى صفحة العرض
        exit();
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
