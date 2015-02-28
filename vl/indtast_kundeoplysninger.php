<!DOCTYPE html>
<html>
<head>
	<title>Indtast oplysninger</title>
	<link rel="stylesheet" href="..\login_user_normalize.css">
	<link rel="stylesheet" href="..\login_user.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body>
	<section class="loginform cf">
		<form name="login" action="vis_menu.php" onsubmit="return checkForm(this);">
			<ul>
				<li>
					<label >Fornavn</label>
					<input type="text" name="fornavn" autofocus = "autofocus" required>
                                        <br>
				</li>
                                <li>
					<label >Efternavn</label>
					<input type="text" name="efternavn" required>
                                        <br>
				</li>
                                <li>
					<label >Telefon nummer</label>
					<input type="tel" name="tlf" required>
                                        <br>
				</li>
                                
				<li>
					<label>Adresse</label>
					<input type="text" name="Adresse" required>
                                        <br>
                                </li>
                                <li>
					<label>Post nr</label>
					<input type="number" name="postnr" required>
                                        <br>
                                </li>
                                <li>
					<label>By</label>
					<input type="text" name="by" required>
                                        <br>
                                </li>
                                <br>
                                <label for="nyhed">Tilmeld vores nyhedsbrev</label>
					<input type="checkbox" name="nyhedbrev" id="nyhed">
                                        <br>
                                
				<li>
					<input type="submit" value="Login">
                                        
				</li>
                                <br>
                                <br>
                                <a href="..\index.php">Skip denne del</a>
                                <br>
                                <br>
                                 
					
                                
                                
			</ul>
		</form>
	</section>
    
<script type="text/javascript" src="opretbruger.js"></script>
</body>
</html>