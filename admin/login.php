<?php
session_start();

// بيانات المدير (ممكن تخزنها في قاعدة بيانات لاحقاً)
$admin_user = "admin";
$admin_pass = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $admin_user && $password === $admin_pass) {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "اسم المستخدم أو كلمة المرور غير صحيحة!";
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تسجيل دخول المدير</title>
</head>
<body>
    <h2>تسجيل دخول المدير</h2>
    <form method="POST" action="">
        <label>اسم المستخدم:</label>
        <input type="text" name="username" required><br><br>

        <label>كلمة المرور:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">دخول</button>
    </form>

    <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</body>
</html>
