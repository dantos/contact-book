<?php
require_once 'controller/basicController.php';
ini_set('display_errors', true);

$start = new basic();
if( isset($_GET['firstname'] ) && isset($_GET['lastname']) && isset($_GET['phone']) ){
	$start->save();
} else {
	$start->index();

}

?>


