<!DOCTYPE html>
<html>
<head>
	<title>Indtast oplysninger</title>
	
	<link rel="stylesheet" href="../login_user.css">
        
</head>
<body>
    <?php  
    require_once '../fl/tjek_mobile_browser.php';
    $mailadr=$_GET["mail"];?>
    
   
	<section class="loginform cf">
            <form name="login" action="../fl/opret_kunde_fl.php"   onsubmit="return checkForm(this);">
                    
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
                                    <input type="hidden" name="mailadr" value="<?php echo $mailadr;?>">
					<input type="submit" value="Login">
                                        
				</li>
                                <br>
                                <br>
                                <a href="<?php if(mobile_browser()==true){echo "frame_login_mobile.php";} 
                                else{echo "frame_login.php";}?>">Skip denne del</a>
                                <br>
                                <br>
                                 
					
                                
                                
			</ul>
		</form>
	</section>
    
<script type="text/javascript" src="opretbruger.js"></script>
</body>
</html>