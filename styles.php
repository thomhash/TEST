<?php
    header("Content-type: text/css; charset: UTF-8");
    require_once 'parametre.php';
?>

/*

#container {
    width: 100%;
    height: 100%;
    border: 1px solid black;
}

#container img {
   
    //height: 300px;
    width: 250px;
    border: 1px solid black;
    margin: 5px;
    float: left;
} */


 figure {
width: <?php echo varer_vandret(); ?>%; 
    border: none; //1px solid blue;
    margin: 10px;
    float: left;
}

 figure img {
width: 100%; height: <?php echo hoejde_billeder(); ?>px;
    border: 1px solid red;
    //margin: 5px;
    //float: left;
}

figure  {
    -webkit-transition: all 1s ease; /* Safari and Chrome */
  	-moz-transition: all 1s ease; /* Firefox */
  	-o-transition: all 1s ease; /* IE 9 */
  	-ms-transition: all 1s ease; /* Opera */
  	transition: all 1s ease;
}

figure:hover  {
    -webkit-transform:scale(1.25); /* Safari and Chrome */
    -moz-transform:scale(1.25); /* Firefox */
    -ms-transform:scale(1.25); /* IE 9 */
    -o-transform:scale(1.25); /* Opera */
     transform:scale(1.25);
}




figure figcaption table{
    width: 100%;
    
}


p.sider {
    
 margin-top: 100%;
             
        }

















