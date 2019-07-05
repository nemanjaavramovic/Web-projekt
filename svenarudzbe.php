
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
        <header class="container container-menu">
                <nav class="menu-nav food-nav">
                    <ul>
                        <li><a href="startpage.php">Nepotvrđene narudžbe</a></li>
                        <li><a href="potvr.php">Potvrđene narudžbe</a></li>
                        <li><a href="odbij.php">Odbijene narudžbe</a></li>
                        <li><a id="highlightmenu" href="svenarudzbe.php">Sve narudžbe</a></li>
                    </ul>
                </nav>
        </header>
        <br>
        <br>
        <br>
        <br>
        <?php
            echo "<center><table style='border: solid 1px black;'></center>";
            echo "<tr><th>ID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Broj telefona</th><th>Ulica</th><th>Mjesto</th><th>Narudžba</th><th>Potvrda</th></tr>";

            class TableRows extends RecursiveIteratorIterator { 
                function __construct($it) { 
                    parent::__construct($it, self::LEAVES_ONLY); 
                }

                function current() {
                    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
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
        ?>
    </body>
</html>