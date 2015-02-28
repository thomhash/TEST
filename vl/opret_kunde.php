<!DOCTYPE html>
<html>
<head>
	<title>Opret bruger</title>
	<link rel="stylesheet" href="..\login_user_normalize.css">
	<link rel="stylesheet" href="..\login_user.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body>
	<section class="loginform cf">
		<form name="login" action="..\fl\opret_kunde_fl.php" onsubmit="return checkForm(this);">
			<ul>
				<li>
					<label>E-mail</label>
                                        <input type="email" name="email" placeholder="yourname@email.com" autofocus="autofocus" required>
                                        <br>
				</li>
                                
				<li>
					<label>Kode</label>
					<input type="password" name="pwd1" placeholder="password" required>
                                        <br>
                                </li>
                                <li>
					<label>Bekræft kode</label>
					<input type="password" name="pwd2" placeholder="password" required>
                                        <br>
                                </li>
				<li>
					<input type="submit" value="Login">
				</li>
			</ul>
		</form>
	</section>
    
<script type="text/javascript" src="opretbruger.js"></script>
</body>
</html>