<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function loadContent($where, $default=''){
    $content = filter_input($default, FILTER_SANITIZE_STRING);
    $default= filter_var($default, FILTER_SANITIZE_STRING);

// Set up the home page as the default
$content = (empty($content)) ? $default : $content;
if($content){
    //sanitize the data to prevent hacking.
$html=include 'content/' . $content . '.php'; 
return $html;
}
}
?>
