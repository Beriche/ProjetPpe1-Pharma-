<?php
require_once("model.php");
class membres  extends  ConnexionDB {
  


  function getselect(){
    $strSQL = "SELECT  * FROM produit ";
    $tabValeur = array("*");
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;

  }
  function getselectMembres(){
    $strSQL = "SELECT  * FROM espace_membre ";
    $tabValeur = array("*");
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;

  }

   function setDelMBR($id){

    $strSQL = "DELETE FROM espace_membre WHERE id= ?";
    $tabValeur = array($id);
    $del = $this->Requete($strSQL, $tabValeur);
    return $del;
  }
   function setUpdateMBR($ligne){

    $strSQL = "UPDATE espace_membre SET nom = UCASE(:nom), mail = UCASE(:mail),telephone = :tel WHERE id = :ide;";

    $tabValeur = array(
      'nom'  => $ligne['nom'], 
      'mail'   => $ligne['mail'], 
      'tel'   => $ligne['tel'],
      'ide'   => $ligne['ide'],
    );
    
    $upd = $this->Requete($strSQL, $tabValeur);
    return $upd;
  }
   function setUpdateART($ligneA){

    $strSQL = "UPDATE produit SET nom_med = UCASE(:nom), prix = UCASE(:prix) WHERE id_med = :ida;";

    $tabValeur = array(
      'nom'  => $ligneA['nom'], 
      'prix'   => $ligneA['prix_med'], 
      'ida'   => $ligneA['ida'],
    );
    
    $upd = $this->Requete($strSQL, $tabValeur);
    return $upd;
  }
  function setprod(){

    
    /*si on appuie sur le bouton ajouter des produit*/
    if (isset($_POST['action'])) {
    /*on declare les variable*/
      $nom = $_POST['nom'];
      $prenom = $_POST['description'];
      $cond = $_POST['conditionnement'];
      $img  =  $_POST['image'];
      $prix = $_POST['prix'];
      $cat = $_POST['categorie'];
     /*si tous les champs ne sont pas vide alors*/
    if(!empty($nom) AND !empty($prenom) AND !empty($cond) AND !empty($img) AND !empty($prix) AND !empty($cat)) {

       $strSQL = "INSERT INTO produit(nom_med,description,conditionnement,image_med,prix,categorie) VALUES(?, ?, ? , ? , ? , ? )";
    $tabValeur = array(
      $_POST['nom'],
      $_POST['description'],
      $_POST['conditionnement'],
      $_POST['image'],
      $_POST['prix'],
      $_POST['categorie']
    

    );
    $ins = $this->Requete($strSQL, $tabValeur);
    return $ins;
 
    //header("Location: ./index.php?action=Login");
      include "admin.php";
    /*si  les champs sont vide afficher*/
    }else{


    $erreur="Veuillez remplir tous les champs !";

}


}


}

   function setDelArt($ida){

    $strSQL = "DELETE FROM produit WHERE id_med = ?";
    $tabValeur = array($ida);
    $del = $this->Requete($strSQL, $tabValeur);
    return $del;
  }



  function setMem(){

   
       $strSQL = "INSERT INTO membres (mail,mdp) VALUES (?, ?)";
    $tabValeur = array(
      $_POST['mail'],
      sha1( $_POST['mdp'])
    );
    $ins = $this->Requete($strSQL, $tabValeur);
    return $ins;

}

function setinscri(){

  
  $strSQL = "INSERT INTO espace_membre(prenom, nom,mail,motdepasse,code_postal,ville,Adresse,telephone) VALUES(?, ?, ? , ? , ? , ? ,?, ?)";
    $tabValeur = array(
      $_POST['prenom'],
      $_POST['nom'],
      $_POST['mail'],
     sha1( $_POST['mdp']),
      $_POST['codep'],
      $_POST['ville'],
      $_POST['Adresse'],
      $_POST['tel']
    

    );
    $ins = $this->Requete($strSQL, $tabValeur);
    return $ins;



  }

function Search($produit){

    $strSQL = "SELECT * FROM produit 
                WHERE nom_med LIKE  :med 
     /*           OR emp_nom     LIKE  :nom 
                OR emp_tel     LIKE  :tel*/ 
              ";

    empty($produit['nom'])  ? $produit['nom'] = '*' : $produit['nom']; 
    /*empty($tblemp['nom'])     ? $tblemp['nom']    = '*' : $tblemp['nom']; 
    empty($tblemp['tel'])     ? $tblemp['tel']    = '*' : $tblemp['tel']; */

    $tabValeur = array(
          'med'  => "%".$produit['nom']."%" 
          /*'nom'   => "%".$tblemp['nom']."%", 
          'tel'   => "%".$tblemp['tel']."%"*/
        );

    $sch = $this->Requete($strSQL, $tabValeur);
    return $sch;
    }





/*  function Search(){

    $strSQL = "SELECT * FROM sante
                WHERE nom_med LIKE  :nom 
               ";

    $tabValeur = array(
          'search'  => "%".$ligne['nom_med']."%", 
        );

    $sch = $this->Requete($strSQL, $tabValeur);
    return $sch;
    }*/
}




?>
