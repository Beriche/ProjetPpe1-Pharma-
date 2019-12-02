<!doctype html>
<html lang="fr" class="no-js">
<head>
    <meta charset="utf-8">
    
    <meta name="description" content="viewsante">
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/styles.css">
</head>
<body >
  
   <?php require("include/header.php");
require("include/menu.php");?>


  <div class="p-3 mb-2 bg-success text-white container-fluid ">

  <div class=" contenu">

  


<?php


        require("model.php");
        require("control/controleur_sante.php");

        $produit = new produit_s();
        
       foreach ($produit->getSante() as $ligne) {
       	  /* echo"<div class='card ' style='width: 30rem;'>";*/
         echo "<div class='row'>"; 
           echo "<div class='col' style='width:20px'>";
       	   //echo "<td>" .$ligne['id_med'] ."</td>";
        
           //echo "<p class='imge'>" .$ligne['image_med'] ."</p>";
            echo "<a class='imge' href='viewproduit'>" . $ligne['image_med']."</a>" ;
             echo "<div class='info'> ";
       	   echo "<p class='nom'>".$ligne['nom_med'] ."<p>";
            //echo "<p class='des'>".$ligne['description'] ."<p>";

       	  
          // echo "<td>" .$ligne['condionnement'] ."</td>";
       	   echo "<p class='prix'>".$ligne['prix'] ."</p>";

           
           echo "<a class='paniers'  href='#'><img src='p.png'/></a>";
                         
           echo "</div>";
           
        
       

          echo"<hr>";
       
       }

        

?>
<style type="text/css">
  .nom:hover{
    border-radius: 3px solid black;
   border-color: black;
   color: white;
   background-color:black; 
   padding: 5px;
   font-weight: bold;

  }
  .des{
    border: 3px solid white;
    padding: 8px;
    font-size: 10px;
    color: black;
    font-weight: bold;
    text-align: center;
    float: center;
      display: block;
  }
  .imge {
  float:auto;
  border-radius: 30px;
  width: 20px;
  height: 20px;
  
 } .imge:hover {
opacity: 0.8;
}
.prix:hover
{
   border-radius: 3px solid black;
   border-color: black;
   color: white;
   background-color:black; 
   padding: 8px;
   font-weight: bold;
   text-align: right;
 
}
.info{
width: 18%;
float: right;
transition: width 2s;
 color: black;
 text-align: right;
background-color: lightgreen; 
 padding:35px;
 border: 3px solid white;
 font-weight: bold;
 border-radius: 10px;
}
.info:hover{
  margin-left: auto;
  margin-right: auto;
  width: 75%;
  float: right;

 color: black;
 text-align: right;
background-color: lightgreen; 
 padding:35px;
 border: 3px solid white;
}

hr{
  border-bottom:1px solid black;
}


</style>

<br>

</div>
</div>
<?php require("include/footer.php");?>
</body>
</html>