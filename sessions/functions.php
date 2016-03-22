<?php

function is_logged_in(){
if(!isset($_SESSION['username'])){
	
	header('Location: login.php');
	die();
}
}
?>