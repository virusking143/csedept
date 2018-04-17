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
            $per_page=5;
            if(isset($_GET['page'])){
                $page=$_GET['page'];
            }else{
                $page="";
            }
            
            if($page == "" || $page == 1){
                $page_1=0;
            }else{
                $page_1=($page*$per_page)-$per_page;
            }
            $post_query_count="SELECT * FROM posts ";
            $find_count=mysqli_query($connection,$post_query_count);
            $count = mysqli_num_rows($find_count);
            
            $count=ceil($count/5);
            
            
            $query="SELECT * FROM posts order by post_date desc LIMIT $page_1,$per_page";
            $select_all_posts_query=mysqli_query($connection,$query);
              
            while($row = mysqli_fetch_assoc( $select_all_posts_query)){
                $post_id = $row['post_id']; 
                $post_title=$row['post_title'];
                $post_author = $row['post_author']; 
                $post_date = $row['post_date']; 
                $post_image = $row['post_image']; 
                $post_content = substr($row['post_content'],0,150); 
                $post_status = $row['post_status']; 
                $post_username = $row['username']; 
                if($post_status == 'published'){
               
            ?>
               
           <!--          sometimg-->
           

          <!-- Blog Post -->
         
          <div class="card mb-4">
          
           <a href="post.php?p_id=<?php echo $post_id; ?> ">
            <img class="card-img-top" src="images/<?php echo $post_image?>" alt="">
            </a>
            
            <div class="card-body">
              <h2 class="card-title"><a href="post.php?p_id=<?php echo $post_id; ?> "><?php echo $post_title ?></a>
              </h2>
              <p class="card-text"><?php echo $post_content ?></p>
              <a href="post.php?p_id=<?php echo $post_id; ?> " class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-text">
              Posted on <?php echo $post_date ?> posted by
              <?php echo $post_username ?> organized by <?php echo $post_author ?>
            </div>
          </div>
    
               
         <?php   } }
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
    
    <ul class="pagination pagination-lg" style="margin-left:500px;">
    <?php
        
        for($i=1;$i<=$count;$i++){
            if($i == $page){
                echo "<li class='page-item active'><a class='page-link'  href='index.php?page={$i}'>\t{$i}\t</a></li>";
            
            }else{
                echo "<li class='page-item'><a class='page-link' href='index.php?page={$i}'>{$i}</a></li>";
            }
      
            }

    ?>
    </ul>
   
<!--
   <ul class="pagination" style="margin-left:300px;">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
   
-->

    
<?php 
include "footer.php";
?>

   