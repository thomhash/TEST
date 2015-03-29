<?php
if(session_id() == '') {
    session_start();
}

?>

<h3>Log in</h3>
<form action="../fl/login_check.php" method="POST">
    Brugernavn:<br>
    <input type="text" name="brugernavn"><br>
    Password:<br>
    <input type="password" name="kode"><br>
    <br>
    <input type="submit" value="LOG IN">
   
</form>

<?php
if (isset($_SESSION["login_besked"])){
    echo ($_SESSION["login_besked"]);
}

?>