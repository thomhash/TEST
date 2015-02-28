
<html>
    
    
<head>
	<title>HTML5 Login</title>
	<link rel="stylesheet" href="..\login_user_normalize.css">
	<link rel="stylesheet" href="..\login_user.css">
</head>
<body>
    <?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>
<section class="loginform cf">
		<form name="login" action="../fl/login_admin.php" method="post" accept-charset="utf-8">
			<ul>
				<li>
					<label for="usermail">Email</label>
					<input type="email" name="brugernavn" placeholder="yourname@email.com" required>
                                        <br>
				</li>
                                
				<li>
					<label for="password">Password</label>
					<input type="password" name="kode" placeholder="password" required></li>
				<li>
					<input type="submit" value="Login">
				</li>
			</ul>
		</form>
	</section>

<?php
if (isset($_SESSION["login_besked"])){
    echo ($_SESSION["login_besked"]);
}

?>
    </body>
</html>