<?php include('login_server.php') ?>
 <?php 
    include "../cseheader.php";
    ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>

</head>
<body><br><br><br><br>
<form method="post" action="index.php">

<div class="aa">

<h1 align=center>SIGN IN</h1>
<?php include('errors.php'); ?>

<input type="text" placeholder="username" name="username" required="" ><br>
<input type="password" placeholder="password" name="password" required="" ><br><br>
<!--<button type="submit" class="content" name="sign_in">Sign in</button>-->
<input type="submit" name="sign_in" value="LOGIN">
<br><br>&nbsp;  
<a   href="forgotpw0.php"> forget password </a>&nbsp; &nbsp; 
<a   href="sign_up.php">no account,sign up</a>
</div>
</form>
</body>
<style>
a{
	color:black;
	font-size: 18px;
	font-weight:bolder;
}

body{
	margin: 0;
	padding: 0;
	background-position: center;
	font-family: sans-serif;
	background: url(images/i.jpeg) no-repeat;
	background-size:cover;
}

.aa{
	width: 400px;
	height: 380px;
	background-color: rgba(90,90,90,0.4);
	margin: 0 auto;
	margin-top: 0px;
	padding-top: 10px;
	padding-left: 25px;
	border-radius: 15px;
	color:white;  
	font-weight: bolder;
	box-shadow: inset -4px -4px rgba(0,0,0,0.5);
	float= center;
   }
   
.aa input[type="text"]{
    width: 350px;
    height: 50px;
    border:0px;
    border-radius: 5px;
    margin-top: 15px;
    padding-left: 10px;
	text-align= center;
	font-align= center;
	font-size: 20px;
}

.aa input[type="password"]{
    width: 350px;
    height: 50px;
    border:0px;
    border-radius: 5px;
    margin-top: 15px;
    margin: center;
    padding-left: 10px;
	font-size: 20px;
}

.aa input[type="submit"]{
    width: 350px;
    height: 40px;
    border:0px;
    border-radius: 5px;
    margin-top: 10px;
    margin: center;
    background-color: lightblue;
	font-size: 17px;
}
.error{
	color:red;
	font-size:20px;
	font-weight:bolder;
}
</style>
</html>
