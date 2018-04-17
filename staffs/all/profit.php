<?php include "admin_header.php"?>
    
   
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
         <lable for="title"></lable>
         <input type="text" value="" class="form-control" name="">
     </div>
     
     <div class="form-group">
         <lable for="post_status"></lable>
         <input type="text" value="" class="form-control" name=""> 
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