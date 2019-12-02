<?php

$page =  (!empty($_GET['page']) ? $_GET['page'] : 0 );
$page = ($page <= 0 ? 1 :$page);
?>

	<head>
		<title>Pharma</title>
		<meta charset="utf-8">
			<!-- Règles de mise en page sont dans le fichier CSS style.css -->
		<!--<link rel="stylesheet" href="./style/styles.css" >-->
	 <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="style/stylesp.css">
		
		<!--<link href="bootstrap.min.css" rel="stylesheet">
   <link href="bootstrap.css" rel="stylesheet">-->
	</head>

    <div class=" container-fluid ">
    <div class="container head">
    <div class="row">
       <div class="col-xs-1 col-sm-1 col-md-12 col-lg-12">

            <header class="header">
              <div class="gauche">
                 <h1 class="logo"> 
        
                   <!--img   src="Style/.png" alt="PHARMA" -->
                   <p> Pharma</p>
                 </h1>
           

         
        	</div>

        	<!--h2>Profil de <?php //echo $userinfo['nom'];?></h2-->

		
                  <form class="search" action="index.php?action=Rechercher" method="POST" >
           <!-- <label for=action >Recherche :</label>-->
                  <input type="search" name="search" id="search" name="action" value="Rechercher" placeholder="Recherche..." />
            

                    </form>
     
       <!-- <a class="maternite"  href="./viewinscription.php"> Inscription </a>-->
	            </header>
	</div>
	</div>
  </div>
  </div>
  </div>
