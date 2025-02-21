<?php
include "db_config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uid = $_POST['uid'];
    $max_capacity = 32;

    $sql_count = "SELECT COUNT(*) AS total_users FROM rfid_data";
    $result_count = $conn->query($sql_count);
    $row_count = $result_count->fetch_assoc();
    $total_users = $row_count['total_users'];

    if ($total_users >= $max_capacity) {
        echo "Akses ditolak: Parkiran penuh.";
    } else {
        $sql_check = "SELECT * FROM rfid_data WHERE uid = '$uid'";
        $result_check = $conn->query($sql_check);

        if ($result_check->num_rows > 0) {
            echo "Akses ditolak: UID sudah terdaftar.";
        } else {
            $sql_insert = "INSERT INTO rfid_data (uid) VALUES ('$uid')";
            if ($conn->query($sql_insert) === TRUE) {
                echo "Akses diterima: UID berhasil disimpan.";
            } else {
                echo "Error: " . $sql_insert . "<br>" . $conn->error;
            }
        }
    }
}

$conn->close();
?>
