


<?php

 $Requete="SELECT * FROM produit Where categorie like 'maternite' ";

require_once("model.php");
class produit_m extends  ConnexionDB {

   function getmat(){
        $page =  (!empty($_GET['page']) ? $_GET['page'] : 0 );
$page = ($page <= 0 ? 1 :$page);
     $limite=2;
$debut=($page -1)*$limite;


    $strSQL = "SELECT * FROM produit Where categorie like 'maternite' ORDER BY nom_med LIMIT $limite OFFSET $debut ";
    $tabValeur = array("*");
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;
  }

   function getmatPr() {
    $idmed=$_GET['id'];
    GLOBAL $Requete;
    $strSQL = "SELECT * FROM produit Where categorie like 'maternite'". "AND produit.id_med = ". $idmed . ";";
    $tabValeur = array("*");
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;

  }
  

 

}





?>



