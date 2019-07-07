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
            <h4 class="section-header">Dobro došli Nemanja</h4>
        </div>
        <header class="container-menu">
            <div id= "logo-holder">
                <a href="index.php"><img id="logo" alt="Logo" src="Images/logo.png" width="100px" height="100px"></a>
            </div>
            <nav class="menu-nav food-nav">
                    <ul>
                        <li><a id="highlightmenu" href="startpage.php">Nepotvrđene narudžbe</a></li>
                        <li><a href="potvr.php">Potvrđene narudžbe</a></li>
                        <li><a href="odbij.php">Odbijene narudžbe</a></li>
                        <li><a href="svenarudzbe.php">Sve narudžbe</a></li>
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
            <label class="txtx" for="idor"><center><font color="white">Unesite ID narudžbe koju želite potvrditi ili odbiti:</font></center></label>
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
                            echo "Error updating record: " . $conn->error;
                        }

                        $sql = "SELECT * FROM narudzba WHERE id=$id";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                //echo "<br> Poštovani - Name: ". $row["first_name"]. " " . $row["last_name"] . "<br>";
                                $res="Poštovani ". $row["first_name"]. " " . $row["last_name"] . " vaša narudžba: '". $row["order_list"]. "' je potvrđena. Hvala vam na narudžbi!";
                            }
                        } else {
                            echo "0 results";
                        }

                        $idres="Potvrdjene_narudzbe/$id.txt";

                        
                        $file = fopen("$idres","w");
                        fwrite($file,"$res");
                        fclose($file);

                        $conn->close();
                        echo "<script type='text/javascript'> document.location = 'startpage.php'; </script>";
                    }
                    else{
                        echo '<font color="E41624"><center><b>Korisnik s tim ID-om ne postoji u bazi ili mu je narudžba obrađena</b></center></font>';
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
                            echo "Error updating record: " . $conn->error;
                        }

                        $sql = "SELECT * FROM narudzba WHERE id=$id";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                //echo "<br> Poštovani - Name: ". $row["first_name"]. " " . $row["last_name"] . "<br>";
                                $res="Poštovani ". $row["first_name"]. " " . $row["last_name"] . " vaša narudžba: '". $row["order_list"]. "' je odbijena. Pokušajte ponovo izvršiti narudžbu kasnije. Hvala vam na razumijevanju!";
                            }
                        } else {
                            echo "0 results";
                        }

                        $idres="Odbijene_narudzbe/$id.txt";

                        
                        $file = fopen("$idres","w");
                        fwrite($file,"$res");
                        fclose($file);


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