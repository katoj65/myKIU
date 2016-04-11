<?php
error_reporting(E_ALL ^ E_NOTICE);
include_once('page.php');
include_once('database-file.php');
include_once('post.php');
include_once('get.php');
include_once('dynamic_css.php');



/**
 * @author lolkittens
 * @copyright 2016
 */

function url_data($url){
return strtolower(str_replace(' ','_',$url));
}


function url_string($url){
return strtolower(str_replace('_',' ',$url));
}


function return_home(){
return header('Location:index.php');    
}



function message($message){
return($message);    
}







































?>
