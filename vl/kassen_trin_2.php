<?php
$mail =$_GET["mail"];   
require '../fl/get_kunde.php';
require_once '../fl/tjek_mobile_browser.php';
 $kunde_id = get_kunde_id_fra_mail($mail);
 

?>
<head>
	
	
	<link rel="stylesheet" href="../login_user.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<html>
<h1>Levering </h2>

<form action="../vl/frame_kassen_trin_3<?php if(mobile_browser()){echo "_mobile";} ?>.php">
<input type="radio" name="levering" value="postdanmark" checked>postdanmark
<br>
<input type="radio" name="levering" value="ups" checked>ups
<br>
<input type="radio" name="levering" value="afhent">afhent
<br>


<h1>Betaling </h2>

<form action="../vl/frame_kassen_trin_3<?php if(mobile_browser()){echo "_mobile";} ?>.php">
<input type="radio" name="betaling" value="postdanmark" checked>Visa 
<br>
<input type="radio" name="betaling" value="ups" checked>Bank overførsel
<br>
<br>
<input type="hidden" name="email" value = "<?php echo $mail;?>">
<input type="submit" value="Næste">

</form>
</body>
</html>