<?php
    header("Content-type: text/css; charset: UTF-8");
    require_once 'parametre.php';
?>
#container
{
width: 85%;

}

body{
background-color: #D8D8D8;


}
#content
{
background-color: blue;
margin-left: 7%;
margin-right: 7%;
margin-top: 3.5%;
border: 2px solid blue;
height: 1000px;

}
#top
{
   
background-color: black;
height: 5%;
font-color: white;

}
#venstre 
{
background-color: CFCACA;
width: 24%;
float: left;
height: 700px;
margin-left: 1px;


}
#overskrift 
{
background-color: #E6E6E6;
margin-bottom: 3px;
height: 200px;
}

#indhold 
{
background-color: #A4A4A4;
width: 74%;
float: right;
height: 700px;

}




 #katalog figure {
width: <?php echo varer_vandret(); ?>%; 
    border: none; //1px solid blue;
    margin: 10px;
   
    float: left;
}

 #katalog figure img {
width: 100%; height: <?php echo hoejde_billeder(); ?>px;
    border: 1px solid red;
    //margin: 5px;
    //float: left;
}

#katalog figure  {
    -webkit-transition: all 1s ease; /* Safari and Chrome */
  	-moz-transition: all 1s ease; /* Firefox */
  	-o-transition: all 1s ease; /* IE 9 */
  	-ms-transition: all 1s ease; /* Opera */
  	transition: all 1s ease;
}

#katalog figure:hover  {
    -webkit-transform:scale(1.25); /* Safari and Chrome */
    -moz-transform:scale(1.25); /* Firefox */
    -ms-transform:scale(1.25); /* IE 9 */
    -o-transform:scale(1.25); /* Opera */
     transform:scale(1.25);
}




figure figcaption table{
    width: 100%;
    
}

/* ligger tallene i bunden af siden */
p.sider { 
    
 margin-top: 100%;
             
        }
        
        
        
#enkelt figure {
width: 600px; 
    border: 1px solid blue;
    margin: 3%;
   
    float: left;
}

#enkelt figure img {
width: 400px; //height: 50px;
    border: 1px solid red;
    
}

#enkelt {
font-size: 16px;

}


















