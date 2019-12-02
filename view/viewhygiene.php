<!doctype html>
<html lang="fr" class="no-js">
<head>
    <meta charset="utf-8">
    
    <meta name="description" content="viewsante">
    <link rel="stylesheet" href="styles.css">
</head>
<body >
   <?php require("include/header.php");
require("include/menu.php");?>
<br>
<div class="contenue">
<?php


        require("model.php");
        require("control/controleur_hy.php");

        $produit = new produit_hy();
        
       foreach ($produit->gethyg() as $ligne) {
       	   echo"<tr>";
       	   //echo "<td>" .$ligne['id_med'] ."</td>";
           echo "<td class='img'>" .$ligne['image_med'] ."</td>";
       	   echo "<td>" .$ligne['nom_med'] ."</td><br>";
       	   echo "<td>" .$ligne['description'] ."</td><br>";
          // echo "<td>" .$ligne['condionnement'] ."</td>";
       	   echo "<td>".$ligne['prix'] ."</td>";
          
          echo("td");

          echo"<hr>";
       }
        

?>
</div>
<br>
<?php require("include/footer.php");?>
</body>
</html>