

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
    include("inc/header.php");
    ?>
    <div id="wrap">
        <div id='p_edit_l'>
            
           <?php
            
            
            include("inc/db.php");
    $e=$_SESSION['u_email'];
    $q="SELECT image FROM `user` where Email='$e'";
    $update=mysqli_query($conn,$q);
    $row=mysqli_fetch_array($update);
        $data=$row['image'];
        

            ?>
    <img src="upload/<?php echo $data; ?>" />
    
   
    

            
        
                <h1>Profile</h1>
            <ul>
                <li class="active"><a href="profile.php"><i class="fas fa-user"></i> My Account</a> </li>
                <li><a href="changepasswoed.php"><i class="fas fa-user"></i> Change Password</a> </li>
                <li><a href="mycourse.php"><i class="fas fa-user"></i> My Courses</a> </li>
                
            </ul>
            
            
        </div>
        <div id='p_crumb'>
            <span><a href='index.php'>Home</a></span> <b>></b>
            <span>Profile</span>
        </div>

        <div id='p_edit_r'>
            <h2>My Account</h2>
            
            
                <form method='post'  enctype='multipart/form-data'>
                    
                    
                    <?php 
                    echo profile();
                    ?>
                    
                      <button name='submit' >Update</button>
                    </form>          
            
        
        </div><br clear='all' />

    
    
    <?php
    
    include("inc/footer.php");


    ?>
</div>
    
    <?php 
    
       include("inc/db.php");
    
    if(isset($_POST['submit'])){
        $name=$_POST['c_name'];
        $phone=$_POST['c_phone'];
        $email=$_POST['c_email'];
         $e=$_SESSION['u_email'];
        
    $file_name=$_FILES['c_file']['name'];
	$file_temp=$_FILES['c_file']['tmp_name'];
    //$file_name=$_FILES['file']['name'];
    $file_size=$_FILES['c_file']['size'];
    //$file_temp=$_FILES['file']['tmp_name'];
    $file_type=$_FILES['c_file']['type'];
    

    $file1=explode('.',$file_name);
    $ext=$file1[1];
    
    //$file_ext=strtolower(end(explode(".",$file_name)));
    $allowed_ext=array('jpeg','jpg','png');
    if(in_array($ext,$allowed_ext)){
        
        if($file_name){
        $path="$file_name";
        move_uploaded_file($file_temp,'upload/'.$file_name);
        //move_uploaded_file($tmp_name,$path);
        $sql="UPDATE `user` SET `Name`='$name',`PhoneNum`='$phone',image='$path' WHERE Email='$e'";  
        $result=mysqli_query($conn,$sql);
		if($result==TRUE){
            echo '<script> alert(" Uplode Successfully")</script>';
            echo "<script>window.location.href='profile.php'</script>";
			
			
			
		} else{
			echo '<script> alert("Error")</script>';
            echo "<script>window.location.href='profile.php'</script>";
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
    
    <script src="js/all.min.js"></script>
    <script src="js/js1.js"></script>

</body>
</html>