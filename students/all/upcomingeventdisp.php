<?php
include "db.php";
?>
<?php 
include "header.php";
?>
    <!-- Navigation -->
    <?php 
    include "navigation.php";
    ?>

    <!-- Page Content -->
     <div class="container" style="margin-top:30px;">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
        <?php
            if(isset($_GET['id'])){
                $the_post_id=$_GET['id'];
           

            
            
            $query="SELECT * FROM upcoming_events WHERE id=$the_post_id";
            $select_all_posts_query=mysqli_query($connection,$query);
              
            while($row = mysqli_fetch_assoc($select_all_posts_query)){
                $post_title = $row['title']; 
                
                $post_date = $row['date']; 
                $post_image = $row['images']; 
                
                $post_username = $row['username']; 
                
            ?>
               
<!--          sometimg-->
          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="images/<?php echo $post_image?>" alt="">
            <div class="card-body">
              <h2 class="card-title"><?php echo $post_title ?></h2>
              
              
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo $post_date ?> by
              <a href="#"><?php echo $post_username ?></a>
            </div>
          </div>
    
               
         <?php   }  }
            else{
                header("Location:index.php");
            }
         ?>
         
         
         
         
         
         
         <?php
            if(isset($_POST['create_comment'])){
                  $the_post_id=$_GET['id'];
               
             $comment_author=$_SESSION['username'];
            
            $comment_content=$_POST['comment_content'];
                if(!empty($comment_content)){
                     $query="INSERT INTO u_comment (comment_post_id,comment_author,comment_content,comment_status,comment_date)";
            $query .="VALUES ($the_post_id,'{$comment_author}','{$comment_content}','unapproved',now())";
                
                $create_comment_query=mysqli_query($connection,$query);
                
                
                if(!$create_comment_query){
                    die('QUERY FAILED'.mysqli_error($connection));
                }
                
                
                
               
				header("Location:index.php");
                   echo "<script>alert('your comment has been posted')</script>";         
                }
                else{
                    echo "<script>alert('Fields cannot be empty')</script>";
                }
   
           
            }
         ?>
          
          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form action="" method="post" role="form">
               
                <div class="form-group">
                 <lable for="comment">Your Comments</lable>
                  <textarea name="comment_content" class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" name="create_comment" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

         
         <?php
            $query ="SELECT * FROM u_comment WHERE comment_post_id = {$the_post_id} ";
            $query .="AND comment_status = 'approved' "; 
            $query .="ORDER BY comment_id DESC";
            $select_comment_query = mysqli_query($connection,$query);
            
            if(!$select_comment_query){
                die('QUERY FAILED'.mysqli_error($connection));
            }
            while($row = mysqli_fetch_array($select_comment_query)){
                $comment_date = $row['comment_date'];
                $comment_content=$row['comment_content'];
                $comment_author=$row['comment_author'];
                
                
                
                ?>
             <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0"><?php echo $comment_author; ?>
              <small>on <?php echo $comment_date; ?></small>
              </h5>
              <?php echo $comment_content; ?>
            </div>
          </div>
            
        <?php } ?>
         
         
          <!-- Single Comment -->
         

        </div>

        <!-- Sidebar Widgets Column -->
         
<?php 
          include "sidebar.php";
          ?>  

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
  
          
<?php 
include "footer.php";
?>

   