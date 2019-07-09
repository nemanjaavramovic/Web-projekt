<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Narudžba</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <script src="narudzba.js" async></script>
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
                <li><a id="highlightmenu" href="narudzba.php">Naruči</a></li>
                <li><a href="">Kontakt</a></li>
                <li><a href="">O nama</a></li>
            </ul>
        </nav>
        <div id="mySidenav" class="sidenav">
            <a id="xbtn" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content" id="sn">
                <a href="index.php">Naslovna</a>
                <a href="jelovnik.php">Jelovnik</a>
                <a id="highlightmenu" href="narudzba.php">Naruči</a>
                <a href="#">Kontakt</a>
                <a href="#">O nama</a>
            </div>
        </div>
        <span id="mnbtn" style="font-size:30px;cursor:pointer;float:right" onclick="openNav()">&#9776;</span>
    </header>
    <br>
    <br>
    <br>
    <h2 class="section-header">NARUDŽBA</h2>
    
    <div class="form">
        <h3 class="txt"><font color="white">Unesite vaše podatke</font></h3>
        <br>
        <br>
        <form method = "post" action="">
            <label class="txt" for="fname"><font color="white">Ime</font></label>
            <input type="text" id="fname" name="firstname" placeholder="Unesite vaše ime.." pattern=".{2,20}" required>
        
            <label class="txt" for="lname"><font color="white">Prezime</font></label>
            <input type="text" id="lname" name="lastname" placeholder="Unesite vaše prezime.." pattern=".{2,20}" required>
        
            <label class="txt" for="email"><font color="white">E-mail</font></label>
            <input type="email" id="email" name="email" placeholder="Unesite vaš e-mail.." required>

            <label class="txt" for="tel"><font color="white">Broj telefona (od 7 do 13 znamenki)</label>
            <input type="tel" id="tel" name="tel" placeholder="Unesite vaš broj telefona.." pattern="[0-9]{7,13}" required>
            
            <label class="txt" for="address"><font color="white">Adresa</label>
            <input type="text" id="address" name="address" placeholder="Unesite vašu adresu.." pattern=".{2,40}" required>
            
            <label class="txt" for="city"><font color="white">Mjesto</label>
            <input type="text" id="city" name="city" placeholder="Unesite vaše mjesto.." pattern=".{2,20}" required>

            <input type="hidden" value="" id="option" name='option'/>
            <?php

                if(isset($_POST['submit'])
                // && isset($_POST['firstname']) 
                // && isset($_POST['lastname']) 
                // && isset($_POST['email']) 
                // && isset($_POST['tel'])
                // && isset($_POST['address'])
                // && isset($_POST['city'])
                ) {
                    
                    $firstname=$_POST['firstname'];
                    $lastname=$_POST['lastname'];
                    $email=$_POST['email'];
                    $tel=$_POST['tel'];
                    $address=$_POST['address'];
                    $city=$_POST['city'];
                    $orderlist=$_POST['option'];
                    if(strlen($firstname)<1 || strlen($lastname)<1 || strlen($email)<1 || strlen($tel)<1 || strlen($address)<1 || strlen($city)<1){
                        echo '<font color="FF0000"><p align="center"><b>Popunite sva tražena polja!</b></p></font>';
                    }else if(strlen($orderlist)<1){
                        echo '<font color="FF0000"><p align="center"><b>Prvo dodajte jela u narudžbu</b></p></font>';
                    }
                    else{
                        $_SESSION['firstname']=$firstname;
                        $_SESSION['lastname']=$lastname;
                        $_SESSION['email']=$email;
                        $_SESSION['tel']=$tel;
                        $_SESSION['address']=$address;
                        $_SESSION['city']=$city;
                        $_SESSION['orderlist']=$orderlist;
                        $url = "hvala.php";
                        header('Location: '. $url);
                        exit();
                }
                    
                }
            ?>
            <br>
            <br>
            <section class="content-section">
                <div class="istnar">
                    <h2 class="section-header">NARUDŽBA</h2>
                    <div class="cart-row">
                        <span class="cart-item cart-header cart-column"><font color="white">JELO</font></span>
                        <span class="cart-price cart-header cart-column"><font color="white">CIJENA</font></span>
                        <span class="cart-quantity cart-header cart-column"><font color="white">KOLIČINA</font></span>
                    </div>
                    <div class="cart-items">
                    </div>
                    <div class="cart-total">
                        <strong class="cart-total-title"><font color="white">Ukupno</font></strong>
                        <span id="ukupno" class="cart-total-price">0kn</span>
                    </div>
                </div>
            </section>
            <br>
            <input class="btn btn-primary btn-purchase" type="submit" value="NARUČI" name="submit">
        </form>
    </div>
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
</html>