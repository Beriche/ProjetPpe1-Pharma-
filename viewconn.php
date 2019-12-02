
<head>
    <meta charset="utf-8">
    
   
    <link rel="stylesheet" href="style/styleform.css">
</head>
<body>
    <?php
require("include/header.php");
require("include/menu.php");
?>

 <div class="container-fluid">
 <div class="container">
 <div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<div class="conn" >
   
  <!--<style type="text/css">
    form
{
  
 border: 3px solid #f1f1f1;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: auto;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
/* Set a style for all buttons */
button {
  background-color: white;
  color: black;
  padding: 10px 10px;
  
  border: none;
  cursor: pointer;
  margin:auto; 
  font-weight: bold;
   text-align: center;

}
button:hover {
  opacity: 0.8;
   background-color: #33ffcc;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}<
i
mg.avatar {
  width: 20%;
  border-radius: 50%;
}

  


  /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: auto auto; /* 15% from the top and centered */
  border: 1px solid #888;
  width: auto; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  /* Position it in the top right corner outside of the modal */
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

/* Close button on hover */
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}
</style>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


<div class="contenu">
       
        <button onclick="document.getElementById('id01').style.display='block'">Connexion</button>

         
        <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'"
         class="close" title="Close Modal">&times;</span>
        <form class="form" action="index.php" method="POST">
         <div class="imgcontainer">
          <img src="style/avatar.png" alt="Avatar" class="avatar">
          </div>
             <label for="nom"><b>nom</b></label>
            <input type="text" name="nom" id="nom"  placeholder="Nom"><br><br>
            <label for="prenom"><b>prenom</b></label>

            <input type="text" name="prenom" id="prenom"  placeholder="Prénom"> <br><br>
            <button type="submit" name="action" value="Ajouter">S'inscrire</button>
            <br><br>
        
        </form>
        
    
       <! <form action="index.php?action=Accueil" method="POST">
     
            <input type="text" name="nom" id="nom"  placeholder="Nom"> <br><br>
            <input type="text" name="prenom" id="prenom"  placeholder="Prénom"><br><br>
            <input type="submit" name="action" value="Ajouter">
            <br><br>
         
        </form>

</div>-->

      <div align="center" >
      
         <!--h2>Connexion</h2-->
         <br />
         <form method="POST" action="index.php?action=Connexion&action=Login" class="formulaire">
        
          <fieldset class="fieldset">
               <legend>Connexion</legend>
          <table>
          <tr align="right">
          <td>
              <label for="mail">Mail :</label>
          </td>
          <td>
              <input type="email" name="mail" placeholder="Mail" class="inputbasic mail" />
          </td>
          </tr>
          <tr align="right">  
            <br>
             <td>
             <label for="mdp">Mot De Passe : </label>
            </td>
            <td>
            <input type="password" name="mdp" placeholder="mot de passe" class="inputbasic mdp" />
            </td>
          </tr>
                   <!--input type="hidden" name="passwordfile" id="passwordfile" value="../../pharma2.0/password.xml.txt" /-->
           
          
       </table>
     </fieldset>
    
            <input type="submit" name="action" value="Connexion" />
            <input type="submit" name="action" value="Login" />
         
           
           <br/>
             <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
 <br>
            <a href="viewinscription.php">Pas encore de compte ! Inscrivez vous ici </a>
         </form>
        
              </div>

</div>
</div>
</div>
</div>
</div>
</div>
<?php require("include/footer.php");?>
</body>
