<?php

class produit  extends  ConnexionDB {

 function getSelect(){
 //return $this->cnx->query("SELECT * FROM medicament")->fetchAll();
 return $this->getRequete("SELECT * FROM medicament");
}

}


?>
