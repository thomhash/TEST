<?php
    header("Content-type: text/css; charset: UTF-8");
    require '../parametre.php';
    require_once '../fl/tjek_mobile_browser.php';
?>
#container_menu, nav, ul, li, a  {margin: 0; padding: 0;}
#menu {font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; }
a {text-decoration: none;}
#container_menu {
width: 100%;
    
}
.toggleMenu {
    display:  none;
    background: #666;
    padding: 10px 15px;
    width: 40px;
    color: #fff;
      <?php if(mobile_browser()){echo "position: relative; margin-top:  -20px;";}
          ?>
}
.nav {
    list-style: none;
     *zoom: 1;
     background: <?php echo farve_hovedgruppe(); ?>;
}
.nav:before,
.nav:after {
    content: " "; 
    display: table; 
}
.nav:after {
    clear: both;
}
.nav ul {
    list-style: none;
    width: 9em;
}
.nav a {
    padding: 10px 15px;
    color:#fff;
}
.nav li {
    position: relative;
}
.nav > li {
    float: left;
    border-top:  <?php if(mobile_browser()){ echo "1px solid " .kant_farve_hovedgruppe() .";";}
    else{echo "none;";}
    ?>;
}
.nav > li > .parent {
    background-image: url("../billeder/downArrow.png");
    background-repeat: no-repeat;
    background-position: right;
}
.nav > li > a {
    display: block;
}
.nav li  ul {
    position: absolute;
    left: -9999px;
}
.nav > li.hover > ul {
    left: 0;
}
.nav li li.hover ul {
    left: 100%;
    top: 0;
}
.nav li li a {
    display: block;
    background: <?php echo farve_undergruppe1();?>;
    position: relative;
    z-index:100;
    border-top: 1px solid <?php echo kant_farve_undergruppe1();?>; //#175e4c;
}
.nav li li li a {
background: <?php echo farve_undergruppe2();?>;
    z-index:200;
    border-top: 1px solid <?php echo kant_farve_undergruppe2();?>;
}

@media screen and (max-width: 768px) {
    .active {
        display: block;
    }
    .nav > li {
        float: none;
    }
    .nav > li > .parent {
        background-position: 95% 50%;
    }
    .nav li li .parent {
        background-image: url("images/downArrow.png");
        background-repeat: no-repeat;
        background-position: 95% 50%;
    }
    .nav ul {
        display: block;
        width: 100%;
    }
   .nav > li.hover > ul , .nav li li.hover ul {
        position: static;
    }

}