<?php

if ($_GET['email'] != '' and $_GET['p_word1'] != ''){

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
$pword = mysqli_real_escape_string($conn, $_GET['p_word1']);
$pword_value = '';

$sql = "SELECT * FROM login_info WHERE email='$email' AND pword='$pword'";

$results = mysqli_query($conn, $sql);
  	if (mysqli_num_rows($results) == 1)  {
        $a = 1;?>
        <h2>Logged in as <?php echo $email;?></h2>
        <br><h3>Ongoing Courses</h3><?php
            $rows = mysqli_query($conn, "SELECT my_course.course_id, my_course.email, course_type.course_id, course_type.course_img
            FROM my_course
            INNER JOIN course_type ON my_course.course_id = course_type.course_id
            where my_course.email='$email'");
            foreach ($rows as $row) : ?>
                <a href="\mini_project\css\<?php echo $row['course_id']; ?>.php"><img style="border-radius: 10px; width: 20%; height: 35%; display:inline-block; margin: 35px; " class="list1" src="\mini_project\img\<?php echo $row['course_img']; ?>"></a>
            <?php endforeach;
        ?>
        <br><button><a href="\mini_project\html\home.php">Continue Learning!</a></button>
<?php
    }else{
        echo "Wrong Combination of email and password";
}
  
$conn->close();

} else {
    echo "something's wrong";
}

?>