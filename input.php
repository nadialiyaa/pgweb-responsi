<?php
$nama = $_POST['nama'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contribute_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepared statement untuk mencegah SQL Injection
$stmt = $conn->prepare("INSERT INTO contribute_table (nama, latitude, longitude) VALUES (?, ?, ?)");
$stmt->bind_param("sdd", $nama, $latitude, $longitude); // 'sdd' = string, double, double

if ($stmt->execute()) {
    // Redirect ke index.php setelah data disimpan
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
