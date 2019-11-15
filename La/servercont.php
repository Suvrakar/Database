<?php
session_start();

$username="";
$email="";
$area="";
$review="";
$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'wecare1');

	// Contact Us
	if (isset($_POST['contact'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $area = mysqli_real_escape_string($db, $_POST['area']);
        $review = mysqli_real_escape_string($db, $_POST['review']);
        
        
        // form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($email)) { array_push($errors, "email is required"); }
        if (empty($area)) { array_push($errors, "area is required"); }
        if (empty($review)) { array_push($errors, " Review is required"); }
        
        //insert
//        if (count($errors) == 0) {
			$query = "INSERT INTO contact (username,email,area, review) 
					  VALUES('$username','$email','$area','$review')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "DONE";
			header('location: action_page.php');
//		}
    }
        ?>