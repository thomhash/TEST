<!DOCTYPE html>
<html>
<head>
	<title>Login Kunde</title>
	
	<link rel="stylesheet" href="../login_user.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <?php require_once '../fl/tjek_mobile_browser.php'; ?>
</head>
<body>
    
    <?php 
    $kob=0;
    if (isset($_GET["kob"])){
       $kob=$_GET["kob"];
       echo $kob;
    } ?>

	<section class="loginform cf">
		<form name="login" action="../fl/login_kunde_fl.php" onsubmit="return checkForm(this);">
                    <input type="hidden" name="kob" value="<?php echo $kob?>">
			<ul>
				<li>
					<label>E-mail</label>
                                        <input type="email" name="mail" placeholder="yourname@email.com" autofocus="autofocus" required>
                                        <br>
				</li>
                                
				<li>
					<label>Kode</label>
					<input type="password" name="pass" placeholder="password" required>
                                        <br>
                                </li>
                                
				<li>
					<input type="submit" value="Login">
				</li>
			</ul>
		</form>
            <a href="<?php if(mobile_browser()==true){ echo "frame_login_mobile.php?opretbruger=1"; } else {echo "frame_login.php?opretbruger=1"; } ?>" style="text-align:center;display:block;font-size:10px;">Opret en ny bruger</a>
	</section>
        
<script type="text/javascript" src="opretbruger.js"></script>
    <?php
    
    
    
 // Hvis er sat til 1 eksistere mail allerede og man bliver sendt tilbage til burgeroprettelsesskærmen, med
 // en besked og den allerede findes
    if (isset($_GET["forkert_mail"])){
        $em=$_GET["forkert_mail"];
         echo' <script language="javascript" type="text/javascript">
                   alert("Fejl: Mailen'.$em .' er ikke oprettet som bruger");
               </script>';
            }
     if (isset($_GET["forkert_kode"])){
         echo' <script language="javascript" type="text/javascript">
                   alert("Fejl: Forkert kode!");
               </script>';
            }
    ?>
</body>
</html>