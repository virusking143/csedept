
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

                <form method="post" action="order_display.php">
              <div class="form-group">
                <label >Enter posted by</label>
                <input type="text" class="form-control" name="author_name"  placeholder="Author Name" required>
              </div>  
              <div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>      
            </form>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    
<?php 
include "footer.php";
?>

   