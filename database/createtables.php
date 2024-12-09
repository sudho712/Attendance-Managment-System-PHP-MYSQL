<?php
$path = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/';
require_once $path . "ATTEND/database/connect.php";

$dbo = new Database();

// student table details
/* 
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
 */

$c="create table course_allotment
(
    faculty_id int,
    course_id int,
    session_id int,
    primary key (faculty_id, course_id, session_id)
)
" ;
try{
    $s=$dbo->conn->prepare($c);
    $s->execute();
    echo "<br> course table create success fully";
}catch (PDOException $o)
{
    echo "<br> course table not created ".$o->getMessage();
}/* 
$c = "create table attendance_details
(
    faculty_id int,
    course_id int,
    session_id int,
    student_id int,
    on_date date,
    status VARCHAR(10),
    primary key (faculty_id, course_id,session_id, student_id, on_date)
)";
try{
    $s=$dbo->conn->prepare($c);
    $s->execute();
    echo "<br> attendance table create successfully";
}catch (PDOException $o){
    echo "<br> attendance table not create ".$o->getMessage();
}
 */?>
