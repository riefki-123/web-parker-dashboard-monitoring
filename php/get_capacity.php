<?php
include "db_config.php";

$sql_count = "SELECT COUNT(*) AS total_users FROM rfid_data";
$result_count = $conn->query($sql_count);
$row_count = $result_count->fetch_assoc();

echo json_encode(["total_users" => $row_count['total_users']]);

$conn->close();
?>