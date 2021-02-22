




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
    include("inc/header2.php");
    ?>
    <div id="wrap">
        
            <div id='crumb'>
            <span><a href='index.php'>Home</a></span> <b>></b>
            <span><a href='cart.php'>My Cart</a></span> <b>></b>
            <span>PHP</span></div>
        <div id='pay'>
                
                <table cellpadding='0' cellspacing='0'>
                <tr>
                    <th>Name</th>
                    <th></th>
                    <th>Instructor</th>
                    <th>Lectures</th>
                    <th>Language</th>
                    <th>Price</th>
                  
                </tr>
                <tr>
                <td><a href="#"> <img src="img/php.png" /></a> </td>
                <td>
                    <span>
                        <a href="#">Website Development In Java With Mysql.</a>
                    </span><br /><br />
                    <a href="#"><i class="fas fa-edit"></i>Remove</a>
                    </td>
                <td>Dr.Pankaj Kumar</td>
                <td>14</td>
                <td>English</td>
            
                <td>$45</td>
                
                </tr>
                
                
                
                
                
                <tr>
                    <td></td>
                   <td> <a href="index.php"><button>Keep Shopping</button></a> </td> 
                    <td></td>
                    <td></td>
                    <td>Amount Payabal:</td>
                    <td>$45</td>
                    
                    
            </tr>


                    <tr>
                    <th>Payment Through</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                  
                </tr>
                    <tr>
                    
                    <td></td>
                    
                    <td>
                        <a href="#"><img src="img/paypal.png" style="width: 60%;height: 40px;border: 1px solid #3f5267;cursor: pointer;
"  id="imgpay"></a> 
                    </td>
                    
                    </tr>


            </table>
                
                </div>
        
    
    <?php
    include("inc/footer.php");


    ?>
</div>
    
    
    
    <script src="js/all.min.js"></script>
    <script src="js/js1.js"></script>

</body>
</html>