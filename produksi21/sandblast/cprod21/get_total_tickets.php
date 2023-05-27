<?php
include 'koneksi.php';
$sql = "SELECT COUNT(*) AS total FROM cprod21 WHERE status = 0";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row["total"];
}
$conn->close();
?>