
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
                           other User details
                            
                        </h1>

                           <div class="col-xs-6">
                                   
                        <?php
                        

                        ?>
                               <table class="table table-bordered table-hover">
                                   <thead>
                                       <tr>
                                           <th>first name</th>
                                           <th>last name</th>
										   <th>username</th>
										   <th>email</th>
										   <th>mobile no.</th>
										   <th>phone number</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                            <?php //for finding all categories into database
                                                findAllousers();
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