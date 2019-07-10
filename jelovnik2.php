<!DOCTYPE html>
<html>


<head>
    <title>Jelovnik | Pizze</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <script src="jelovnik.js" async></script>
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
                <li><a id="highlightmenu"href="jelovnik.php">Jelovnik</a></li>
                <li><a href="narudzba.php">Naruči</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
                <li><a href="onama.php">O nama</a></li>
            </ul>
        </nav>
        <div id="mySidenav" class="sidenav">
            <a id="xbtn" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content" id="sn">
                <a href="index.php">Naslovna</a>
                <a id="highlightmenu" href="jelovnik.php">Jelovnik</a>
                <a href="narudzba.php">Naruči</a>
                <a href="kontakt.php">Kontakt</a>
                <a href="onama.php">O nama</a>
            </div>
        </div>
        <span id="mnbtn" style="font-size:30px;cursor:pointer;float:right" onclick="openNav()">&#9776;</span>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div><center>
        <button id="sve">Sve</button>
        <button id="pizze">Pizze</button>
        <button id="rostilj">Roštilj</button>
        <button id="panirano">Panirana jela</button>
        <button id="sendvici">Sendviči</button>
    </center></div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="container-items">
        <h2 class="section-header">PIZZE</h2>
        <div class="shop-items">
            <div class="shop-item column-3" data-order="pizze">
                <span class="shop-item-title">Pizza Capricosa</span>
                <img class="shop-item-image" src="Images/Capricciosa.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">40kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="pizze">
                <span class="shop-item-title">Pizza Vesuvio</span>
                <img class="shop-item-image" src="Images/Vesuvio.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">40kn</font></span>
                    <button class="btn btn-primary shop-item-button"type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="pizze">
                <span class="shop-item-title">Pizza Slavonska</span>
                <img class="shop-item-image" src="Images/Slavonska.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">45kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="pizze">
                <span class="shop-item-title">Pizza Mexican</span>
                <img class="shop-item-image" src="Images/Mexican.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">45kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="pizze">
                <span class="shop-item-title">Pizza s piletinom</span>
                <img class="shop-item-image" src="Images/PiletinaPizza.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">45kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="pizze">
                <span class="shop-item-title">Pizza Tiroleza</span>
                <img class="shop-item-image" src="Images/Tiroleza.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">43kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="pizze">
                <span class="shop-item-title">Pizza Frutti Di Mare</span>
                <img class="shop-item-image" src="Images/FruttiDiMare.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">45kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="pizze">
                <span class="shop-item-title">Pizza Vegeteriana</span>
                <img class="shop-item-image" src="Images/Vegeteriana.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">40kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="pizze">
                <span class="shop-item-title">Pizza Quattro Formaggi</span>
                <img class="shop-item-image" src="Images/QuattroFormaggi.png">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">42kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="pizze">
                <span class="shop-item-title">Pizza Margherita</span>
                <img class="shop-item-image" src="Images/Margherita.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">40kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="pizze">
                <span class="shop-item-title">Pizza La Paprica</span>
                <img class="shop-item-image" src="Images/LaPaprica.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">40kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="pizze">
                <span class="shop-item-title">Pizza Funghi</span>
                <img class="shop-item-image" src="Images/Funghi.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">43kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="rostilj">
                <span class="shop-item-title">Piletina s roštilja</span>
                <img class="shop-item-image" src="Images/Piletina.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">40kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="rostilj">
                <span class="shop-item-title">Gurmanska pljeskavica</span>
                <img class="shop-item-image" src="Images/Gurmanska.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">43kn</font></span>
                    <button class="btn btn-primary shop-item-button"type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="rostilj">
                <span class="shop-item-title">Ražnjići</span>
                <img class="shop-item-image" src="Images/Raznjici.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">40kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="rostilj">
                <span class="shop-item-title">Ćevapi</span>
                <img class="shop-item-image" src="Images/Cevapi.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">35kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="rostilj">
                <span class="shop-item-title">Pileća krilca</span>
                <img class="shop-item-image" src="Images/PilecaKrilca.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">38kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="rostilj">
                <span class="shop-item-title">Svinjska Rebarca</span>
                <img class="shop-item-image" src="Images/SvinjskaRebarca.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">45kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="rostilj">
                <span class="shop-item-title">Rolovana piletina</span>
                <img class="shop-item-image" src="Images/RolovanaPiletina.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">47kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="rostilj">
                <span class="shop-item-title">Biftek</span>
                <img class="shop-item-image" src="Images/Biftek.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">50kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="rostilj">
                <span class="shop-item-title">Ražnjići piletina</span>
                <img class="shop-item-image" src="Images/RaznjiciPiletina.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">40kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="rostilj">
                <span class="shop-item-title">Pljeskavica sa sirom</span>
                <img class="shop-item-image" src="Images/PljeskavicaSir.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">43kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="rostilj">
                <span class="shop-item-title">Pljeskavica</span>
                <img class="shop-item-image" src="Images/Pljeskavica.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">38kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="rostilj">
                <span class="shop-item-title">Miješano meso</span>
                <img class="shop-item-image" src="Images/Mijesano.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">57kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="panirano">
                <span class="shop-item-title">Bečki odrezak</span>
                <img class="shop-item-image" src="Images/Becki.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">43kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="panirano">
                <span class="shop-item-title">Zagrebački odrezak</span>
                <img class="shop-item-image" src="Images/Zagrebacki.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">48kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="panirano">
                <span class="shop-item-title">Panirana piletina</span>
                <img class="shop-item-image" src="Images/PiletinaPanirana.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">44kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="panirano">
                <span class="shop-item-title">Punjena panirana piletina</span>
                <img class="shop-item-image" src="Images/PunjenaPiletina.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">46kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="panirano">
                <span class="shop-item-title">Panirani oslić</span>
                <img class="shop-item-image" src="Images/PaniraniOslic.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">45kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="panirano">
                <span class="shop-item-title">Panirani som</span>
                <img class="shop-item-image" src="Images/PaniraniSom.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">48kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="sendvic">
                <span class="shop-item-title">Sendvič sa šunkom</span>
                <img class="shop-item-image" src="Images/Sunka.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">28kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="sendvic">
                <span class="shop-item-title">Sendvič s kulenom</span>
                <img class="shop-item-image" src="Images/Kulen.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">30kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="sendvic">
                <span class="shop-item-title">Sendvič sa suhim vratom</span>
                <img class="shop-item-image" src="Images/SuhiVrat.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">30kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="sendvic">
                <span class="shop-item-title">Sendvič s piletinom/span>
                <img class="shop-item-image" src="Images/SendvicPiletina.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">32kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="sendvic">
                <span class="shop-item-title">Slavonski sendvič</span>
                <img class="shop-item-image" src="Images/Slavonski.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">35kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" data-order="sendvic">
                <span class="shop-item-title">Vegetarijanski sendvič</span>
                <img class="shop-item-image" src="Images/Vegetarijanski.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price"><font color="white">27kn</font></span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <section class="content-section">
                <div class="istnar">
                    <h2 class="section-header">NARUDŽBA</h2>
                    <div class="cart-row">
                        <span class="cart-item cart-header cart-column"><font color="white">JELO</font></span>
                        <span class="cart-price cart-header cart-column"><font color="white">CIJENA</font></span>
                        <span class="cart-quantity cart-header cart-column"></span>
                    </div>
                    <div class="cart-items">
                    </div>
                    <div class="cart-total">
                        <strong class="cart-total-title"><font color="white">Ukupno</font></strong>
                        <span id="ukupno" class="cart-total-price">0kn</span>
                    </div>
                    <input class="btn btn-primary btn-purchase" type="button" onclick="window.location.href='narudzba.php'" value="NARUČI"></input>
                </div>
            </section>
        </div>
    </section>
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
    
    <script src="filter.js" async></script>
</body>

</html>