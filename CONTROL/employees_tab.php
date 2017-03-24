<?php
	require_once('../control/core.php');
	require_once('../vue/haut.php');
	require_once('../vue/aside.php');

	$employees=Model::load("utilisateurs");

	// utilisateur "#", nom "Nom", prenom "Pr&eacute;nom"
	$employees->read("utilisateur, nom, prenom");

	require_once('../vue/employees_tab.php');

	require_once('../vue/bas.php');
?>