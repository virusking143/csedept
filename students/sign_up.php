<?php include('login_server.php') ?>
 <?php 
    include "../cseheader.php";
    ?>

<!DOCTYPE html>
<html>
<head>
	<title>SIgn up</title>
	
</head>
<body>
<center>
	<div class="header">
		<h1>SIGN UP</h1>
	</div>
	<div class="input-group">
<form  method="post" action="sign_up.php">


		
		<?php include('errors.php') ?>
	<input type="text" placeholder="first name" name="f_name" value="" required>
<br><br>
	<input type="text" placeholder="last name" name="l_name" value=""required>
	<br><br>
	<input type="text" placeholder="username" name="username" value=""required>
		<br><br>	
    <input type="email" placeholder="email" name="email" value=""required>
	
	<br><br>
	<input type="password" placeholder="password"  name="password1" required>
	
		<br><br>	
    <input type="password" placeholder="confirm password" name="password2" value=""required>
	
		
    
	
		<br><br>	
    <input type="text" placeholder="mobile no." name="contact1"  value=""required>
		
		<br><br>
			
			<input type="text" placeholder="phone no." name="contact2" value="">
		
		<br><br>
		
			<button type="submit" class="btn" name="sign_up">sign up</button>
		</div>

		<h2>
			Already have a account? <a style="color:yellow;
	
	font-size:30px;
	font-weight:bolder;" href="index.php">Sign in</a>
		</h2>
	</form>
				
	</center>
</body>
<style>
body{
	background-color:black;
	background:url("images/WhatsApp Image 2018-02-28 at 10.58.40 AM (1).jpeg") no-repeat;
	background-size:cover;
}

h1{
	font-weight:bolder;
	color:white;
	font-size:30px;
}
h2{
	font-weight:bolder;
	color:white;
	font-size:30px;
}
a{
	color:black;
	font-size: 18px;
	font-weight:bolder;
	
}
.header {
	width: 40%;
	margin: 50px auto 0px;
	color: white;
	background: #5F9EA0;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
.input-group {
	margin: 10px 0px 10px 0px;
	width:50%;
	height:70%
}

.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 20px;
	width: 73%;
	padding: 5px 10px;
	font-size: 20px;
	border-radius: 5px;
	border: 1px solid gray;
}
.btn {
	background-color:lightblue;
	border:none;
	color:black;
	padding:10px 50px;
	text-align:center;
	text-decoration:none;
	display:inline-block;
	font-size:25px;
	border-radius:5%;
}
.error {
	font-size:20px;
	font-weight:bolder;
	color:red;

}

</style>
</html>