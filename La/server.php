<?php 
	session_start();

	// variable declaration
	$username = "";
    $gender = "";
    $nid = "";
    $tnum = "";
    $stnum = "";
    $psadd = "";
    $pradd = "";
    $parea = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'wecare1');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
        $gender = mysqli_real_escape_string($db, $_POST['gender']);
        $nid = mysqli_real_escape_string($db, $_POST['nid']);
        $tnum = mysqli_real_escape_string($db, $_POST['tnum']);
        $stnum = mysqli_real_escape_string($db, $_POST['stnum']);
        $psadd = mysqli_real_escape_string($db, $_POST['psadd']);
        $pradd = mysqli_real_escape_string($db, $_POST['pradd']);
        $parea = mysqli_real_escape_string($db, $_POST['parea']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($gender)) { array_push($errors, "Gender is required"); }
        if (empty($nid)) { array_push($errors, "NID is required"); }
        if (empty($tnum)) { array_push($errors, "Tel num is required"); }
        if (empty($stnum)) { array_push($errors, "It is required"); }
        if (empty($psadd)) { array_push($errors, "psadd is required"); }
        if (empty($pradd)) { array_push($errors, "pradd is required"); }
        if (empty($parea)) { array_push($errors, "area is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username,gender,nid, tnum,stnum,psadd,pradd,parea, email, password) 
					  VALUES('$username','$gender','$nid','$tnum','$stnum','$psadd','$pradd','$parea','$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>
