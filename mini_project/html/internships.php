<html>
    <head>
        <link rel="stylesheet" href="/mini_project/css/home.css">
    </head>
    <body>
    <style>

*{
    font-family: sans-serif,'Netflix Font';
    background-color: white;
    margin:0%;
}

.navbar{
    background-color :#4075f1;
}

.navbar div{
    display: inline-block;
    vertical-align: middle;
}

.nav_logo{
    background-color: 4075f1;
    width: 10%;
    height: 10%;
}

.logo{
    background-color: 4075f1;
    width: 85%;
    height: 100%;
}

.nav_btn{
    background-color: 4075f1;
    width: 30%;
}

.btn{
  border-color:transparent;
    background-color: 4075f1;
    font-size: 120%;
    color: white;
    width: 30%;
    height: 10%;
}

.btnhover{
    border-radius: 7px;
    transition-duration: 0.5s;
    background-color: black;
}

.hr{
    background-color: 4075f1;
    height: 3px;
}
</style>
        <div class="navbar">
            <div class="nav_logo">
                <img class="logo" src="\mini_project\logo.jpg">
            </div>
            <div class="nav_btn">
                <a href="\mini_project\html\home.php"><button class="btn">Home</button></a>
                
                <a href="\mini_project\html\internships.php"><button class="btn">Internships</button></a>
                
                <a href="\mini_project\html\login.php"><button class="btn">My Courses</button></a>
            </div>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "123456789";
$dbname = "all_courses";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
            
$i = 1;
$rows = mysqli_query($conn, "SELECT * FROM internships");

foreach ($rows as $row) : ?>
<style>
.info{
    font-size:20px;
}


</style>
    <div class="info">
        <p><b>Company Name:</b> <?php echo $row['company_name']; ?><br>
        <b>Vacancy Type:</b> <?php echo $row['vacancy_type']; ?><br>
        <b>Description:</b> <?php echo $row['description']; ?><br>
        <b>Stipend:</b> <?php echo $row['stipend']; ?><br>
        <b>Start Date:</b> <?php echo $row['start_date']; ?><br>
        <b>End Date:</b> <?php echo $row['end_date']; ?><br>
        <b>Qualification:</b> <?php echo $row['qualification']; ?><br>
        <b>Perk:</b> <?php echo $row['perk']; ?><br>
        <b><a href="<?php echo $row['link']; ?>"><button style="font-size:20px; margin:10px; border-radius:3px;">Apply</button></a><br><br></b>
        <hr>
<?php endforeach; ?>

</body></html>