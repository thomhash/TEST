<?php

require '../dl/ret_vare.php';
require '../dl/get_vare.php';

echo "det er smart ret vare beskrivelse";
   $varebeskrivelse = $_POST['vare_beskrivelse'];
   echo $varebeskrivelse;
   
   $id_variant = $_GET['id'];
  // echo $id_variant;
   $id_vare=get_vareid_fra_variant_d($id_variant);
   
   ret_beskrivelse($varebeskrivelse,$id_vare);
  
  
   