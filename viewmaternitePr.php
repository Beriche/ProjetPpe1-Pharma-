<!doctype html>
<html lang="fr" class="no-js">
<head>
    <meta charset="utf-8">
    
 
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="style/stylesp.css">
</head>
<body >
  

  <?php require("include/header.php");?>
 <?php require("include/menu.php");?>


 
 <div class="container-fluid">
 <div class="container">
 <div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 
<br/>
<?php


      
        
       foreach ($produitm->getmatPr() as $ligne) {
       	  /* echo"<div class='card ' style='width: 30rem;'>";*/
           



       	   //echo "<td>" .$ligne['id_med'] ."</td>";
        
           //echo "<p class='imge'>" .$ligne['image_med'] ."</p>";
            echo "<img  class='imgnut'  " . $ligne['image_med']."</img>" ;
             echo "<div class='information'> ";
       	   echo "<p name='nom' class='nom'>".$ligne['nom_med'] ."<p>";
            echo "<p class='des'>".$ligne['description'] ."<p>";

       	  
           echo "<td>" .$ligne['conditionnement'] ."</td>";
       	   echo "<p class='prix'>".$ligne['prix'] ."</p>";

           
           echo "<a class='panier'  href='#'><img src='p.png'/></a>";
             
          echo"<hr>";
                   
           echo "</div>";
            
        
       

       }

        

?>



<br>

</div>
</div>
</div>
</div>
</div>
<?php require("include/footer.php");?>
</body>
</html>