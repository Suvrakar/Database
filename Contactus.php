<?php include('servercont.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="stylecon.css">
</head>
<body>
	<div class="header">
		<h2>Review</h2>
	</div>
	
	<form method="post" action="contactus.php">
<!--<?php include('errorcon.php'); ?>-->


		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Area</label>
			<input type="text" name="area" value="<?php echo $area; ?>">
		</div>
				<div class="input-group">
			<label>Review </label>
			<input type="text" name="review" value="<?php echo $review; ?>">
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="contact">Submit</button>
		</div>

	</form>
</body>
</html>