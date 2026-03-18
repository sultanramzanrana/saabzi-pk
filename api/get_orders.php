<?php
header('Content-Type: application/json');
$conn = new mysqli('localhost','YOUR_DB_USER','YOUR_DB_PASS','YOUR_DB_NAME');
$result = $conn->query("SELECT * FROM orders ORDER BY created_at DESC");
echo json_encode($result->fetch_all(MYSQLI_ASSOC));
?>
