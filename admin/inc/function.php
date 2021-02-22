<?php

    function add_cat(){
        include("inc/db.php");
        if(isset($_POST['add_cat'])){
            $cat_name=$_POST['cat_name'];
            $cat_icon=$_POST['cat_icon'];
            $q="SELECT * FROM `cat` WHERE cat_name='$cat_name'";
            $result=mysqli_query($conn,$q);
            $num=mysqli_num_rows($result);
            if($num==1)
            {
                    echo "<script> alert('Category Already Added')</script>";
                echo "<script>window.location.href='index.php?cat'</script>";


            }
            else{
                $query="INSERT INTO `cat`(`cat_name`,cat_icon) VALUES ('$cat_name','$cat_icon')";
            $run=mysqli_query($conn,$query);
            if($run==True){
                
	           echo "<script> alert('Category Added Successful')</script>";
                echo "<script>window.location.href='index.php?cat'</script>";

             } else{
                echo "<script> alert('Category Not Added Successful')</script>";
                echo "<script>window.location.href='index.php?cat'</script>";
            }

                
            }

            
            
            
            
     }
    }


function view_cat(){
    include("inc/db.php");
    $q="SELECT * FROM `cat`";
    $res=mysqli_query($conn,$q);
    $i=1;
    while($row=mysqli_fetch_array($res)){
        echo "<tr>
        <td>".$i++."</td>
        <td>".$row['cat_icon']." ".$row['cat_name']."</td>
        <td>
            <a  href='index.php?cat&edit_cat=".$row['cat_id']." ' title='Edit'><i class='fas fa-edit'></i></a>
              &nbsp; &nbsp;<a style='color:#f00' href='index.php?cat&del_cat=".$row['cat_id']."' title='Delete'><i class='far fa-trash-alt'></i></a>
        </td>
        </tr>";
    }
    if(isset($_GET['del_cat'])){
        $id=$_GET['del_cat'];
        $ques="delete  FROM `cat` where cat_id='$id'";
        $del=mysqli_query($conn,$ques);
        if($del==True){
            echo "<script>alert('Category Delete Successfully')</script>";
            echo "<script>window.location.href='index.php?cat'</script>";
        }else{
            echo "<script>alert('Category Not Delete Successfully')</script>";
            echo "<script>window.location.href='index.php?cat'</script>";
        }

    }
    
}


function edit_cat(){
        include("inc/db.php");
        
        
        
        
        if(isset($_GET['edit_cat'])){
            $id=$_GET['edit_cat'];
            $q="SELECT * FROM `cat` WHERE cat_id='$id'";
            $get_cat=mysqli_query($conn,$q);
            $row=mysqli_fetch_array($get_cat);
            
            
            echo "<h3>Edit Category</h3>
    <form id='edit_form' method='post' enctype='multipart/form-data'>
            <input type='text' name='cat_name' value='".$row['cat_name']."' placeholder='Enter category Name Hear' />
           <input type='text' name='cat_icon' value='".$row['cat_icon']."' />
           <center> <button name='edit_cat'>Edit Category</button></center>
    </form>";
        if(isset($_POST['edit_cat'])){
            $cat_name=$_POST['cat_name'];
            $cat_icon=$_POST['cat_icon'];
            $q="SELECT * FROM `cat` WHERE cat_name='$cat_name'";
            $result=mysqli_query($conn,$q);
            $num=mysqli_num_rows($result);
            if($num==1)
            {
                    echo "<script> alert('Category Already Added')</script>";
                echo "<script>window.location.href='index.php?cat'</script>";


            }
            else{

            
            
            
            $up="update cat set cat_name='$cat_name',cat_icon='$cat_icon' where cat_id='$id' ";
            $exu=mysqli_query($conn,$up);
            if($exu==True){
                
	           echo "<script> alert('Category Updated Successful')</script>";
                echo "<script>window.location.href='index.php?cat'</script>";
             } else{
                echo "<script> alert('Category Not Updated Successful')</script>";
                echo "<script>window.location.href='index.php?cat'</script>";

            }
            }

            
        }
            
           
            
            
            
            
     }
    }




function add_sub_cat(){
        include("inc/db.php");
        if(isset($_POST['add_sub_cat'])){
            $cat_name=$_POST['sub_cat_name'];
            $cat_id=$_POST['cat_id'];
            $q="SELECT * FROM `sub_cat` WHERE sub_cat_name='$cat_name'";
            $result=mysqli_query($conn,$q);
            $num=mysqli_num_rows($result);
            if($num==1)
            {
                    echo "<script> alert('Category Already Added')</script>";
                echo "<script>window.locatin.href='index.php?sub_cat'</script>";


            }
            else{
                $query="INSERT INTO `sub_cat`(`sub_cat_name`,cat_id) VALUES ('$cat_name','$cat_id')";
            $run=mysqli_query($conn,$query);
            if($run==True){
                
	           echo "<script> alert('Sub Category Added Successful')</script>";
                echo "<script>window.location.href='index.php?sub_cat'</script>";

             } else{
                echo "<script> alert('Sub Category Not Added Successful')</script>";
               echo "<script>window.location.href='index.php?sub_cat'</script>";

            }

                
            }

            
            
            
            
     }
    }



function edit_sub_cat(){
        include("inc/db.php");
        
        
        
        
        if(isset($_GET['edit_sub_cat'])){
            $id=$_GET['edit_sub_cat'];
            $q="SELECT * FROM `sub_cat` WHERE sub_cat_id='$id'";
            $get_cat=mysqli_query($conn,$q);
            $row=mysqli_fetch_array($get_cat);
            
            $cat_id=$row['cat_id'];
            $q1="SELECT * FROM `cat` WHERE cat_id='$cat_id'";
            $get_c=mysqli_query($conn,$q1);
            $row_cat=mysqli_fetch_array($get_c);
            echo "<h3>Edit Sub Category</h3>
    <form id='edit_form' method='post' enctype='multipart/form-data'>
    <select name='cat_id'>
    <option value='".$row_cat['cat_id']."'>".$row_cat['cat_name']."</option>

    ";
                                 echo select_cat();
           echo "</select>

    
            <input type='text' name='sub_cat_name' value='".$row['sub_cat_name']."' placeholder='Enter category Name Hear' />
           <center> <button name='edit_sub_cat'>Edit Sub Category</button></center>
    </form>";
        if(isset($_POST['edit_sub_cat'])){
            $cat_name=$_POST['sub_cat_name'];
            $cat_id=$_POST['cat_id'];
           
            
            
            
            $up="update sub_cat set sub_cat_name='$cat_name' , cat_id='$cat_id' where sub_cat_id='$id' ";
            $exu=mysqli_query($conn,$up);
            if($exu==True){
                
	           echo "<script> alert('Category Updated Successful')</script>";
                echo "<script>window.location.href='index.php?sub_cat'</script>";
             } else{
                echo "<script> alert('Sub Category Not Updated Successful')</script>";
                echo "<script>window.location.href='index.php?sub_cat'</script>";

            }
            

            
        }
            
           
            
            
            
            
     }
    }





function view_sub_cat(){
    include("inc/db.php");
    $q="SELECT * FROM `sub_cat`";
    $res=mysqli_query($conn,$q);
    $i=1;
    while($row=mysqli_fetch_array($res)){
        $id=$row['cat_id'];
        $q="SELECT * FROM `cat` WHERE cat_id='$id' ";
        $get_c=mysqli_query($conn,$q);
        $row_cat=mysqli_fetch_array($get_c);
        echo "<tr>
        <td>".$i++."</td>
        <td>".$row['sub_cat_name']."</td>
        <td>".$row_cat['cat_name']."</td>
        <td>
            <a href='index.php?sub_cat&edit_sub_cat=".$row['sub_cat_id']."' title='Edit'><i class='fas fa-edit'></i></a> &nbsp; &nbsp;
            <a style='color:#f00' href='index.php?sub_cat&del_sub_cat=".$row['sub_cat_id']."' title='Delete'><i class='far fa-trash-alt'></i></a>
        </td>
        </tr>";
    }
    if(isset($_GET['del_sub_cat'])){
        $id=$_GET['del_sub_cat'];
        $ques="delete  FROM `sub_cat` where sub_cat_id='$id'";
        $del=mysqli_query($conn,$ques);
        if($del==True){
            echo "<script>alert('Sub Category Delete Successfully')</script>";
            echo "<script>window.location.href='index.php?sub_cat'</script>";
        }else{
            echo "<script>alert('Sub Category Not Delete Successfully')</script>";
            echo "<script>window.location.href='index.php?sub_cat'</script>";
        }

    }
    
    
}



function select_cat(){
    include("inc/db.php");
    $q="SELECT * FROM `cat`";
    $res=mysqli_query($conn,$q);
    
    while($row=mysqli_fetch_array($res)){
        echo "<option value='".$row['cat_id']."'>".$row['cat_name']."</option>";
    }
}



function add_lang(){
        include("inc/db.php");
        if(isset($_POST['add_lang'])){
            $lang_name=$_POST['lang_name'];
            
            $q="SELECT * FROM `lang` WHERE lang_name='$lang_name'";
            $result=mysqli_query($conn,$q);
            $num=mysqli_num_rows($result);
            if($num==1)
            {
                    echo "<script> alert('Language Already Added')</script>";
                echo "<script>window.location.href='index.php?lang'</script>";


            }
            else{
                $query="INSERT INTO `lang`(`lang_name`) VALUES ('$lang_name')";
            $run=mysqli_query($conn,$query);
            if($run==True){
                
	           echo "<script> alert('Language Added Successful')</script>";
                echo "<script>window.location.href='index.php?lang'</script>";

             } else{
                echo "<script> alert('Language Not Added Successful')</script>";
                echo "<script>window.location.href='index.php?lang'</script>";
            }

                
            }

            
            
            
            
     }
    }



function view_lang(){
    include("inc/db.php");
    $q="SELECT * FROM `lang`";
    $res=mysqli_query($conn,$q);
    $i=1;
    while($row=mysqli_fetch_array($res)){
        echo "<tr>
        <td>".$i++."</td>
        <td>".$row['lang_name']."</td>
        <td>
            <a href='index.php?lang&edit_lang=".$row['lang_id']." ' tilte='Edit'><i class='fas fa-edit'></i></a>
             &nbsp; &nbsp;<a style='color:#f00' href='index.php?lang&del_lang=".$row['lang_id']."' title='Delete'><i class='far fa-trash-alt'></i></a>
        </td>
        </tr>";
    }
    if(isset($_GET['del_lang'])){
        $id=$_GET['del_lang'];
        $ques="delete  FROM `lang` where lang_id='$id'";
        $del=mysqli_query($conn,$ques);
        if($del==True){
            echo "<script>alert('Language Delete Successfully')</script>";
            echo "<script>window.location.href='index.php?lang'</script>";
        }else{
            echo "<script>alert('Language Not Delete Successfully')</script>";
            echo "<script>window.location.href='index.php?lang'</script>";
        }

    }
    
}



function edit_lang(){
        include("inc/db.php");
        
        
        
        
        if(isset($_GET['edit_lang'])){
            $id=$_GET['edit_lang'];
            $q="SELECT * FROM `lang` WHERE lang_id='$id'";
            $get_cat=mysqli_query($conn,$q);
            $row=mysqli_fetch_array($get_cat);
            
            
            echo "<h3>Edit Language</h3>
    <form id='edit_form' method='post' enctype='multipart/form-data'>
            <input type='text' name='l_name' value='".$row['lang_name']."' placeholder='Enter Language Name Hear' />
           <center> <button name='edit_lang'>Edit Language</button></center>
    </form>";
        if(isset($_POST['edit_lang'])){
            $cat_name=$_POST['l_name'];
            $q="SELECT * FROM `lang` WHERE lang_name='$cat_name'";
            $result=mysqli_query($conn,$q);
            $num=mysqli_num_rows($result);
            if($num==1)
            {
                    echo "<script> alert('Language Already Added')</script>";
                echo "<script>window.location.href='index.php?lang'</script>";


            }
            else{

            
            
            
            $up="update lang set lang_name='$cat_name' where lang_id='$id' ";
            $exu=mysqli_query($conn,$up);
            if($exu==True){
                
	           echo "<script> alert('Language Updated Successful')</script>";
                echo "<script>window.location.href='index.php?lang'</script>";
             } else{
                echo "<script> alert('Language Not Updated Successful')</script>";
                echo "<script>window.location.href='index.php?lang'</script>";

            }
            }

            
        }
            
           
            
            
            
            
     }
    }


function view_term(){
    include("inc/db.php");
        
        
        $q="SELECT * FROM `term`  ";
        $get_c=mysqli_query($conn,$q);
        $i=1;
        while($row=mysqli_fetch_array($get_c)){
        echo "<tr>
        <td>".$i++."</td>
        <td>".$row['term']."</td>
        <td>".$row['for_home']."</td>
        <td>
            <a href='index.php?terms&edit_term=".$row['t_id']."' title='Edit'><i class='fas fa-edit'></i></a> &nbsp; &nbsp;
            <a style='color:#f00' href='index.php?terms&del_term=".$row['t_id']."' title='Delete'><i class='far fa-trash-alt'></i></a>
        </td>
        </tr>";
        }
    if(isset($_GET['del_term'])){
        $id=$_GET['del_term'];
        $ques="delete  FROM `term` where t_id='$id'";
        $del=mysqli_query($conn,$ques);
        if($del==True){
            echo "<script>alert('Term Delete Successfully')</script>";
            echo "<script>window.location.href='index.php?terms'</script>";
        }else{
            echo "<script>alert('Term Not Delete Successfully')</script>";
            echo "<script>window.location.href='index.php?term'</script>";
        }

    }
    
    
}


function add_term(){
        include("inc/db.php");
        if(isset($_POST['add_term'])){
            $cat_name=$_POST['term'];
            $cat_id=$_POST['for_home'];
            $q="SELECT * FROM `term` WHERE term='$cat_name'";
            $result=mysqli_query($conn,$q);
            $num=mysqli_num_rows($result);
            if($num==1)
            {
                    echo "<script> alert('Term Already Added')</script>";
                echo "<script>window.locatin.href='index.php?terms'</script>";


            }
            else{
                $query="INSERT INTO `term`(`term`,for_home) VALUES ('$cat_name','$cat_id')";
            $run=mysqli_query($conn,$query);
            if($run==True){
                
	           echo "<script> alert('Term Added Successful')</script>";
                echo "<script>window.location.href='index.php?terms'</script>";

             } else{
                echo "<script> alert('Term Not Added Successful')</script>";
               echo "<script>window.location.href='index.php?terms'</script>";

            }

                
            }

            
            
            
            
     }
    }



function edit_term(){
        include("inc/db.php");
        
        
        
        
        if(isset($_GET['edit_term'])){
            $id=$_GET['edit_term'];
            $q="SELECT * FROM `term` WHERE t_id='$id'";
            $get_cat=mysqli_query($conn,$q);
            $row=mysqli_fetch_array($get_cat);
            
                       echo "<h3>Edit T&C</h3>
    <form id='edit_form' method='post' enctype='multipart/form-data'>
    <select name='for_home'>
    <option value='".$row['for_home']."'>".$row['for_home']."</option>
    <option value='Student'>
                    Student
                </option>
                <option value='Teacher'>Teachar</option>


    ";
                                 
           echo "</select>

    
            <input type='text' name='term' value='".$row['term']."' placeholder='Enter Term Name Hear' />
           <center> <button name='edit_t'>Edit T&C</button></center>
    </form>";
        if(isset($_POST['edit_t'])){
            $cat_name=$_POST['term'];
            $cat_id=$_POST['for_home'];
           
            
            
            
            $up="update term set term='$cat_name' , for_home='$cat_id' where t_id='$id' ";
            $exu=mysqli_query($conn,$up);
            if($exu==True){
                
	           echo "<script> alert('Term Updated Successful')</script>";
                echo "<script>window.location.href='index.php?terms'</script>";
             } else{
                echo "<script> alert('Term Not Updated Successful')</script>";
                echo "<script>window.location.href='index.php?terms'</script>";

            }
            

            
        }
            
           
            
            
            
            
     }
    }

function contact(){
    
    include('inc/db.php');
    
    $q="select * from contact ";
    $get_con=mysqli_query($conn,$q);
    $row=mysqli_fetch_array($get_con);
    echo "<form method='post' enctype='multipart/form-data'>
            <table>
            <tr>
                <td>Update contact No.</td>
                <td>
                   <input type='tel' value='".$row['phn']."' name='phn' /> 
                </td>
                
                </tr>
                <tr>
                <td>Update Email</td>
                <td>
                   <input type='email' value='".$row['email']."' name='email' /> 
                </td>
                
                </tr>
                <tr>
                <td>Update Office Address Line1</td>
                <td>
                   <input type='tel' value='".$row['add1']."' name='add1' /> 
                </td>
                
                </tr>

                <tr>
                <td>Update Office Address Line2</td>
                <td>
                   <input type='text' value='".$row['add2']."' name='add2' /> 
                </td>
                
                </tr>

                <tr>
                <td>http://youtub.com/</td>
                <td>
                   <input type='text' value='".$row['yt']."' name='yt' /> 
                </td>
                
                </tr>

                <tr>
                <td>http://facebook.com</td>
                <td>
                   <input type='text' value='".$row['fb']."' name='fb' /> 
                </td>
                
                </tr>

                <tr>
                <td>https://plus.google.com</td>
                <td>
                   <input type='text' value='".$row['gp']."' name='gp' /> 
                </td>
                
                </tr>

                <tr>
                <td>https://twitter.com/</td>
                <td>
                   <input type='text' value='".$row['tw']."' name='tw' /> 
                </td>
                
                </tr>

                <tr>
                <td>https://linkedin.com/</td>
                <td>
                   <input type='text' value='".$row['link']."' name='ln' /> 
                </td>
                
                </tr>

            </table>
            
            <center><button name='up_con'>Save</button></center>


    </form>
";
    
  if(isset($_POST['up_con'])){
      $phn=$_POST['phn'];
      $email=$_POST['email'];
      $add1=$_POST['add1'];
      $add2=$_POST['add2'];
      $fb=$_POST['fb'];
      $yt=$_POST['yt'];
      $gp=$_POST['gp'];
      $ln=$_POST['ln'];
      $tw=$_POST['tw'];
      
      
      
      
      $up="update contact set phn='$phn' , email='$email',add1='$add1',add2='$add2',yt='$yt',fb='$fb',gp='$gp',tw='$tw',link='$ln' ";
            $exu=mysqli_query($conn,$up);
            if($exu==True){
                
	               echo "<script>window.location.href='index.php?contact'</script>";
             } else{
                echo "<script> alert('Term Not Updated Successful')</script>";
                echo "<script>window.location.href='index.php?terms'</script>";

            }
            

      
  }  
    
    
}

function add_faqs(){
        include("inc/db.php");
        if(isset($_POST['add_faqs'])){
            $qsn=$_POST['qsn'];
            $ans=$_POST['ans'];
            
            $q="SELECT * FROM `faqs` WHERE qsn='$qsn'";
            $result=mysqli_query($conn,$q);
            $num=mysqli_num_rows($result);
            if($num==1)
            {
                    echo "<script> alert('FAQs Already Added')</script>";
                echo "<script>window.location.href='index.php?faqs'</script>";


            }
            else{
                $query="INSERT INTO `faqs`(`qsn`,ans) VALUES ('$qsn','$ans')";
            $run=mysqli_query($conn,$query);
            if($run==True){
                
	           echo "<script> alert('FAQs Added Successful')</script>";
                echo "<script>window.location.href='index.php?faqs'</script>";

             } else{
                echo "<script> alert('FAQs Not Added Successful')</script>";
                echo "<script>window.location.href='index.php?faqs'</script>";
            }

                
            }

            
            
            
            
     }
    }

function view_faqs(){
    include("inc/db.php");
    $q="SELECT * FROM `faqs`";
    $get_faqs=mysqli_query($conn,$q);
    while($row=mysqli_fetch_array($get_faqs)){
     echo "<details>
        <summary>".$row['qsn']."</summary>
        <form method='post' enctype='multipart/form-data'>
            <input type='text' name='up_qsn' value='".$row['qsn']."' placeholder='Enter QSN  Hear' />
            <input type='hidden' name='id' value='".$row['q_id']."'/>
            
            
            <textarea name='up_ans' placeholder='Enter Answer Here'>".$row['ans']."</textarea>

                <center> <button name='up_faqs'>Update FAQs</button></center>


    </form>

    </details><br/>
";
       
        
    }
    
    
    if(isset($_POST['up_faqs'])){
            $qsn=$_POST['up_qsn'];
            $ans=$_POST['up_ans'];
            $id=$_POST['id'];
            //$query="update faqs set qsn='$qsn',ans='$ans' where q_id='$id'";
            $run=mysqli_query($conn,"update faqs set qsn='$qsn',ans='$ans' where q_id='$id'");
            if($run==True){
                
	           echo "<script> alert('FAQs Update Successful')</script>";
                echo "<script>window.location.href='index.php?faqs'</script>";
                

             } else{
                echo "<script> alert('FAQs Not Update Successful')</script>";
                
                
                echo "<script>window.location.href='index.php?faqs'</script>";
            }

                
            

         
 
            
            
            
     }        
            
            
            
     
    
    
}




function about(){
    include("inc/db.php");
   
        $q="SELECT * FROM `about`";
     $about=mysqli_query($conn,$q);
    $row=mysqli_fetch_array($about);
    
    echo "<form method='post'>
            <textarea name='about'>".$row['about']."</textarea>
            <button name='up_about'>Save</button>
        </form>
        ";
    
    
    if(isset($_POST['up_about'])){
        $info=$_POST['about'];
        
        $run=mysqli_query($conn,"update about set about='$info'");
            if($run==True){
                
                echo "<script>window.location.href='index.php?about'</script>";
                

             } else{
                echo "<script> alert('About Not Update Successful')</script>";
                
                echo "<script>window.location.href='index.php?about'</script>";
            }

            
        
        
    }
}



?>