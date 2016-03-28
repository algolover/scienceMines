<?php
function add_registered_users($name,$email){
	file_put_contents('mailing_list.php',"$name: $email\n",FILE_APPEND);
}

function valid_email($email)
{
	# code...
	return filter_var($email,FILTER_VALIDATE_EMAIL);
}