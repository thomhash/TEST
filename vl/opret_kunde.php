<?php ob_start(); 
// Lavet af Thomas
?>
	<title>Opret bruger</title>
	
	<section class="loginform cf">
		<form name="login" action="../fl/opret_kunde_fl.php" method="POST" onsubmit="return checkForm(this);">
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
					<input type="submit" value="Opret Bruger">
				</li>
			</ul>
		</form>
	</section>
    
<script type="text/javascript" src="opretbruger.js"></script>
 <?php
    
    
 // Hvis er sat til 1 eksistere mail allerede og man bliver sendt tilbage til burgeroprettelsesskærmen, med
 // en besked og den allerede findes
    if (isset($_GET["findes"])){
        $findes=$_GET["findes"];
         echo' <script language="javascript" type="text/javascript">
                   alert("Fejl: Denne e-mail bliver allerede brugt!");
               </script>';
            }
    ?>
