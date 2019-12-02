

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="style/stylesp.css">
</head>

<?php
if (!empty($_SESSION["userId"])) {

    $membreResultat = $membre->getMemberById($_SESSION["userId"]);
    if(!empty($membreResultat[0]["mail_admin"])) {
        $afficherNom = ucwords($membreResultat[0]["mail_admin"]);
    } else {
        $afficherNom = $membreResultat[0]["mail_admin"];
    }
}
  
?>   <?php require("include/header.php");
   require("include/menu.php");?>
<div class="container-fluid">
 <div class="container">
 <div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<section id="pageContent">
    <article>
     <a href="index.php?action=mbr">Espace_membres</a>
      <a href="viewajoutprod.php">Ajouter un produit</a>

        <br><h1> Articles </h1>
    </article>
        <!--br><br>
        Bonjour <strong><?php #echo $afficherNom; ?></strong>, <br>Bravo vous vous êtes connecté avec succès comme super-utilisateur!<br-->
        
        <br><br>
    </article>

    <table class="">
        <?php
        
        
        echo "<tbody>";
         
          foreach ($membres->getselect() as $ligneA) {
            echo "<form action='index.php?action=ModifierArt&SupprimerArt' method='POST'>";
            echo 
            "<tr>" 
            
                ."<td>"."<input readonly type='hidden' name='ida' id='ida' value=".$ligneA['id_med']."></td>" 
                ."<td>"."<img class='imgeAd' href='viewproduit'" . $ligneA['image_med']."</img></td>" 
                ."<td>"."<input type='text' name='nom' id='nom' value='".$ligneA['nom_med'] . "'></td>" 
                ."<td>"."<input type='text' name='prix_med' id='prix_med' maxlength='10' value='".$ligneA['prix'] . "'></td>"
                
                ."<td>"."<input type='submit' name='action' value='ModifierArt'></td>"
                ."<td>"."<input type='submit' name='action'  value='SupprimerArt'></td>".
           
            "</tr>";
           echo "</form>";
          }
        echo "</tbody>";

          
        ?>
      </table>
     
      
  </section>
 
</div>
</div>
</div>
</div>

  <?php require("include/footer.php");?>