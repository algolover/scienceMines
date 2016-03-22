<?php
include 'fucntions.php';
session_start();

is_logged_in();
?>
<html>

<head><title></title></head>
Secret Admin Section
<h1>Hello, <?php echo $_SESSION['username']; ?> </h1>
<a href="logout.php">logout</a>
</html>