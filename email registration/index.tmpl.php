 <!doctype html>
 <html>
 <head><title></title>
<style>
ul,li{margin: 0;padding: 0;}
li{list-style:none;}
.notice {
 color: red; font-style:italic;}

</style>

 </head>

 <body>


<h1>Join the mailing list</h1>
<form action="" method="post">
<?php if(isset($status)){ ?>
 <p class="notice"> <?php echo $status; } ?></p>

  
<ul>
	<li>
		<label for="name">Your Name:</label>
		<input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
	</li>
	<li>
		<label for="name">Your Email Address</label>
		<input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"></li>

<li><label for="name"></label><input type="submit" value="Sign up!"></li>
</ul>
</form>
</body>
 </html>