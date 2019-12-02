    
       <?php require("include/header.php");
   require("include/menu.php");?>
    
    <div class="container-fluid">
    <div class="container">
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<a href="index.php?action=mbr">Espace_membres</a>
<a href="viewajoutprod.php">Ajouter un produit</a>
    
    <div align="center">

      <article>
        
        <br>
        <form action="index.php?action=Ajouter" method="POST">
          <fieldset>
            <legend><h2>Ajouter un produit</h2></legend>
            <label for="nom">Nom </label>
            <input type="text" name="nom" id="nom"  minlength='2' maxlength='50' placeholder="ex:Dafalgan"> <br><br>
           
            <label for="description">Description</label>
            <textarea name="description" id="description"  rows="3" cols="18" placeholder="description" ></textarea> <br><br>
            
            <label for="conditionnement">conditionnement</label>
            <input type="text" name="conditionnement" id="conditionnement" minlength='2' maxlength='50' placeholder="conditionnement"> <br><br>
            
            <label for="image">Image</label>
            <input type="file" name="image" id="image"  accept="image/*,.png,image/*,.jpg" ><br><br>
            
            <label for="prix">Prix</label>
            <input type="text" name="prix" id="prix"  minlength='2' maxlength='50' placeholder="2,€"> <br><br>
            
            <label for="categorie">categorie</label>
            <input type="text" name="categorie" id="categorie"  minlength='2' maxlength='50' placeholder="categorie"> <br><br>
            
            <input type="submit" name="action" value="Ajouter">
                <?php
                if(isset($erreur)) {
                 echo '<font color="red">'.$erreur."</font>";
                  }
                ?>
            <br><br>
          </fieldset>
        </form>
      </article>
    </div>
    </div>
    </div>
    </div>
    </div>
    
  <?php require("include/footer.php");?>