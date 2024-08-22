<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fame";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// فحص الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// التحقق من استقبال القيم من POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = trim($_POST["FullName"]);
    $email = trim($_POST["Email"]);
    $phone = trim($_POST["Phone"]);
    $password = trim($_POST["Password"]);

    // تشفير كلمة المرور
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // تحضير الجملة وإدخال البيانات
    $stmt = $conn->prepare("INSERT INTO users (FullName, Email, Phone, Password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fname, $email, $phone, $hashed_password);

    // تنفيذ الجملة
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // إغلاق البيان والاتصال
    $stmt->close();
    $conn->close();

    // إعادة توجيه المستخدم إلى صفحة تسجيل الدخول
    session_start();
    header("Location: login.html");
    exit();
} else {
    echo "Invalid request.";
}

?>
