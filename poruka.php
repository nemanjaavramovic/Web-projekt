<?php
    session_start();
    if(!isset($_SESSION['firstname'])){
        header('Location: kontakt.php');
        exit();
    }

    $firstname=$_SESSION['firstname'];
    $lastname=$_SESSION['lastname'];
    $email=$_SESSION['email'];
    $message=$_SESSION['message'];
    //echo "Pozdrav $firstname $lastname $email $tel $address $city, narucili ste: $orderlist";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "restoran";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    //echo "Connected successfully";



    $sql = "INSERT INTO poruke (first_name, last_name, email, message)
    VALUES ('$firstname', '$lastname', '$email', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Poruka je poslana</title>
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
                    <li><a href="">O nama</a></li>
                </ul>
            </nav>
            <div id="mySidenav" class="sidenav">
                <a id="xbtn" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content" id="sn">
                    <a href="index.php">Naslovna</a>
                    <a href="jelovnik.php">Jelovnik</a>
                    <a href="narudzba.php">Naruči</a>
                    <a href="kontakt.php">Kontakt</a>
                    <a href="#">O nama</a>
                </div>
            </div>
            <span id="mnbtn" style="font-size:30px;cursor:pointer;float:right" onclick="openNav()">&#9776;</span>
        </header>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2 class="section-header">Poruka je poslana.</h2>
        <br>
        <br>
        <br>
        <br>
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
</html>