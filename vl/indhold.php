<?php 
// Lavet af Thomas
// Fungerer som forside
 require_once '../fl/hent_forside.php';
 require_once '../fl/tjek_mobile_browser.php';
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){

    $("#slider a").first().show();

    var index = 0;
    var count = 2;

    function bannerRotator() {
        $('#slider a').delay(4300).eq(index).fadeOut(function() { 
            if (index === count){
                index = -1;
            }
            
            $('#slider a').eq(index + 1).fadeIn(function() {
                index++;
                bannerRotator();
            });
        });
    }
    bannerRotator();

});
</script>    
<?php
$info=[];
$ids=  hent_variant_ids();
foreach ($ids as $key => $value) {
    $temp_info=  hent_smaa_billeder($value);
    $info[$key][0]=$temp_info[0][0];
    $info[$key][1]=$temp_info[0][1];
    $info[$key][2]=$temp_info[0][2];
    $info[$key][3]=$temp_info[0][3];
    $info[$key][4]=$value;
}


?>


<div id="slider" align="center">
        <a href="#">
            <img src="../billeder/fruit_banner.jpg"/>
        </a>
        <a href="#">
            <img src="../billeder/computers_banner.jpg"/>
        </a>
        <a href="#">
            <img src="../billeder/fruit_banner.jpg"/>
        </a>
       
    </div>
<br> 
<div id="forside" align="center">
    
<?php

foreach ($info as $key => $value) {
    

echo "<figure>";
       
            if(mobile_browser()==true){ echo '<a href="frame_visenkeltvare_mobile.php?id=' .$info[$key][4] .'">' ;   }
                else {echo '<a href="frame_visenkeltvare.php?id=' .$info[$key][4] .'">' ;}
                
             echo '<img src="../billeder//' .$info[$key][3] .'">'; 
                echo '</a>';
           echo "<figcaption>
                    <table>   
                        <tr>
                            <td>";
                              echo $info[$key][0];
                              echo '</td>
                                    <td align = "right">';
                                        echo "Pris: " .$info[$key][2];
                             echo  "</td>
                        </tr>
                    </table>
                </figcaption>
            </figure>";
}
?>
    </div>