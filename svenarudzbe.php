
<!DOCTYPE html>
<html>
<head>
    <title>Sve narudžbe</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
</head>
    <body>
        <div>
            <h4 class="section-header">Dobro došli Nemanja</h4>
        </div>
        <header class="container-menu">
            <div id= "logo-holder">
                <a href="index.php"><img id="logo" alt="Logo" src="Images/logo.png" width="100px" height="100px"></a>
            </div>
            <nav class="menu-nav food-nav">
                    <ul>
                        <li><a href="startpage.php">Nepotvrđene narudžbe</a></li>
                        <li><a href="potvr.php">Potvrđene narudžbe</a></li>
                        <li><a href="odbij.php">Odbijene narudžbe</a></li>
                        <li><a id="highlightmenu" href="svenarudzbe.php">Sve narudžbe</a></li>
                        <li><a href="logout.php">Odjava</a></li>
                    </ul>
                    </nav>
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
            echo "<thead><tr><th>ID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Broj telefona</th><th>Ulica</th><th>Mjesto</th><th>Narudžba</th><th>Potvrda</th></tr></thead>";

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
                $stmt = $conn->prepare("SELECT id, first_name, last_name, email, telephone_number, street, city, order_list, confirmation  FROM narudzba"); 
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
    </body>
</html>