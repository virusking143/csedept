<?php

    if(isset($_POST['checkBoxArray'])){
        foreach($_POST['checkBoxArray'] as $postValueId){
      
            $bulk_options=$_POST['bulk_options'];
            
            switch($bulk_options){
               

                case 'delete': $query="DELETE FROM upcoming_events WHERE id={$postValueId} ";
                                   $update_to_delete_status=mysqli_query($connection,$query);
                                    confirmQuery( $update_to_delete_status);
                    break;
            }
            
        }
    }
?>
                              

                              
                              
                              <table class="table table-bordered table-hover">
                               <div class="col-xs-4">
                                   
                                    <a class="btn btn-primary" href="posts.php?source=add_upcomingpost">Add New</a>
                               </div>
                               <thead>
                                   <tr>
                                      <th><input id="selectAllBoxes" type="checkbox"></th>
                                       <th>ID</th>

                                       <th>Title</th>

                                      
                                       <th>Image</th>

                                       
                                       <th>Date</th>
                                       <th>View upcoming-event</th>

                                        <th>Delete</th>
                                        
                                   </tr>
                               </thead>

                           <tbody>
                              <?php
    $user=$_SESSION['username'];
                               $query="SELECT * FROM upcoming_events where username='$user' ORDER BY id DESC";
                            $select_posts=mysqli_query($connection,$query);

                            while($row = mysqli_fetch_assoc($select_posts)){
                            $post_id= $row['id'];
                            
                            $post_title = $row['title'];
                            
                            
                            $post_image = $row['images'];
                            
                            
                            $post_date = $row['date'];
                            
                                echo "<tr>";
                                 ?>
                                <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $post_id; ?>'></td>
                                <?php
                                   
                                
                                echo "<td>{$post_id}</td>";
                                 
                                 echo "<td>{$post_title}</td>";
                                
                                
                               
                                
                                
                              
                                
                                            
                                
           
                                echo "<td><img width='100' src='images/$post_image' alt='image'</td>";
                                
								
								
								
								
								
                               
                                echo "<td>{$post_date}</td>";
                                echo "<td><a href='upcomingeventdisp.php?id={$post_id}'>View Post</a></td>";
                                
                               echo "<td><a onClick=\"javascript:return confirm('Are you sure you want to delete'); \"href='u_post.php?delete={$post_id}'>Delete</a></td>";
                              
                                echo "</tr>";
                            }
                                ?>
                           </tbody>
                    </table>
                    </form>
                   
                  
                 <?php
                    if(isset($_GET['delete'])){
                        $the_post_id=$_GET['delete'];
                        $query="DELETE FROM upcoming_events WHERE id = {$the_post_id} ";
                        $delete_query=mysqli_query($connection,$query);
                        header("Location: u_post.php");
                    }
                        if(isset($_GET['reset'])){
                        $the_post_id=$_GET['reset'];
                        $query="UPDATE posts SET post_views_count = 0 WHERE post_id =" . mysqli_real_escape_string($connection,$_GET['reset']) ." ";
                        $reset_query=mysqli_query($connection,$query);
                        header("Location: u_post.php");
                    }




                ?>