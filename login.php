<?php
	require 'config.php';

	if(isset($_POST['login'])) {
		$errMsg = '';

		// Get data from FORM
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == '')
			$errMsg = 'Enter username';
		if($password == '')
			$errMsg = 'Enter password';

		if($errMsg == '') {
			try {
				$stmt = $connect->prepare('SELECT id, fullname, username, password, secretpin FROM pdo WHERE username = :username');
				$stmt->execute(array(
					':username' => $username
					));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);

				if($data == false){
					$errMsg = "User $username not found.";
				} else {
					if(md5($password) == $data['password']) {
						$_SESSION['name'] = $data['fullname'];
						$_SESSION['username'] = $data['username'];
						$_SESSION['password'] = $data['password'];
						$_SESSION['secretpin'] = $data['secretpin'];

						header('Location: pn.php');
						exit;
					}
					else
						$errMsg = 'Password not match.';
				}
			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}
?>

<html>
<head>
    <title>Prijava administratora</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
	<div>
		<div>
			<?php
				if(isset($errMsg)){
					echo '<div>'.$errMsg.'</div>';
				}
			?>
			<div class="flexn">
				<div class="fl1" id= "logo-holder">
					<a href="index.php"><img id="logo" alt="Logo" src="Images/logo.png" width="100px" height="100px"></a>
				</div>
				<div><h4 class="section-header fl2">Prijava administratora</h4></div>
				<div class="fl3"></div>
			</div>
			<div>
				<form action="" method="post">
					<label class="korloz" for="user"><font color="white">Korisničko ime:</font></label>
					<input id="user" type="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" autocomplete="off" class="box" placeholder="username" /><br /><br />
					<label class="korloz" for="pass"><font color="white">Lozinka:</font></label>
					<input id="pass" type="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" autocomplete="off" class="box" placeholder="password" /><br/><br />
					<input id="orange" class="btn-confirmation" type="submit" name='login' value="Prijavi se" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
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
