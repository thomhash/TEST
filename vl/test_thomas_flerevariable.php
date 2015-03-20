 <?php
/*
 $array;
 $array[0]=0;
 $array[1]=1;
$array[2]=2;
$array[3]=7;
$array[4]=4;
$array[5]=5;
$array[6]=6;

$keys = array_keys($array);
$last_key = end($keys);

foreach ($array as $key => $value) {    
   
    if ($last_key == $key){echo "slut";}
    else{echo $key;}
}*/
 
require '../dl/varer.php';
$marker;
$maerker[0]="Nike";
$maerker[1]="Puma";

$stoerrelser=[];
$stoerrelser[0]="42";
$stoerrelser[1]="45";
foreach ($stoerrelser as $value) {
    echo "hej";
}
$farver;
$farver[0]="Rød";
$farver[1]="Sort";

$array=  get_vareid_filter(6, 1, $maerker, $stoerrelser, $farver,0, 999999);
print_r($array);

//get_vareid_filter($gruppe_nr, $sidetal, $maerker, $stoerrelser, $farver, $pris_min, $pris_max)