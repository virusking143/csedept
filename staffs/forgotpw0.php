<?php include('OTP.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>forgot password</title>
</head>
<body>
	<button ><a href="index.php">BACK</a></button>
<br><br><br><br><br><br><br><br><br><br>
<center >
	
<div class="aa">

	
			<h1>please enter your gmail</h1>
			
<form action="forgotpw0.php" method="post">
	<?php include('errors.php') ?>	
		<input type="email" name="email1" placeholder="Enter your gmail"  required=""><br>
		<input type="submit" name="gmail" value="NEXT"><br>
</form>
</div>
</center>
</body>

<!--stype code-->

<style>
	body{

			background-color: purple;
			background-image: url(images/IMG-20180211-WA0012.jpg);
			background-size: cover;
			background-position: cover;
	    }
	 button{
	 			width: 50px;
	 			height: 30px;
	 			border-radius: 5px;
	 			float: right;
	 			text-align: center;
	 		}   
 
 	.aa{
	width: 500px;
	height: 300px;
	background-color: rgba(90,90,90,0.6);
	margin: 0 auto;
	margin-top: 0px;
	padding-top: 10px;
	padding-left: 10px;
	border-radius: 15px;
	color:white;  
	font-weight: bolder;
	box-shadow: inset -4px -4px rgba(0,0,0,0.5);
   }

    .aa input[type="text"]{
    width: 350px;
    height: 50px;
    border:0px;
    border-radius: 5px;
    margin-top: 15px;
    margin: center;
    padding-left: 20px;
}
.aa input[type="email"]{
    width: 350px;
    height: 50px;
    border:0px;
    border-radius: 5px;
    margin-top: 15px;
    margin: center;
    padding-left: 20px;
}

.aa input[type="password"]{
    width: 350px;
    height: 50px;
    border:0px;
    border-radius: 5px;
    margin-top: 15px;
    margin: center;
    padding-left: 20px;
}

.aa input[type="submit"]{
    width: 320px;
    height: 40px;
    border:0px;
    border-radius: 5px;
    margin-top: 10px;
    margin: center;
    background-color:lightblue;
}

</style>
</html>