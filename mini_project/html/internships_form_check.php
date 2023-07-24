<?php

if ($_GET['company_name'] != '' and $_GET['vacancy_type'] != '' and $_GET['description'] != '' and $_GET['stipend'] != '' and $_GET['start'] != '' and $_GET['end'] != '' and $_GET['qualification'] != '' and $_GET['perk'] != '' and $_GET['perk'] != ''){
    
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
    $company_name = mysqli_real_escape_string($conn, $_GET['company_name']);
    $vacancy_type = mysqli_real_escape_string($conn, $_GET['vacancy_type']);
    $description = mysqli_real_escape_string($conn, $_GET['description']);
    $stipend = mysqli_real_escape_string($conn, $_GET['stipend']);
    $start = mysqli_real_escape_string($conn, $_GET['start']);
    $end = mysqli_real_escape_string($conn, $_GET['end']);
    $qualification = mysqli_real_escape_string($conn, $_GET['qualification']);
    $perk = mysqli_real_escape_string($conn, $_GET['perk']);
    $link = mysqli_real_escape_string($conn, $_GET['link']);

    $sql="INSERT INTO internships (company_name, vacancy_type, description, stipend, start_date, end_date, qualification, perk, link) VALUES ('$company_name', '$vacancy_type', '$description', '$stipend', '$start', '$end', '$qualification', '$perk', '$link')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    ?>
    <button><a href="\mini_project\html\home.php">Add more Internships!</a></button>
    <?php
    }else{
        echo "New record creation failed";
    }
      
    $conn->close();
} else {
        echo "something's wrong";
    }


?>