<?php include('signup_cust.php') ?>


<html>
<head>
    <title>Sign in</title>
    <link href="style2_sign_up.css" rel="stylesheet" type="text/css">
</head> 
<body>
    <header>
        


    <div class="row">
        <div class="logo">
        <img src="logo.png"
        </div>
   <ul class="main-nav">    
        <li class="active"><a href="index.php"> HOME </a></li>
        <li><a href="Services.php"> SERVICES </a></li>
        <li><a href="Contactus.php"> CONTACT US </a></li>
        <li><a href="About.php"> ABOUT </a></li>

    </ul>     
        
    </div>
            
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


    </header>


        
</body>    
</html>
