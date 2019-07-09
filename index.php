<!DOCTYPE html>
<html>


<head>
    <title>Naslovna</title>
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
                <li><a id="highlightmenu" href="index.php">Naslovna</a></li>
                <li><a href="jelovnik.php">Jelovnik</a></li>
                <li><a href="narudzba.php">Naruči</a></li>
                <li><a href="">Kontakt</a></li>
                <li><a href="">O nama</a></li>
            </ul>
        </nav>
        <div id="mySidenav" class="sidenav">
            <a id="xbtn" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content" id="sn">
                <a id="highlightmenu" href="index.php">Naslovna</a>
                <a href="jelovnik.php">Jelovnik</a>
                <a href="narudzba.php">Naruči</a>
                <a href="#">Kontakt</a>
                <a href="#">O nama</a>
            </div>
        </div>
        <span id="mnbtn" style="font-size:30px;cursor:pointer;float:right" onclick="openNav()">&#9776;</span>
    </header>
    <br>
    <div class="page" id="start">
        <br>
        <br>
        <br>
        <h1 id="welcometxt">Dobro došli na stranicu <i>baratto</i> restorana</h1>
        <img id="baratto2" alt="Logo" src="Images/baratto2.png">
    </div>
    <div class="page" id="second">
        <br>
        <div id="secondback">
            <h1 id="welcometxt">Jeste li pogledali naš jelovnik?</h1>
            <div class="galleryContainer">
                <div class="slideShowContainer">
                    <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
                    <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
                    <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
                    <div class="imageHolder">
                        <a href="naslovna.html"><img src="Images/pizza.jpg"></a>
                        <p class="captionText">Pizze</p>
                    </div>
                    <div class="imageHolder">
                        <a href="naslovna.html"><img src="Images/rostilj.jpg"></a>
                        <p class="captionText">Roštilj</p>
                    </div>
                    <div class="imageHolder">
                        <a href="naslovna.html"><img src="Images/panirano.jpg"></a>
                        <p class="captionText">Panirana jela</p>
                    </div>
                    <div class="imageHolder">
                        <a href="naslovna.html"><img src="Images/sendvic.jpg"></a>
                        <p class="captionText">Sendviči</p>
                    </div>
                </div>
                <div id="dotsContainer"></div>
            </div>
        </div>
        <br>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="page" id="istaknuto">
        <h1 id="welcometxt">Istaknuta jela</h1>
        <img id="baratto2" alt="Logo" src="Images/baratto2.png">
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