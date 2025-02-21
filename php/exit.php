<?php
include "db_config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uid = $_POST['uid'];

    $sql_check = "SELECT * FROM rfid_data WHERE uid = '$uid'";
    $result_check = $conn->query($sql_check);

    if ($result_check->num_rows > 0) {
        $sql_delete = "DELETE FROM rfid_data WHERE uid = '$uid'";
        if ($conn->query($sql_delete) === TRUE) {
            echo "Akses keluar diberikan: UID berhasil dihapus.";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Akses ditolak: UID tidak ditemukan.";
    }
}

$conn->close();
?>
