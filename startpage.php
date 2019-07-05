<?php
	require 'config.php';
	if(empty($_SESSION['name']))
		header('Location: login.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nepotvrđene narudžbe</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
</head>
    <body>
        <div>
            <?php
                if(isset($errMsg)){
                    echo '<div>'.$errMsg.'</div>';
                }
            ?>
            <div>
                <h4 class="section-header">Dobro došli <?php echo $_SESSION['name']; ?></h4>
            </div>
            <div id="odjava">
                <a  href="logout.php">Odjava</a>    
            </div>
        </div>
        <header class="container container-menu">
                <nav class="menu-nav food-nav">
                    <ul>
                        <li><a id="highlightmenu" href="startpage.php">Nepotvrđene narudžbe</a></li>
                        <li><a href="potvr.php">Potvrđene narudžbe</a></li>
                        <li><a href="odbij.php">Odbijene narudžbe</a></li>
                        <li><a href="svenarudzbe.php">Sve narudžbe</a></li>
                    </ul>
                </nav>
        </header>
        
        <br>
        <br>
        <br>
        <br>
        
        <?php
            echo "<div style='overflow-x:auto;'>";
            echo "<center><table></center>";
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
                $stmt = $conn->prepare("SELECT id, first_name, last_name, email, telephone_number, street, city, order_list, confirmation  FROM narudzba WHERE confirmation='+'"); 
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
        <form method = "post" action="">
            <label class="txtx" for="idor"><center>Unesite ID narudžbe koju želite potvrditi ili odbiti:</center></label>
            <input type="number" id="idor" name="idor" pattern="[0-9]{1,6}" required>
            <?php
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
                if(isset($_POST['potvrdi'])){
                    $id=$_POST['idor'];
                    $result = mysqli_query($conn,"SELECT * FROM narudzba WHERE id='$id' and confirmation='+'");
                    if(mysqli_num_rows($result) == 1)
                    {
                        $sql = "UPDATE narudzba SET confirmation='potvrdjena' WHERE id=$id";

                        if ($conn->query($sql) === TRUE) {
                            //echo "Record updated successfully";
                        } else {
                            //echo "Error updating record: " . $conn->error;
                        }

                        $conn->close();
                        echo "<script type='text/javascript'> document.location = 'startpage.php'; </script>";
                    }
                    else{
                        echo '<font color="FF0000">Korisnik s tim ID-om ne postoji u bazi ili mu je narudžba obrađena</font>';
                    }
                    
                }
                else if(isset($_POST['odbij'])){
                    $id=$_POST['idor'];
                    $result = mysqli_query($conn,"SELECT * FROM narudzba WHERE id='$id' and confirmation='+'");
                    if(mysqli_num_rows($result) == 1)
                    {
                        $sql = "UPDATE narudzba SET confirmation='odbijena' WHERE id=$id" ;

                        if ($conn->query($sql) === TRUE) {
                            //echo "Record updated successfully";
                        } else {
                            //echo "Error updating record: " . $conn->error;
                        }
                        $conn->close();
                        echo "<script type='text/javascript'> document.location = 'startpage.php'; </script>";  
                        
                    }
                    else{
                        echo '<font color="FF0000">Korisnik s tim ID-om ne postoji u bazi ili mu je narudžba obrađena</font>';
                    }
                }
                ?>
            <input id="plavi" class="btn-confirmation" type="submit" value="POTVRDI" name="potvrdi">
            <br>
            <input id="crveni" class="btn-confirmation" type="submit" value="ODBIJ" name="odbij">
        </form>

    </body>
</html>