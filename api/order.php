<?php
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);

$conn = new mysqli('localhost','YOUR_DB_USER','YOUR_DB_PASS','YOUR_DB_NAME');
$stmt = $conn->prepare("INSERT INTO orders (pickup_address,dropoff_address,item_description,price_pkr,status) VALUES (?,?,?,?, 'pending')");
$stmt->bind_param("sssi",$data['pickup'],$data['dropoff'],$data['item'],$data['price']);
$stmt->execute();
echo json_encode(['success'=>true]);
?>
