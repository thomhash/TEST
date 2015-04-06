<?php 
// Lavet af Thomas
?>

<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
	///////////////////////////////////////////////////////////////////
	// Powered By MapsEasy.com Maps Generator                        
	// Please keep the author information as long as the maps in use.
	// You can find the free service at: http://www.MapsEasy.com     
	///////////////////////////////////////////////////////////////////
	function LoadGmaps() {
		var myLatlng = new google.maps.LatLng(55.6718240,12.5550200);
		var myOptions = {
			zoom: 16,
			center: myLatlng,
			disableDefaultUI: true,
			panControl: true,
			zoomControl: true,
			zoomControlOptions: {
				style: google.maps.ZoomControlStyle.DEFAULT
			},

			mapTypeControl: true,
			mapTypeControlOptions: {
				style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
			},
			streetViewControl: true,
			mapTypeId: google.maps.MapTypeId.ROADMAP
			}
		var map = new google.maps.Map(document.getElementById("MyGmaps"), myOptions);
		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title:"vesterbrogade 51"
		});
		var infowindow = new google.maps.InfoWindow({
			content: "Webshop"
			});
			google.maps.event.addListener(marker, "click", function() {
				infowindow.open(map, marker);
			});
	}
</script>


<!-- Maps DIV : you can move the code below to where you want the maps to be displayed -->
<div id="MyGmaps"></div>
<!-- End of Maps DIV -->
<div id="virkomhedsinfo">
    <?php
    require_once '../fl/om_os_fl.php';
    $info=  hent_virksomhedsinfo();
    echo "<b>Firma:  </b>&nbsp;".$info[0][1]."<br>";
    echo "<b>Telefon: </b>" .$info[0][3]."<br>";
    echo "<b>E-mail: </b>&nbsp;" .$info[0][5]."<br>";
    echo "<b>CVR-nr: </b>" .$info[0][4]."<br>";
    echo "<b>Adresse: </b>" .$info[0][9]."<br>";
    
    ?>
</div>
<br><br><br>
<div id="omos">
    <?php 
    echo $info[0][6];
    ?>
    
</div>
