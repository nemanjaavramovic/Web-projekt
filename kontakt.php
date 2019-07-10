<?php
  session_start();
?>

<!DOCTYPE html>
<html>


<head>
    <title>Kontakt</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <script src="myScript2.js" async></script>
</head>
<body>
    <header class="container-menu">
        <div id= "logo-holder">
            <a href="index.php"><img id="logo" alt="Logo" src="Images/logo.png" width="100px" height="100px"></a>
        </div>
        <nav class="menu-nav food-nav" id="mv">
            <ul>
                <li><a href="index.php">Naslovna</a></li>
                <li><a href="jelovnik.php">Jelovnik</a></li>
                <li><a href="narudzba.php">Naruči</a></li>
                <li><a id="highlightmenu" href="kontakt.php">Kontakt</a></li>
                <li><a href="onama.php">O nama</a></li>
            </ul>
        </nav>
        <div id="mySidenav" class="sidenav">
            <a id="xbtn" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content" id="sn">
                <a href="index.php">Naslovna</a>
                <a href="jelovnik.php">Jelovnik</a>
                <a href="narudzba.php">Naruči</a>
                <a id="highlightmenu" href="kontakt.php">Kontakt</a>
                <a href="onama.php">O nama</a>
            </div>
        </div>
        <span id="mnbtn" style="font-size:30px;cursor:pointer;float:right" onclick="openNav()">&#9776;</span>
    </header>
    <br>
    <br>
    <br>
    <h2 class="section-header">KONTAKT</h2>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class ="row3">
        <div class="column3 column-6">
            <br>
            <br>
            <h3 class="txt"><font color="white">Unesite vaše podatke</font></h3>
            <br>
            <form method = "post" action="">
                <label class="txt" for="fname"><font color="white">Ime</font></label>
                <input id="knt" type="text" id="fname" name="firstname" placeholder="Unesite vaše ime.." pattern=".{2,20}" required>
                <label class="txt"for="lname"><font color="white">Prezime</font></label>
                <input id="knt" type="text" id="lname" name="lastname" placeholder="Unesite vaše prezime.." pattern=".{2,20}" required>
                <label class="txt" for="email"><font color="white">E-mail</font></label>
                <input id="knt" type="email" id="email" name="email" placeholder="Unesite vaš e-mail.." required>
                <label class="txt"><font color="white">Poruka</font></label>
                <br>
                <textarea id="knt" name="message" rows="8" cols="50" placeholder="Unesite vašu poruku.." pattern=".{2,1000}" required></textarea>
                <br>
                <?php

                if(isset($_POST['submit'])
                ) {
                    
                    $firstname=$_POST['firstname'];
                    $lastname=$_POST['lastname'];
                    $email=$_POST['email'];
                    $message=$_POST['message'];
                    if(strlen($firstname)<1 || strlen($lastname)<1 || strlen($email)<1 || strlen($message)<1){
                        echo '<font color="FF0000"><p align="center"><b>Popunite sva tražena polja!</b></p></font>';
                    }
                    else{
                        $_SESSION['firstname']=$firstname;
                        $_SESSION['lastname']=$lastname;
                        $_SESSION['email']=$email;
                        $_SESSION['message']=$message;
                        $url = "poruka.php";
                        header('Location: '. $url);
                        exit();
                }
                    
                }
                ?>          
                <input id="knt" class="btn btn-primary btn-purchase" type="submit" value="POŠALJI" name="submit">
                <br>
                <br>
                <br>
            </form>
        </div>
        <div id="map" class="column3 column-6">
            <div class="inf">
                <h1><font color="white">Radno vrijeme</font></h1>
                <p><font color="white">Ponedjeljak - Subota 08:00 - 23:00</font></p>
                <p><font color="white">Nedjelja - Praznik 12:00 - 23:00</font></p>
            </div>
            <br>
            <div class="inf">
                <h1><font color="white">Broj telefona</font></h1>
                <p><font color="white">Fiksni: 032/438-971</font></p>
                <p><font color="white">Mobilni: 098 942 8333</font></p>
                <p><font color="white">E-mail: nemanja.avramovic1996@gmail.com</font></p>
            </div>
            <br>
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.876303288808!2d18.700703615075273!3d45.55281383554802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475ce7c8e62e3bb9%3A0x5d7a03f66279d56e!2sUl.+Ivana+Gorana+Kova%C4%8Di%C4%87a+11%2C+31000%2C+Osijek!5e0!3m2!1shr!2shr!4v1562513362944!5m2!1shr!2shr" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="page" id="footer">
            <div class ="firstrow">
                <div id="soclogos">
                        <a href="https://www.facebook.com/"><img class="sl" alt="FB" src="Images/Facebook.png"></a>
                        <a href="https://www.instagram.com/"><img class="sl" alt="IG" src="Images/Instagram.png"></a>
                        <a href="https://twitter.com"><img class="sl" alt="TW" src="Images/Twitter.png"></a>
                        <a href="https://www.youtube.com/"><img class="sl" alt="YT" src="Images/Youtube.png"></a>
                </div>
            </div>
            <div class="secondrow">
                <p><font color="white">©2019 Nemanja Avramović, Sva prava pridržana</font></p>
            </div>
    </div>
</body>
<script src="myScript.js"></script>

</html>