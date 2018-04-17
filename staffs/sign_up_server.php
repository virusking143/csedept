  <?php include "db.php"; ?>
  <?php 
	

	// variable declaration
	$f_name = "";
	$l_name = "";
	$username = "";
	$password1= "";
	$password2= "";
	$contact1= "";
	$contact2= "";
	$code="";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	if (isset($_POST['sign_up'])) {
		// receive all input values from the form
		$f_name = mysqli_real_escape_string($connection, $_POST['f_name']);
		$l_name = mysqli_real_escape_string($connection, $_POST['l_name']);
		$username = mysqli_real_escape_string($connection, $_POST['username']);
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$password1 = mysqli_real_escape_string($connection, $_POST['password1']);
		$password2 = mysqli_real_escape_string($connection, $_POST['password2']);
		$code = mysqli_real_escape_string($connection, $_POST['code']);
        $contact1 = mysqli_real_escape_string($connection, $_POST['contact1']);
		$contact2 = mysqli_real_escape_string($connection, $_POST['contact2']);
		
		if ($password1 != $password2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password1);//encrypt the password before saving in the database
			$query = "INSERT INTO staff_info (f_name,l_name,username,password,contact1,contact2,email)			
					  VALUES('$f_name','$l_name','$username','$password','$contact1','$contact2','$email')";
					  if($code=="tunna fish"){
	  		mysqli_query($connection, $query);

			$_SESSION['name'] = $name;
		array_push($errors, "your  account has been created please sign in");
			header('location: index.php');
		}
		else{
	array_push($errors, "you are not allow to sign up");
		}

	}
	
	}
	?>