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
        <div class="select_cat">
        <h1>What SubCategory best fits the knowledge you`ll share</h1>
            <p>If you're not sure about the right SubCategory, you can change it later.</p>
            <center>
           
            <h5 id="sub">SubCategory</h5>
            <?php echo ?>
            <select id='select2'>
            <option>Design</option>
            <option>Devlopement</option>
                </select><br />
                <button name="submit" id="sub_btn1" >Submit</button>
                </center>
        
        
        
        
        
        </div>
    <?php
    include("inc/footer.php");


    ?>




</div>

<?php
    include("inc/db.php");
    $q="SELECT * FROM `sub_cat` where ";
    $get_cat=mysqli_query($conn,$q);
     echo "<select id='select1'  name='a'>";
    while($row=mysqli_fetch_array($get_cat)){
       
            echo "<option>".$row['cat_name']."</option>";
        
    }
     echo "</select>";
    


?>



    
    <script src="js/all.min.js"></script>
    <script src="js/js1.js"></script>

</body>
</html>