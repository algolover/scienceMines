<?php
session_start();
define('USERNAME','abc');
define('PASSWORD','1234');


if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
	echo "posted";
	//get the values
	$username=$_POST['username'];
	$password=$_POST['password'];
	//validate against the records
if ($username === USERNAME && $password === PASSWORD){
	$_SESSION['username']=$username;
	header("Location: admin.php");
}
	else{
		$status="incorrect login credentials.";
		
	}
}

	//login + set session



?> 

<!doctype html>
<html>
<head>
<title></title></head>
<body>



<h1>Login</h1>
<form action="login.php" method="POST">
	<li>
		<label for="username">Username</label>
		<input type="text" name="username">
	</li>
	<li>
		<label for="password">password</label>
		<input type="password" name="password">
	</li>
	<li>
		<input type="submit" value="login">

	</li>
	<?php if(isset($status)): ?>
	<p><?php echo $status; ?></p>
<?php endif; ?>


	</form>
</body>
</html>
