

<?php

 $Requete="SELECT * FROM produit Where categorie like 'nutrition' ";

require_once("model.php");
class produit_n extends  ConnexionDB {

   function getNut(){
        $page =  (!empty($_GET['page']) ? $_GET['page'] : 0 );
$page = ($page <= 0 ? 1 :$page);
     $limite=2;
$debut=($page -1)*$limite;


    $strSQL = "SELECT * FROM produit Where categorie like 'nutrition' ORDER BY nom_med LIMIT $limite OFFSET $debut ";
    $tabValeur = array("*");
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;
  }

   function getNutPr() {
    $idmed=$_GET['id'];
    GLOBAL $Requete;
    $strSQL = "SELECT * FROM produit Where categorie like 'nutrition'". "AND produit.id_med = ". $idmed . ";";
    $tabValeur = array("*");
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;

  }
  

 

}





?>


