<?php 
// Lavet af Thomas
?>
<link rel="stylesheet" type="text/css" href="../login_user.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<?php
// Twitter widget
?>   
<a class="twitter-timeline"   data-chrome="nofooter noborders noscrollbar transparent" data-chrome="noscrollbar" data-chrome="nofooter transparent"  href="https://twitter.com/WebshopDTU" data-widget-id="576075873381646336">Tweets fra @WebshopDTU</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?
'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js,fjs);}}
(document,"script","twitter-wjs");</script>

<?php
// Tilmeld nyhedsbrev form
?>
<section class="loginform cf" align="center">
    <legend>Tilmeld vores nyhedsbrev</legend>
    <form name="login" action="../fl/tilmeld_nyhed.php" onsubmit="return checkForm(this);">
			<ul>
				<li>
					<label>E-mail</label>
                                        <input type="hidden" name="nyhed" value="1">
                                        <input type="email" name="email" placeholder="yourname@email.com" autofocus="autofocus" required>
                                        <br>
				</li>
                                                                
				<li>
					<input type="submit" value="Tilmeld">
				</li>
                                <input type="submit" value="Tilmeld">
			</ul>
		</form>
            
	</section>