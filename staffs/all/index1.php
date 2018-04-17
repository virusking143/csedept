
<?php include "admin_header.php"?>
    <div id="wrapper">
    <?php

    ?>
    <?php
    if($connection)
        
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
                     
               
                        
                    </div>
                </div>
                <!-- /.row -->
                
                
                       
                <!-- /.row -->
                
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    
                    
                    <?php
					$user=$_SESSION['username'];
                        $query ="SELECT * FROM posts where username='$user'";
                        $select_all_post=mysqli_query($connection,$query);
                        $post_count=mysqli_num_rows($select_all_post);
                        echo "<div class='huge'>{$post_count}</div>"
                    ?>
                    
                    
                    
                
                        <div>Posts</div>
                    </div>
                </div>
            </div>
            <a href="posts.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
	<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    
                    
                    <?php
					$user=$_SESSION['username'];
                        $query ="SELECT * FROM upcoming_events where username='$user'";
                        $select_all_post=mysqli_query($connection,$query);
                        $post_count=mysqli_num_rows($select_all_post);
                        echo "<div class='huge'>{$post_count}</div>"
                    ?>
                    
                    
                    
                
                        <div>up-coming events</div>
                    </div>
                </div>
            </div>
            <a href="u_post.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php
                         $query="SELECT * FROM comments where comment_post_id IN(select post_id from posts where username='$user')";
                        $select_all_comments=mysqli_query($connection,$query);
                        $comment_count=mysqli_num_rows($select_all_comments);
                        echo "<div class='huge'>{$comment_count}</div>"
                    ?>
                      <div>Comments</div>
                    </div>
                </div>
            </div>
            <a href="comments.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
	 <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php
                         $query="SELECT * FROM u_comment where comment_post_id IN(select id from upcoming_events where username='$user')";
                        $select_all_comments=mysqli_query($connection,$query);
                        $comment_count=mysqli_num_rows($select_all_comments);
                        echo "<div class='huge'>{$comment_count}</div>"
                    ?>
                      <div>Comments on up-coming events</div>
                    </div>
                </div>
            </div>
            <a href="u_comment.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                       <?php
                        $query ="SELECT * FROM categories";
                        $select_all_categories=mysqli_query($connection,$query);
                        $category_count=mysqli_num_rows($select_all_categories);
                        echo "<div class='huge'>{$category_count}</div>"
                    ?>
                         <div>Categories</div>
                    </div>
                </div>
            </div>
            <a href="categories.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
<div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php
                         $query="SELECT * FROM staff_info";
                        $select_all_comments=mysqli_query($connection,$query);
                        $comment_count=mysqli_num_rows($select_all_comments);
                        echo "<div class='huge'>{$comment_count}</div>"
                    ?>
                      <div>users</div>
                    </div>
                </div>
            </div>
            <a href="staffs.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
	<div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php
                         $query="SELECT * FROM student_info";
                        $select_all_comments=mysqli_query($connection,$query);
                        $comment_count=mysqli_num_rows($select_all_comments);
                        echo "<div class='huge'>{$comment_count}</div>"
                    ?>
                      <div>other users</div>
                    </div>
                </div>
            </div>
            <a href="students.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
                <!-- /.row -->
                
                <?php
                        $query="SELECT *FROM posts WHERE post_status = 'published'";
                        $select_all_published_posts=mysqli_query($connection,$query);
                        $post_published_count=mysqli_num_rows($select_all_published_posts);    
                        
                        $query="SELECT *FROM posts WHERE post_status = 'draft'";
                        $select_all_draft_posts=mysqli_query($connection,$query);
                        $post_draft_count=mysqli_num_rows($select_all_draft_posts);    
                        
                        
                        $query="SELECT *FROM comments WHERE comment_status = 'unapproved'";
                        $unapprove_comments_query=mysqli_query($connection,$query);
                        $unapprove_comment_count=mysqli_num_rows($unapprove_comments_query); 
                        
                        

                            
                ?>
                
                
                

           
           <div class="row">
               <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],
            <?php
              
                $elements_text = ['All Posts','Active Posts','Draft Post','Comments','Pending Comments','Users','Subscribers','Categories']; 
                $elements_count = [$post_published_count,$post_count,$post_draft_count,$comment_count, $unapprove_comment_count,$user_count,$subscriber_count,$category_count];
                        
                for($i =0;$i<8;$i++){
                    echo "['{$elements_text[$i]}'".","."{$elements_count[$i]}],";
                    
                    
                }
                            
                            
                            
            ?>
            
            
            
            
            
//          ['Posts', 1000],
        
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
              <div id="columnchart_material" style="width: 'auto'px; height: 500px;"></div>
       
               
               
           </div>
           
           
           
           
           
           
           
           
           
           
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "admin_footer.php"?>

    