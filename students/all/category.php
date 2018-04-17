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
            
            if(isset($_GET['category'])){
               $post_category_id = $_GET['category'];
            }
            $query="SELECT * FROM posts WHERE post_category_id=$post_category_id order by post_date desc";
            $select_all_posts_query=mysqli_query($connection,$query);
              
            while($row = mysqli_fetch_assoc( $select_all_posts_query)){
                $post_id = $row['post_id']; 
                $post_title=$row['post_title'];
                $post_author = $row['post_author']; 
                $post_date = $row['post_date']; 
                $post_image = $row['post_image'];
                $post_username = $row['username']; 				
                $post_content = substr($row['post_content'],0,150); 
                
                
            ?>
               
               <!--          sometimg-->
          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="../../staffs/all/images/<?php echo $post_image?>" alt="">
            <div class="card-body">
              <h2 class="card-title"><a href="post.php?p_id=<?php echo $post_id; ?> "><?php echo $post_title ?></a>
              </h2>
              <p class="card-text"><?php echo $post_content ?></p>
              <a href="post.php?p_id=<?php echo $post_id; ?> " class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo $post_date ?> posted by
              <?php echo $post_username ?> organized by <?php echo $post_author ?>
            </div>
          </div>
    
               
         <?php   }
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

   