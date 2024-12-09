<?php
$path = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/';
require_once $path . "ATTEND/database/connect.php";

$dbo = new Database();

$c = "CREATE TABLE student_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    roll_no VARCHAR(20) UNIQUE,
    name VARCHAR(50)
)";

try {
    $s = $dbo->conn->prepare($c);
    $s->execute();
    echo "<br> Table student_details created successfully";
} catch (PDOException $o) {
    echo "<br> Table student_details not created: " . $o->getMessage();
}
?>
