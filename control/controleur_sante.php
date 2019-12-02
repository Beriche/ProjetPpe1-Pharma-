
<?php

 $Requete="SELECT * FROM produit Where categorie like 'sante' ";

require_once("model.php");
class produit_s extends  ConnexionDB {

   function getsante(){
        $page =  (!empty($_GET['page']) ? $_GET['page'] : 0 );
$page = ($page <= 0 ? 1 :$page);
     $limite=2;
$debut=($page -1)*$limite;


    $strSQL = "SELECT * FROM produit Where categorie like 'sante' ORDER BY nom_med LIMIT $limite OFFSET $debut ";
    $tabValeur = array("*");
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;
  
  
    $resulatNBlignes = $this->cnx->prepare('SELECT found_rows()');

    $nombredElementsTotal = $resulatNBlignes->fetchColumn();
    /* On calcule le nombre de pages */
    $nombreDePages = ceil($nombredElementsTotal / $limite);




  }

   function getsanteproduit() {
    $idmed=$_GET['id'];
    GLOBAL $Requete;
    $strSQL = "SELECT * FROM produit Where categorie like 'sante'". "AND produit.id_med = ". $idmed . ";";
    $tabValeur = array("*");
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;

  }
  

 

}





?>
