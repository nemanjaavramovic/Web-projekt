<!DOCTYPE html>
<html>


<head>
    <title>O nama</title>
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
                <li><a href="kontakt.php">Kontakt</a></li>
                <li><a id="highlightmenu" href="onama.php">O nama</a></li>
            </ul>
        </nav>
        <div id="mySidenav" class="sidenav">
            <a id="xbtn" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content" id="sn">
                <a href="index.php">Naslovna</a>
                <a href="jelovnik.php">Jelovnik</a>
                <a href="narudzba.php">Naruči</a>
                <a href="kontakt.php">Kontakt</a>
                <a id="highlightmenu" href="onama.php">O nama</a>
            </div>
        </div>
        <span id="mnbtn" style="font-size:30px;cursor:pointer;float:right" onclick="openNav()">&#9776;</span>
    </header>
    <br>
    <br>
    <div class="ab1">
        <div class="imghold">
            <img id="image1" src="Images/restaurant.jpg">
        </div>
        <div id="parag1">
            <h2 class="section-header">Jeste li nas posjetili?</h2>
            <p><font color="white">Restoran <i>barrato</i> osnovan je 1979. godine te i dan danas čuva tradiciju Slavonije. Izazov nam je ugostiti Vas i ponuditi Vam sve gastronomske delicije naše gastro kuhinje. Okruženje našeg gastro prostora izuzetno je ugodno, što će Vam ostaviti dojam lagode dok uživate u jelima naše kuhinje. Ugodan ambijent restorana zadržao je elemente tradicije uz tradicijalnu Slavonsku glazbu, ali suvremnenim uređenjem poručuje da se razvija u duhu vremena i u skaldu sa zahtjevima suvremenog gosta.</font></p>
        </div>
    </div>
    <br>
    <div class="ab1">
        <div id="parag1a">
            <h2 class="section-header">Vrhunska kuhinja? Ocijenite sami.</h2>
            <p><font color="white">Vrhunska domaća kuhinja, roštilj na drveni ugljen, svinjska rebarca, domaći kruh, zagorska juha, jela ispod peke… Ovo su samo neka od jela koja već dugi niz godina poslužujemo u ambijentu restorana <i>baratto</i>. Uz poštivanje tradicije brinemo i o inovativnosti pa neka tradicionalna jela kod nas možete kušati u novom, zanimljivijem ruhu. Jela možete naručiti preko stranice ili pozivom na broj. Dostava se obavlja unutar sat vremena. Stoga, ako ste gladni, ne čekajte, nego pogledajte našu ponudu. </font></p>
        </div>
        <div class="imghold">
            <img id="image1" src="Images/res2.jpg">
        </div>
    </div>
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