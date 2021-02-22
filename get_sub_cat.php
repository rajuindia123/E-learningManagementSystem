<?php
    include("inc/db.php");
    $output=' ';
    $sql="select * from sub_cat where cat_id='".$_POST['countryId']."'";
    $result=mysqli_query($conn,$sql);
    if($result==true){
    //echo $result;
    $output='<option value="">select SubCat</option>';
    while($row=mysqli_fetch_array($result)){
    $output .='<option value="'.$row['sub_cat_id'].'">'.$row['sub_cat_name'].'</option>';
    
}
    }
else{
    echo "erroe";
}
echo $output;

?>