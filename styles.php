#container
{
width: 85%;

}
<?php

    header("Content-type: text/css; charset: UTF-8");

     require_once 'parametre.php';
?>
html { height: 100%; }

html,body{
background-color: <?php echo baggrundsfarve();?>;
min-height: 1400px;


}

#content
{
-webkit-box-shadow: 7px 7px 5px 0px rgba(50, 50, 50, 0.75);
-moz-box-shadow:    7px 7px 5px 0px rgba(50, 50, 50, 0.75);
box-shadow:         7px 7px 5px 0px rgba(50, 50, 50, 0.75);
 
margin-top: 0px;

margin-left: auto;
margin-right: auto;
border: none; // 5px solid red;
min-height: 1300px;

width: 1200px;
min-width: 50%;

}

#icons
{
   

height: 50px;
font-color: white;
margin-right:12.5%;





}
#icons #big{
height: 50px;
 display: inline-block; 
 
 left:50%;
}

.magnifying-glass{
height:30px;
padding: 0 5px 8px 0;
}
.header-search-box {
    display:none;
    width: 0px;
  
  
  bottom:17px;
  position:relative;
    
}




#venstre 
{position: relative;
background-color: <?php echo venstre_farve();?>;
width: 25%;
float: left;

min-height: 1062px;

}
#venstre .loginform{
position:relative;

}
#overskrift 
{

margin-bottom: 0px;
margin-top: 1px;
height: 200px;
width 100%


}
#overskrift_img img{
width: 100%;
height: 100%;

}
#indhold 
{
background-color: <?php echo indhold_farve();?>;
width: 75%;

float: right;
min-height: 1062px;

}

#katalog{
height: 1044px;
position:relative;
width:100%;

}


 #katalog figure {
 width: <?php echo bredde_billeder(); ?>px; 
    margin:10px;
    float: left;
}

 #katalog figure img {
width: 100%; height: <?php echo hoejde_billeder(); ?>px;

}

#katalog figure  {
    -webkit-transition: all 1s ease; /* Safari and Chrome */
  	-moz-transition: all 1s ease; /* Firefox */
  	-o-transition: all 1s ease; /* IE 9 */
  	-ms-transition: all 1s ease; /* Opera */
  	transition: all 1s ease;
}

#katalog figure:hover  {
    -webkit-transform:scale(1.1); /* Safari and Chrome */
    -moz-transform:scale(1.1); /* Firefox */
    -ms-transform:scale(1.1); /* IE 9 */
    -o-transform:scale(1.1); /* Opera */
     transform:scale(1.1);
}




figure figcaption table{
    width: 100%;
    
}

#forside{
margin-left:auto;
margin-right:auto;
margin-top:14%;
height:500px;
width: 660px;

}
 #forside figure {
 width: <?php echo bredde_billeder(); ?>px; 
    margin: 10px;
    float: left;
}

 #forside figure img {
width: 100%; height: <?php echo hoejde_billeder(); ?>px;
   }

/* ligger tallene i bunden af siden */
p.sider { 
 position: absolute;
    bottom: 5px;
    margin-left:50%;
    margin-right:50%;
        }
        
        
        
#topbillede img{
width: 100%;
}
#billeder {
width: 35%; //height: 50px;
    float: left;
    
}

#enkelt p {
font-size: 16px;

}

#enkelt p1 {
font-size: 40px;

}
#dropdown table{
width: 100%;
}


#dropdown{
margin-left: 20px;
margin-top: 2%;
width: 50%;
//border: 1px solid orange;
float: left;
}


#dropdown p2{
color: green;
cursor: default;
}

#dropdown p3{
color: red;
}



/***FIRST STYLE THE BUTTON***/
input#koeb{
cursor:pointer; /*forces the cursor to change to a hand when the button is hovered*/
padding:5px 25px; /*add some padding to the inside of the button*/
background:#C0C0C0; /*the colour of the button*/
border:1px solid black; /*required or the default border for the browser will appear*/
/*give the button curved corners, alter the size as required*/
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
/*give the button a drop shadow*/
-webkit-box-shadow: 0 0 4px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 4px rgba(0,0,0, .75);
box-shadow: 0 0 4px rgba(0,0,0, .75);
/*style the text*/
//color:#f3f3f3;
font-size:20px;
}
/***NOW STYLE THE BUTTON'S HOVER AND FOCUS STATES***/
input#koeb:hover, input#koeb:focus{
background-color :#808080; /*make the background a little darker*/
/*reduce the drop shadow size to give a pushed button effect*/
-webkit-box-shadow: 0 0 1px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 1px rgba(0,0,0, .75);
box-shadow: 0 0 1px rgba(0,0,0, .75);
}



// Små billeder i vis enkeltvare, 4 stks.

#container1{
    
    height: 100px;
    width: 100%;
    
}

.image {
    width:100%;
    height:100px;
    display:none;
}

.image img{
height: 70px;
width: 25%;
}

.active {
    display:block;
}


.next, .prev {
    position: relative;
    cursor: pointer;
    top: 0px;
}
#controls img{
width:25px;
height:25px;
}

.next {
    left: 50%;
}
.prev {
    left: 20%;
}

#search input{
float:left;
float:left;
width:10%;
height:40px;
}



#soeg img{

width: <?php echo bredde_billeder(); ?>px; 
height: <?php echo hoejde_billeder(); ?>px;
   }

#soeg{
align::top;
font-size: 20px;
}

#slider a{
    display: none;
}
#slider{


margin-top:5%;
}

#kurv img {
    margin-left: 1%;
 
    width: 30%;
    height: auto;
}
#MyGmaps{
display:inline-block;
float:left;
margin-left:5px;
margin-top:5px;
width:45%;
height:250px;
border:1px solid #CECECE;
}
#virkomhedsinfo{
display:inline-block;
float:left;
font-size: 26px;
margin-left:10px;
margin-top:20px;
height:230px;
width:52%;
}

#omos{
margin-top:25px;
margin-left:10px;
margin-right:10px;
float:left;
font-size:20px;
font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;

}

