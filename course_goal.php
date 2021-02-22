
<?php  
     include("inc/db.php");
    $id=$_REQUEST['dev_id']; 
    $q="SELECT * FROM `development` where dev_id='$id' ";
    $res=mysqli_query($conn,$q) or die("Query Unsuccessful.");
    $row=mysqli_fetch_array($res);
    //$data=$row['course_img'];
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
                <li><?php echo"<a href='course_edit.php?dev_id=$row[0]'><i class='fas fa-user'></i> Title and Image</a>"; ?></li>
                
                <li class="active"><?php echo"<a href='course_goal.php?dev_id=$row[0]'><i class='fas fa-user'></i> Couse Goal</a>"; ?></li>
                
                <li><?php echo"<a href='course_detail_des.php?dev_id=$row[0]'><i class='fas fa-user'></i>  Course Details</a>"; ?></li>
                
               <li><?php echo"<a href='course_detail_price.php?dev_id=$row[0]'><i class='fas fa-user'></i> Course Price</a>"; ?></li>
    
                <li><?php echo"<a href='course_detail_curriculum.php?dev_id=$row[0]'><i class='fas fa-user'></i> Curriculum</a>"; ?></li>
    
                           </ul>
            <button>Submit For Review</button>
            
        </div>
        <div id='c_edit_r'>
            
            <div id='crumb'>
            <span><a href='index.php'>Home</a></span> <b>></b>
            <span><a href="course_edit.php">Dashboard</a></span> <b>></b>
            <span>Course Goal</span>
            </div>
            <h2>Course Goal</h2>
            
            <p id="c_p">The first step to creating a great course is deciding who you are creating your course for and what those student are looking to accomplish. This is important information that will help student decide if your coude is the right fit for their needs and will appear on your course landing page.</p>
            <h3>What will student need to know or do befor starting this course ?</h3>
            <form method="post">
            <div id="c_edit_input">
                    <input type="text" name="s_des" value="<?php echo "{$row['short_desc']}" ?>" placeholder="Enter Course Short Description" />
                    <p>100</p><br clear='all' />
            </div>
            <h3>At the end of my course,students will be able to...</h3>
            <div id="c_edit_input">
                    <input type="text" name="ss_des" value="<?php echo "{$row['meta_data']}" ?>" placeholder="Enter Course Meta Title" />
                    <p>100</p><br clear='all' />
            </div>
                <button name="submit">Save</button>
            </form>
        </div>    
    
    
    
    <?php
    if(isset($_POST['submit'])){
        $shotdesc=$_POST['s_des'];
         $metadesc=$_POST['ss_des'];
        
        $sql="UPDATE `development` SET `short_desc`='$shotdesc',meta_data='$metadesc' WHERE dev_id='$id'"; 
        
        $result=mysqli_query($conn,$sql) or die("Query Unsuccessful.");
        
		if($result==TRUE){
            echo '<script> alert(" Uplode Successfully")</script>';
            echo "<script>window.location.href='course_goal.php?dev_id=$row[0]'</script>";
			
			
			
		} else{
			echo '<script> alert("Error")</script>';
            echo "<script>window.location.href='course_goal.php?dev_id=$row[0]'</script>";
		}
        
        
    }


    ?>
</div>
    
    
    
    <script src="js/all.min.js"></script>
    <script src="js/js1.js"></script>

</body>
</html>