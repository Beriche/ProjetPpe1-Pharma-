<!doctype html>
<html lang="fr" class="no-js">
<head>
    <meta charset="utf-8">
    
    
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="style/stylesp.css">
</head>
<body >
  
<?php

$page =  (!empty($_GET['page']) ? $_GET['page'] : 0 );
$page = ($page <= 0 ? 1 :$page);
   require("include/header.php");
  require("include/menu.php");
  ?>

 

 <div class="container-fluid">
 <div class="container">
 <div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


<?php


      
        
       foreach ($produith->gethyg() as $ligne) {
          /* echo"<div class='card ' style='width: 30rem;'>";*/
           



           //echo "<td>" .$ligne['id_med'] ."</td>";
        
           //echo "<p class='imge'>" .$ligne['image_med'] ."</p>";
            echo "<a class='imghy'  href='index.php?action=hyg&id=" . $ligne['id_med'] . "'><img class='imghy' href='viewproduit'" . $ligne['image_med']."</img></a>" ;
             echo "<div class='info'> ";
           echo "<p name='nom' class='nom'>".$ligne['nom_med'] ."<p>";
           // echo "<p class='des'>".$ligne['description'] ."<p>";

          
          // echo "<td>" .$ligne['condionnement'] ."</td>";
           echo "<p class='prix'>".$ligne['prix'] ."</p>";

           
           echo "<a class='panier'  href='#'><img src='p.png'/></a>";
                         
           echo "</div>";
            
        
       

          echo"<hr>";
       
       }
?>
<div align='center'>
  <a class="page" href="?action=Pageh&page=<?php echo $page - 1; ?>">Page précédente</a> 
      — 
  <a class="page" href="?action=Pageh&page=<?php echo $page + 1; ?>">Page suivante</a>

</div>


<br>

</div>
</div>
</div>
</div>
</div>
<?php require("include/footer.php");?>
</body>
</html>