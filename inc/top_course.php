
<div id="top_course">
    <h2>Top Courses</h2>
    
    <ul>
    <?php  
     include("inc/db.php");
    //$id=$_REQUEST['dev_id']; 
    $status="active";
    $q="SELECT * FROM `development` where course_status='$status' ";
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

</div>