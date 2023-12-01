<?php

try{
    $db = new PDO("mysql:host=localhost;dbname=mutluluk","root","");

}catch (PDOException $e){
    print $e->getMessage();
}
?>