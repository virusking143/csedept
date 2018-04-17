<?php include "db.php"; ?>
<?php
$errors = array(); 
if(isset($_post['gmail'])){
	$email = mysqli_real_escape_string($connection, $_POST['email1']);
	$query = "SELECT * FROM staff_info WHERE email='$email'";
			$results = mysqli_query($connection, $query);
						if (mysqli_num_rows($results) == 1) {
						
        while($row = mysqli_fetch_array($results)){
echo $number=$row['contact1'];
echo $username=$row['username'];
		}
		}							
require('textlocal.class.php');
require('otp1.php');

$textlocal = new Textlocal(false,false,api_key);

$numbers = array($number);
$sender = 'TXTTCL';
$otp=mt_rand(1000,9999);
$message = 'Hellow'.$username ." This is your otp: ".$otp;

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    setcookie('otp',$otp);
	header('location: forgotpw.php');
	echo "otp has been sent..";
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
}
if(isset($_post['votp'])){
$otp = mysqli_real_escape_string($connection, $_POST['otp']);	
if($_cookie['otp']==$otp)
{
	header('location: forgotpw1.php');
	echo "otp matched";
}else {
	echo "please enter correct otp";
}
}
if(isset($_post['change'])){
	$password = mysqli_real_escape_string($connection, $_POST['password']);
	$password1 = mysqli_real_escape_string($connection, $_POST['password1']);
	if ($password != $password1) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password1);
			$query = "update staff_info set password='$password' WHERE email='$email'";
			$results = mysqli_query($connection, $query);
		
						if (mysqli_num_rows($results) == 1) {
							header('location: index.php');
							
	echo "your password hass been changed";
						}else {
							header('location: forgotpw1.php');
							
	echo "something went wrong";
						}
		}
}			
?> 