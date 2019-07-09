<!DOCTYPE html>
<html>
<head>
    <title>Odgovorene poruke</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <script src="myScript2.js" async></script>
</head>
    <body>
        <div>
            <h4 class="section-header">Dobro došli Nemanja</h4>
        </div>
        <header class="container-menu">
            <div id= "logo-holder">
                <a href="index.php"><img id="logo" alt="Logo" src="Images/logo.png" width="100px" height="100px"></a>
            </div>
            <nav class="menu-nav food-nav" id="mv">
                <ul>
                    <li><a href="adminporuke.php">Neodgovorene poruke</a></li>
                    <li><a id="highlightmenu" href="odgporuke.php">Odgovorene poruke</a></li>
                    <li><a href="logout.php">Odjava</a></li>
                </ul>
            </nav>
            <div id="mySidenav" class="sidenav">
                <a id="xbtn" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content" id="sn">
                    <li><a href="adminporuke.php">Neodgovorene poruke</a></li>
                    <li><a id="highlightmenu" href="odgporuke.php">Odgovorene poruke</a></li>
                    <li><a href="logout.php">Odjava</a></li>
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
        <?php
            echo "<div style='overflow-x:auto;'>";
            echo "<center><table class='content-table'></center>";
            echo "<thead><tr><th>ID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Poruka</th><th>Status</th></tr></thead>";

            class TableRows extends RecursiveIteratorIterator { 
                function __construct($it) { 
                    parent::__construct($it, self::LEAVES_ONLY); 
                }

                function current() {
                    return "<td>" . parent::current(). "</td>";
                }

                function beginChildren() { 
                    echo "<tr>"; 
                } 

                function endChildren() { 
                    echo "</tr>" . "\n";
                } 
            } 

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "restoran";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT id, first_name, last_name, email, message,status  FROM poruke WHERE status='odgovoreno'"); 
                $stmt->execute();

                // set the resulting array to associative
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
                    echo $v;
                }
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
            echo "</table>";
            echo "</div>";
        ?>
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