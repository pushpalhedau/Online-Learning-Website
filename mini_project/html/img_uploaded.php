<?php

if ($_GET['course_id'] != ''  and $_GET['course_name'] != '' and $_GET['course_img'] != ''){

$servername = "localhost";
$username = "root";
$password = "123456789";
$dbname = "all_courses";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// receive all input values from the form
$course_id = mysqli_real_escape_string($conn, $_GET['course_id']);
$course_name = mysqli_real_escape_string($conn, $_GET['course_name']);
$course_img = mysqli_real_escape_string($conn, $_GET['course_img']);

$check = "SELECT course_name FROM ss_courses";

if ($course_name!=$check){
    $sql="INSERT INTO ss_courses (course_id, course_name, course_img)
    VALUES ('$course_id', '$course_name', '$course_img')";
}

if ($conn->query($sql) === TRUE) {
    echo "New image uploaded successfully";
}else{
    echo "New record creation failed";
}
  
$conn->close();

} else {
    echo "something's wrong";
}

?>