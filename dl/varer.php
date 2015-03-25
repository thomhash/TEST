<?php

require_once 'login.php';
require_once '../parametre.php';
//$db_server = new mysqli($db_hostname, $db_username, $db_password);
//$db_server->connect($db_hostname, $db_username, $db_password, $db_database);
//mysqli_close($db_server);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else{
    //echo "Forbindelsen er god";
}

//Hent vareid's udfra gruppeid og hvilken side man er på (array)
function get_vareid ($gruppe_nr, $sidetal){

    require 'login.php';
    $id_per_side_start=0;
    $id_per_side_slut = antal_vare_per_sider();
    
    
    if($sidetal>1){        
        $id_per_side_start = ($sidetal-1) * \antal_vare_per_sider();
        
    }    

    $sql = "SELECT  id_vare 
    FROM 
    `gruppe`  AS `gruppe` INNER JOIN 
    `vare_har_gruppe` AS X INNER JOIN 
    `vare`  AS V  
    ON `id_varegruppe` = X.`f_id_varegruppe` AND X.`f_id_vare` = V.`id_vare` 
    WHERE `id_varegruppe` = $gruppe_nr ORDER BY `prioritet` LIMIT $id_per_side_start , $id_per_side_slut ";
        
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    $ids= array_column($row,0);
     mysqli_close($db_server);
     return $ids;
}
function get_vareid_filter ($gruppe_nr, $sidetal, $maerker, $typer, $farver, $pris_min, $pris_max){

    require 'login.php';
    $id_per_side_start=0;
    $id_per_side_slut = antal_vare_per_sider();
    
    $sql_where="";
    $sql_limit="";
    
    if($maerker!=0){
        $sql_where.=" AND (";
        $keys = array_keys($maerker);
        $last_key = end($keys);
        foreach ($maerker as $key => $value) {
            if($key==$last_key){$sql_where.= " maerke.`maerke_navn`=" .'"'.$value.'")' ;}
            else {$sql_where.= " maerke.`maerke_navn`=".'"'.$value.'"' ." OR" ; }
        } 
    }
    if($typer!=0){
        $sql_where.=" AND (";
        $keys = array_keys($typer);
        $last_key = end($keys);
        foreach ($typer as $key => $value) {
            if($key==$last_key){$sql_where.= " type.`type_vaerdi`=".'"'.$value.'")' ;}
            else {$sql_where.= " type.`type_vaerdi`=".'"'.$value.'"' ." OR" ; }
        } 
    }
    if($farver!=0){
        $sql_where.=" AND (";
        $keys = array_keys($farver);
        $last_key = end($keys);
        foreach ($farver as $key => $value) {
            if($key==$last_key){$sql_where.= " varefarve.`varefarve`=".'"'.$value.'")';}
            else {$sql_where.= " varefarve.`varefarve`=".'"'.$value.'"' ." OR";} 
        } 
    }
    
    if($sidetal>1){        
        $id_per_side_start = ($sidetal-1) * \antal_vare_per_sider();
        $sql_limit.="LIMIT $id_per_side_start , $id_per_side_slut";
    }    
    if($sidetal==1){
        $sql_limit.="LIMIT $id_per_side_start , $id_per_side_slut";
        }

    $sql = "SELECT DISTINCT `id_vare` 
    FROM 
    `vare`   INNER JOIN 
    `type` INNER JOIN 
    `varefarve`  INNER JOIN 
    `variant` INNER JOIN 
    `maerke` INNER JOIN 
    `vare_har_gruppe` INNER JOIN 
    `gruppe`
    ON variant.`f_id_type`=type.`id_type` AND variant.`f_id_varefarve`=varefarve.`id_varefarve` AND vare.`id_vare`=variant.`f_id_vare`
    AND maerke.`id_maerke`=vare.`f_id_maerke` AND vare_har_gruppe.`f_id_vare`=vare.`id_vare` AND gruppe.`id_varegruppe`=vare_har_gruppe.`f_id_varegruppe`
    WHERE `id_varegruppe` = $gruppe_nr AND vare.`aktiv`=1 AND variant.`pris`>=$pris_min AND variant.`pris`<=$pris_max ".$sql_where ." ORDER BY `prioritet` $sql_limit";
        
    $result= mysqli_query($db_server, $sql);       
    
    //Hvis sidetal er 0 bliver funktionen brugt til at bestemme sidetal og den skal bruge et 2 dimensionelt array
    // for at bestemme antal rækker
    if($sidetal>0){
        $row= mysqli_fetch_all($result);
        $ids= array_column($row,0);}
        else{$ids=$result;}
    mysqli_close($db_server);
     return $ids;
}



// Hent oplysninger til katalog i variant, ud fra vare-id (kun vis=1)
function get_info_catalog ($vare_id, $farver){
    require 'login.php';
    $sql_where="";
    $raekke_nr=1;
    if($farver!=0){
        $sql_where.=" AND( varefarve.`varefarve`= ".'"' .$farver[0].'"';
            foreach ($farver as $key => $value) {
                if($key==0){ }
                else{ $sql_where.=" OR varefarve.`varefarve`= ".'"' .$farver[$key] .'"';}
                }
                $sql_where.=')';
        }
    else { $sql_where="AND variant.`vis`=1";}    
    $sql = "SELECT vare.`navn` , variant.`pris` , billede.`url`, variant.`id_variant`
            FROM `variant` 
            INNER JOIN `vare` 
            INNER JOIN `billede`
            INNER JOIN `varefarve`  
            ON vare.`id_vare` = variant.`f_id_vare` AND variant.`f_id_varefarve`=varefarve.`id_varefarve` AND variant.`f_id_billede`=billede.`id_billede` 
            WHERE variant.`aktiv`=1 AND `id_vare` = $vare_id $sql_where";
    
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
        
    mysqli_close($db_server);
    return $row;
    
    
}


function get_number_of_pages ($gruppe_nr, $maerker, $typer, $farver, $pris_min, $pris_max){

    require 'login.php';
    $sidetal=0;
    $result = get_vareid_filter($gruppe_nr, $sidetal, $maerker, $typer, $farver, $pris_min, $pris_max);
   /** $sql = "SELECT  id_vare 
    FROM 
    `gruppe`  AS `gruppe` INNER JOIN 
    `vare_har_gruppe` AS X INNER JOIN 
    `vare`  AS V  
    ON `id_varegruppe` = X.`f_id_varegruppe` AND X.`f_id_vare` = V.`id_vare` 
    WHERE `id_varegruppe` = $gruppe_nr ";
        
    $result= mysqli_query($db_server, $sql);**/
    $row_cnt= mysqli_num_rows($result);
    
    
    $sider =ceil ($row_cnt/antal_vare_per_sider());
    
    
    mysqli_close($db_server);
     return $sider;
}

// Henter navn, beskrivelse , pris , billede, antal, størrelse og farve til en given variant
function get_variant ($variant_id){
    require 'login.php';
    
    $sql = "Select vare.`navn`, vare.`beskrivelse`, pris, billede.`url`, antal, type.`type_vaerdi`, varefarve.`id_varefarve`   
            FROM            
            `variant`
            INNER JOIN `vare`
            INNER JOIN `type`
            INNER JOIN `varefarve`
            INNER JOIN `billede`
            ON vare.`id_vare` = variant.`f_id_vare` AND type.`id_type`=variant.`f_id_type` 
            AND varefarve.`id_varefarve`= variant.`f_id_varefarve` AND variant.`f_id_billede`=billede.`id_billede` 
            WHERE `id_variant`= $variant_id ";
    
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    
     mysqli_close($db_server);
     return $row;
    
    
}




// Hent størrelser i given farve udfra et vare id
function get_stoerrelser($vare_id, $farve){
    require 'login.php';
    $sql = "SELECT type.`type_vaerdi` , variant.`id_variant`
            FROM            
            `vare`
            INNER JOIN `type` 
            INNER JOIN `variant` 
            INNER JOIN `varefarve` 
            ON type.`id_type` = variant.`f_id_type` AND variant.`f_id_vare`= vare.`id_vare` AND varefarve.`id_varefarve`=variant.`f_id_varefarve`
            WHERE vare.`id_vare`= $vare_id AND varefarve.`id_varefarve`= $farve";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    
     mysqli_close($db_server);
     return $row;
    
}

function get_vare_id($variant_id){
    require 'login.php';
    $sql = "SELECT vare.`id_vare`
            FROM            
            `vare`
            INNER JOIN `variant` 
            ON variant.`f_id_vare` = vare.`id_vare`
            WHERE variant.`id_variant`= $variant_id";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    
     mysqli_close($db_server);
     return $row;
    
}

// Hent andre farver til smaa billeder i produktvisning
function get_farver($vare_id, $farve_id){
    require 'login.php';
    $sql = "SELECT DISTINCT varefarve.`id_varefarve`
            FROM            
            `variant`
            INNER JOIN `vare` 
            INNER JOIN `varefarve` 
            
            ON variant.`f_id_vare` = vare.`id_vare` AND variant.`f_id_varefarve`=varefarve.`id_varefarve` 
            WHERE vare.`id_vare`= $vare_id 
            AND varefarve.`id_varefarve`!=$farve_id ";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    
     mysqli_close($db_server);
     return $row;
    
}

function get_farver_billeder($vare_id, $farve_id){
    require 'login.php';
    $sql = "SELECT DISTINCT variant.`id_variant`, billede.`url`
            FROM            
            `variant`
            INNER JOIN `billede` 
            INNER JOIN `varefarve` 
            
            ON variant.`f_id_billede` = billede.`id_billede` AND variant.`f_id_varefarve`=varefarve.`id_varefarve` 
            WHERE variant.`f_id_vare`= $vare_id AND variant.`f_id_varefarve`=$farve_id LIMIT 1";
    
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
     mysqli_close($db_server); 
     
     return $row;
    
}

function get_gruppe_maerker ($gruppenr){
    require 'login.php';
    
    $sql = "SELECT DISTINCT `maerke_navn`
            FROM `maerke`
            INNER JOIN `vare` 
            INNER JOIN `vare_har_gruppe`
            ON maerke.`id_maerke` = vare.`f_id_maerke` AND vare.`id_vare`=vare_har_gruppe.`f_id_vare` 
            WHERE vare_har_gruppe.`f_id_varegruppe`= $gruppenr
            ORDER BY `maerke_navn`";
            
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    $maerker= array_column($row,0);    
    mysqli_close($db_server);
    
    return $maerker;
    
    
}

function get_gruppe_stoerrelser ($gruppenr){
    require 'login.php';
  
    $sql = "SELECT DISTINCT `type_vaerdi`
            FROM `type`
            INNER JOIN `variant` 
            INNER JOIN `vare`
            INNER JOIN `vare_har_gruppe`
            ON type.`id_type` = variant.`f_id_type`AND vare.`id_vare`=variant.`f_id_vare` 
            AND vare.`id_vare`=vare_har_gruppe.`f_id_vare` 
            WHERE vare_har_gruppe.`f_id_varegruppe`= $gruppenr";
            
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    $typer= array_column($row,0);    
    mysqli_close($db_server);
    
    return $typer;
    
    
}

function get_gruppe_farver ($gruppenr){
    require 'login.php';
  
    $sql = "SELECT DISTINCT `varefarve`
            FROM `varefarve`
            INNER JOIN `variant` 
            INNER JOIN `vare`
            INNER JOIN `vare_har_gruppe`
            ON varefarve.`id_varefarve` = variant.`f_id_varefarve`AND vare.`id_vare`=variant.`f_id_vare` 
            AND vare.`id_vare`=vare_har_gruppe.`f_id_vare` 
            WHERE vare_har_gruppe.`f_id_varegruppe`= $gruppenr";
            
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    $typer= array_column($row,0);    
    mysqli_close($db_server);
    
    return $typer;
    
    
}

function get_type_beskrivelse ($variant_id){
    require 'login.php';
  
    $sql = "SELECT type_beskrivelse.`type_tekst`
            FROM `variant` 
            INNER JOIN `vare`
            INNER JOIN `type_beskrivelse`
            ON  vare.`id_vare`=variant.`f_id_vare` 
            AND vare.`f_type_beskrivelse`=type_beskrivelse.`id_type_beskrivelse` 
            WHERE variant.`id_variant`=$variant_id";
            
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);
    $tekst= array_column($row,0);    
    mysqli_close($db_server);
    
    return $tekst;
    
    
}

function get_typer_til_varegrupper($gruppe_id){
    require 'login.php';
  
    $sql = "SELECT type_beskrivelse.`type_tekst`
            FROM `type_beskrivelse` 
            INNER JOIN `vare`
            INNER JOIN `vare_har_gruppe`
            ON  vare.`id_vare`=vare_har_gruppe.`f_id_vare` 
            AND vare.`f_type_beskrivelse`=type_beskrivelse.`id_type_beskrivelse` 
            WHERE vare_har_gruppe.`f_id_varegruppe`=$gruppe_id";
            
    $result= mysqli_query($db_server, $sql);       
    $row= mysqli_fetch_all($result);    
    mysqli_close($db_server);
    
    return $row;
    
    
}


$typer1=  get_typer_til_varegrupper(2);
print_r($typer1);



?>
