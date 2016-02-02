<?php
session_start();

//demarrage session
require_once 'config/bdd.inc.php';
//appel de la base de données
//require_once 'config/connexion.inc.php';
//appel connexion
/* * **SMARTY*** */
require_once('libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('templates/');
include_once 'include/header.inc.php';
//insertion du du header HTML de la page

$select_nbpages = "SELECT COUNT(*) as nbarticle FROM articles WHERE publie= 1";
//echo $select_nbpages;
//declaration variable de requete du nombre d'articles publies
$requesto = mysql_query($select_nbpages);
//appel de la requete
$result_request = mysql_fetch_array($requesto);
//resultat de la requete poussee dans un tableau
$total = $result_request['nbarticle'];
//resultat de la requete dans une variable
$nbrarticles = 2;
//determine le nombre d'articles par page
$nbrpages = ceil($total / $nbrarticles);
//determine le nombre de page en fonction du nombre d'articles arrondi au nombre superieur
//echo $nbrpages;
$page_courante = (isset($_GET['page']) ? $_GET['page'] : 1);
//condition ternaire qui renvoie le numero de la page courante
$start = (($page_courante - 1) * $nbrarticles);
if (isset($_SESSION['msg_send'])) {
    ?><div class="alert alert-success" id="notif"> 
        <?php echo $_SESSION['msg_send']; ?></div>
    <?php
    unset($_SESSION['msg_send']);
}
if (isset($_SESSION['connexion'])) {
    ?><div class="alert alert-success" id="notif"> 
        <?php echo $_SESSION['connexion']; ?></div>
    <?php
    unset($_SESSION['connexion']);
}
$select_all_post = "SELECT id, titre, texte, DATE_FORMAT(date, '%d/%m/%Y') as date_fr FROM articles WHERE publie = 1  
LIMIT $start, $nbrarticles;";
//Requete SQL de selection dans la table article avec une condition sur le champ publie limite aux variables $start er $nbrarticles 
$request = mysql_query($select_all_post);
//on place dans une variable l'execution de la requête SQL
// Affichage de notre requete sans concaténation
/*
  while ($result_request = mysql_fetch_array($request)){

  ?>
  <img src="img/<?php echo $result_request['id']; ?>.jpg" alt="mon image"/>
  <?php


  echo '<h2>' . $result_request['titre'] . '</h2>';
  echo '<p>' . $result_request['texte'] . '</p>';
  echo '<p>' . $result_request['date'] . '</p>'  ;
  // echo '<img src="img/' . $result_request['id'] . '.jpg" alt="Phot N°' . $result_request['id'] . '">';
  }
 */

//avec concaténation
while ($result_request = mysql_fetch_array($request)) {
    //on crée une variable PHP dans laquelle on va pousser les résultats de la requête SQL $request
    $tableauArticleSmarty[] = $result_request;
    //variables pagination
    $smarty->assign('page_courante', $page_courante);
    $smarty->assign('nbrpages', $nbrpages);
}

$smarty->assign('tableauArticleSmarty', $tableauArticleSmarty);
$smarty->debugging = false;
$smarty->display('index.tpl');
include_once 'include/menu.inc.php';
//insertion du menu HTML de la page
include_once 'include/footer.inc.php';
//insertion du footer HTML de la page
?>   