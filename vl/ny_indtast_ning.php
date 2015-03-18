<?php

?>
<head>
	
	<link rel="stylesheet" href="../login_user_normalize.css">
	<link rel="stylesheet" href="../login_user.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<html>
 <br> <br> <b>Konto oplysninger:</b>
		
 
 <form name="pris_form" action="" method="POST" class="loginform cf">
    Kort nummer: <input type="input" name="kort_nummer" value="">
     
   Kontrol cifre: <input type="input" name="kontrol_cifre" value="">
   udløbsdato Mdr:
   <select name="mdr">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</optio>
  <option value="11">11</optio>
  <option value="12">12</optio>
   </select><br>
 År: <input type="number" name="submit" value="Go0dkend" >
    <input type="submit" name="submit" value="Go0dkend" >
</form>
 
<script type="text/javascript" src="opretbruger.js"></script>


<script>
function toCelsius(f) {
    return (5/9) * (f-32);
}
document.getElementById("demo").innerHTML = toCelsius(32);
</script>

