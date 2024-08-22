<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fame";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uname = trim($_POST["Username"]);
        $phone = trim($_POST["Phone"]);
        $email = trim($_POST["DashboardUsername"]);
        $password = trim($_POST["DashboardPassword"]);

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // التعامل مع رفع الصورة
        if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
            // حفظ الصورة في مسار محدد
            $targetDir = "uploads/";
            $targetFile = $targetDir . basename($_FILES["img"]["name"]);
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile)) {
                // تحويل الصورة إلى Base64 إذا كنت تستخدم Base64
                $imgData = base64_encode(file_get_contents($targetFile));
        
                // تخزين البيانات في قاعدة البيانات
                $stmt = $conn->prepare("INSERT INTO user2 (Username, image_base64, Phone, DashboardUsername, DashboardPassword) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("sssss", $uname, $imgData, $phone, $email, $hashed_password);
        
                if ($stmt->execute()) {
                    echo "New record created successfully";
                    session_start();
                    header("Location: dashbord.php");
                    exit();
                } else {
                    echo "Error: " . $stmt->error;
                }
            } else {
                echo "Error: Could not upload the file.";
            }
        } else {
            echo "Error: Please upload a valid image file.";
        }
        
    } else {
        throw new Exception("Invalid request.");
    }
    
}
 catch (Exception $e) {
    echo $e->getMessage();
} finally {
    $conn->close();
}
