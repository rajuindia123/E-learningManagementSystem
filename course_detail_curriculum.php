<?php  
     include("inc/db.php");
    $id=$_REQUEST['dev_id']; 
    $q="SELECT * FROM `development` where dev_id='$id' ";
    $res=mysqli_query($conn,$q) or die("Query Unsuccessful.");
    $row=mysqli_fetch_array($res);
    //$data=$row['course_img'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Learning | Course Edit</title>
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href="css/w3.css"/>
    <link rel="stylesheet" href=" css/style.css"/>
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="js/w3.js"></script>
    
</head>
<body>
    <?php
    include("inc/header2.php");
    ?>
    <div id="wrap">
        <div id='c_edit_l'>
            <h1>Couse Management</h1>
            <ul>
                <li><?php echo"<a href='course_edit.php?dev_id=$row[0]'><i class='fas fa-user'></i> Title and Image</a>"; ?></li>
                
                <li><?php echo"<a href='course_goal.php?dev_id=$row[0]'><i class='fas fa-user'></i> Couse Goal</a>"; ?></li>
                
                <li ><?php echo"<a href='course_detail_des.php?dev_id=$row[0]'><i class='fas fa-user'></i>  Course Details</a>"; ?></li>
                
               <li><?php echo"<a href='course_detail_price.php?dev_id=$row[0]'><i class='fas fa-user'></i> Course Price</a>"; ?></li>
    
                <li class="active"><?php echo"<a href='course_detail_curriculum.php?dev_id=$row[0]'><i class='fas fa-user'></i> Curriculum</a>"; ?></li>
    
               
            </ul>
            <button>Submit For Review</button>
            
        </div>
        <div id='c_edit_r3'>
            
            <div id='crumb'>
            <span><a href='index.php'>Home</a></span> <b>></b>
            <span><a href="course_edit.php">Dashboard</a></span> <b>></b>
            <span>Curriclum</span>
            </div>
            <h2>Curriculum</h2>
            
            <button id="add1" class="button1">Add More Feild</button>
            <button  class="button3">Save</button>
            <ul class="ab">
            
                
             
                
                    
                
                    
            
            </ul>
            <ul>
                <li><span>Lecture 1: &nbsp;</span><i class='fas fa-video' style='font-size: 12px; color: #3f5267;margin-right: 1%;'></i><span>Introdction </span></li>
                <div class="item-title"><button id="hello">Edit Content</button></div>
                
                <div class="item-content">
                <div class="item-body">
                    <p id="p">Updaet Lecture Name</p>
                        <div id="c_edit_input1">
                    <input type="text" name="c_name" placeholder="Enter Course Title" />
                    <p>100</p><br clear='all' />
                </div>
                    <p id="p">Update Lecture Video</p>
                <input type="file" name="c_img" id='c_img1' />
                <button class="button2">Update</button>
                <p id="p">Lecture Video</p>
                    <video controls id="video">
                        
                    <source src="upload/videoplayback.mp4" type="video/mp4" />
                </video>
                
                    </div>
                </div>
                
                
                
                
                
                <li><span>Lecture 2: &nbsp;</span><i class='fas fa-video' style='font-size: 12px; color: #3f5267;margin-right: 1%;'></i><span>Introdction </span></li>
                <div class="item-title"><button id="hello">Edit Content</button></div>
                
                <div class="item-content">
                <div class="item-body">
                    <p id="p">Updaet Lecture Name</p>
                        <div id="c_edit_input1">
                    <input type="text" name="c_name" placeholder="Enter Course Title" />
                    <p>100</p><br clear='all' />
                </div>
                    <p id="p">Update Lecture Video</p>
                <input type="file" name="c_img" id='c_img1' />
                <button class="button2">Update</button>
                <p id="p">Lecture Video</p>
                    <video controls id="video">
                        
                    <source src="upload/videoplayback.mp4" type="video/mp4" />
                </video>
                
                    </div>
                </div>
                
                
                
                <li><span>Lecture 3: &nbsp;</span><i class='fas fa-video' style='font-size: 12px; color: #3f5267;margin-right: 1%;'></i><span>Introdction </span></li>
                <div class="item-title"><button id="hello">Edit Content</button></div>
                
                <div class="item-content">
                <div class="item-body">
                    <p id="p">Updaet Lecture Name</p>
                        <div id="c_edit_input1">
                    <input type="text" name="c_name" placeholder="Enter Course Title" />
                    <p>100</p><br clear='all' />
                </div>
                    <p id="p">Update Lecture Video</p>
                <input type="file" name="c_img" id='c_img1' />
                <button class="button2">Update</button>
                <p id="p">Lecture Video</p>
                    <video controls id="video">
                        
                    <source src="upload/videoplayback.mp4" type="video/mp4" />
                </video>
                
                    </div>
                </div>
                
                
                
                

                
            </ul>
            
            
            
               
            
            
        </div>    
    
    
    
    
</div>
    <script src="js/jquery.js"></script>
<script>
   $(document).ready(function () {
    //Initially hide all the item-content
    $('.item-content').hide();
    
    // Attach a click event to item-title
    $('.item-title').on('click', function () {
        //Find the next element having class item-content
        $(this).next('.item-content').toggle();
    });
});



    </script>
    
    
    
    
    
    
    <script>
    $(document).ready(function(){
        var i=1;
        var max=300;
        $("#add1").click(function(){
            if(i<max){
            $(".ab").append("<div id='demo'> <p id='p'>Enter Lecture Name</p><div id='c_edit_input1'><input type='text' name='c_name' placeholder='Enter Course Title' /><p>100</p><br clear='all' /></div><p id='p'>Update Lecture Video</p><input type='file' name='c_img' id='c_img1' /> <a href='javascript:void(0);' class='remove'>Remove Feild</a></div>"); 
                i++;
            }
            if(i==300){
                alert("Limit over");
            }
        });
        $(document).on("click", "a.remove" , function() {
            $("#demo").remove();
        });
    });
</script>

    
    <script src="js/all.min.js"></script>
    
    <script src="js/js1.js"></script>
    
   

</body>
    
</html>