<?php

require_once 'config/bdd.inc.php';
//appel base de donnee
$select_nbpages = "SELECT COUNT(*) as nbarticle FROM articles WHERE publie= 1";
//declaration variable de requete du nombre d'articles publies
$request = mysql_query($select_nbpages);
//appel de la requete
$result_request = mysql_fetch_array($request);
//resultat de la requete poussee dans un tableau
$total = $result_request['nbarticle'];
//resultat de la requete dans une variable
$nbrarticles = 2;
//determine le nombre d'articles par page
$nbrpages = ceil($total/$nbrarticles);
//determine le nombre de page en fonction du nombre d'articles arrondi au nombre superieur
//echo $nbrpages;
$page_courante = (isset($_GET['page']) ? $_GET['page'] : 1);
//condition ternaire qui renvoie le numero de la page courante
$start = (($page_courante-1) * $nbrarticles);
$select_all_post = "SELECT id, titre, texte, DATE_FORMAT(date, '%d/%m/%Y') as date_fr FROM articles WHERE publie = 1  
LIMIT $start, $nbrarticles;";
echo $select_all_post;
?>
