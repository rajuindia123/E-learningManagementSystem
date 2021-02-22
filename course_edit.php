
<?php  
     include("inc/db.php");
    $id=$_REQUEST['dev_id']; 
    $q="SELECT * FROM `development` where dev_id='$id' ";
    $res=mysqli_query($conn,$q) or die("Query Unsuccessful.");
    $row=mysqli_fetch_array($res);
    $data=$row['course_img'];
?>

               

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Learning | Course Edit</title>
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href="css/w3.css"/>
    <link rel="stylesheet" href=" css/style.css"/>
</head>
<body>
    <?php
    include("inc/header2.php");
    ?>
    <div id="wrap">
        <div id='c_edit_l'>
            <h1>Couse Management</h1>
            
            
            <ul>
                <li class="active"><?php echo"<a href='course_edit.php?dev_id=$row[0]'><i class='fas fa-user'></i> Title and Image</a>"; ?></li>
                
                <li><?php echo"<a href='course_goal.php?dev_id=$row[0]'><i class='fas fa-user'></i> Couse Goal</a>"; ?></li>
                
                <li><?php echo"<a href='course_detail_des.php?dev_id=$row[0]'><i class='fas fa-user'></i>  Course Details</a>"; ?></li>
                
               <li><?php echo"<a href='course_detail_price.php?dev_id=$row[0]'><i class='fas fa-user'></i> Course Price</a>"; ?></li>
    
                <li><?php echo"<a href='course_detail_curriculum.php?dev_id=$row[0]'><i class='fas fa-user'></i> Curriculum</a>"; ?></li>
    
                
                
                
                
            </ul>
            <button>Submit For Review</button>
            
        </div>
        <div id='c_edit_r'>
            
            <div id='crumb'>
            <span><a href='index.php'>Home</a></span> <b>></b>
            <span>Dashboard</span>
            </div>
            <h2>Course Title</h2>
            <form method="post" enctype='multipart/form-data'>
                <div id="c_edit_input">
                    <input value="<?php echo "{$row['course_title']}" ?>" type="text" name="c_name" placeholder="Enter Course Title" />
                    <p>100</p><br clear='all' />
                
                
                </div>
                
                
                
                
                <h2>Course Image</h2>
                <img src="upload/<?php echo $data; ?>" />
                <span><?php echo "{$row['course_title']}" ?></span>
                
                    <input type="file" name='c_img' id='c_img' />
                <button name="submit">Save</button>
                
            </form>

        </div>    
    
    
    
    <?php
    if(isset($_POST['submit'])){
        $coursetitle=$_POST['c_name'];
        //echo $coursetitle;
        
        
    $file_name=$_FILES['c_img']['name'];
	$file_temp=$_FILES['c_img']['tmp_name'];
    //$file_name=$_FILES['file']['name'];
    $file_size=$_FILES['c_img']['size'];
    //$file_temp=$_FILES['file']['tmp_name'];
    $file_type=$_FILES['c_img']['type'];
    

    $file1=explode('.',$file_name);
    $ext=$file1[1];
    
    //$file_ext=strtolower(end(explode(".",$file_name)));
    $allowed_ext=array('jpeg','jpg','png');
    if(in_array($ext,$allowed_ext)){
        
        if($file_name){
        $path="$file_name";
        move_uploaded_file($file_temp,'upload/'.$file_name);
        //move_uploaded_file($tmp_name,$path);
        $sql="UPDATE `development` SET `course_title`='$coursetitle',course_img='$path' WHERE dev_id='$id'";  
        $result=mysqli_query($conn,$sql) or die("Query Unsuccessful.");
		if($result==TRUE){
            echo '<script> alert(" Uplode Successfully")</script>';
            echo "<script>window.location.href='course_edit.php?dev_id=$row[0]'</script>";
			
			
			
		} else{
			echo '<script> alert("Error")</script>';
            echo "<script>window.location.href='course_edit.php?dev_id=$row[0]'</script>";
		}
    }
    else
        die("Plese select a file");

        
        
        
        
        //move_uploaded_file($file_temp,'uplodeitdoc/'.$file_name);
        //echo "file uplode successfully";
        
    }
    else{
        echo $ext.'   file type is not allowed hear';
    }
   
        
        
        
        
    }


    ?>
</div>
    
    
    
    <script src="js/all.min.js"></script>
    <script src="js/js1.js"></script>

</body>
</html>