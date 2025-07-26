<?php
$conn = new mysqli("localhost", "root", "", "testdb");

$id = $_POST['id'];

// اجلب الحالة الحالية
$res = $conn->query("SELECT status FROM users WHERE id=$id");
$row = $res->fetch_assoc();
$new_status = ($row['status'] == 1) ? 0 : 1;

// حدث الحالة
$conn->query("UPDATE users SET status=$new_status WHERE id=$id");

header("Location: index.php");
?>
