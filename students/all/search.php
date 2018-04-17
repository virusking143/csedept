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
         if(isset($_POST['submit'])){
            $search=$_POST['search'];
            $query="SELECT * FROM posts WHERE username LIKE '%$search%' order by post_date desc ";
             $search_query = mysqli_query($connection,$query);
             
             if(!$search_query){
                 die("Query Failed".mysqli_error($connection));
             }
         
    $count=mysqli_num_rows($search_query);
    if($count==0){
        echo "<h1>NO RESULTS</h1>";
    }else
    {    
            while($row = mysqli_fetch_assoc($search_query)){
                $post_title = $row['post_title']; 
                $post_author = $row['post_author']; 
                $post_date = $row['post_date']; 
                $post_image = $row['post_image']; 
                $post_content = $row['post_content']; 
                $username=$row['username'];
                
            ?>
               
               <!--          sometimg-->

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="../../staffs/all/images/<?php echo $post_image?>" alt="">
            <div class="card-body">
              <h2 class="card-title"><?php echo $post_title ?></h2>
              <p class="card-text"><?php echo $post_content ?></p>
              <a href="post.php?p_id=<?php echo $post_id; ?> " class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo $post_date ?> by
              <a href="#"><?php echo $username ?></a> organised by <?php echo $post_author ?>
            </div>
          </div>
    
               
         <?php   }
            }
        }       
 ?>
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

   