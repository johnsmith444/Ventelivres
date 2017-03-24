<?php
class livres extends Model{
	var $table = "livres";	
	var $id;
	var $PK=array("LivreID");
	var $data;
	var $Rech=array("titre", "auteur");
}
?>
