<?php
session_start();

require_once 'config/bdd.inc.php';
//appelle la base de données
require_once 'config/connexion.inc.php';
//condition d'acces au contenu
/******SMARTY******/
require_once ('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir('templates/');
/*******SMARTY********/
if ($connexion = FALSE){
    $_SESSION['no_connect'] = 'veuillez vous connecter';
    header("location: connexion.php");
}
if (isset($_POST['envoyer'])) {
//si le bouton 'envoyer' est posté
    $titre = addcslashes($_POST['titre'], "'%_");
    $texte = addcslashes($_POST['texte'], "'%_");
    print_r($_POST);
    //on affiche 'titre' de la table _POST ainsi que 'texte'
    $publie = (!empty($_POST['publie']) ? $_POST['publie'] : 0);
    //definition de la valeur publie  condition ternaire
    $date = date("Y-m-d");
    //echo $titre . '&' . $texte . '&' . $publie . '&' . $date;

    $requete_insertion = "INSERT INTO articles (titre , texte, date, publie) VALUES ('$titre', '$texte', '$date', $publie)";
    //insertion dans la table 'articles' les champs (titre, texte, date, publie) 
    $erreur_image = $_FILES['image']['error'];
    //variable $erreur image correspond au champs error de la table image issue elle même de la table $_FILES
    if ($erreur_image != 0) {

        $_SESSION['msg_error'] = "une erreur est survenue lors du chargement de l'image";

        header("location: article.php");
        /* si la variable $erreur_image est différente de 0 on affiche le message ci-dessus
         * et redirection sur la page article.php
         */
    } else {

        $_SESSION['msg_send'] = "article posté";

        header("location: index.php");
        mysql_query($requete_insertion);
        //sinon on applique la requête SQL contenue dans la variable $requete_insertion
        $id_article = mysql_insert_id();
        //variable $id_article correspond à l'insertion automatique d'un noveau numero dans la base de données
        move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . "/img/$id_article.jpg");
        //déplacement et renommage de l'image 
    }
} else {//sinon j'affiche
    ?>
    <?php
    /* ------------------------ HTML --------------------------- */
    include_once 'include/header.inc.php';
    if (isset($_SESSION['msg_error'])) {
        $smarty->assign('msg_error', $_SESSION['msg_error']);
    }
    $smarty->debugging = false;
    
    $smarty->display('article.tpl'); 
   
        unset($_SESSION['msg_error']);
        //si msg_error est active on affiche le message et prochain rechargement on n'affiche plus
    }
    ?>
   
    <?php
    include_once 'include/menu.inc.php';
    include_once 'include/footer.inc.php';
?>