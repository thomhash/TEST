<?php
// Lavet af Mikkel 
require '../fl/get_vare.php';
require '../fl/fragt_pris.php';
require_once '../fl/tjek_mobile_browser.php';

$vare[0] = 0;
if (isset($_SESSION["kurv"])) {
    $vare = $_SESSION["kurv"];
    //print_r($vare);
}
if (isset($_GET["lager"])) {
    $lager = $_GET["lager"];
    if ($lager = 1)
        echo '<script type="text/javascript">alert("Der er ikke nok på lager")</script>';
}

$total = 0;
$antal_total = 0;
$fragt = 50;
$rnr = 0;
// For hver vare_id der er i sessions kurven henter den informationerne ned on indsætter i et nyt array.  
foreach ($vare as $id => $antal) {
    $info_array[$rnr][0] = get_vare_info_kurv($id);
    $info_array[$rnr][1] = $antal;
    $rnr++;
}
?>
<div id="kurv">

        <h1>Din indkøbskurv:</h1>
        <table id="kurv">
            <tr>

                <th>Produkt</th>

                <th>Pris pr. stk.</th>
                <th>Total</th>

                <th>Antal</th>
                <th>Juster</th>

            </tr>
            <tr class="alt">    
<?php 
$raekkenr = 0;
// Det nye info array køres igennem og hver array inde i array laves til et nyt $subarray som indeholder varinformationer.
foreach ($info_array as $id => $antal) {
    $subarray = $info_array[$raekkenr][0];
    
    // arrayet med de enkelt vare informationer køres igennem
    foreach ($subarray as $id2) {
        if ($info_array[$raekkenr][1] > 0) {
            $total += $info_array[$raekkenr][1] * $subarray[0][4];
            $antal_total += $info_array[$raekkenr][1];
            ?>
                            <th> <?php
                            if(mobile_browser()){echo '<a href="../vl/frame_visenkeltvare_mobile.php?id=' . $subarray[0][0] . '">';}
                            else {echo '<a href="../vl/frame_visenkeltvare.php?id=' . $subarray[0][0] . '">';}
                           
                            echo '<img src="../billeder//' . $subarray[0][5] . '">';

                            echo    "<br>";
                            echo $subarray[0][1];
                            ?>
                                <br>
                                <?php echo $subarray[0][2];
                                echo $subarray[0][6];
                                echo'</a>'; ?></th> 

                            <th> <?php echo $subarray[0][4]; ?></th>  
                            <th> <?php echo $info_array[$raekkenr][1] * $subarray[0][4];
                                ?></th>

                            <th> <?php echo $info_array[$raekkenr][1]; ?></th>
                            <th>

                        <form action="../fl/tilfoj_kurv.php?variant_id=<?php echo $subarray[0][0] ?>" method="POST">
                            <input hidden="" name="rediger_fra" value="kurv" > 
                            <input hidden="" name="rediger" value="-1" > 
                            <input type="submit" value="-"> 
                        </form>
                        <form action="../fl/tilfoj_kurv.php?variant_id=<?php echo $subarray[0][0] ?>" method="POST">
                            <input hidden="" name="rediger_fra" value="kurv" > 
                            <input hidden="" name="rediger" value="+1" > 
                            <input type="submit" value="+"> 
                        </form>
                          <form action="../fl/tilfoj_kurv.php?variant_id=<?php echo $subarray[0][0] ?>" method="POST">
                            <input hidden="" name="rediger_fra" value="kurv" > 
                            <input hidden="" name="rediger" value="slet" > 
                            <input type="submit" value="Slet"> 
                        </form>
                          
                    </th>

                </tr>
               
            <?php
        }
        $raekkenr ++;
    }
}
?>

</table>

<br>       
Fragt: 
    <?php
    echo hent_fragtpris($total);
    // echo "Fragtpirs: "+ hent_alm_fragtpris(); + " kr. gratis fragt ved køb for over: " + hent_gratis_fragtpris() + "kr.";
    ?>
<br>    <br>
Total:
<?php
echo $total + hent_fragtpris($total);
?>
<br><br>
<?php
if ($antal_total > 0) {
    ?>

<a href="frame_kassen_trin_1<?php if(mobile_browser()){echo "_mobile";}?>.php"> Gå til kassen </a>

<?php } ?>  
<br><br>
<a href="../index.php"> Handel videre </a>
</div>
</body>

<head>
    <style>
        .f {
            float: right;
        }
      

#kurv {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 100%;
    border-collapse: collapse;
}

#kurv td, #kurv th {
    font-size: 1em;
    border: 1px solid #98bf21;
    padding: 3px 7px 2px 7px;
}

#kurv th {
    font-size: 1.1em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #A7C942;
    color: #ffffff;
}

#kurv tr.alt td{
    
    background-color: gray;
}
</style>            
      

