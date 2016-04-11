<?php

/**
 * @author lolkittens
 * @copyright 2016
 */
class get extends db{
private function db($select){
$db=new db;
return $get=$db->get($select);    
}


    
    
    
function list_departments(){
$get=$this->db("SELECT name FROM department");
$num=number_rows($get);
if($num>0){
echo('<ul>');
while($row=record($get)){
echo('<li><a href="?dept='.url_data($row['name']).'">'.ucfirst($row['name']).'</a></li>');    
}    
end_get_records($get);
echo('</ul>');
}else{
echo('No content');    
}
}     
    
    
    
    
    
    
    
function list_schools(){
$get=$this->db("SELECT name FROM schools");
$num=number_rows($get);
if($num>0){
echo('<ul>');
while($row=record($get)){
echo('<li><a href="?sc='.url_data($row['name']).'">'.ucfirst($row['name']).'</a></li>');    
}  

echo url_data('hello world');      
end_get_records($get);
echo('</ul>');
}else{
echo('No content');    
}
}   
    
    
    
    
    
function get_school($sc){
if(isset($sc)){
$sc=url_string($sc);
$db=$this->get("SELECT * FROM schools WHERE name='$sc' LIMIT 1");
$num=number_rows($db);
if($num>0){
$row=record($db);
end_get_records($db);
return($row);    
}else{
return_home();    
}
}    
}    
    
       
     
function get_department($sc){
if(isset($sc)){
$sc=url_string($sc);
$db=$this->get("SELECT * FROM department WHERE name='$sc' LIMIT 1");
$num=number_rows($db);
if($num>0){
$row=record($db);
end_get_records($db);
return($row);    
}else{
return_home();    
}
}    
}    
     
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}

?>