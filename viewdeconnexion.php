<?php
session_start();
$_SESSION = array();
session_destroy();

header("Location: viewconn.php");
echo "vous avez bien etez deconnecte";
?>