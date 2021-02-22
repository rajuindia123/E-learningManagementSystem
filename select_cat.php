


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
        <h1>What category best fits the knowledge you`ll share</h1>
            <p>If you're not sure about the right category, you can change it later.</p>
            <center>
            <h5>Category</h5>
            <form method='post'>
            <select  name="contry" id='contry' class="select1" >
                <option value="">Select Category</option>
            </select>
                
            
        <br />
                <h5 id="sub">SubCategory</h5>
            
            <select  id='state' name='state' class="select1">
            <option value="">Select SubCategory</option>
            </select><br />
            
        
                <button name="submit" id="sub_btn1" >Submit</button>
                </form>
                </center>
        
        
        
        
        
        </div>
    <?php
   
    include("inc/footer.php");


    ?>
    <?php
    if(isset($_POST['submit'])){
     $cat_name=$_POST['contry']; 
     $sub_cat_name=$_POST['state'];
     
    
    }
    ?>
</div>
    
    
    
    
    
    <script type="text/javascript" src="js/jquery.js" ></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            function lodeData(type, category_id){
               $.ajax({
                url :"get_sub.php",
                   type : "POST",
                   data : {type :type,id :category_id},
                   success : function(data){
                        if(type == "stateData"){
                           $('#state').html(data); 
                        }
                       else{
                          $('#contry').append(data); 
                       }
                       
                   }
               }); 
            }
            lodeData();
            $('#contry').on("change",function(){
                var contry = $("#contry").val();
                if(contry != ""){
                 lodeData("stateData",contry);   
                }else{
                    $('#state').html("");
                }
                
                
                
                
            })
            
        });
        
        
        
        
        
        
    </script>
    
    
    
    <script src="js/all.min.js"></script>
    <script src="js/js1.js"></script>
    
    
</body>
</html>
