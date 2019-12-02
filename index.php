<?php 
session_start();
  // Cela signifie que vous ne souhaitez pas voir le résultat de votre script mis une fois pour toutes en cache, 
 # header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  #header("Cache-Control: no-cache");
  #header("Pragma: no-cache");
  
  try {
     if (isset($_REQUEST['action']) || !empty($_REQUEST['action'])) 
      {

   
      require "controleur.php";
      require("control/controleur_sante.php");
      require("control/controleur_nut.php");
      require("control/controleur_hy.php");
      require("control/pagination.php");
      require("control/membres.php");
      require("control/controleur_mat.php");
      require("control/controleur_admin.php");
      $membres  = new membres();
      $produits = new produit_s();
      $admin    = new espace_admin();
      $Membres  = new espace_membres();
      $produith = new produit_hy;
      $produitn = new produit_n; 
      $produitm = new produit_m; 
      $page     = new pages;



      if ($_REQUEST['action'] == 'info') {
           $ligne = $produits->getsanteproduit();
            include "viewsanteProduit.php";
        }

      if ($_REQUEST['action'] == 'sante') {
           $ligne = $produits->getsante();
             include "viewsante.php";
        }
        if ($_REQUEST['action'] == 'hygiene') {
           $ligne = $produith->gethyg();
            include "viewhygiene.php";
        }
          if ($_REQUEST['action'] == 'hyg') {
           $ligne = $produith->gethyPr();
            include "viewhygieneProduit.php";
        }

        if ($_REQUEST['action'] == 'nutrition') {
           $ligne = $produitn->getNut();
            include "viewnutrition.php";
        }
       
        
          if ($_REQUEST['action'] == 'nut') {
           $ligne = $produitn->getNutPr();
          include "viewnutritionProduit.php";
        }
          if ($_REQUEST['action'] == 'maternite') {
           $ligne = $produitm->getmat();
            include "viewmaternite.php";
        }
          if ($_REQUEST['action'] == 'mat') {
           $ligne = $produitm->getmat();
            include "viewmaternitePr.php";
        } 
        if ($_REQUEST['action'] == 'Supprimer') {
          $membres->setDelMBR(intval($_POST['ide']));
          include "viewmembre.php";
        } 
          if ($_REQUEST['action'] == 'Modifier') {
          $_POST['ide']=intval($_POST['ide']);
          $membres->setUpdateMBR($_POST);
          include "viewmembre.php";
        } 
           if ($_REQUEST['action'] == 'ModifierArt') {
          $_POST['ida']=intval($_POST['ida']);
          $membres-> setUpdateART($_POST);
          include "admin.php";
          
        } 
          if ($_REQUEST['action'] == 'SupprimerArt') {
          $membres->setDelArt(intval($_POST['ida']));
          include "admin.php";
        } 

        if($_REQUEST['action'] == 'Ajouter'){

           $membres->setprod($_POST); 

          include "admin.php";
        
        }
           
           
          if ($_REQUEST['action'] == 'mbr') {
          $membres  = new membres();
        $ligne = $membres->getselectMembres();
        include "viewmembre.php";
        } 
        if ($_REQUEST['action'] == 'prod') {
          $membres  = new membres();
        $ligne = $membres->getselect();
        include "admin.php";


        }

       
           if ($_REQUEST['action'] == 'Page') {
            $page->getPage();
         
            include "viewsante.php";
        }
          if ($_REQUEST['action'] == 'inscription') {
            $membres->setinscri($_POST);
            include "viewconn.php";
            #var_dump($_POST);
            #exit();
            
        }
         if ($_REQUEST['action'] == 'Connexion') {
         
           $Membres->setMemb();

            
        }

      if ($_REQUEST['action'] == 'profil') {
             
           $Membres->getprofil($_SESSION['id']);
          
        }


    
   if ($_REQUEST['action'] == 'Rechercher') {
           $ligne = $membres->Search($_POST);
           include "viewsante.php";
           var_dump($_POST);
           exit;
        
        /*include "viewsante.php";*/
        }


          if ($_GET['action'] == 'Login') {
     
          $username = filter_var($_POST["mail"], FILTER_SANITIZE_STRING);
          $password = filter_var($_POST["mdp"], FILTER_SANITIZE_STRING);
          require_once "control/controleur_admin.php";
          require_once "controleur.php";
          $admin = new espace_admin();
          $membres = new membres();
          $lignes = $membres->getselect();
          $isLoggedIn = $admin->verifLogin($username, $password);
          if (! $isLoggedIn) {
              $_SESSION["erreurMessage"] = "Les informations d'identification sont invalides";
              //exit();
          }
         include "admin.php";
          #exit();
        } 
        
      

      }else{
    
         include"viewAcceuil.php"; 
     }
      

  }



  catch (Exception $e) {
      erreur($e->getMessage());
  }  
     
?>
