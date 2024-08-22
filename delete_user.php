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

// التحقق من وجود معرف المستخدم في الـ GET
if (isset($_GET['id'])) {
    $userId = intval($_GET['id']);

    // حذف المستخدم من قاعدة البيانات
    $sql = "DELETE FROM user2 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);

    if ($stmt->execute()) {
        // تم حذف المستخدم بنجاح، يمكنك إعادة التوجيه إلى صفحة أخرى أو عرض رسالة نجاح
        header("Location: dashbord.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request.";
}

$conn->close();
?>
