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

.heading1{
  margin-left:10%;
  font-size:40px;
}

.next{
  font-size:300%;
  color:white;
  background-color:transparent;
  border-color:transparent;
  position:absolute;
  top:20.2%;
  width: 7%;
  height: 420px;
  right:0;
}

.next:hover{
  font-size:550%;
  transition:0.4s;
}

.prev{
  font-size:300%;
  color:white;
  background-color:transparent;
  border-color:transparent;
  position:absolute;
  top:20.2%;
  width: 7%;
  height: 420px;
  left:0;
}

.prev:hover{
  font-size:550%;
  transition:0.4s;
}

.category{
  margin-left:10%;
  font-size:35px;
}
.list1:hover{
  box-shadow:2px 2px 2px 2px;
}

.list2:hover{
  box-shadow:2px 2px 2px 2px;
}
.list3:hover{
  box-shadow:2px 2px 2px 2px;
}
.list4:hover{
  box-shadow:2px 2px 2px 2px;
}
.list5:hover{
  box-shadow:2px 2px 2px 2px;
}
.list6:hover{
  box-shadow:2px 2px 2px 2px;
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
        <br>
        <h1 class="heading1">Upcoming Courses</h1><br>
        <div class="ss_courses_img">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "123456789";
            $dbname = "all_courses";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            $i = 1;
            $rows = mysqli_query($conn, "SELECT * FROM ss_courses ORDER BY course_id asc Limit 3");
            foreach ($rows as $row) : ?>
                <img class="slideshow" style="width: 100%; height: 420px; display: block; " src="\mini_project\img\<?php echo $row['course_img']; ?>">
            <?php endforeach; ?>
            <script>
                let slideIndex = 1;
                showSlides(slideIndex);
                
                function plusSlides(n) {
                      showSlides(slideIndex += n);
                    }
                    
                    function showSlides(n) {
                          let i;
                            let slides = document.getElementsByClassName("slideshow");
                              if (n > slides.length) {slideIndex = 1}    
                                if (n < 1) {slideIndex = slides.length}
                                  for (i = 0; i < slides.length; i++) {
                                        slides[i].style.display = "none";  
                                      }
                                        slides[slideIndex-1].style.display = "block";
                                    }
            </script><br>
            <button class="prev" onclick="plusSlides(-1)">❮</button>
            <button class="next" onclick="plusSlides(1)">❯</button>
        </div><br>
        <div><p style="font-size:40px; text-align:center;"><b>Online Training We Offer</b></p></div><br><br>
        <div><h2 class="category">Programming</h2></div>
        <div class="category_img" style="box-sizing:content-box;">
            <?php
            $a = 1;
            $rows = mysqli_query($conn, "SELECT * FROM course_type Where course_category='programming'");
            foreach ($rows as $row) : ?>
                <a href="\mini_project\css\<?php echo $row['course_id']; ?>.php"><img style="border-radius: 10px; width: 20%; height: 35%; display:inline-block; margin: 35px; " class="list1" src="\mini_project\img\<?php echo $row['course_img']; ?>"></a>
            <?php endforeach;
            ?>
            <script>
                let Index1 = 1;
                scrollSlides1(Index1);
                
                function plusscroll1(a) {
                      scrollSlides1(Index1 += a);
                    }
                    
                    function scrollSlides1(a) {
                          let b;
                            let scroll_images1 = document.getElementsByClassName("list1");
                              if (a > scroll_images1.length) {Index1 = 4}    
                                if (a < 4) {Index1 = scroll_images1.length}
                                  for (b = 0; b < scroll_images1.length; b++) {
                                        scroll_images1[b].style.display = "none";
                                      }
                                        scroll_images1[Index1-1].style.display = "";
                                          scroll_images1[Index1-2].style.display = "";
                                            scroll_images1[Index1-3].style.display = "";
                                              scroll_images1[Index1-4].style.display = "";
                                            }
            </script>
            <button style="width:40px; height:40px; font-size:20px; border-radius:50%; display: inline; margin-left: 45%; margin-right: auto;" class="r_prog" onclick="plusscroll1(-1)">❮</button>
            <button style="width:40px; height:40px; font-size:20px; border-radius:50%; display: inline; margin-left: ; margin-right: 45%;" class="l_prog" onclick="plusscroll1(1)">❯</button>
        </div>
        <div><h2 class="category">Business & Management</h2></div>
        <div class="category_img" style="box-sizing:content-box;">
            <?php
            $b = 1;
            $rows = mysqli_query($conn, "SELECT * FROM course_type Where course_category='Business & Management'");
            foreach ($rows as $row) : ?>
                <img style="border-radius: 10px; width: 20%; height: 35%; display:inline-block; margin: 35px; " class="list2" src="\mini_project\img\<?php echo $row['course_img']; ?>">
            <?php endforeach;
            ?>
            <script>
                let Index = 1;
                scrollSlides(Index);
                
                function plusscroll(a) {
                      scrollSlides(Index += a);
                    }
                    
                    function scrollSlides(a) {
                          let b;
                            let scroll_images = document.getElementsByClassName("list2");
                              if (a > scroll_images.length) {Index = 4}    
                                if (a < 4) {Index = scroll_images.length}
                                  for (b = 0; b < scroll_images.length; b++) {
                                        scroll_images[b].style.display = "none";
                                      }
                                        scroll_images[Index-1].style.display = "";
                                          scroll_images[Index-2].style.display = "";
                                            scroll_images[Index-3].style.display = "";
                                              scroll_images[Index-4].style.display = "";
                                            }
            </script>
            <button style="width:40px; height:40px; font-size:20px; border-radius:50%; display: inline; margin-left: 45%; margin-right: auto;" class="r_bm" onclick="plusscroll(-1)">❮</button>
            <button style="width:40px; height:40px; font-size:20px; border-radius:50%; display: inline; margin-left: ; margin-right: 45%;" class="l_bm" onclick="plusscroll(1)">❯</button>
        </div>
        <div><h2 class="category">Architecture</h2></div>
        <div class="category_img" style="box-sizing:content-box;">
            <?php
            $c = 1;
            $rows = mysqli_query($conn, "SELECT * FROM course_type Where course_category='Architecture'");
            foreach ($rows as $row) : ?>
                <img style="border-radius: 10px; width: 20%; height: 35%; display:inline-block; margin: 35px; " class="list3" src="\mini_project\img\<?php echo $row['course_img']; ?>">
            <?php endforeach;
            ?>
            <script>
                let Index3 = 1;
                scrollSlides3(Index3);
                
                function plusscroll3(a) {
                      scrollSlides3(Index3 += a);
                    }
                    
                    function scrollSlides3(a) {
                          let b;
                            let scroll_images3 = document.getElementsByClassName("list3");
                              if (a > scroll_images3.length) {Index = 4}    
                                if (a < 4) {Index3 = scroll_images3.length}
                                  for (b = 0; b < scroll_images3.length; b++) {
                                        scroll_images3[b].style.display = "none";
                                      }
                                        scroll_images3[Index3-1].style.display = "";
                                          scroll_images3[Index3-2].style.display = "";
                                            scroll_images3[Index3-3].style.display = "";
                                              scroll_images3[Index3-4].style.display = "";
                                            }
            </script>
            <button style="width:40px; height:40px; font-size:20px; border-radius:50%; display: inline; margin-left: 45%; margin-right: auto;" class="r_a" onclick="plusscroll3(-1)">❮</button>
            <button style="width:40px; height:40px; font-size:20px; border-radius:50%; display: inline; margin-left: ; margin-right: 45%;" class="l_a" onclick="plusscroll3(1)">❯</button>
        </div>
        <div><h2 class="category">Data Science</h2></div>
        <div class="category_img" style="box-sizing:content-box;">
            <?php
            $d = 1;
            $rows = mysqli_query($conn, "SELECT * FROM course_type Where course_category='Data Science'");
            foreach ($rows as $row) : ?>
                <img style="border-radius: 10px; width: 20%; height: 35%; display:inline-block; margin: 35px; " class="list4" src="\mini_project\img\<?php echo $row['course_img']; ?>">
            <?php endforeach;
            ?>
            <script>
                let Index4 = 1;
                scrollSlides4(Index4);
                
                function plusscroll4(a) {
                      scrollSlides4(Index4 += a);
                    }
                    
                    function scrollSlides4(a) {
                          let b;
                            let scroll_images4 = document.getElementsByClassName("list4");
                              if (a > scroll_images4.length) {Index4 = 4}    
                                if (a < 4) {Index4 = scroll_images4.length}
                                  for (b = 0; b < scroll_images4.length; b++) {
                                        scroll_images4[b].style.display = "none";
                                      }
                                        scroll_images4[Index4-1].style.display = "";
                                          scroll_images4[Index4-2].style.display = "";
                                            scroll_images4[Index4-3].style.display = "";
                                              scroll_images4[Index4-4].style.display = "";
                                            }
            </script>
            <button style="width:40px; height:40px; font-size:20px; border-radius:50%; display: inline; margin-left: 45%; margin-right: auto;" class="r_ds" onclick="plusscroll4(-1)">❮</button>
            <button style="width:40px; height:40px; font-size:20px; border-radius:50%; display: inline; margin-left: ; margin-right: 45%;" class="l_ds" onclick="plusscroll4(1)">❯</button>
        </div>
        <div><h2 class="category">Design</h2></div>
        <div class="category_img" style="box-sizing:content-box;">
            <?php
            $e = 1;
            $rows = mysqli_query($conn, "SELECT * FROM course_type Where course_category='Design'");
            foreach ($rows as $row) : ?>
                <img style="border-radius: 10px; width: 20%; height: 35%; display:inline-block; margin: 35px; " class="list5" src="\mini_project\img\<?php echo $row['course_img']; ?>">
            <?php endforeach;
            ?>
            <script>
                let Index5 = 1;
                scrollSlides5(Index5);
                
                function plusscroll5(a) {
                      scrollSlides5(Index5 += a);
                    }
                    
                    function scrollSlides5(a) {
                          let b;
                            let scroll_images5 = document.getElementsByClassName("list5");
                              if (a > scroll_images5.length) {Index5 = 4}    
                                if (a < 4) {Index5 = scroll_images5.length}
                                  for (b = 0; b < scroll_images5.length; b++) {
                                        scroll_images5[b].style.display = "none";
                                      }
                                        scroll_images5[Index5-1].style.display = "";
                                          scroll_images5[Index5-2].style.display = "";
                                            scroll_images5[Index5-3].style.display = "";
                                              scroll_images5[Index5-4].style.display = "";
                                            }
            </script>
            <button style="width:40px; height:40px; font-size:20px; border-radius:50%; display: inline; margin-left: 45%; margin-right: auto;" class="r_d" onclick="plusscroll5(-1)">❮</button>
            <button style="width:40px; height:40px; font-size:20px; border-radius:50%; display: inline; margin-left: ; margin-right: 45%;" class="l_d" onclick="plusscroll5(1)">❯</button>
        </div>
        <div><h2 class="category">Creative Arts</h2></div>
        <div class="category_img" style="box-sizing:content-box;">
            <?php
            $f = 1;
            $rows = mysqli_query($conn, "SELECT * FROM course_type Where course_category='Creative Arts'");
            foreach ($rows as $row) : ?>
                <img style="border-radius: 10px; width: 20%; height: 35%; display:inline-block; margin: 35px; " class="list6" src="\mini_project\img\<?php echo $row['course_img']; ?>">
            <?php endforeach;
            ?>
            <script>
                let Index6 = 1;
                scrollSlides6(Index6);
                
                function plusscroll6(a) {
                      scrollSlides6(Index6 += a);
                    }
                    
                    function scrollSlides6(a) {
                          let b;
                            let scroll_images6 = document.getElementsByClassName("list6");
                              if (a > scroll_images6.length) {Index6 = 4}    
                                if (a < 4) {Index6 = scroll_images6.length}
                                  for (b = 0; b < scroll_images6.length; b++) {
                                        scroll_images6[b].style.display = "none";
                                      }
                                        scroll_images6[Index6-1].style.display = "";
                                          scroll_images6[Index6-2].style.display = "";
                                            scroll_images6[Index6-3].style.display = "";
                                              scroll_images6[Index6-4].style.display = "";
                                            }
            </script>
            <button style="width:40px; height:40px; font-size:20px; border-radius:50%; display: inline; margin-left: 45%; margin-right: auto;" class="r_ca" onclick="plusscroll6(-1)">❮</button>
            <button style="width:40px; height:40px; font-size:20px; border-radius:50%; display: inline; margin-left: ; margin-right: 45%;" class="l_ca" onclick="plusscroll6(1)">❯</button>
        </div>
<br><br>




    </body>
</html>