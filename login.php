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

// الحصول على معلومات المستخدم من النموذج
$email = $_POST["email"];
$password = $_POST["password"];

// التحقق من صحة المستخدم من قاعدة البيانات
$stmt = $conn->prepare("SELECT FullName, password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hashed_password = $row["password"];

    // تحقق من كلمة المرور
    if (password_verify($password, $hashed_password)) {
        // بدء الجلسة وتخزين اسم المستخدم
        session_start();
        $_SESSION['fullname'] = $row['FullName'];
        header("Location: index.php"); // الانتقال إلى الصفحة الرئيسية
        exit();
    } else {
        echo '<script>alert("Wrong Username or Password"); window.location.href = "login.html";</script>';
    }
} else {
    echo '<script>alert("Wrong Username or Password"); window.location.href = "login.html";</script>';
}

// إغلاق الاتصال
$stmt->close();
$conn->close();
?>
