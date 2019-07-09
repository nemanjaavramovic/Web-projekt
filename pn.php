<?php
	require 'config.php';
	if(empty($_SESSION['name']))
		header('Location: login.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
</head>
    <body>
        <header class="container-menu">
            <div id= "logo-holder">
                <a href="index.php"><img id="logo" alt="Logo" src="Images/logo.png" width="100px" height="100px"></a>
            </div>
        </header>
        <div>
            <h4 class="section-header">Odaberite:</h4>
        </div>
        <br>
        <div class="adst">
            <a href="adminporuke.php">Poruke</a>
            <br>
            <br>
            <br>
            <br>
            <a href="startpage.php">Narudžbe</a>
        </div>
    </body>
</head>