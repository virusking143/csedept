
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
                             echo $user=$_SESSION['username'];
                            ?>
                        </h1>
                     
               
                        
                    </div>
                </div>
                <!-- /.row -->
                
                
                       
                <!-- /.row -->
                

                    
                    
                    
                
                       
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php
                         $query="SELECT * FROM comments where comment_author='$user'";
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
                         $query="SELECT * FROM u_comment where comment_author='$user'";
                        $select_all_comments=mysqli_query($connection,$query);
                        $comment_count=mysqli_num_rows($select_all_comments);
                        echo "<div class='huge'>{$comment_count}</div>"
                    ?>
                      <div>Comments on upcoming events</div>
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

<?php include "admin_footer.php"?>

    