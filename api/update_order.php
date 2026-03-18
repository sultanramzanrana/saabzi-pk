<?php
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);
$conn = new mysqli('localhost','YOUR_DB_USER','YOUR_DB_PASS','YOUR_DB_NAME');
$stmt = $conn->prepare("UPDATE orders SET status=? WHERE id=?");
$stmt->bind_param("si",$data['status'],$data['id']);
$stmt->execute();
echo json_encode(['success'=>true]);
?>
