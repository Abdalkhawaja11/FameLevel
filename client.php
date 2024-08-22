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
        $uname = trim($_POST["ClientName"]);
        $phone = trim($_POST["ClientPhoneNumber"]);
        $email = trim($_POST["ClientEmail"]);

        // التعامل مع رفع الصورة
        if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
            // حفظ الصورة في مسار محدد
            $targetDir = "uploads/";
            $targetFile = $targetDir . basename($_FILES["img"]["name"]);
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile)) {
                // تحويل الصورة إلى Base64 إذا كنت تستخدم Base64
                $imgData = base64_encode(file_get_contents($targetFile));
        
                // تخزين البيانات في قاعدة البيانات
                $stmt = $conn->prepare("INSERT INTO client (ClientName, image_base64, ClientPhoneNumber, ClientEmail) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss", $uname, $imgData, $phone, $email);
        
                if ($stmt->execute()) {
                    echo "New record created successfully";
                    session_start();
                    header("Location: index.php");
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
    
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    $conn->close();
}
?>
