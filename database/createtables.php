<?php
$path = rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/';
require_once $path . "ATTEND/database/connect.php";

$dbo = new Database();

// Create `student_details` table
$c = "CREATE TABLE student_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    roll_no VARCHAR(20) UNIQUE,
    name VARCHAR(50)
)";
try {
    $s = $dbo->conn->prepare($c);
    //$s->execute();
    echo "<br>Table 'student_details' created successfully.";
} catch (PDOException $o) {
    echo "<br>Table 'student_details' not created: " . $o->getMessage();
}

// Create `course_registration` table
$c = "CREATE TABLE course_registration (
    student_id INT,
    course_id INT,
    session_id INT,
    PRIMARY KEY (student_id, course_id, session_id)
)";
try {
    $s = $dbo->conn->prepare($c);
    //$s->execute();
    echo "<br>Table 'course_registration' created successfully.";
} catch (PDOException $o) {
    echo "<br>Table 'course_registration' not created: " . $o->getMessage();
}

$c = "create table course_details
( 
    id int auto_increment primary key,
    code varchar(20) unique,
    title varchar(50),
    credit int
)
";

try {
    $s = $dbo->conn->prepare($c);
    //$s->execute();
    echo "<br>Table 'course_details' created successfully.";
} catch (PDOException $o) {
    echo "<br>Table 'course_details' not created: " . $o->getMessage();
}
// Create `course_allotment` table
$c = "CREATE TABLE course_allotment (
    faculty_id INT,
    course_id INT,
    session_id INT,
    PRIMARY KEY (faculty_id, course_id, session_id)
)";
try {
    $s = $dbo->conn->prepare($c);
    //$s->execute();
    echo "<br>Table 'course_allotment' created successfully.";
} catch (PDOException $o) {
    echo "<br>Table 'course_allotment' not created: " . $o->getMessage();
}


// Create `faculty_details` table
$c = "CREATE TABLE faculty_details (
    id int auto_increment,
    user_name varchar(20),
    name varchar(100),
    password varchar(50)
  
)";
try {
    $s = $dbo->conn->prepare($c);
    //$s->execute();
    echo "<br>Table 'faculty_details' created successfully.";
} catch (PDOException $o) {
    echo "<br>Table 'faculty_details' not created: " . $o->getMessage();
}

// create  'session_details table'
$c = "create table session_details
(
    id int auto_increment primary key,
    year int,
    term varchar(50),
    unique(year,term)
)";
$s = $dbo->conn->prepare($c);
try {
    //$s->execute();
    echo ("<br>table session_details created successfully.");
} catch (PDOException $o) {
    echo "<br> table session_details not" . $o->getMessage();
}
// Create `attendance_details` table
$c = "CREATE TABLE attendance_details (
    faculty_id INT,
    course_id INT,
    session_id INT,
    student_id INT,
    on_date DATE,
    status VARCHAR(10),
    PRIMARY KEY (faculty_id, course_id, session_id, student_id, on_date)
)";
try {
    $s = $dbo->conn->prepare($c);
    //$s->execute();
    echo "<br>Table 'attendance_details' created successfully.";
} catch (PDOException $o) {
    echo "<br>Table 'attendance_details' not created: " . $o->getMessage();
}
