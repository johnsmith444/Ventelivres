<?php
	$livres=Model::load("livres");

	$livres->read(null,$valrech);

	require_once('../vue/livres_tab.php');
?>