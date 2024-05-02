<?php
require_once('pdo.php');

$resultat = $dbPDO->prepare("SELECT * FROM film");
$resultat ->execute();
$resultat1 = $dbPDO->prepare("SELECT * FROM genre");
$resultat1 ->execute();
$resulta2 = $dbPDO->prepare("SELECT * FROM realisateur");
$resultat2 ->execute();

$films = $resultat-> fetchAll(PDO::FETCH_CLASS);
$genres = $resultat1-> fetchAll(PDO::FETCH_CLASS);
$realisateurs = $resultat2-> fetchAll(PDO::FETCH_CLASS);


foreach($films as $film){
   var_dump($film->titre);
   //echo '<p>' .$film->titre."(". $film->genre. "de". $film->realisateur", ".$film->date.'</p><br>';
   
}
?>

<h1>Liste des meilleurs films des années 2010 :</h1>
<ul>
    <li><?php "<a href='film.php?id=$film->id'>Interstellar</a>";?></li>
    <li><?php "<a href='film.php?id=$film->id'>Django Unchained </a>";?></li>
    <li><?php "<a href='film.php?id=$film->id'>Inception</a>";?></li>
    <li><?php "<a href='film.php?id=$film->id'>Coco</a>";?></li>
    <li><?php "<a href='film.php?id=$film->id'>Joker</a>";?></li>
</ul>