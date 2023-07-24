<?php

if ($_GET['u_name'] != ''  and $_GET['email'] != '' and $_GET['p_word1'] != ''  and $_GET['p_word2'] != '' and $_GET['p_word1'] == $_GET['p_word2']){

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
$name = mysqli_real_escape_string($conn, $_GET['u_name']);
$email = mysqli_real_escape_string($conn, $_GET['email']);
$pword = mysqli_real_escape_string($conn, $_GET['p_word1']);

$check = "SELECT email FROM login_info";

if ($email!=$check){
    $sql="INSERT INTO login_info (names, email, pword)
    VALUES ('$name', '$email', '$pword')";
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    ?>
    <button><a href="\mini_project\html\home.php">Start Learning!</a></button>
<?php
}else{
    echo "New record creation failed";
}
  
$conn->close();

} else {
    echo "something's wrong";
}

?>