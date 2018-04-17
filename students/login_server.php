
<?php include "db.php"; ?>
<?php
	session_start();

	
	?>
<?php
	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	            $db_username="";
            $db_user_password="";
			            $db_user_firstname="";
						            $db_user_lastname="";

	
if (isset($_POST['sign_in'])) {
		$username = mysqli_real_escape_string($connection, $_POST['username']);
		$password = mysqli_real_escape_string($connection, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
						$password = md5($password);
		 $query = "SELECT * FROM student_info WHERE username='$username' AND password='$password'";
			$results = mysqli_query($connection, $query);
			if (mysqli_num_rows($results) == 1) {
        while($row = mysqli_fetch_array($results)){

           echo $db_username=$row['username'];
            $db_user_password=$row['password'];
            $db_user_firstname=$row['f_name'];
            $db_user_lastname=$row['l_name'];

        }
        
        $password=crypt($password,$db_user_password);
        
        
       
            
             $_SESSION['username'] = $db_username;
             $_SESSION['firstname'] =  $db_user_firstname;
             $_SESSION['lastname'] = $db_user_lastname;
             
				header('location: all/index.php');
			
			}else {
				array_push($errors, "  wrong username/password combination");
			}
		}
}
	
if (isset($_POST['sign_up'])) {
		// receive all input values from the form
		$f_name = mysqli_real_escape_string($connection, $_POST['f_name']);
		$l_name = mysqli_real_escape_string($connection, $_POST['l_name']);
		$username = mysqli_real_escape_string($connection, $_POST['username']);
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$password1 = mysqli_real_escape_string($connection, $_POST['password1']);
		$password2 = mysqli_real_escape_string($connection, $_POST['password2']);
		
        $contact1 = mysqli_real_escape_string($connection, $_POST['contact1']);
		$contact2 = mysqli_real_escape_string($connection, $_POST['contact2']);
		
		if ($password1 != $password2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password1);//encrypt the password before saving in the database
			$query = "INSERT INTO student_info (f_name,l_name,username,password,contact1,contact2,email)			
					  VALUES('$f_name','$l_name','$username','$password','$contact1','$contact2','$email')";
					  
	  		mysqli_query($connection, $query);

			$_SESSION['name'] = $name;
			header('location: index.php');
		array_push($errors, "your  account has been created please sign in");
			
		}
		else{
	array_push($errors, "something went wrong");
		}

	}
	
	
?>