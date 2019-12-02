


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/styles.css">
  <title>Pharma</title>
</head>
<body>
  <?php require_once("include/header.php");
require_once("include/menu.php");
  ?>
 
 <div align="center">
 	<h2>Profil de <?php echo $userinfo['nom'];?></h2>
 	Prenom  = <?php echo $userinfo['prenom'];?>
 	<br/>
    Mail= <?php echo $userinfo['mail'];?>
    
 	<br/>




 </div>




  
   



<?php require_once("include/footer.php");

/* require / include
* La différence entre les deux est que require générera une erreur fatale, 
* puis cessera d'exécuter le reste du fichier, 
* où include ne produira qu'une erreur mais poursuivra l'exécution du fichier.
*/?>



    

   </div>

</div>
</body>
</html>
