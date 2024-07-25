<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar">
        <ul>
            <li class="home-link"><a href="index.php" class="loader-link"><img src="images/home.png" width="30" height="30" alt=""></a></li>
            <li><a href="about.php" class="loader-link">About</a></li>
            <li><a href="contact.php" class="loader-link">Contact</a></li>
            <li><a href="skills.php" class="loader-link">Skills</a></li>
            <li><a href="work.php" class="loader-link">Project</a></li>
            <li><a href="#" onclick="downloadResume()">Resume/CV</a></li>   
        </ul>
    </nav>
    <div class="content">
        <div class="intro-section">
            <h1>Resume</h1>
            <p>Resume Download Section</p>
        </div>
    </div>
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
    <script src="script.js"></script>
</body>
</html>