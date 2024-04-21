<?php


try{
    
    $connection = new PDO('mysql:host=localhost;dbname=lawyer','root','');
// echo "database connected";

}catch(PDOExpection){

echo "database is not connected";

}







?>