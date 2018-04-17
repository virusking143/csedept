<?php 
	
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'csedept');
	if (isset($_POST['gmail'])) {
		// receive all input values from the form
		
		$email = mysqli_real_escape_string($db, $_POST['email1']);
		// register user if there are no errors in the form
		
		 $query = "SELECT * FROM staff_info WHERE email='$email'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) {
				
				header('location: forgotpw.php');
			}else {
	array_push($errors, "this gmail account is not yet registered please sign up");
	echo $email;
		}
		
		

	}
	
	
	?>