<?php

/**
 * @author lolkittens
 * @copyright 2016
 */

class css extends db{
private function db($select){
$db=new db;
return $get=$db->get($select);    
}

function css_schools($id){
if($id!=''){
$db=$this->db("SELECT * FROM css WHERE pageID='$id' AND page_tag='school' LIMIT 1");
$num=number_rows($db);
if($num>0){
$row=record($db);
echo('<style type="text/css">
<!--
.page{background-color:'.$row['bg'].';}
.page h4{color:'.$row['header_color'].'; border-bottom:solid 5px '.$row['hrader_color'].';}
.heading{background-color: '.$row['header'].';}
.section img{border:solid 5px '.$row['img_border'].';}


	
-->
</style>');    
}
}else{
message('Invalid school css');    
}    
}


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}


?>