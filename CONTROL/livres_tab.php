<?php
	require_once('../control/core.php');
	require_once('../vue/haut.php');
	require_once('../vue/aside.php');

	$valrech= '';
	if(isset($_POST['RECHLIVRES'])){
		$valrech=$_POST['RECHLIVRES'];
	}


	echo vue::Rtv_Zone_rech('../control/livres_tab.php','RECHLIVRES',$valrech,'Recherche d\'un livre');

	$livres=Model::load("livres");

	$livres->read(null,$valrech);

	require_once('../vue/livres_tab.php');

	require_once('../vue/bas.php');
?>