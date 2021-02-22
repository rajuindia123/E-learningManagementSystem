

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
                
                <li class="active"><?php echo"<a href='course_detail_des.php?dev_id=$row[0]'><i class='fas fa-user'></i>  Course Details</a>"; ?></li>
                
               <li><?php echo"<a href='course_detail_price.php?dev_id=$row[0]'><i class='fas fa-user'></i> Course Price</a>"; ?></li>
    
                <li><?php echo"<a href='course_detail_curriculum.php?dev_id=$row[0]'><i class='fas fa-user'></i> Curriculum</a>"; ?></li>
    
                
                
            </ul>
            <button>Submit For Review</button>
            
        </div>
        <div id='c_edit_r1'>
            
            <div id='crumb'>
            <span><a href='index.php'>Home</a></span> <b>></b>
            <span><a href="course_edit.php" style=" cursor: pointer;">Dashboard</a></span> <b>></b>
            <span>Course Description</span>
            </div>
            <h2>Course Description</h2>
            <form method="post">
                <textarea id="textarea" name="description"><?php echo "{$row['description']}" ?></textarea>
                <h2>Course Basic Infomation</h2>
            <select Name="lang"> 
                <option>Select Languge</option>
                <?php echo select_lang(); ?>
                  
                </select> 
                <select Name="level">  
                  <option> Select Level</option>  
                  <option> All Leval</option>  
                  <option> Beganier Level</option>  
                  <option> Intermidate Level</option>
                <option> Expert Level</option> 
                </select> 
                <select  name="contry" id='contry' class="select1" >
                <option value="">Select Category</option>
            </select>
            <select  id='state' name='state' class="select1">
            <option value="">Select SubCategory</option>
            </select><br />

            <button name="submit">Save</button>
            </form>
            
            
        </div>    
    
    
    
    <?php
    if(isset($_POST['submit'])){
        $desc=$_POST['description'];
         $lang=$_POST['lang'];
        $lavel=$_POST['level'];
        $cat=$_POST['contry'];
        $sub_cat=$_POST['state'];
        
        $sql="UPDATE `development` SET `description`='$desc',lang='$lang',level='$lavel',cat_name='$cat',sub_cat_name='$sub_cat' WHERE dev_id='$id'"; 
        
        $result=mysqli_query($conn,$sql) or die("Query Unsuccessful.");
        
		if($result==TRUE){
            echo '<script> alert(" Uplode Successfully")</script>';
            echo "<script>window.location.href='course_detail_des.php?dev_id=$row[0]'</script>";
			
			
			
		} else{
			echo '<script> alert("Error")</script>';
            echo "<script>window.location.href='course_detail_des.php?dev_id=$row[0]'</script>";
		}
        
        
    }




    ?>
</div>
    
    
    <script type="text/javascript" src="js/jquery.js" ></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            function lodeData(type, category_id){
               $.ajax({
                url :"get_sub.php",
                   type : "POST",
                   data : {type :type,id :category_id},
                   success : function(data){
                        if(type == "stateData"){
                           $('#state').html(data); 
                        }
                       else{
                          $('#contry').append(data); 
                       }
                       
                   }
               }); 
            }
            lodeData();
            $('#contry').on("change",function(){
                var contry = $("#contry").val();
                if(contry != ""){
                 lodeData("stateData",contry);   
                }else{
                    $('#state').html("");
                }
                
                
                
                
            })
            
        });
        
        
        
        
        
        
    </script>
    
    
    
    
    
    
    <script src="js/all.min.js"></script>
    <script src="js/js1.js"></script>

</body>
</html>