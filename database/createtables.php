<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require_once $path . "ATTEND/database/connect.php";
$dbo = new Database();
$c = "create table student_details
(
    id int auto_increment primary key,
    roll_no varchar(20) unique,
    name varchar(50)
)";

$s = $dbo->conn->prepare($c);
try {
    $s->execute();
} catch (PDOException $o) {
}
