
<?php
session_start();
if(isset($_SESSION['email'])){
    echo"";
}else{
    echo "<script>window.location.href='login.php'</script>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Home</title>
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href=" css/style.css"/>
</head>
<body>
    <?php include("inc/header.php");
        include("inc/bodyleft.php");
        include("inc/bodyright.php");
        //include("cat.php");
     ?>
    
    
    
    
    
    <script src="js/all.min.js"></script>

</body>
</html>