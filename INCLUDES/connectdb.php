<?php
try{
    $db=new PDO('mysql:host=localhost;dbname=ajout','root','root');

}
catch(PDOException $e){
    die('Erreur: '.$e->getMessage());
}
?>
