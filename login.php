<?php
session_start();
if(!isset($_SESSION['u_email'])){

    $email=$_POST['u_email'];
    $password=$_POST['u_pass'];
    $_SESSION['u_email']=$email;
    $_SESSION['u_pass']=$password;
    
    
    include("inc/db.php");
    $query="SELECT * FROM `user` WHERE `Email`='$email' and `Password1`='$password'";
    $run=mysqli_query($conn,$query);
    $row= mysqli_fetch_array($run);
    if($row ['Email']== $email && $row['Password1']==$password)
    {
        echo '<script> alert("loging success!|| welcome User")</script>';
        echo "<script>window.location.href='index.php'</script>";

        //
    }
    else
    {
        
        echo '<script>alert("Incorrect password or admin ! Failed to loging!")</script>';
        echo "<script>window.location.href='index.php'</script>";
    }


}else {
        echo "<script> location.href='index.php'</script>";
    //echo "<b>&#128151;Welcom-:</b>".$_SESSION['email'];
}
  
?>
    

