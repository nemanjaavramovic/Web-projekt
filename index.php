
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jelovnik | Pice</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <script src="jelovnik.js" async></script>
</head>

<body>
    <header class="container container-menu">
            <nav class="menu-nav food-nav">
                <ul>
                    <li><a href="">Naslovna</a></li>
                    <li><a id="highlightmenu" href="index.php">Jelovnik</a></li>
                    <li><a href="narudzba.php">Naruči</a></li>
                    <li><a href="">Kontakt</a></li>
                    <li><a href="">O nama</a></li>
                </ul>
            </nav>
    </header>
    <section class="container container-food-nav">
        <nav class="nav food-nav">
            <ul>
                <li><a id="highlightfood" href="index.php">Pizze</a></li>
                <li><a href="rostilj.php">Roštilj</a></li>
                <li><a href="about.html">Pohovano</a></li>
                <li><a href="about.html">Sendviči</a></li>
            </ul>
        </nav>
    </section>
    <section class="container">
        <h2 class="section-header">PIZZE</h2>
        <div class="shop-items">
            <div class="shop-item column-3">
                <span class="shop-item-title">Pizza Capricosa</span>
                <img class="shop-item-image" src="Images/Capricciosa.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price">40kn</span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3">
                <span class="shop-item-title">Pizza Vesuvio</span>
                <img class="shop-item-image" src="Images/Vesuvio.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price">40kn</span>
                    <button class="btn btn-primary shop-item-button"type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3">
                <span class="shop-item-title">Pizza Slavonska</span>
                <img class="shop-item-image" src="Images/Slavonska.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price">45kn</span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3">
                <span class="shop-item-title">Pizza Mexican</span>
                <img class="shop-item-image" src="Images/Mexican.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price">45kn</span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" style="display: none;">
                <span class="shop-item-title">Piletina s roštilja</span>
                <img class="shop-item-image" src="Images/Piletina.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price">40kn</span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" style="display: none;">
                <span class="shop-item-title">Gurmanska pljeskavica</span>
                <img class="shop-item-image" src="Images/Gurmanska.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price">43kn</span>
                    <button class="btn btn-primary shop-item-button"type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" style="display: none;">
                <span class="shop-item-title">Ražnjići</span>
                <img class="shop-item-image" src="Images/Raznjici.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price">40kn</span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
            <div class="shop-item column-3" style="display: none;">
                <span class="shop-item-title">Ćevapi</span>
                <img class="shop-item-image" src="Images/Cevapi.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price">35kn</span>
                    <button class="btn btn-primary shop-item-button" type="button">DODAJ U NARUDŽBU</button>
                </div>
            </div>
        </div>
    </section>
    <section class="container content-section">
        <h2 class="section-header">NARUDŽBA</h2>
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">JELO</span>
            <span class="cart-price cart-header cart-column">CIJENA</span>
            <span class="cart-quantity cart-header cart-column"></span>
        </div>
        <div class="cart-items">
        </div>
        <div class="cart-total">
            <strong class="cart-total-title">Ukupno</strong>
            <span class="cart-total-price">0kn</span>
        </div>
        <input class="btn btn-primary btn-purchase" type="button" onclick="window.location.href='narudzba.php'" value="NARUČI"></input>
</section>
</body>

</html>