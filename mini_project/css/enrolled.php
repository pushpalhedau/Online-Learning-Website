<?php

if ($_GET['email'] != '' and $_GET['p_word'] != '' and $_GET['course_id']){

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
$email = mysqli_real_escape_string($conn, $_GET['email']);
$pword = mysqli_real_escape_string($conn, $_GET['p_word']);
$c_id = mysqli_real_escape_string($conn, $_GET['course_id']);
$pword_value = '';

$sql = "SELECT * FROM login_info WHERE email='$email' AND pword='$pword'";

$results = mysqli_query($conn, $sql);
  	if (mysqli_num_rows($results) == 1)  {
        $sql1 = "INSERT INTO my_course (course_id, email) VALUES ('$c_id', '$email')";
        $results = mysqli_query($conn, $sql1);
        ?>
        <p>Enrolled Successfully</p>
    <button><a href="\mini_project\html\login.php">Login Here</a></button>
<?php
    }else{
        echo "Wrong Combination of email and password";
}
  
$conn->close();

} else {
    echo "something's wrong";
}

?>