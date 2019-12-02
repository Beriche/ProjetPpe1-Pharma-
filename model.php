
<?php
// Connexion à la BASE DE DONNÉES
class ConnexionDB {
  public $cnx = null;
  public $resultat = null;

  function __construct(){

    $this->cnx = new PDO("mysql:host=localhost:3308;dbname=projet;charset=utf8", "beriche", "beriche" );
  }

  function __destruct(){
    if ($this->resultat!==null) { $this->resultat = null; }
    if ($this->cnx!==null) { $this->cnx = null; }
  }

  // Exécution de la requête préparée
  // La fonction peut être appelée plusieurs fois.
  function Requete($strSQL, $tblValeur){
    $this->resultat = $this->cnx->prepare($strSQL);
    $this->resultat->execute($tblValeur);
    return $this->resultat->fetchAll();
  }
  function getRequete($strSQL){
    $this->resultat = $this->cnx->prepare($strSQL);
    $this->resultat->execute();
    return $this->resultat->fetchAll();
  }

  





}
?>