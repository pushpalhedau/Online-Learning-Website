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
        <form method="get" action="check.php">
            <div class="reg_form">
                <div class="form_inputs">
                    <center><input style="margin-top:150px; width:20%; height:45px; font-size:20px; " type="name" name="u_name" placeholder="Name"></center><br>
                    <center><input style="width:20%; margin-top:0px; height:45px; font-size:20px; " type="email" name="email" placeholder="Email"></center><br>
                    <center><input style="width:20%; margin-top:0px; height:45px; font-size:20px; " type="password" name="p_word1" placeholder="Password"></center><br>
                    <center><input style="width:20%; margin-top:0px; height:45px; font-size:20px; " type="password" name="p_word2" placeholder="Confirm Password"></center><br>
                    <center><button style="width:20%; margin-top:0px; height:45px; font-size:20px; "  type="submit">Submit</button></center>
                    <center><p style="width:20%; height:45px; margin-top:15px; font-size:20px; ">already have an account?<a href="\mini_project\html\login.php">log in</a></p></center>

                </div>
            </div>
        </form>
    </body>
</html>