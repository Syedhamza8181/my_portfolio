<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Form</title>
</head>
<body>
    <div id="loader-overlay"></div> 
    <nav class="navbar">
        <ul>
            <li class="home-link"><a href="index.php" class="loader-link"><img src="home.png" width="30" height="30" alt=""></a></li>
            <li><a href="about.php" class="loader-link">About</a></li>
            <li><a href="contact.php" class="loader-link">Contact</a></li>
            <li><a href="skills.php" class="loader-link">Skills</a></li>
            <!-- <li><a href="work.php" class="loader-link">Project</a></li> -->
            <li><a href="#" onclick="downloadResume()">Resume/CV</a></li>   
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
                <h1>Contact me</h1>
                <h3>I am interested in freelance opportunity - especially ambitious or large projects. However, if you have other requests or questions, don't hesitate to contact me using the form below.</h3>
            </div>
            <div class="input-container">
                <form id="contactForm" action="connection.php" method="post">
                    <div class="flex-container">
                        <div class="styled-input half">
                            <input type="text" id="firstName" name="firstName" placeholder="Mohd">
                            <span id="firstNameError" class="validation-message"></span>
                        </div>
                        <div class="styled-input half">
                            <input type="text" id="lastName" name="lastName" placeholder="Humza">
                            <span id="lastNameError" class="validation-message"></span>
                        </div>
                    </div>
                    <div class="styled-input wide">
                        <input type="email" id="email" name="useremail" placeholder="xyz@gmail.com">
                        <span id="emailError" class="validation-message"></span>
                    </div>
                    <div class="styled-input wide">
                        <textarea name="usermessage" id="message" placeholder="Your insights"></textarea>
                        <span id="messageError" class="validation-message"></span>
                    </div>
                    <div class="submit-btn">
                        <span id="successMessage" class="success-message">
                            <img src="images/check-mark.png" alt="Success Icon" class="success-icon">    
                            I appreciate your reaching out
                        </span>
                        <button type="submit" name="btn-send" id="popupButton">Send</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="left-col"></div>
    </div>
    <script src="script.js"></script>
</body>
</html>
