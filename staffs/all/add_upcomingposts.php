
   <html>  
      <head>  
           <title>add upcming events</title>  

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  

                  
                <div class="form-group">  
                     <form method="post" action=""  enctype="multipart/form-data">  
                         
<lable for="post_title">Title</lable>						  
						  <input type="text" name="title"  placehoder="enter post content" class="form-control name_list" required=""><br>
                                 <lable for="post_image">Post Image</lable>
                                         <input type="file"  name="image" class="form-control name_list" > <br>
                                
                               <input type="submit" name="submit"  class="btn btn-info" value="publish" />  
                           
                     </form>  
                </div>  
             
      </body>  
 </html>  
 
 <?php
if(isset($_POST['submit'])){
       $title=$_POST['title'];
	  $c=$_SESSION['username']; 
	  
	    $post_image=$_FILES['image']['name'];
        $post_image_temp=$_FILES['image']['tmp_name'];
            move_uploaded_file($post_image_temp,"images/$post_image");    
                $sql = "INSERT INTO upcoming_events(title,username,date,images) VALUES('$title','$c',now(),'$post_image')";  
                mysqli_query($connection, $sql);
				header("Location:index.php");
        
           
      }
    ?> 