
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Learning | Categories</title>
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href="css/w3.css"/>
    <link rel="stylesheet" href=" css/style.css"/>
</head>
<body>
    <?php
    include("inc/header.php");
    ?>
    <div id="wrap">
        
    <div id='cat_bodyleft'>
            <h2>Categories</h2>
        <?php
        $id=$_GET['cat_id'];
        include("inc/db.php");
        $q="SELECT * FROM `cat` where cat_id='$id'";
        $get_cat=mysqli_query($conn,$q);
        $row=mysqli_fetch_array($get_cat);
        
        
       echo" 
        <ul>
            <li><a href='categorie.php?cat_id=$row[0]'><i class='fas fa-code'></i> {$row['cat_name']} </a></li>
            </ul>";
            ?>
        
         <h2>Sub Categories</h2>
        <ul>
            <?php
            //$id=$_GET['cat_id'];
            include("inc/db.php");
            $q="SELECT * FROM `sub_cat` where cat_id='$id'";
            $get_cat=mysqli_query($conn,$q);
            while($row1=mysqli_fetch_array($get_cat)){ ?>
            <li><a href='<?php echo"sub_categorie.php?sub_cat_id=$row1[0]"; ?>'><i class='fas fa-code'></i> <?php echo " {$row1['sub_cat_name']}" ?> </a></li>
            <?php } ?>
        </ul>

        
        </div>
        <div id='cat_bodyright'>
            <div id='crumb'>
            <span><a href='index.php'>Home</a></span> <b>></b>
            <span>Development</span>
        </div>
            <h2>Web Develpoment</h2>
            
            
            <ul>
                
        <?php  
     //include("inc/db.php");
    //$id=$_REQUEST['dev_id']; 
    //$status="active";
    $q="SELECT * FROM `development` where cat_name='$id' ";
    $res=mysqli_query($conn,$q) or die("Query Unsuccessful.");
    while($row=mysqli_fetch_array($res)){ 
    $data=$row['course_img']; 

    echo "<li>
        <a href='course_detail.php?dev_id=$row[0]'>
        <img src='upload/$data' />
            <h3>".$row['course_title']."</h3>
            <h4>Price : ".$row['price']."</h4>
            <h5 >Teacher Name : ".$row['tec_name']."</h5>
        </a>
        </li>";
        
    }
?>
                
                
        <br clear="all"/>

            </ul>

            
        </div><br clear='all' />

    
    <?php
        
    
    
    include("inc/footer.php");


    ?>
</div>
    
    
    
    <script src="js/all.min.js"></script>
    <script src="js/js1.js"></script>

</body>
</html>