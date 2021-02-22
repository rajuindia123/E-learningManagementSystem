<?php 


function head_link(){
   include("inc/db.php");
    $q="SELECT * FROM `contact`";
    $get_link=mysqli_query($conn,$q);
    $row=mysqli_fetch_array($get_link);
    echo"<ul>
            <li><a href='https://www.facebook.com/".$row['fb']."' target='_blank'><i class='fab fa-facebook-square'></i></a></li>
            <li><a href='https://www.twitter.com/".$row['tw']."' target='_blank'><i class='fab fa-twitter'></i></a></li>
            <li><a href='https://www.linkedin/".$row['link']."' target='_blank'><i class='fab fa-linkedin-in'></i></a></li>
            <li><a href='https://www.google/".$row['gp']."' target='_blank'><i class='fab fa-google-plus-g'></i></a> </li>
            <li><a href='https://www.youtub/".$row['yt']."' target='_blank'><i class='fab fa-youtube'></i></a></li>
        </ul>";

}
function cat_menu(){
    include("inc/db.php");
    $q="SELECT * FROM `cat`";
    $get_cat=mysqli_query($conn,$q);
    while($row=mysqli_fetch_array($get_cat)){
        echo "<li class='hover-me'><a href='categorie.php?cat_id=$row[0]'>".$row['cat_icon']." ".$row['cat_name']."</a>
        </li>";
    }
}
function select_lang(){
    include("inc/db.php");
    $q="SELECT * FROM `lang`";
    $res=mysqli_query($conn,$q) or die("Query Unsuccessful.");
    while($row=mysqli_fetch_array($res)){
        echo "<option value={$row['lang_name']}>{$row['lang_name']}</option>";
    }
     
}



function home_cat(){
    include("inc/db.php");
    $q="SELECT * FROM `cat`";
    $get_cat=mysqli_query($conn,$q);
    while($row=mysqli_fetch_array($get_cat)){
        echo "<li class='icon'>
        <a href='categorie.php?cat_id=$row[0]'>
                <center>".$row['cat_icon']."</center>
            <h4>".$row['cat_name']."</h4>
            <p>2</p>
            </a>
        </li>";
    }
}
function cart(){
    include("inc/db.php");
    echo "<div id='wrap'>
        <div id='crumb'>
            <span><a href='index.php'>Home</a></span> <b>></b>
            <span>My Cart</span>
        </div>
            <div id='cart'>
                <table cellspacing='0'>
                    <tr>
                    <th>Nmae</th>
                    <th>Instructor</th>
                    <th>Language</th>
                    <th>Lectures</th>
                    <th>Price</th>
                    </tr>
                    <tr>
                      <td id='cart_f'> 
                      <img src='img/python.png' />
                      <span><a href='#'>Social Networking Website Development with Mysql</a></span>
                      <b><a href='#'><i class='fas fa-trash-alt'></i> Remove</a></b>
                      </td>
                      <td>Dr.Akash D</td>
                      <td>English</td>
                      <td>100</td>
                      <td>$583</td>
                    </tr>
                    <tr>
                        <td><button><a href='index.php'>Keep Shopping</a></button>
                        <button><a href='#'>Check Out</a></button></td>
                        <td></td><td></td>
                        <td style='text-align:right'>Amount Payable :</td>
                        <td>$583</td>
                    </tr>
                </table>
    </div><br clear='all'/> 
    </div>";
}
function course_details(){
    include("inc/db.php");
     $id=$_GET['dev_id'];
    //$id=$_REQUEST['dev_id']; 
    $q="SELECT * FROM `development` where dev_id='$id' ";
    $res=mysqli_query($conn,$q) or die("Query Unsuccessful.");
    $row=mysqli_fetch_array($res);
    $data=$row['course_img'];
    
    
    
   
    echo "<div id='crumb'>
            <span><a href='index.php'>Home</a></span> <b>></b>
            <span>My Cart</span>
        </div>  
        <div id='course_left'>
            <img src='upload/$data' />
            <div id='course_share'><center>
                <div id='fb'><a href='#'><i class='fab fa-facebook-f'></i>     Share</a></div>
                <div id='gp'><a href='#'><i class='fab fa-google-plus'></i>     Share</a></div>
                <div id='tw'><a href='#'><i class='fab fa-twitter'></i>     Share</a></div>
                <div id='w'><a href='#'><i class='fab fa-whatsapp'></i>     Share</a></div></center>
            </div>
            
            </div>
        <div id='course_right'>
                <h2>NODE PHP COURSE FOR DEVELOPMENT</h2>
                <table>
                    <tr>
                    <td>Instructor</td>
                    <td>Dr. ".$row['tec_name']."</td>
                    </tr>
                    <tr>
                    <td>Enroll By</td>
                    <td>9 Students</td>
                    </tr>
                    <tr>
                    <td>Level</td>
                    <td>".$row['level']."</td>
                    </tr>
                    <tr>
                    <td>Language</td>
                    <td>".$row['lang']."</td>
                    </tr>
                    <tr>
                    <td>Lectures</td>
                    <td>34</td>
                    </tr>
                </table>
                <div id='price'>";
                    $price=(int) $row['price'];
                    $discount=(int) $row['descount'];
                   $dicount_value=(float) ($price*$discount/100);
                    $new_value=(float) ($price-$dicount_value);
                   echo" <h3><span>&#8377; $price</span> <b>$discount %</b>Saving &nbsp;&nbsp;&nbsp; &#8377; $new_value </h3>
                    
                    
                </div>
                <form>
                <center>
                        <button><i class='fas fa-shopping-cart'></i> Add to Cart</button>
                        <div><a href='#'><i class='fas fa-bolt'></i> Enroll Now</a></div></center>
                    </form>
                    
        </div><br clear='all'>
        <div id='c_desc'>
            <h2>Course Details</h2> 
            <p>".$row['description']."</p>
            <h2>What Will I Learn ?</h2>
            <p>".$row['short_desc']."</p>
            <h2>Before Starting<h2>
            <p>".$row['meta_data']."</p>
            <h2>Instructor</h2>
            <div id='c_ins_img'>";
                
        
            
            
            $name=$row['tec_name'];
        //$e=$_SESSION['u_email'];
        $q2="SELECT image FROM `user` where Name='$name'";
        $update=mysqli_query($conn,$q2);
        $row2=mysqli_fetch_array($update) or die("Error");
        $data2=$row2['image'];
        
        echo "<img src='upload/$data2' />
            </div>
            <div id='c_ins_link'>";
            echo "<p>I am Dr. ".$row['tec_name']." . E Learning is provided without warranty of any kind. There are no guarantees that use of the site will not be subject to interruptions. All direct or indirect risk related to use of the site is borne entirely by the user. All code provided by WE Learnin is provided as examples.Professional development utilizing technology should involve learning content in context and modeling pedagogically appropriate methods. This may include initial face-to-face professional development to learn new software applications and to develop shared understanding of goals for student learning.

            </p>
                <div id='course_share'>
                <center>
                <div id='fb'><a href='#'><i class='fab fa-facebook-f'></i></a></div>
                <div id='gp'><a href='#'><i class='fab fa-google-plus'></i></a></div>
                <div id='tw'><a href='#'><i class='fab fa-twitter'></i>     </a></div>
                <div id='w'><a href='#'><i class='fab fa-whatsapp'></i>     </a></div></center></div>
                
            </div><br clear='all' />
            
            <h2>Curriculum</h2>
            <ul>
                <li><i class='fas fa-video' style='font-size: 12px; color: #3f5267;margin-right: 1%;'></i><span> 1. Introduction</span></li>
                <li><i class='fas fa-video' style='font-size: 12px; color: #3f5267;margin-right: 1%;'></i><span> 2. Quick Overview</span></li>
                <li><i class='fas fa-video' style='font-size: 12px; color: #3f5267;margin-right: 1%;'></i><span> 3. Creating Important Folders</span></li>
                <li><i class='fas fa-video' style='font-size: 12px; color: #3f5267;margin-right: 1%;'></i><span> 4. Conction With Database</span></li>
                <li><i class='fas fa-video' style='font-size: 12px; color: #3f5267;margin-right: 1%;'></i><span> 5. Designing Home Page</span></li>
            </ul>
        </div><div id='c_rel'>
            <h2>Related Courses</h2>
            <ul>";
            $id1='21';
        $q1="SELECT * FROM `development` where cat_name='$id1' ";
        $res1=mysqli_query($conn,$q1) or die("Query Unsuccessful.");
        while($row1=mysqli_fetch_array($res1)){

                $data1=$row1['course_img'];
            if($id!=$row1['dev_id']){
                echo "<li><a  href='course_detail.php?dev_id=$row1[0]'>
                <img src='upload/$data1' />
                <p>".$row['course_title'].". ...</p><br clear='all'>
                </a></li>";
            }
                
                }
                echo "
                </ul>
        
        </div><br clear='all'>


    ";
}



    
function profile(){
    
    
    //$email=$_POST['u_email'];
    $e=$_SESSION['u_email'];
    include("inc/db.php");
    $q="SELECT Name,PhoneNum FROM `user` where Email='$e' ";
    $update=mysqli_query($conn,$q);
    $row=mysqli_fetch_array($update);
    
    
    echo "
            <table id=''>
                <tr>
                <td><i class='fas fa-user'></i> Update Your Name:</td>
                
                <input type='text' name='c_name' placeholder='Enter Name Hear' id='p_input' value='".$row['Name']."' />
                        
                </tr>
                    <tr>
                <td><i class='fas fa-phone-alt'></i> Update Your Phone No.:</td>
                <input type='text' name='c_phone' placeholder='Enter Phone No. Hear' id='p_input' value='".$row['PhoneNum']."' />
                </tr>
                    <tr>
                <td><i class='far fa-image'></i> Update Your Picture:</td>
                    <input type='file' name='c_file' id='p_input' />
                        
                </tr>
                
                    
                    </table>
                    ";
    
}


?>