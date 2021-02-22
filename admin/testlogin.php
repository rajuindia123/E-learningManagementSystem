<form action="" method="post">
<input type="email" name="email" />
    <input type="password" name="pass" />
    <input type="submit" name=" submit" value="submit" />

</form>
<?php

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['pass'];
    include("inc/db.php");
    $query="SELECT * FROM `contact` WHERE `email`='$email' and `Password`='$password'";
    $run=mysqli_query($conn,$query);
    $row= mysqli_fetch_array($run);
    if($row ['email']== $email && $row['Password']==$password)
    {
        echo '<script> alert("loging success!|| welcome admin")</script>';
        echo "<script>window.location.href='index.php'</script>";

        //echo "Hello User";
    }
    else
    {
        
        echo '<script>alert("Incorrect password or admin ! Failed to loging!")</script>';
        echo "<script>window.location.href='testlogin.php'</script>";
    }
}



?>