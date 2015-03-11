<?php
?>
<head>
	<title>Opret bruger</title>
	<link rel="stylesheet" href="..\login_user_normalize.css">
	<link rel="stylesheet" href="..\login_user.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<html>
    <center> 
<h1>Kundeoplysninger</h2>
Hvis du har handlet her før kan vi hente dine oplysninger <br> indtast email:
<form name="pris_form" action="" method="POST" class="loginform cf">
    <input type="input" name="ny_pris" value="">
     
    <input type="hidden" name="rediger" value="pris_form"><br>
    <input type="submit" name="submit" value="Hent" >
</form>
<hr>
<body>
    <?php header('Content-type: text/html; charset=utf-8'); 
    
    //$mailadr=$_GET["mail"];?>
    
   
	<section class="loginform cf">
		<form name="login" action="..\fl\opret_kunde_fl.php" onsubmit="return checkForm(this);">
                    
                     <?php   
                     
                     
 // Hvis er sat til 1 er bruger lige blevet oprettet
 
    if (isset($_GET["oprettet"])){
        $findes=$_GET["oprettet"];
        $mail =$_GET["mail"];
         echo "Tillykke med din nye bruger!";
         
         }
         
    ?>
                    <br> <br> <b>Indtast kundeoplysninger</b>
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
					<label >Email</label>
                                        <input type="email" name="email" required>
                                        <br>
				</li>
				<li>
					<label>Adresse</label>
					<input type="text" name="adresse" required>
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
					<input type="checkbox" name="nyhedsbrev" id="nyhed" value="1">
                                        <br>
                                
				<li>
                                        <input type="hidden" name="kob" value="ja">
                                    	<input type="submit" value="Næste">
                                        
				</li>
                                <br>
                               
                               
					
                                
                                
			</ul>
		</form>
	</section>
    
<script type="text/javascript" src="opretbruger.js"></script>
</body>
</html>