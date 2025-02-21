<?php
header('Content-Type: application/json');
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "rfid_system";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo json_encode(["error" => "Koneksi gagal"]);
    exit();
}

$sql_count = "SELECT COUNT(*) AS terisi FROM rfid_data";
$result    = $conn->query($sql_count);
$row       = $result->fetch_assoc();

$terisi = $row['terisi'];
$totalKapasitas = 32;
$tersedia = $totalKapasitas - $terisi;

$conn->close();

echo json_encode([
    "terisi" => $terisi,
    "tersedia" => $tersedia,
    "total" => $totalKapasitas
]);
?>
