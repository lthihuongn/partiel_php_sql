<?php
require_once('pdo.php');

$resultat = $dbPDO->prepare("SELECT * FROM film");
$resultat ->execute(); 

$films = $resultat-> fetchAll(PDO::FETCH_CLASS);

foreach($films as $film){
   //var_dump($film->titre);
   echo '<p>' .$film->titre."(". $film->genre. "de". $film->realisateur.'</p><br>';
}
?>

<h1>Liste des meilleurs films des années 2010 :</h1>
<ul>
    <li><?php $film->titre ?></li>
    <li></li>
</ul>