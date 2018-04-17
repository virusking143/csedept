<?php include "admin_header.php"?>
    
    <?php if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
    
    $query="SELECT * FROM student_info WHERE username ='{$username}' ";
    $select_user_profile=mysqli_query($connection,$query);
    while($row=mysqli_fetch_array($select_user_profile)){
                            
                            $username = $row['username'];
                            $user_password= $row['password'];
                            $user_firstname= $row['f_name'];
                            $user_lastname = $row['l_name'];
                            $user_email= $row['email'];
                            $user_mob= $row['contact1'];
                            $user_pho= $row['contact2'];
                                
        
    }
}
    ?>
    
    <?php
if(isset($_POST['edit_user'])){
        
        $user_firstname=$_POST['user_firstname'];
        $user_lastname=$_POST['user_lastname'];
        
        
//        $post_image=$_FILES['image']['name'];
//        $post_image_temp=$_FILES['image']['tmp_name'];
//        
        $username=$_POST['username'];
        $user_email=$_POST['user_email'];
		 $user_mob=$_POST['mob'];
		  $user_pho=$_POST['pho'];
        $user_password=$_POST['user_password'];
//        $post_date=date('d-m-y');

        $user_password=md5($user_password);
//        move_uploaded_file($post_image_temp,"../images/$post_image");
//        
        
       
                                
                                
                                $query = "UPDATE staff_info SET ";
                                $query .="f_name = '{$user_firstname}', ";
                                $query .="l_name = '{$user_lastname}', ";

                                $query .="username = '{$username}', ";
                                $query .="email = '{$user_email}', ";
								$query .="contact1 = '{$user_mob}', ";
								$query .="contact2 = '{$user_pho}', ";
                                $query .="password = '{$user_password}' ";
                                $query .="WHERE username = '{$username}' ";
        
                            $edit_user_query =mysqli_query($connection,$query);
          
                                confirmQuery($edit_user_query);
//                            echo "User Updated: "." "."<a href='users.php'>View User</a>";
            
            
        }else{
            $message="Fields cannot be empty";
        }


?>
    <div id="wrapper">
    
    <?php
    if($connection)
        echo "connection";
    ?>
 
        <!-- Navigation -->
       
       <?php include "admin_navigation.php"?>
       

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome  
                              <?php 
                             echo $_SESSION['username'];
                            ?>
                        </h1>
                           
                            <form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
         <lable for="title">Firstname</lable>
         <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
     </div>
     
     <div class="form-group">
         <lable for="post_status">Lastname</lable>
         <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname"> 
     </div>
     
     
    
     
<!--
     <div class="form-group">
         <lable for="post_image">Post Image</lable>
         <input type="file" name="image"> 
     </div>
-->
     
     <div class="form-group">
         <lable for="post_tags">Username</lable>
         <input type="text" value="<?php echo $username; ?>" class="form-control" name="username"> 
     </div>
       
     <div class="form-group">
         <lable for="post_tags">Email</lable>
         <input type="email" value="<?php echo $user_email; ?>" class="form-control" name="user_email"> 
     </div>
	      <div class="form-group">
         <lable for="post_tags">contact1</lable>
         <input type="text" value="<?php echo $user_mob; ?>" class="form-control" name="mob"> 
     </div>
	 <div class="form-group">
         <lable for="post_tags">contact2</lable>
         <input type="text" value="<?php echo $user_pho; ?>" class="form-control" name="pho"> 
     </div>
       <div class="form-group">
         <lable for="post_tags">Password</lable>
         <input type="password" value="<?php echo $user_password; ?>"class="form-control" name="user_password"> 
     </div>
     
     
     <div class="form-group">
        <input class="btn btn-primary" type="submit" name="edit_user" value="Update Profile">
         
     </div>
     
     
 </form>
                            
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "admin_footer.php"?>