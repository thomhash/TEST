#container
{
width: 100%;

}
<?php
     require_once 'parametre.php';
?>


#top
{
   
background-color: white;
height: 5%;
font-color: white;
width: 100%;

}


#overskrift 
{
background-color: red;
margin-bottom: 0px;
margin-top: 1px;x   
height: 150px;
width: 100%;

}

#indhold 
{

width: 100%;
position: relative;
   


}




 #katalog figure {
width: <?php echo varer_vandret(); ?>%; 
    border: none; //1px solid blue;
    margin: 10px;
   
    float: left;
}

 #katalog figure img {
width: 100%; height: <?php echo hoejde_billeder(); ?>px;
   // border: 1px solid red;
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
        
        
        
#topbillede img{
width: 100%;
}
#billeder {
width: 100%; //height: 50px;
  
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

width: 100%;
//border: 1px solid orange;
float:left;

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
font-size:30px;
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
height: 100px;
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

.next {
    left: 50%;
}
.prev {
    left: 30%;
}














