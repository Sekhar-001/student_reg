<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";  // Change to your MySQL username
$password = "";      // Change to your MySQL password
$dbname = "student_reg";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $pdo->query("SELECT * FROM students ORDER BY created_at DESC");
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($students);
    
} catch(PDOException $e) {
    echo json_encode([]);
}
?>
