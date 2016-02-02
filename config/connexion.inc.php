<?php
$connexion = FALSE;
//creer une variable initialisee a false
//verification presence du cookie
if (isset($_COOKIE['sid'])){

$cookie_value = $_COOKIE['sid'];
//echo $cookie_value;
//attribuer la valeur du cookie a une variable 
$verif_bdd = "SELECT* FROM utilisateur WHERE sid ='$cookie_value'";
//verification en bdd de la presence de la valeur
$verif_bdd_execute = mysql_query($verif_bdd);
$result_verif_bdd = mysql_fetch_array($verif_bdd_execute);
 
//on pousse le resultat de la requete dans un tableau
/*si on a un resultat, on modifie la valeur de la variable de connexion 
 * pour lui donner la valeur TRUE
 */
}
if ($result_verif_bdd){
    $connexion = TRUE;
   // echo $connexion;
}else{
    $_SESSION[no_connect]= "vous n'êtes pas connecté";
    header("location: /monsite/connexion.php");
}
/*tester la valeur de la variable $connexion grace a une condition
 * redirection l'utilisateur
 */
  ?>

