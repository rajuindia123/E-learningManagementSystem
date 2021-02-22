


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
                <li><a href="profile.php"><i class="fas fa-user"></i> My Account</a> </li>
                <li class="active"><a href="changepasswoed.php"><i class="fas fa-user"></i> Change Password</a> </li>
                <li><a href="mycourse.php"><i class="fas fa-user"></i> My Courses</a> </li>
                
            </ul>
            
            
        </div>
        <div id='p_crumb'>
            <span><a href='index.php'>Home</a></span> <b>></b>
            <span><a href="profile.php">Profile</a></span><b> > </b>
            <span>Change Password</span>
        </div>

        <div id='p_edit_r'>
            <h2>Change Password</h2>
            
            
                <form method="post">
                    <table id="">
                <tr>
                <td><i class="fas fa-lock"></i> Enter Current Password:</td>
                
                <input type="password" name="pass" placeholder="Enter Password Hear" id="p_input" />
                        
                </tr>
                    <tr>
                <td><i class="fas fa-lock"></i> Enter New Password:</td>
                <input type="password" name="newpass" placeholder="Enter New Password Hear" id="p_input" />
                </tr>
                    <tr>
                <td><i class="fas fa-lock"></i> Confirm New Password:</td>
                    <input type="password" name="conpass" id="p_input" placeholder="Enter Confirm Password" />
                        
                </tr>
                    
                    </table>
                    <button name="bt_pass" >Update</button>
                    </form>
                
            
        
        </div><br clear='all' />

    
    
    <?php
    
    include("inc/footer.php");


    ?>
</div>
    
    <?php
       if(isset($_POST['bt_pass'])){
            $userpass=$_POST['pass'];
            $password=$_POST['newpass'];
            $conform=$_POST['conpass'];
            $e=$_SESSION['u_email'];
            include("inc/db.php");
           $q1="SELECT * FROM `user` WHERE Password1='$userpass'";
            $result1=mysqli_query($conn,$q1);
            $num1=mysqli_num_rows($result1);

            if($num1>0)
            {

              if($password==$conform)
            {
                  $qu="UPDATE `user` SET `Password1`='$password',`Password2`='$conform' WHERE Email='$e'";  
                    $res=mysqli_query($conn,$qu);
                if($res==True)
                {
                    echo '<script> alert(" Uplode Successfully")</script>';
                    echo "<script>window.location.href='changepasswoed.php'</script>";
                    
                }
                else
                    echo '<script>alert("Error!")</script>';
                  echo "<script>window.location.href='changepasswoed.php'</script>";

            }
                else{
                    echo '<script>alert("The password and conform Password is not  match")</script>';
                    echo "<script>window.location.href='changepasswoed.php'</script>";


            }
                
                
                
                
                
                
            }
           else{
                echo '<script>alert("Duplicate Data Please Enter valid Passworde ID")</script>';
               echo "<script>window.location.href='changepasswoed.php'</script>";


                
            }

            
           
       } 
    
    
    
    
    ?>
    
    <script src="js/all.min.js"></script>
    <script src="js/js1.js"></script>

</body>
</html>