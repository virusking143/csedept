
<?php include "admin_header.php"?>

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
                            WELCOME
                            <?php 
                             echo $_SESSION['username'];
                            ?>
                        </h1>
                        <div class="col-xs-6">
                           
                           <?php
                            insert_categories();
                            ?>
                            <form action="categories.php" method="post">
                                
                                <div class="form-group">
                                   <lable for="cat-title"><b>Add Category</b></lable>
                                    <input type="text" class="form-control" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>
                                
                            </form>
                            
                    <?php //for update & include
                            if(isset($_GET['edit'])){
                                $cat_id=$_GET['edit'];
                                include "update_categories.php";
                            }
                            ?>
                            
                            
                        </div>
                           <div class="col-xs-6">
                                   
                        <?php
                        

                        ?>
                               <table class="table table-bordered table-hover">
                                   <thead>
                                       <tr>
                                           <th>Id</th>
                                           <th>Category Title</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                            <?php //for finding all categories into database
                                                findAllCategories();
                                            ?>
                                            <?php //for Delete
                                                deleteCategories();
                                       ?>
                                   </tbody>
                               </table>
                           </div>
                            
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "admin_footer.php"?>