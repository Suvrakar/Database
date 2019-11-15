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
            
    </div>    
    <div class="container">
  <form action="action_page.php">
    <label for="nid">NID</label>
    <input type="text" id="nid" name="nid" placeholder="Enter NID">
    <label for="pass">Password</label>
    <input type="password" id="pass" name="pass" placeholder="only 6 characters">
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>


    </header>


        
</body>    
</html>
