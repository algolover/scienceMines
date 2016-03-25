<?php
session_start();
?>
<?php
if(!isset($_POST['secure'])){
	$_SESSION['secure']=rand(1000,9999);

} else{
	if ($_SESSION['secure']==$_POST['secure']){
	echo 'Correct';
	header('Location: captcha.php');

}
else{
	echo"Incorrect, Try Again.";
	$_SESSION['secure']=rand(1000,9999);
}
}
?>









<br>
<img src="generate.php"/><br>

<form action="index.php" method="POST">
	Type the value: <input type="text" size="6" name="secure">
					<input type="submit" value="submit">
				</form>