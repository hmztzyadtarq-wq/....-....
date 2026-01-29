<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>لوحة التحكم</title>
</head>
<body>
    <h1>مرحباً مدير المكتب 👋</h1>
    <nav>
        <ul>
            <li><a href="add_property.php">إضافة عقار جديد</a></li>
            <li><a href="manage_staff.php">إدارة الموظفين</a></li>
            <li><a href="messages.php">رسائل العملاء</a></li>
            <li><a href="logout.php">تسجيل الخروج</a></li>
        </ul>
    </nav>
</body>
</html>
