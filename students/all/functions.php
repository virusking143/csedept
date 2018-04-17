<?php 
function users_online(){
    global $connection;
        $session=session_id();
    $time=time();
    $time_out_in_seconds=30;
    $time_out=$time-$time_out_in_seconds;
    $query="SELECT *FROM users_online WHERE session ='$session' ";
    $send_query=mysqli_query($connection,$query);
    $count=mysqli_num_rows($send_query);

    if($count ==NULL){//new users
        mysqli_query("INSERT INTO users_online(session,time) VALUES('$session','$time')");
    }else{//existing
         mysqli_query($connection,"UPDATE users_online SET time='$time' WHERE session ='$session'");
    }
    $users_online_query=mysqli_query($connection,"SELECT *FROM users_online WHERE time> '$time_out'");
    return $count_user=mysqli_num_rows($users_online_query);
    
}




function confirmQuery($result){
    
    global $connection;
      
        if(!$result){
            
            die("QUERY FAILED".mysqli_error($connection));
        }

        
}

function confirmPost($result){
    
    global $connection;
      
        if(!$result){
            
            die("QUERY FAILED ".mysqli_error($connection));
        }

        
}



 function insert_categories(){
      
     global $connection;
     if(isset($_POST['submit'])){
                               $cat_title= $_POST['cat_title'];
                               
                               if($cat_title == "" || empty($cat_title)){
                                   echo "This field should not be empty";
                               }else{
                                   $query="INSERT INTO categories(cat_title) ";
                                   $query .="VALUE('{$cat_title}')";
                                   
                                   $create_category_quey=mysqli_query($connection,$query);
                                   
                                   if(!$create_category_quey){
                                       die('QUERY FAILED'.mysqli_error($connection));
                                   }
                               }
                           }

 }



function findAllCategories(){
    global $connection;
    
                            $query="SELECT * FROM categories";
                            $select_categories=mysqli_query($connection,$query);

                            while($row = mysqli_fetch_assoc($select_categories)){
                            $cat_id= $row['cat_id'];
                            $cat_title = $row['cat_title'];

                            echo "<tr>";
                            echo "<td>{$cat_id}</td>";
                            echo "<td>{$cat_title}</td>";
                            echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
                            echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
                            echo "</tr>";
                            }  

                            }


function deleteCategories(){
     global $connection;
                            if(isset($_GET['delete'])){
                            $the_cat_id=$_GET['delete'];
                            $query="DELETE FROM categories WHERE cat_id={$the_cat_id}";
                            $delete_query=mysqli_query($connection,$query);
                            header("Location:categories.php");
                            }
}
function findAllusers(){
    global $connection;
    
                            $query="SELECT * FROM staff_info";
                            $select_categories=mysqli_query($connection,$query);

                            while($row = mysqli_fetch_assoc($select_categories)){
                            $f_name= $row['f_name'];
                            $l_name = $row['l_name'];
                            $username = $row['username'];
							$email = $row['email'];
							$mobile = $row['contact1'];
							$phone = $row['contact2'];
                            echo "<tr>";
                            echo "<td>{$f_name}</td>";
                            echo "<td>{$l_name}</td>";
							echo "<td>{$username}</td>";
							echo "<td>{$email}</td>";
							echo "<td>{$mobile}</td>";
							echo "<td>{$phone}</td>";
                            echo "</tr>";
                            }  

                            }

?>