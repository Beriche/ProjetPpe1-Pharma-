<!doctype html>
<html lang="fr" class="no-js">
<head>
    <meta charset="utf-8">
    
    <meta name="description" content="viewsante">
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/styles.css">
</head>
<body >
  
   
  <?php require("include/header.php");?>
 <?php require("include/menu.php");?>

 
 <div class="row">

<div class="formu">
 <form method="POST" action="index.php?action=inscription">
            <table>
               <tr>
                  <td align="right">
                     <label for="nom">Nom :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre nom" id="nom" name="nom" value="" />
                  </td>
               </tr>
                   <tr>
                  <td align="right">
                     <label for="prenom">Prenom:</label>
                  </td>

                  <td>
                     <input type="text" placeholder="Votre pprenom" id="prenom" name="prenom" value="" />
                  </td>
               </tr>
               <tr>

                  <td align="right">
                     <label for="mail">Mail :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Votre mail" id="mail" name="mail" value="" />
                  </td>
               </tr>
              

               <tr>
                  <td align="right">
                     <label for="mdp">Mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp2">Confirmation du mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
                  </td>
               </tr>
                 <tr>
                  <td align="right">
                     <label for="codeP">Code postal :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="ex:97480" id="codep" name="codep" value="" />
                  </td>
               </tr>
                   <tr>
                  <td align="right">
                     <label for="ville">Ville :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="ex:paris" id="ville" name="ville" value="" />
                  </td>
               </tr>
                <tr>
                  <td align="right">
                     <label for="Adresse">Adresse :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="ex:45rue saint denis" id="Adresse" name="Adresse" value="" />
                  </td>
               </tr>
                   <tr>
                  <td align="right">
                     <label for="tel">Telephone :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="ex:0693005863" id="tel" name="tel" value="" />
                  </td>
               </tr>
               <tr>
                  <td></td>
                  <td align="center">
                     <br />
                     <input type="submit" name="action" value="inscription" />
                  </td>
               </tr>
            </table>
         </form>

</div>
</div>


</body>

</html>

<?php require("include/footer.php");?>