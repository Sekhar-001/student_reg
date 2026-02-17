<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";  // Change to your MySQL username
$password = "";      // Change to your MySQL password
$dbname = "student_reg";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $department = $_POST['department'];
    $phone = $_POST['phone'];
    
    $stmt = $pdo->prepare("INSERT INTO students (name, email, dob, department, phone) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$name, $email, $dob, $department, $phone]);
    
    echo json_encode(['success' => true, 'message' => 'Student registered successfully!']);
    
} catch(PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
}
?>
