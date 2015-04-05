<?php
 require '../dl/get_lager.php';
    require '../dl/ret_ordre.php';
    require '../fl/get_dato.php';
 

function ret_begyndt_f($kunde_id)
 {
    
    ret_begyndt(get_dato(),$kunde_id);
    
}

function ret_afsendt_f($kunde_id)
{
   ret_afsendt(get_dato(),$kunde_id);
}

function ret_medarbejder_f($dato,$kunde_id)
{
    ret_medarbejder($id_medarbejer,$ordre_id);
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

