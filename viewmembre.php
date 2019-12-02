

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
  
?>

   <?php require("include/header.php");
   require("include/menu.php");?>
 <div class="container-fluid">
 <div class="container">
 <div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<section id="pageContent">
    <article>
        <a href="index.php?action=prod">Articles</a>
        <h1> Membres </h1>
    </article>
        <!--br><br>
        Bonjour <strong><?php #echo $afficherNom; ?></strong>, <br>Bravo vous vous êtes connecté avec succès comme super-utilisateur!<br-->
        
        <br>
    </article>

    <table class="">
        <?php
        
          echo "<thead>";
          echo "<tr>";
            echo "<th>#</th>";
            echo "<th>Nom</th>";
            echo "<th>mail</th>";
            echo "<th>Téléphone</th>";
             echo "<th>Action</th>";
          echo "</tr>";
        echo "</thead>";
        
        echo "<tbody>";

        
          foreach ($membres->getselectMembres() as $ligne) {
           echo "<form action='index.php?action=Supprimer&Modifier' method='POST'>";
            echo 
            "<tr>" 
           
                ."<td>"."<input readonly type='text' name='ide' id='ide' value=".$ligne['id']."></td>" 
                ."<td>"."<input type='text' name='nom' id='nom' value='".$ligne['nom'] . "'></td>" 
                ."<td>"."<input type='text' name='mail' id='mail' value='".$ligne['mail'] . "'></td>" 
                ."<td>"."<input type='text' name='tel' id='tel' maxlength='10' value='".$ligne['telephone'] . "'></td>"
                ."<td>"."<input type='submit' name='action' value='Supprimer'></td>"
                ."<td>"."<input type='submit' name='action' value='Modifier'></td>".
            
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
<br/>
  <?php require("include/footer.php");?>