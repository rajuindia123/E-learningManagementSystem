




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Learning | Home</title>
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href="css/w3.css"/>
    <link rel="stylesheet" href=" css/style.css"/>
</head>
<body>
    <?php
    include("inc/header2.php");
    ?>
    <div id="wrap">
        
            <div id='crumb'>
            <span><a href='index.php'>Home</a></span> <b>></b>
            <span>Instructor Dashboard
</span></div>
        <div id='dash'>
                <h1>Instructor Dashboard</h1>
                    <form method="post" id="dash1">
                        <div id='c_form'>
                            <input type="text" name="c_name" placeholder="Enter CourseTitle Hear" />
                            <button name="add_course">Create Course</button>
                        
                        </div>
            
                </form><br clear='all' />
            <form method="post" >
            <table cellpadding='0' cellspacing='0' id="table">
                <tr>
                    <th>Name</th>
                    <th></th>
                    <th></th>
                    <th>Course Price</th>
                    <th>Course Status</th>
                    <th>Enroll By</th>
                    <th>Total Earn</th>
                </tr>
                <?php 
                    include("inc/db.php");
                    $e=$_SESSION['u_email'];
                    $q="SELECT * FROM `development` where tec_email='$e' ";
                    $res=mysqli_query($conn,$q) or die("Query Unsuccessful.");
                    while($row=mysqli_fetch_array($res)){ 
                    $data=$row['course_img']; ?>
                <tr>
                    
                    
                    
                    
                    
                    
                <td><a href="#"> <img src="upload/<?php echo $data; ?>" /></a> </td>
                <td>
                    <span>
                        
                       <?php echo "<a href='course_edit.php?dev_id=$row[0] '>{$row['course_title']} </a>"; ?>

                        
                        
                        
                    </span><br /><br />
                  <?php  echo "<a href='course_edit.php?dev_id=$row[0] '><i class='fas fa-edit'></i>Edit</a> "; ?>
                    </td>
                <td></td>
                <td><?php echo "&#8377; {$row['price']}" ?></td>
                <td><?php echo "{$row['course_status']}" ?></td>
                <td><?php echo "{$row['enroll_by']}" ?></td>
                <td><?php echo "{$row['total_earn']}" ?></td>
                
                <?php } ?>
                
                
                
                
                
                
                



            </table></form>
                
                </div>

                
        
    
    
    <?php
    include("inc/footer.php");


    ?>
</div>
    <?php
    if(isset($_POST['add_course'])){
        $coursetotle=$_POST['c_name'];
        $e=$_SESSION['u_email'];
        $name=$_SESSION['s_name'];
        include("inc/db.php");
        $sql="INSERT INTO `development`(`course_title`,tec_email,tec_name) VALUES ('$coursetotle','$e','$name')";
        $run=mysqli_query($conn,$sql) or die("Query Unsuccessful.");
        if($run==True){
                
	           echo "<script> alert('course_title Added Successful')</script>";
                echo "<script>window.location.href='teacher.php'</script>";

             } else{
                echo "<script> alert('course_title Not Added Successful')</script>";
                echo "<script>window.location.href='teacher.php'</script>";
            }

        
        
        
        
    }
    
    
    
    ?>
    
    
    <script src="js/all.min.js"></script>
    <script src="js/js1.js"></script>

</body>
</html>