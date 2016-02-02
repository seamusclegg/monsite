<?php

//demarrage session
session_start();
//appel base de donnees
require_once 'config/bdd.inc.php';
//appel service de connexion
//require_once 'config/connexion.inc.php';
/* * ***SMARTY*** */
require_once 'libs/smarty.class.php';
$smarty = new Smarty();
$smarty->setTemplateDir('templates/');
/* * **SMARTY*** */
include_once 'include/header.inc.php';
//condition d'insertion base de donnees
if (isset($_POST['inscription']))	{
    $nom = addcslashes($_POST['nom'], "'%_");
    $prenom = addcslashes($_POST['prenom'], "'%_");
    $email = addcslashes($_POST['email'], "'%_@");
    $mot_de_passe = addcslashes($_POST['mot_de_passe'], "'%_@");
    //requete d'insertion dans la base de donnees
    $requete_insert = "INSERT INTO utilisateur (nom, prenom, email, mot_de_passe)VALUES ('$nom', '$prenom', '$email', '$mot_de_passe')";
     
	if (empty($nom)) {
        $_SESSION['bad_inscription'] = "veuillez reseigner les champs obligatoires";
        //redirection sur la page
        header("location: inscription.php");
    }
 else {
	
    //execution de la requete
    mysql_query($requete_insert);
    $_SESSION['success'] = "Votre insription à bien été enregistrée";
    //redirection page connexion
    header("location: connexion.php");
}
}

$smarty->debugging = true;
$smarty->assign('bad_inscription', $_SESSION['bad_connexion']);
$smarty->display('templates/inscription.tpl');

unset($_SESSION['bad_inscription']);

include_once 'include/menu.inc.php';
include_once 'include/footer.inc.php';
?>