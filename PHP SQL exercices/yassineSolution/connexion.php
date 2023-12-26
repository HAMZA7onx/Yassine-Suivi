<?php
$server="localhost";
$user="root";
$password="";
$database= "exercice";



//la connexion au database 
$connexion = mysqli_connect($server,$user,$password,$database);


if($connexion->connect_error){
    die("Erreur!". $connexion->connect_error);
}else{
    echo"Connexion reussite!";
}

?>