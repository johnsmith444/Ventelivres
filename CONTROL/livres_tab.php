<?php
	require_once('../control/core.php');
	require_once('../vue/haut.php');
	require_once('../vue/aside.php');

	$valrech= '';
	if(isset($_POST['RECHLIVRES'])){
		$valrech=$_POST['RECHLIVRES'];
	}

	echo vue::Rtv_Zone_rech('../control/livres_tab.php','RECHLIVRES',$valrech,'Recherche d\'un livre');

	require_once('../control/Livres_tab_ajax.php');

	require_once('../vue/bas.php');
?>