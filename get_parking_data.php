<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rfid_system";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) AS total_terisi FROM rfid_data";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$total_kapasitas = 32; // Kapasitas total parkir
$terisi = $row['total_terisi'];
$tersedia = $total_kapasitas - $terisi;

echo json_encode(["terisi" => $terisi, "tersedia" => $tersedia]);

$conn->close();
?>