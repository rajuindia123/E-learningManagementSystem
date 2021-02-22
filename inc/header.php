<?php 

session_start(); 
include("inc/function.php");

?>

<div id='header'>
<div id='up_header'>
    <div id="link">
        <?php echo head_link(); ?>
    </div>
    <div id="date">
        <p><?php
        echo date('l,d F Y');
        ?></p>
    </div>
    <div id="slog">
        <p>India's No.1 E Learning Website</p>
    </div>
    </div>
    <div id="title">
        <h2><a href="index.php">E Learning</a></h2>
    </div>
    <div id="menu">
        <h2><i class="fas fa-bars"></i></h2>
        <?php include("inc/cat_menu.php"); ?>
    </div>
    <div id="head_search">
        <form method="post" enctype="multipart/form-data">
            <input type="search" name="query" placeholder="Search Courses From Hear"/>
            <button name="search"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <div id="hrad_cart">
        <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>0</span> </a>
    </div>
     <?php if(!isset($_SESSION['u_email'] )){
    
 ?>
    <div id="head_login">
       
        <h4><i class="fas fa-user"></i> Login</h4>
        <form method="post" action="login.php" >
            <center><h3><i class="fas fa-user"></i></h3>
            <h4>Login</h4>
            </center>
            <div id="input_f">
                <i class="fas fa-envelope" style="width: 13%; color: #3f5267"></i>
                <input type="email" name="u_email" placeholder="Enter User Email" required />
                
            
            </div>
            <div id="input_f">
                <i class="fas fa-lock" style="width: 13%;color: #3f5267"></i>
                <input type="password" name="u_pass" placeholder="Enter User Password" required />
                
                
            
            </div>
            <h5><a href="#"> Forget Password ?</a></h5><br clear="all" />
            <center><button name="login">Login</button></center>
        </form>
        
    </div>
    <div id="head_singup">
            <h4><i class="fas fa-user-plus"></i> Singup</h4>
        
        
        
        <form method="post" action="">
            <center><h3><i class="fas fa-user-plus"></i></h3>
            <h4>Singup</h4>
            </center>
            <div id="input_f">
                <i class="fas fa-user" style="width: 13%; color: #3f5267"></i>
                <input type="text" name="s_name" placeholder="Enter Your Name" required />
                
            
            </div>
            <div id="input_f">
                <i class="fas fa-envelope" style="width: 13%; color: #3f5267"></i>
                <input type="email" name="s_email" placeholder="Enter Your Email" required />
                
            
            </div>
            <div id="input_f">
                <i class="fas fa-phone" style="width: 13%; color: #3f5267"></i>
                <input type="text" name="s_phn" placeholder="Enter Your Phone No." required />
                
            
            </div>
            
            <div id="input_f">
                <i class="fas fa-lock" style="width: 13%;color: #3f5267"></i>
                <input type="password" name="s_pass1" placeholder="Enter Your Password" required />
                
                
            
            </div>
            <div id="input_f">
                <i class="fas fa-lock" style="width: 13%;color: #3f5267"></i>
                <input type="password" name="s_pass2" placeholder="Re Enter Your Password" required />
                
                
            
            </div>

            
            <center><button name="s_signup">Signup</button></center>
        </form>

    </div>
    <?php } else { ?>
    
    <div id="head_login2">
        <a href="rules.php"><h6><i class="fas fa-user"></i> Become Teacher</h6></a> 
    </div>
    <div id="head_singup2">
            <h4><i class="fas fa-user"></i></h4>
        <form>
            
            <a href="profile.php"><i class="fas fa-user"></i> My Account</a><br /> 
            <a href="changepasswoed.php"><i class="fas fa-user"></i> Change Password</a><br /> 
            <a href="mycourse.php"><i class="fas fa-user"></i> My Courses</a><br /> 
            <a href="logout.php"><i class="fas fa-lock"></i> logout</a><br>
        </form>
        
        
     </div>
 <?php }   ?>
    
    
    
</div>
<?php 
if(isset($_POST['s_signup']))
{
 
    
$name=$_POST['s_name'];
$email=$_POST['s_email'];
$phonenum=$_POST['s_phn'];
$password=$_POST['s_pass1'];
$conform=$_POST['s_pass2'];
$_SESSION['s_name']=$name;
  
    include("admin/inc/db.php");
    $q="SELECT * FROM `user` WHERE PhoneNum='$phonenum' ";
    $result=mysqli_query($conn,$q);
    $num=mysqli_num_rows($result);

        //
    $q1="SELECT * FROM `user` WHERE  Email='$email'";
    $result1=mysqli_query($conn,$q1);
    $num1=mysqli_num_rows($result1);
    if($num>0){
	
	   echo '<script>alert("Duplicate Data Please Enter new phone Num")</script>';
    }
   else
       if($num1>0){
	
	       echo '<script>alert("Duplicate Data Please Enter new Email")</script>';
    }
    else{
	if($password==$conform){
	       $qu="insert into user(Name,Email,PhoneNum,Password1,Password2) values('$name','$email','$phonenum','$password','$conform')";
	       $res=mysqli_query($conn,$qu);
		  if($res==True){
			     echo '<script>alert("Register Data Successfuly")</script>';
                echo "<script>window.location.href='index.php'</script>";

          }
		else
			echo '<script>alert("Error!")</script>';
    }
	else{
         echo '<script>alert("The password and conform Password is not  match")</script>';
        echo "<script>window.location.href='index.php'</script>";

    }
}
}





?>
