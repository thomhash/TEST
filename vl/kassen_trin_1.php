<?php
if(session_id() == '') {
    session_start();
}
require_once '../fl/tjek_mobile_browser.php';
require '../fl/get_kunde.php';
$logget_ind = "nej";
?>
<head>
	<title>Opret bruger</title>
	
	<link rel="stylesheet" href="../login_user.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<html>
    <center> 
<h1>Kundeoplysninger test</h2>
<?php   if (isset($_SESSION["logget_ind_kunde"])){
        $logget_ind = $_SESSION["logget_ind_kunde"];
}
If ($logget_ind != "ja") {    
?>
<form name="pris_form" action="../vl/frame_login<?php if(mobile_browser()){echo "_mobile";}?>.php?kob=1" method="POST" class="loginform cf">
    <b>Allerede bruger </b>
    <input type="hidden" name="rediger" value="pris_form"><br>
    <input type="submit" name="submit" value="Log in" >
</form>
<hr>
<?php
}
?>
<body>
<section class="loginform cf">
		<form name="login" action="../fl/opret_kunde_kob.php" onsubmit="return checkForm(this);">
                    
                     <?php   
 // Hvis er sat til 1 er bruger lige blevet oprettet
     if (isset($_GET["oprettet"])){
        $findes=$_GET["oprettet"];
        $mail =$_GET["mail"];
         echo "Tillykke med din nye bruger!";
         
         }
        $fornavn = NULL;
        $efternavn = NULL;
        $telefonnummer = NULL;;
        $email = NULL;
        $adresse = NULL;
        $post_nr = NULL;
        $by = NULL;;
        // if (isset($_SESSION["bruger_id"])){
         if (isset($_SESSION["bruger_id"])){
         $id_kunde =$_SESSION["bruger_id"][0];    
        $kunde=  hent_kunde($id_kunde)[0];
        $fornavn = $kunde[0];
        $efternavn = $kunde[1];
        $telefonnummer = $kunde[5];
        $email = $kunde[6];
        $adresse = $kunde[2];
        $post_nr = $kunde[3];
        $by = $kunde[4];
         }
?>
                    <b>Fortsæt uden bruger</b>
			<ul>
				<li>
					<label >Fornavn</label>
					<input type="text" name="fornavn" autofocus = "autofocus" required value="<?php echo $fornavn;?>">
                                        <br>
				</li>
                                <li>
					<label >Efternavn</label>
					<input type="text" name="efternavn" required value="<?php echo $efternavn;?>">
                                        <br>
				</li>
                                <li>
					<label >Telefon nummer</label>
					<input type="tel" name="tlf" required value="<?php echo $telefonnummer;?>">
                                        <br>
				</li>
                                
                                 <li>
					<label >Email</label>
                                        <input <?php if(isset($_SESSION["logget_ind_kunde"])){if ($_SESSION["logget_ind_kunde"]=="ja"){?>readonly="readonly"<?php } } ?> type="email" name="email" required value="<?php echo $email;?>">
                                        <br>
				</li>
				<li>
					<label>Adresse</label>
					<input type="text" name="adresse" required value="<?php echo $adresse;?>">
                                        <br>
                                </li>
                                <li>
					<label>Post nr</label>
					<input type="number" name="postnr" required value="<?php echo $post_nr;?>">
                                        <br>
                                </li>
                                <li>
					<label>By</label>
					<input type="text" name="by" required value="<?php echo $by;?>">
                                        <br>
                                </li>
                                <br>
                                <label for="nyhed">Tilmeld vores nyhedsbrev</label>
					<input type="checkbox" name="nyhedsbrev" id="nyhed" value="1" checked>
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
