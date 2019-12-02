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
  <style type="text/css">
    body{
      background-color: white;
    }

  </style>
<?php


        require("model.php");
        require("control/controleur_sante.php");

      ?>
      <?php

       	    echo"<tr>";
       	     //echo "<td>" .$ligne['id_med'] ."</td>";
            echo "<div class='info'> ";
            //echo "<p class='imge'>" .$ligne['image_med'] ."</p>";
            echo "<p>". $ligne['image_med']. "</p>" ;
          
       	    echo "<p>".$ligne['nom_med'] ."<p>";
            echo "<p>".$ligne['description'] ."<p>";


       	  
            // echo "<td>" .$ligne['condionnement'] ."</td>";
       	   echo "<p class='prix'>".$ligne['prix'] ."</p>";
           
           echo "<a class='panier'  href='#'><img src='p.png'/></a>";
                         
           echo "</div>";
           echo "</br>";
           echo "</br>";
           echo "</br>";
           echo "</br>";

           

          echo"<hr>";
       
       

        

?>


</style>
</div>
<br>
<?php require("include/footer.php");?>
</body>
</html>