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
                
                <li><?php echo"<a href='course_goal.php?dev_id=$row[0]'><i class='fas fa-user'></i> Couse Goal</a>"; ?></li>
                
                <li ><?php echo"<a href='course_detail_des.php?dev_id=$row[0]'><i class='fas fa-user'></i>  Course Details</a>"; ?></li>
                
               <li class="active"><?php echo"<a href='course_detail_price.php?dev_id=$row[0]'><i class='fas fa-user'></i> Course Price</a>"; ?></li>
    
                <li><?php echo"<a href='course_detail_curriculum.php?dev_id=$row[0]'><i class='fas fa-user'></i> Curriculum</a>"; ?></li>
    
                           </ul>
            <button>Submit For Review</button>
            
        </div>
        <div id='c_edit_r2'>
            
            <div id='crumb'>
            <span><a href='index.php'>Home</a></span> <b>></b>
            <span><a href="course_edit.php">Dashboard</a></span> <b>></b>
            <span>Course Price</span>
            </div>
            <h2>Course Price</h2>
            <form method="post">
                <p>Select price of your course below and 'save'.Once completed,you will be create instructor coupons based on your selected price.To create a free course,select a price of 'Free'.</p>
                <h2>Price And Privacy</h2>
            <select Name="price">  
                  <option> Select &#8377; RupeesPrice </option>
                <option>0</option>
                  <option>1</option>
                
                  <option>4 </option>  
                  <option>8</option>
                <option>10</option>
                <option>20</option>
                <option>24</option>
                <option>30</option>
                <option>40</option>
                <option>50</option>
                <option>60</option>
                <option>70</option>
                <option>80</option>
                <option>90</option>
                <option>100</option>
                <option>110</option>
                <option>120</option>
                <option>130</option>
                <option>140</option>
                <option>150</option>
                <option>160</option>
                <option>170</option>
                <option>180</option>
                <option>190</option>
                <option>200</option>
                <option>250</option>
                <option>300</option>
                <option>350</option>
                <option>400</option>
                <option>450</option>
                <option>500</option>
                <option>550</option>
                <option>600</option>
                <option>650</option>
                <option>700</option>
                <option>750</option>
                <option>800</option>
                <option>850</option>
                <option>900</option>
                <option>950</option>
                <option>1000</option>
                <option>1050</option>
                <option>1100</option>
                <option>1150</option>
                <option>1200</option>
                <option>1250</option>
                <option>1300</option>
                <option>1350</option>
                <option>1600</option>
                <option>1650</option>
                <option>1700</option>
                <option>1750</option>
                <option>1800</option>
                <option>1850</option>
                <option>1900</option>
                <option>1950</option>
                <option>20000</option>
               

                </select> 
                <select Name="discont">  
                  <option> 0%</option>  
                  <option> 10%</option>  
                  <option> 20%</option>  
                  <option> 30</option> 
                    <option> 40%</option>
                    <option> 50%</option>
                    <option> 60%</option>
                    <option> 70%</option>
                    <option> 80%</option>
                    <option> 90%</option>
                    <option> 95%</option>
                </select> 
                <select Name='privacy'>  
                  <option> Select Course Privacy</option>  
                  <option> Public</option>  
                  <option> Private </option>  
                    
                </select><br clear='all' /> 
                <button name="submit">Save</button>
            </form>
            
            
        </div>    
    
    
    
    <?php
    if(isset($_POST['submit'])){
        $price=$_POST['price'];
         $discont=$_POST['discont'];
        $privacy=$_POST['privacy'];
        
        $sql="UPDATE `development` SET `price`='$price',descount='$discont',privacy='$privacy' WHERE dev_id='$id'"; 
        
        $result=mysqli_query($conn,$sql) or die("Query Unsuccessful.");
        
		if($result==TRUE){
            echo '<script> alert(" Uplode Successfully")</script>';
            echo "<script>window.location.href='course_detail_curriculum.php?dev_id=$row[0]'</script>";
			
			
			
		} else{
			echo '<script> alert("Error")</script>';
            echo "<script>window.location.href='course_detail_price.php?dev_id=$row[0]'</script>";
		}
        
        
    }





    ?>
</div>
    
    
    
    <script src="js/all.min.js"></script>
    <script src="js/js1.js"></script>

</body>
</html>