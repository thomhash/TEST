#container
{<?php
     require_once 'parametre.php';
?>
width: 100%;

}

body{
background-color: <?php echo baggrundsfarve();?>;

}

#icons
{
display: inline-block;   
height: 50px;

font-color: white;

margin-right:0%;
width: 32%;
 
margin-top:0px;
  



}
#icons img{
height: 50px;
width:45px;

 display: inline-block;
   
  
 
 

 
}
#overskrift_img{
display: inline-block;
width:65%;
 
}

#overskrift_img img{
width: 100%;
height: 50px;

margin-top:0px;



}

#indhold 
{

width: 100%;
position: relative;
   


}




 #katalog figure {
 width: <?php echo bredde_billeder_mobile(); ?>px; 
    border: none; //1px solid blue;
    margin: 10px;
   
    float: left;
}

 #katalog figure img {
 height: <?php echo hoejde_billeder_mobile(); ?>px;
   // border: 1px solid red;
    //margin: 5px;
    //float: left;
}






figure figcaption table{
    width: <?php echo bredde_billeder_mobile(); ?>px;
    
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














