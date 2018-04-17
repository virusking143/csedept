<div class="col-md-4">
  

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <form action="search.php" method="post">
            <div class="card-body">
              <div class="input-group">
                <input name="search" type="text" class="form-control" placeholder="Enter username...">
                <span class="input-group-btn">
                  <button name="submit" class="btn btn-secondary"  type="submit">Go!</button>
                </span>
              </div>
            </div>
            </form>
          </div>
          
           
         
          <!-- Categories Widget -->
          <div class="card my-4">
           <?php
            $query="SELECT * FROM categories";
            $select_categories_sidebar=mysqli_query($connection,$query);
              
            
            ?>
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                   
                  <?php
                    while($row = mysqli_fetch_assoc($select_categories_sidebar)){
                    $cat_title = $row['cat_title'];
                         $cat_id = $row['cat_id'];

                    echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";
                    }  
                      
                      
                      ?>
                   
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          
          <!-- upcoming events Widget -->
         
           <?php
            $query="SELECT * FROM upcoming_events order by date desc";
            $select_upcomingevent_sidebar=mysqli_query($connection,$query);
              
            
            ?>
            <h5 class="card-header">upcoming events</h5>
            
                 <marquee  behavior="scroll" direction="up"  scrolldelay="350" hspace="20px">  
                  <?php
                    while($row = mysqli_fetch_assoc($select_upcomingevent_sidebar)){
                    $cat_title = $row['title'];
					$id=$row['id'];
					 
                       ?>
<a href="upcomingeventdisp.php?id=<?php echo $id; ?>">				   
                    <?php echo "<li> <b> <u>{$cat_title}<br> <br> </u> </b> </li>";} ?> </a>
                    
                  
                   </marquee>


           
          
          

          <!-- Side Widget -->
       <?php include "widget.php"; ?>

        </div>