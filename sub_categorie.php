<?php
include("inc/db.php");

   
$sub_cat_name=$_REQUEST['sub_cat_id']; 
 
$g="SELECT * FROM `development` where sub_cat_name='$sub_cat_name' ";
     
    $res1=mysqli_query($conn,$g) or die("Query Unsuccessful.");
    $row2=mysqli_fetch_array($res1) 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Learning | Categories</title>
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href="css/w3.css"/>
    <link rel="stylesheet" href=" css/style.css"/>
</head>
<body>
    <?php
    include("inc/header.php");
    ?>
    <div id="wrap">
        <div id='cat_bodyleft'>
            <h2>Filter</h2>
            <ul>
                <li><a href='<?php echo "free_course.php?sub_cat_name=$row2[4] "; ?> '><i class='fas fa-code'></i>Free Course</a></li>
                <li><a href='<?php echo "pay_course.php?sub_cat_name=$row2[4] "; ?> '><i class='fas fa-code'></i>pay Course</a></li>
                
                    </ul>
            
        
        </div>
    
    <div id='cat_bodyright'>
            <div id='crumb'>
            <span><a href='index.php'>Home</a></span> <b>></b>
            <span>Development</span>
        </div>
            <h2>Sub Course Name</h2>
            
            
            <ul>
                
       <?php  
                
        //$status="active";
    $q="SELECT * FROM `development` where sub_cat_name='$sub_cat_name' ";
     
    $res=mysqli_query($conn,$q) or die("Query Unsuccessful.");
    while($row=mysqli_fetch_array($res)){ 
    $data=$row['course_img']; 

    echo "<li>
        <a href='course_detail.php?dev_id=$row[0]'>
        <img src='upload/$data' />
            <h3>".$row['course_title']."</h3>
            <h4>Price : ".$row['price']."</h4>
            <h5 >Teacher Name : ".$row['tec_name']."</h5>
        </a>
        </li>";
        
    }
?>
         
        <br clear="all"/>

            </ul>

            
        </div><br clear='all' />

    
    <?php
        
    
    
    include("inc/footer.php");


    ?>
</div>
    
    
    
    <script src="js/all.min.js"></script>
    <script src="js/js1.js"></script>

</body>
</html>