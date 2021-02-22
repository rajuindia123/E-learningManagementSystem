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
                <li ><a href="profile.php"><i class="fas fa-user"></i> My Account</a> </li>
                <li><a href="changepasswoed.php"><i class="fas fa-user"></i> Change Password</a> </li>
                <li class="active"><a href="#"><i class="fas fa-user"></i> My Courses</a> </li>
                
            </ul>
            
            
        </div>
        <div id='p_crumb'>
            <span><a href='index.php'>Home</a></span> <b>></b>
            <span><a href="profile.php">Profile</a></span><b> > </b>
            <span>My Course</span>
        </div>

        <div id='p_edit_r'>
            <h2>My Course</h2>
            
            
                
        
        </div><br clear='all' />

    
    
    <?php
    
    include("inc/footer.php");


    ?>
</div>
    
    
    
    <script src="js/all.min.js"></script>
    <script src="js/js1.js"></script>

</body>
</html>