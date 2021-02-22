<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery Bind Click Event to Dynamically added Elements</title>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("ol").append("<li>list item <a href='javascript:void(0);' class='remove'>&times;</a></li>"); 
        });
        $(document).on("click", "a.remove" , function() {
            $(this).parent().remove();
        });
    });
</script>
</head>
<body>
    <button>Add new list item</button>
    <p>Click the above button to dynamically add new list items. You can remove it later.</p>
    <ol>
        <li>list item</li>
        <li>list item</li>
        <li>list item</li>
    </ol>
</body> 
</html>






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
    include("inc/header.php");
    ?>
    <div id="wrap">
        <div id='c_edit_l'>
            <h1>Couse Management</h1>
            <ul>
                <li><a href="course_edit.php"><i class="fas fa-user"></i> Title and Image</a> </li>
                <li><a href="course_goal.php"><i class="fas fa-user"></i> Couse Goal</a> </li>
                <li><a href="course_detail_des.php"><i class="fas fa-user"></i> Course Details</a> </li>
                <li><a href="course_detail_price.php"><i class="fas fa-user"></i> Course Price</a> </li>
                <li  class="active"><a href="course_detail_curriculum.php"><i class="fas fa-user"></i> Curriculum</a> </li>
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
            
                        <button id="add1" class="button">Add More</button>
            
               
            <ul class="ab">
                <li><i class='fas fa-video' style='font-size: 12px; color: #3f5267;margin-right: 1%;'></i><span> 1. Introduction</span><i class="fas fa-arrow-down down1"></i><input type="submit" value="Edit Content" id="edit_curr" onclick="w3.show('#myDiv')"  />
                    <input title="submit" id="edit_curr"value="hide"onclick="w3.hide('#myDiv')"/> 
                </li>
                <div onload="myFunction()" id="myDiv">
                <div id="c_edit_input">
                    <input type="text" name="c_name" placeholder="Enter Course Title" />
                    <p>100</p><br clear='all' />
                
                
                </div>
                <input type="file" name="c_img" id='c_img' />
                <button style="margin-bottom: 2%;">Uplode</button>


                </div>
                
            </ul>
                
            

            
        </div>    
    
    
    
    
</div>
    
    
    
    <script src="js/all.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/js1.js"></script>
    
   

</body>
    <script>
       window.onload= function myFunction(){
            var x=document.getElementById('myDiv');
           if(x.style.display=='none'){
               x.style.display='block';
           }else{
               x.style.display='none';
           }
        }
    
    
    </script>
    <script>
    
    
    </script>
    <script>
    $(document).ready(function(){
        var i=1;
        var max=10;
        $("#add1").click(function(){
            if(i<max){
            $(".ab").append("<li><i class='fas fa-video' style='font-size: 12px; color: #3f5267;margin-right: 1%;'></i><span> Introduction</span><a href='javascript:void(0);' class='remove'>&times;</a><i class='fas fa-arrow-down down1'></i><input type='submit' value='Edit Content'  id='edit_curr'   /><input title='submit' id='edit_curr' value='hide' onclick='w3.hide('#myDiv')'/>   </li> <div onload='myFunction()' id='myDiv'> <div id='c_edit_input'><input type='text' name='c_name' placeholder='Enter Course Title' /><p>100</p><br clear='all' /></div><input type='file' name='c_img' id='c_img' /><button style='margin-bottom: 2%;'>Uplode</button></div>"); 
                i++;
            }
            if(i==9){
                alert("Limit over");
            }
        });
        $(document).on("click", "a.remove" , function() {
            $(this).parent().remove();
        });
    });
</script>

</html>