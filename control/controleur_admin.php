   
<?php
require_once("model.php");
class espace_admin  extends  ConnexionDB {
	 function __construct()
    {
        require_once "model.php";
        $this->ds = new ConnexionDB();
    }
  
    function verifLogin($username, $password) {
        $passwordHash = md5($password);
        $strSQL = "SELECT * FROM  espace_admin WHERE mail_admin = ? AND mdp_admin = ?";
        $paramTab = array($username, $passwordHash);
        $membreResultat = $this->ds->Requete($strSQL, $paramTab);
        if(!empty($membreResultat)) {
            $_SESSION["userId"] = $membreResultat[0]["id_admin"];
            return true;
        }
    }



}

        ?>