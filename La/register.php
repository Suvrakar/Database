<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
<div class="input-group">
			<label>Gender</label>
			<input type="text" name="gender" value="<?php echo $gender; ?>">
		</div>
		<div class="input-group">
			<label>NID</label>
			<input type="text" name="nid" value="<?php echo $nid; ?>">
		</div>
				<div class="input-group">
			<label>Telephone Number </label>
			<input type="text" name="tnum" value="<?php echo $tnum; ?>">
		</div>
		<div class="input-group">
			<label>Secondary Telephone Number </label>
			<input type="text" name="stnum" value="<?php echo $stnum; ?>">
		</div>
        <div class="input-group">
			<label> Permanent Address </label>
			<input type="text" name="psadd" value="<?php echo $psadd; ?>">
		</div>
		<div class="input-group">
			<label>Present Address</label>
			<input type="text" name="pradd" value="<?php echo $pradd; ?>">
		</div>
		<div class="input-group">
			<label>Area</label>
			<input type="text" name="parea" value="<?php echo $parea; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		
		</p>
	</form>
</body>
</html>