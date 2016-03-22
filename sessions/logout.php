<?php
session_start();
session_destroy();
$_SESSION=array();

//also we have to delete the cookie to delete the data
//as iti is still stored.
header('Location: login.php');

