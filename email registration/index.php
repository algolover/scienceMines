<?php 
require 'functions.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
	$name=trim($_POST['name']);
	$email=trim($_POST['email']);
	//echo $name;
	//die();
	if ( empty($name) || empty($email) || !valid_email($email) ){
		$status='Please provide a name and valid email address.';

	}
	else{
		add_registered_users($name,$email);
		$status="Thank You for registering.";
		}
}
require 'index.tmpl.php';

?>