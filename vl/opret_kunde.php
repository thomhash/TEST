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
            <form name="login" action="indtast_kundeoplysninger.php" onsubmit="return checkForm(this);">
			<ul>
				<li>
					<label>E-mail</label>
					<input type="email" name="email" placeholder="yourname@email.com" required>
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
					<input type="submit" value="Opret">
				</li>
			</ul>
		</form>
	</section>
    
<script type="text/javascript" src="opretkunde.js"></script>
</body>
</html>