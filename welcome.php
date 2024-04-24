<?php 
session_start(); 

if(!$_SESSION['email']) 
{ 
 header("Location: login.php");//redirect to the login page to 
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="welcome.css">
</head>

<body>
    <div class="main-class">
        <div class="bar-class">
            <div class="main-bar-home-class">HOME</div>
            <div class="main-bar-menu-class">
                <div class="menu">About</div>
                <div class="menu">Privacy</div>
                <div class="menu">Features</div>
                <div class="menu">contact</div>
                <div class="menu">
                <button class="button-class" onclick="window.location.href = 'logout.php';">Logout</button> </div>
            </div>
        </div>
        <div class="login-info-class">
            <div class="login-class">
                <div class="welcome-class" >WELCOME!
                </div>
                <div class="searchbar">
                    <div class="bar"><input class="bar-input" type="text" title="Search"></div>
                    <div class="voice-class"><a href="#"> <img class="voice"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Google_mic.svg/716px-Google_mic.svg.png"
                                title="Search by Voice"></a> </div>
                </div>
                <div class="more-see-class"> See more</div>
            </div>
            <div class="info-class">
                <div class="main-landing-class">
                    <div class="landing-page-class">Landing Page.</div>
                    <div class="landing-info-class">

                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut
                        dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        quis nostrud exerci tation ullamcorper suscipit lob.

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


