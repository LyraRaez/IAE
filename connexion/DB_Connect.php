<?php
try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=******;dbname=*****', '*****', '****', $pdo_options);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>
<!-- host= nom hébergeur 
	dbname= nom de la base de données
	'****'(1er)=Nom utilisaateur
	'****'(2ème)=Mot de passe-->