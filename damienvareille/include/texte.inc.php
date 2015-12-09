<?php
if (!empty($_GET["page"])){
	$page=$_GET["page"];}
	else
	{$page=0;
	}
switch ($page) {

	case 0:
		include_once('pages/accueil.inc.php');
		break;

	case 1:
		include_once('pages/spectacles.inc.php');
		break;

	case 2:
		include_once('pages/spectacles.inc.php');
		break;

	case 3:
	 include_once('pages/mentaQuoi.inc.php');
	 break;

	case 4:
 	 include_once('pages/galerie.inc.php');
 	 break;

	case 5:
   include_once('pages/contact.inc.php');
   break;

	 case 6:
		 include_once('pages/newsEntiere.inc.php');
		 break;

	case 7:
	 	include_once('pages/contact_me.inc.php');
	 	break;

	case 20:
		include('pages/connexion.inc.php');
		break;

	case 21:
		include('pages/supprimerSpectacle.inc.php');
		break;

	default : include_once('pages/accueil.inc.php');
}

?>
