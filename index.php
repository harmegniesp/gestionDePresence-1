<?php
session_start();
require_once('bootstrap.php');
$_SESSION['user']='admin';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Gestion des Présences</title>
	<meta name="description" content="gérer les présences des étudiants dans nos formations"</meta>
	<meta name="keywords" content="école,formation,étudiant,cours,promotion sociale">
	<meta name="author" content="harmegnies">
	<meta name="robots" content="nofollow,noindex">
	
	<script src="assets/js/jquery-1.12.0.js" type="text/javascript"></script>
	<script src="assets/js/gestionCookies.js" type="text/javascript"></script>
	<script src="assets/js/validation.js" type="text/javascript"></script>


	<script type="text/javascript">

	</script>
	<link href="assets/css/reset.css" type="text/css" rel="stylesheet">
	<link href="assets/css/styles_base.css" type="text/css" rel="stylesheet">
	<link href="assets/css/styles_maquette.css" type="text/css" rel="stylesheet">
	<link href="assets/css/styles_cookies.css" type="text/css" rel="stylesheet">
	<style type="text/css">
	</style>
</head>
<body>
<div id="divCookie">
<p style="padding:10px;font-size:16px;">acceptez-vous les cookies?
&nbsp;
<a href="#" onclick="fct_Gcookie('oui');">oui, j'accepte.</a>
&nbsp;
<a href="#" onclick="fct_Gcookie('non');">non, je n'accepte pas.</a>
</p>
</div>
<main>
	<?php
	include ("header.php");
	?>
	<?php
	$tabNav=['accueil','ecole','etudiant','formation','planification','newsletter','contact','admin',
		'inserer_ecole','afficher_ecole','lister_ecole','modifier_ecole','supprimer_ecole',
		'inserer_etudiant','afficher_etudiant','lister_etudiant','modifier_etudiant','supprimer_etudiant',
		'inserer_formation','afficher_formation','lister_formation','modifier_formation','supprimer_formation'];
	if (!isset($_GET['action']))
		include ("accueil.php");
	elseif (!preg_match("/^[a-z\_0-9]+$/i",strtolower($_GET['action'])))
		include ("accueil.php");
	elseif(!in_array(strtolower($_GET['action']),$tabNav))
		include ("accueil.php");
	else {
		if ($_GET['action'] == 'accueil')
			include("accueil.php");

		if ($_GET['action'] == 'ecole')
			include("ecole.php");

		if ($_GET['action'] == 'afficher_ecole')
			include("./ecole/afficher_ecole.php");
		if ($_GET['action'] == 'inserer_ecole')
			include("./ecole/inserer_ecole.php");

		if ($_GET['action'] == 'lister_ecole')
			include("./ecole/lister_ecole.php");

		if ($_GET['action'] == 'modifier_ecole')
			include("./ecole/modifier_ecole.php");

		if ($_GET['action'] == 'supprimer_ecole')
			include("./ecole/supprimer_ecole.php");

		if ($_GET['action'] == 'formation')
			include("formation.php");

		if ($_GET['action'] == 'afficher_formation')
			include("./formation/afficher_formation.php");

		if ($_GET['action'] == 'inserer_formation')
			include("./formation/inserer_formation.php");

		if ($_GET['action'] == 'lister_formation')
			include("./formation/lister_formation.php");

		if ($_GET['action'] == 'modifier_formation')
			include("./formation/modifier_formation.php");

		if ($_GET['action'] == 'supprimer_formation')
			include("./formation/supprimer_formation.php");

		if ($_GET['action'] == 'etudiant')
			include("etudiant.php");

		if ($_GET['action'] == 'afficher_etudiant')
			include("./etudiant/afficher_etudiant.php");

		if ($_GET['action'] == 'inserer_etudiant')
			include("./etudiant/inserer_etudiant.php");

		if ($_GET['action'] == 'lister_etudiant')
			include("./etudiant/lister_etudiant.php");

		if ($_GET['action'] == 'modifier_etudiant')
			include("./etudiant/modifier_etudiant.php");

		if ($_GET['action'] == 'supprimer_etudiant')
			include("./etudiant/supprimer_etudiant.php");

		if ($_GET['action'] == 'contact')
			include("contact.php");

		if ($_GET['action'] == 'newsletter')
			include("newsletter.php");

		if ($_GET['action'] == 'planification')
			include("planification.php");

		if ($_GET['action'] == 'admin' && $_SESSION['user'] == 'admin')
			include("admin.php");
	}
		include("footer.php");
	?>

</main>
</body>
<script>
	// au chargement de la page
	$( document ).ready(function() {
        console.log( "document loaded" );
		// différence avec l'événement onload sur la balise body
		// exécutera les fonctions après chargement des objets de la page
		testerCookie();
    });
</script>
</html>
