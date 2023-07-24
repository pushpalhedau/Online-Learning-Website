
<html>
<body>
<style>
*{
    font-family: sans-serif,'Netflix Font';
    margin:0%;
    color: white;
}

.bgimg{
    width: 100%;
    height: 100%;
}

.c_name{
    position: absolute;
    top: 2%;
    font-size: 50px;
    margin-left: 3%;
    background-color: gray;
    border-radius: 5px;
}

.c_id{
    position: absolute;
    font-size: 30px;
    top: 10.5%;
    margin-left: 3%;
    background-color: black;
    border-radius: 5px;
}

.c_hg{
    position: absolute;
    font-size: 25px;
    top: 15.9%;
    margin-left: 3%;
    background-color: gray;
    border-radius: 5px;
}

.li1{
    position: absolute;
    font-size: 20px;
    top: 20.5%;
    margin-left: 3%;
    background-color: black;
}
.li2{
    position: absolute;
    top: 24%;
    font-size: 20px;
    background-color: black;
    margin-left: 3%;
}
.li3{
    position: absolute;
    top: 27.5%;
    font-size: 20px;
    margin-left: 3%;
    background-color: black;
}
.li4{
    position: absolute;
    top: 31%;
    margin-left: 3%;
    font-size: 20px;
    background-color: black;
}
.li5{
    position: absolute;
    top: 34.5%;
    background-color: black;
    font-size: 20px;
    margin-left: 3%;
}
.li6{
    position: absolute;
    top: 38.25%;
    background-color: black;
    font-size: 20px;
    margin-left: 3%;
}

.y_teacher{
    position: absolute;
    top: 42%;
    font-size: 30px;
    margin-left: 3%;
    background-color: gray;
    border-radius: 5px;
}

.t_name{
    position: absolute;
    font-size: 20px;
    top: 47%;
    margin-left: 3%;
    background-color: black;
    border-radius: 5px;
}

.review{
    position: absolute;
    top: 50.5%;
    font-size: 30px;
    margin-left: 3%;
    background-color: gray;
    border-radius: 5px;
}
.li7{
    position: absolute;
    top: 55.5%;
    font-size: 20px;
    background-color: black;
    margin-left: 3%;
}

.li8{
    position: absolute;
    top: 65.5%;
    font-size: 20px;
    background-color: black;
    margin-left: 3%;
}

.li9{
    position: absolute;
    font-size: 20px;
    top: 75.5%;
    margin-left: 3%;
    background-color: black;
}
.para{
    position: absolute;
    background-color: grey;
    border-radius: 5px;
    top: 24%; 
    font-size: 30px; 
    margin-left: 60%;
}

.form{
    position: absolute;
    top: 30%;  
    margin-left: 60%;
}
.ip{
    font-size: 20px;
    color: white;
    border-radius:5px ;
    width: 170%;
    margin-bottom: 5px;
    height: 50px;
    background-color: black;
}

</style>

<img class="bgimg" src="\mini_project\img\background_img.jpeg">
    <h1 class="c_name">Machine Learning</h1>
    <h2 class="c_id">(206)</h2>
    <h3 class="c_hg">course highlights</h3>
    <div class="li1-6">
    <li class="li1">Learn online: At your own schedule</li>
    <li class="li2">Mobile friendly: No laptop? No problem</li>
    <li class="li3">Beginner friendly: No prior knowledge required</li>
    <li class="li4">Downloadable content: With lifetime access</li>
    <li class="li5">Learn concepts: Go through training videos to learn concepts</li>
    <li class="li6">Hands-on practice: Work on assignments and projects.</li>
    </div>
    <h2 class="y_teacher">Your teacher</h3>
    <h3 class="t_name">Rakesh Roshan</h3>
    <h2 class="review">Students review</h3>
    <div class="li7-9">
    <li class="li7">I got placed in a company for the role of Web Developer!<br> It was only because of the training content which helped me improve my skills.<br> Assignments and tests checked my training learnings very effectively.</li>
    <li class="li8">I learnt Web Development from scratch. The tutorials and <br>topics were well prepared, clearly explained, and easy to grasp. All the queries<br> were answered by the teacher which helped me a lot.</li>
    <li class="li9">Now I can develop websites with awesome designs!<br> A well-designed training, Internshala Trainings helps you learn website <br>building from scratch. Explanation and doubt clarification are the plus points of the teacher.</li>
    </div>
    <p class="para">Fill details below to enroll</p>
    <form class="qwe" method="get" action="enrolled.php">
        <div class="form">
            <input class="ip" type="name" placeholder="enter course id" name="course_id"><br>
            <input class="ip" type="email" placeholder="enter email" name="email"><br>
            <input class="ip" type="password" placeholder="enter password" name="p_word"><br>
            <button class="ip" type="submit">submit</button>
        </div>
    </form>
</body>
</html>