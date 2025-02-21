<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uid = $_POST['uid'];

    // Cek apakah UID sudah ada di database
    $check = $conn->query("SELECT * FROM rfid_data WHERE uid='$uid'");
    
    if ($check->num_rows > 0) {
        echo "Akses ditolak - UID sudah ada";
    } else {
        // Cek apakah kapasitas penuh (contoh: batas 2 kendaraan)
        $total = $conn->query("SELECT COUNT(*) AS total FROM rfid_data");
        $row = $total->fetch_assoc();

        if ($row['total'] >= 2) {
            echo "Akses ditolak - Parkir penuh";
        } else {
            $conn->query("INSERT INTO rfid_data (uid) VALUES ('$uid')");
            echo "Data berhasil disimpan";
        }
    }
}
?>
