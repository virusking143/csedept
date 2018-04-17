 
 <?php
  
  

	 
 if(isset($_POST['submit'])){
       $cookie_value=$_POST['title'];
	  $cookie_name=$_SESSION['username']; 
	  setcookie($cookie_name, $cookie_value);
	    $post_image=$_FILES['image']['name'];
        $post_image_temp=$_FILES['image']['tmp_name'];
            move_uploaded_file($post_image_temp,"images/$post_image");    
                $sql = "INSERT INTO upcoming_events(title,username,date,images) VALUES('$_COOKIE[$cookie_name]','$cookie_name',now(),'$post_image')";  
                mysqli_query($connection, $sql);
				header("Location:index.php");
        
           
      }
     if(isset($_POST['add'])){
		$cookie_value=$_POST['title'];
	  $cookie_name=$_SESSION['username']; 
	  setcookie($cookie_name, $cookie_value);
			$post_image=$_FILES['image']['name'];
        $post_image_temp=$_FILES['image']['tmp_name'];
            move_uploaded_file($post_image_temp,"images/$post_image");    
                $sql = "INSERT INTO upcoming_events(title,username,date,images) VALUES('$_COOKIE[$cookie_name]','$cookie_name',now(),'$post_image')";  
                mysqli_query($connection, $sql);
				header("Location:up.php");
    }
	
	 if(isset($_POST['submit1'])){
		  $post_image=$_FILES['image']['name'];
        $post_image_temp=$_FILES['image']['tmp_name'];
            move_uploaded_file($post_image_temp,"images/$post_image");    
                $sql = "INSERT INTO upcoming_events(title,username,date,images) VALUES('$_COOKIE[$cookie_name]','$cookie_name',now(),'$post_image')";  
                mysqli_query($connection, $sql);
				header("Location:index.php");
	 }
	 if(isset($_POST['add1'])){

			$post_image=$_FILES['image']['name'];
        $post_image_temp=$_FILES['image']['tmp_name'];
            move_uploaded_file($post_image_temp,"images/$post_image");    
                $sql = "INSERT INTO upcoming_events(title,username,date,images) VALUES('$_COOKIE[$cookie_name]','$cookie_name',now(),'$post_image')";  
                mysqli_query($connection, $sql);
				header("Location:up.php");
    }

	 
 
?>