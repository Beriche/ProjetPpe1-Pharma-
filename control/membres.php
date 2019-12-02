<?php
require_once("model.php");
class espace_membres  extends  ConnexionDB {
  
  function setMemb(){
  	//si on appuie sur le bouton connexion
  	  if (isset($_POST['action'])) {
      //on securise les variable mail,et mdp
       $mailconnect = htmlspecialchars($_POST['mail']);
       $mdpconnect = sha1($_POST['mdp']);
      //si les champs mail et mot de passe ne sont pas vide ou sont remplit alors 
     if(!empty($mailconnect) AND !empty($mdpconnect)) {
         //si le champ mail et mot de passe sont remplit,ne sont pas vide.

       	//ici on va verifie si l'utilisateur existe avec une requet 
       	  $requser = $this->cnx->prepare("SELECT * FROM espace_membre WHERE mail = ? AND motdepasse = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      //on va allez compter les colonne dans la base de donne pour  voir si il existe au moin 1 utilisateur 
      $userexist = $requser->rowCount();

      if($userexist == 1) {
    //si row compte a trouve au moin 1 utilisateur alors.
      	//on va allez recuperer la variable requser on va la stocker dans un fetch qui ensuite permetra de stocker les information de l'utilisateur existant dans des variables session 
      	$userinfo = $requser->fetch();
      	//voici quelques information de l'utilisateur stocke dans des session
      	$_SESSION['id'] = $userinfo['id'];
      	$_SESSION['nom'] = $userinfo['nom'];
      	$_SESSION['mail'] = $userinfo['mail'];

      	//et on redirige l'utilisateur vers sa page de profil selona son id
      	header("Location: ./index.php?action=profil&id=".$_SESSION['id']);
         }else{
         	//ou si il n'existe pas
         	  

         	$erreur="Mauvais mail ou mot de passe !";

         
      }
        

       }else{
       	//si les champs mail et mot de passe sont vide affichez ce message d'erreur
        
        $erreur ="Tous les champs doivent etre completé";

       }





    


    require_once("viewconn.php");

}
}

function getprofil(){
	if(isset($_GET['id']) AND $_GET['id']>0)
{
	//on securise la variable id en la transformant en nombre avec la fonction intval
	$getid = intval($_GET['id']);

	//on va allez selectionnez tous les information de l'utilisateur selon son id 
	 $requser = $this->cnx->prepare('SELECT * FROM espace_membre WHERE id = ?');
   $requser->execute(array($getid));
   //puis on recupere les information  avec fetch
   $userinfo = $requser->fetch();

require_once "viewprofil.php";
//afficher les lien suivant si les info corresponde à l'id de la personne
if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="editionprofil.php">Editer mon profil</a>
         <a href="viewdeconnexion.php">Se déconnecter</a>
         <?php
         }
}else
//si la variables id n'existe pas on redirige l'utilisateur vers l'acceul
{
	header("Location: ./viewAcceuil.php");
}



}

  

}
  ?>

