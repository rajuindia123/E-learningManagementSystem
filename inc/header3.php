<?php include("inc/function.php"); ?>

<div id='header'>
<div id='up_header'>
    <div id="link">
        <?php echo head_link(); ?>
    </div>
    <div id="date">
        <p><?php
        echo date('l,d F Y');
        ?></p>
    </div>
    <div id="slog">
        <p>India's No.1 E Learning Website</p>
    </div>
    </div>
    <div id="title">
        <h2><a href="index.php">E Learning</a></h2>
    </div>
    <div id="menu">
        <h2><i class="fas fa-bars"></i></h2>
        <?php include("inc/cat_menu.php"); ?>
    </div>
    <div id="head_search">
        <form method="post" enctype="multipart/form-data">
            <input type="search" name="query" placeholder="Search Courses From Hear"/>
            <button name="search"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <div id="hrad_cart">
        <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>0</span> </a>
    </div>
    <div id="head_login2">
        <a href="rules.php"><h6><i class="fas fa-user"></i> Become Teacher</h6></a> 
    </div>
    <div id="head_singup2">
            <h4><i class="fas fa-user"></i></h4>
        <form>
            
            <a href="profile.php"><i class="fas fa-user"></i> My Account</a><br /> 
            <a href="changepasswoed.php"><i class="fas fa-user"></i> Change Password</a><br /> 
            <a href="mycourse.php"><i class="fas fa-user"></i> My Courses</a><br /> 
            <a href="logout.php"><i class="fas fa-lock"></i> logout</a><br>
        </form>
        
        
     </div>
    
</div>