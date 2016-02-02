<?php

//demarrage session
session_start();
//appel bdd

require_once 'config/bdd.inc.php';
//appel du test de connexion
//require_once 'config/connexion.inc.php';
/* * ******appel Smarty***** */
require_once('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir('templates/');
/* * ******SMARTY******** */
//condition d'acces à la page
if (isset($_POST['connexion'])) {
    //print_r($_POST);
    $email = addcslashes($_POST['email'], "'%_");
    //declaration de la variable email
    $mot_de_passe = addcslashes($_POST['mot_de_passe'], "'%");
    //declaration de la variable mot_de_passe
    $select_user = 'SELECT * FROM utilisateur WHERE email="' . $email . '" AND mot_de_passe="' . $mot_de_passe . '"';
    //variable de requete

    $requete_user = mysql_query($select_user);
    //execution de la requete


    $resultat_requete_user = mysql_fetch_array($requete_user);
    if ($resultat_requete_user){
        $id = $resultat_requete_user['id'];
        $sid = md5($email . time());
        echo $sid;
         $update = "UPDATE utilisateur SET sid='$sid' WHERE id='$resultat_requete_user[id]'";
		//$update = 'UPDATE utilisateur SET sid=' $sid ' WHERE id="'. $id .'"';
        //mise a jour de la table utilisateur
        //echo $update;

       mysql_query($update);
        echo
        setcookie('sid', "$sid", time() + (24 * 3600));
        $_SESSION['connexion'] = 'vous êtes connecté' . ' ' . $resultat_requete_user['prenom'] . ' ' . $resultat_requete_user['nom'];
        header("location: index.php");
    } else {
        $_SESSION['bad_connexion'] = 'veuillez renseigner vos identifiants';
        header("location: connexion.php");
    }
}


//appel du header
include_once 'include/header.inc.php';
if (isset($_SESSION['bad_connexion'])) {
    $smarty->assign('bad_connexion', $_SESSION['bad_connexion']);
}
$smarty->debugging = false;

$smarty->display('connexion.tpl');
/* if (isset($_SESSION['bad_connexion'])) {
  ?>
  <div class="alert alert-error" id="notif">
  <?php echo $_SESSION['bad_connexion']; ?></div> */

unset($_SESSION['bad_connexion']);
//si msg_error est active on affiche le message et prochain rechargement on n'affiche plus
//-----------------html--------------
?>

<?php

//appel du menu
include_once 'include/menu.inc.php';
//appel du pied de page
include_once 'include/footer.inc.php';
?>
