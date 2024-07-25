<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>About Me</title>
</head>
<body>
    <div id="loader-overlay"></div> 
    <nav class="navbar">
    <ul>
        <li class="home-link"><a href="index.php"  class="loader-link"><img src="home.png" width="30" height="30" alt=""></a></li>
        <li class="nav"><a href="about.php" class="loader-link">About</a></li>
        <li class="nav"><a href="contact.php" class="loader-link">Contact</a></li>
        <li class="nav"><a href="skills.php" class="loader-link">Skills</a></li>
        <!-- <li class="nav"><a href="work.php" class="loader-link">Project</a></li> -->
        <li class="nav"><a href="#" onclick="downloadResume()">Resume/CV</a></li>
    </ul>
</nav>
<div id="loader">
        <div class="loader-content">
            <div class="loader-animation">
                <div class="box">
                    <div class="box__item" style="--box__item-nbr: 0;"></div>
                    <div class="box__item" style="--box__item-nbr: 1;"></div>
                    <div class="box__item" style="--box__item-nbr: 2;"></div>
                    <div class="box__item" style="--box__item-nbr: 3;"></div>
                    <div class="box__item" style="--box__item-nbr: 4;"></div>
                    <div class="box__item" style="--box__item-nbr: 5;"></div>
                    <div class="box__item" style="--box__item-nbr: 6;"></div>
                    <div class="box__item" style="--box__item-nbr: 7;"></div>
                    <div class="box__item" style="--box__item-nbr: 8;"></div>
                    <div class="box__item" style="--box__item-nbr: 9;"></div>
                </div>
            </div>
            <p class="loader-text">Humza is thinking</p>
        </div>
    </div>
    <div class="container">
        <div class="right-col">
            <div class="head">
                <h1>About me</h1
                <p> "I AM CURRENTLY A SECOND-YEAR STUDENT PURSUING B.TECH IN COMPUTER SCIENCE AND ENGINEERING. I HAVE A STRONG INTEREST IN EXPLORING VARIOUS ASPECTS OF TECHNOLOGY, INCLUDING PROGRAMMING LANGUAGES, SOFTWARE DEVELOPMENT, AND PROBLEM-SOLVING THROUGH COMPUTER SCIENCE PRINCIPLES. 
           I AM COMMITTED TO LEARNING AND GROWING IN THIS DYNAMIC FIELD, EAGER TO CONTRIBUTE TO INNOVATIVE SOLUTIONS AND ADVANCEMENTS IN TECHNOLOGY."</p>
                iv class="timeline">
                <div class="two-colored-line">
                    <div class="line-section white"></div>
                    <div class="line-section black"></div>
                    <span class="year left">July -2024</span>
                    <span class="year right">Aug -2024</span>
                </div>
            </div>
            </div>
        </div>
        <div class="left-col"></div>
</div>
    <script src="script.js"></script>
</body>
</html>
