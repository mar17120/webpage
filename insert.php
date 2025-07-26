<?php
// الاتصال بقاعدة البيانات
$conn = new mysqli("localhost", "root", "", "testdb");

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// استلام البيانات من النموذج
$name = $_POST['name'];
$age = $_POST['age'];

// إدخال البيانات في الجدول
$sql = "INSERT INTO users (name, age, status) VALUES ('$name', '$age', 0)";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.<br>";
    echo "<a href='index.php'>Back</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
