
<?php session_start();  ?>

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
        <div id="ruls">
        <h3>Rules And Regulations For Instructors</h3>
        
        <p>1 Instuctor Should Share 50% Revenue With Are Website</p>
        <p>2 Instructor Should Be Have An PayPal Account</p>
        <h3>Want To Become Instructor?</h3>
            <form method="post">
        <input type="checkbox" class="chek" value="conditions" name="conditions"  / >
    <label  class="lable">I Accept All The Terms And Conditions</label><br/>
            <button name="cond">I Accept</button>
                </form>
            <h3>Rules And Regulation For Students</h3>
            <p>1 Student Should Be Have An Paypal Account</p>
        </div>
    
    
    <?php
    include("inc/footer.php");


    ?>
</div>
    <?php
    if(isset($_POST['cond'])){
        if(isset($_POST['conditions'])){
            $conditions=$_POST['conditions'];
            $_SESSION['conditions']= $conditions;
            echo "<script>window.location.href='teacher.php'</script>";
        }else{
            echo '<script> alert("Please Select conditions")</script>';
        echo "<script>window.location.href='rules.php'</script>";

        }
    }
    
    ?>
    
    
    <script src="js/all.min.js"></script>
    <script src="js/js1.js"></script>

</body>
</html>