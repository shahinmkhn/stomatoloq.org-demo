<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="shortcut icon" href="assets/s.svg" />
    <meta charset="utf-8" />
    <meta name='viewport' 
     content='width=device-width, initial-scale=1.0, maximum-scale=1.0,   user-scalable=0' >
    <title>    
        stomatoloq.org
    </title>
    <link rel="stylesheet" href=css/reset.css>
    <link rel="stylesheet" href=css/main.css>
</head>

<body>


    <div class=navbar>
        <div class=container>
          <a class="logo" href="index.php">stomatoloq<span>.org</span></a>
            <img id="mobmenu" src="assets/mob-menu.svg" class="mobmenu" alt="" height="25px" width="25px">
            <nav>
                
                <img id="mobcancel" class="mobcancel" src="assets/cancel.svg" alt="" height="21px" width="21px">

                <ul class="primary-nav">
                     
                    <li class="current"><a href="index.php" class="nava">Ana səhifə</a>
                    <li><a class="nava" href="about.php">Haqqımızda</a>
                    <li"><a href="#elaqe" class="nava">Əlaqə</a>

                </ul>

                <script>
       document.getElementById("mobmenu").addEventListener('contextmenu', event => event.preventDefault());
       document.getElementById("mobcancel").addEventListener('contextmenu', event => event.preventDefault());
       
</script>

<ul class="secondary-nav">
        <?php

    if(isset($_SESSION["useremail"])){

            echo "<li><a href=\"account.php\" class=\"nava\">Hesab</a>";
            echo "<li class=\"navachix\"><a href=\"includes/logout.inc.php\" class=\"nava\">Çıx</a>";

        } else {

            echo "<li><a href=\"login.php\" class=\"nava\">Daxil ol</a>";
            echo "<li class=\"qeydiyyat\"><a href=\"register.php\" class=\"nava\">Hesab aç</a>";


        }

?>
</ul>    
            </nav>
        </div>
    </div>

    <script>

const mobileBtn = document.getElementById("mobmenu")
nav  = document.querySelector('nav')
mobileBtnExit = document.getElementById('mobcancel');

mobileBtn.addEventListener('click', () => {

    nav.classList.add('menu-btn');
    });


mobileBtnExit.addEventListener('click', () => {

    nav.classList.remove('menu-btn');
    });

</script>