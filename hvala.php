<script>
    localStorage.removeItem('pizze')
    localStorage.removeItem('quantity')
    localStorage.removeItem('list')
</script>
<?php
    session_start();
    if(!isset($_SESSION['firstname'])){
        header('Location: narudzba.php');
        exit();
    }

    $firstname=$_SESSION['firstname'];
    $lastname=$_SESSION['lastname'];
    $email=$_SESSION['email'];
    $tel=$_SESSION['tel'];
    $address=$_SESSION['address'];
    $city=$_SESSION['city'];
    $orderlist=$_SESSION['orderlist'];
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



    $sql = "INSERT INTO narudzba (first_name, last_name, email, telephone_number, street, city, order_list)
    VALUES ('$firstname', '$lastname', '$email', '$tel', '$address', '$city', '$orderlist')";
    
    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hvala na narudžbi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
</head>
    <body>
        <header class="container container-menu">
            <nav class="menu-nav food-nav">
                <ul>
                    <li><a href="">Naslovna</a></li>
                    <li><a href="index.php">Jelovnik</a></li>
                    <li><a href="narudzba.php">Naruči</a></li>
                    <li><a href="">Kontakt</a></li>
                    <li><a href="">O nama</a></li>
                </ul>
            </nav>
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
        <h2 class="section-header">Hvala vam na narudžbi!</h2>
    </body>
</html>