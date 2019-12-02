<?php
 require_once("./model.php");

class pages  extends  ConnexionDB {

  function getPage(){



         $page =  (!empty($_GET['page']) ? $_GET['page'] : 0 );
$page = ($page <= 0 ? 1 :$page);
  $limite=2;
$debut=($page -1)*$limite;

  
    $strSQL = "SELECT SQL_CALC_FOUND_ROWS *FROM produit ORDER BY med_nom LIMIT $limite OFFSET $debut";
    $tabValeur = array("*");
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;

  

$resulatNBlignes = $this->cnx->prepare('SELECT found_rows()');

$nombredElementsTotal = $resulatNBlignes->fetchColumn();
/* On calcule le nombre de pages */
$nombreDePages = ceil($nombredElementsTotal / $limite);


   /* $strSQL = "SELECT * FROM employe";
    $tabValeur = array("*");
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;*/
  








if ($page > 1):
    ?><a href="?page=<?php echo $page - 1; ?>">Page précédente</a> — <?php
endif;

/* On va effectuer une boucle autant de fois que l'on a de pages */
for ($i = 1; $i <= $nombreDePages; $i++):
    ?><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a> <?php
endfor;

/* Avec le nombre total de pages, on peut aussi masquer le lien
 * vers la page suivante quand on est sur la dernière */
if ($page < $nombreDePages):
    ?>— <a href="?page=<?php echo $page + 1; ?>">Page suivante</a><?php
endif;



  }



}
?>