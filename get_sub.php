<?php
    include("inc/db.php");
if($_POST['type'] == ""){
   $q="SELECT * FROM `cat` order by cat_name";
    $get_cat=mysqli_query($conn,$q) or die("Query Unsuccessful.");
    $str="";
        while($row=mysqli_fetch_assoc($get_cat)){
            $str.="<option value='{$row['cat_id']}'>{$row['cat_name']}</option>";
            
        }
 
}else if($_POST['type'] == "stateData"){
    $q="SELECT * FROM `sub_cat` where cat_id ={$_POST['id']} ";
    $get_cat=mysqli_query($conn,$q) or die("Query Unsuccessful.");
    $str="";
        while($row=mysqli_fetch_assoc($get_cat)){
            $str.="<option value='{$row['sub_cat_id']}'>{$row['sub_cat_name']}</option>";
            
        }
 
    
}
    echo $str;

?>