<div id='bodyleft'>
<h3>Categories Mangament</h3>
<ul>
    <li>
        <a href='index.php'> <i class="fas fa-home"></i> &nbsp;Dashboard</a>
    </li>
    <li>
        <a href='index.php?cat'><i class="fas fa-th"></i> &nbsp;View Course Categories</a>
    </li>
    <li>
        <a href='index.php?sub_cat'><i class="fas fa-outdent"></i> &nbsp;View Categories</a>
    </li>
    <li>
        <a href='index.php?lang'><i class="fas fa-language"></i> &nbsp;View Languages</a>
    </li>

</ul>
<h3>Course Mangament</h3>
<ul>
    <li>
        <a href='#'><i class="fab fa-cuttlefish"></i> &nbsp;Active Courses</a>
    </li>
    <li>
        <a href='#'><i class="fas fa-adjust"></i> &nbsp;Panding Courses</a>
    </li>
    <li>
        <a href='#'><i class="fab fa-500px"></i> &nbsp;Unpublish Courses</a>
    </li>
    <li>
        <a href='#'><i class="fab fa-searchengin"></i> &nbsp;Advance Courses Searching</a>
    </li>

</ul>
<h3>User Mangament</h3>
<ul>
    <li>
        <a href='#'><i class="fas fa-american-sign-language-interpreting"></i> &nbsp;view All Students</a>
    </li>
    <li>
        <a href='#'><i class="fas fa-chalkboard-teacher"></i> &nbsp;view All Teachers</a>
    </li>
    <li>
        <a href='#'><i class="fab fa-searchengin"></i> &nbsp;Advance User Searching</a>
    </li>

</ul>
<h3>Payment Mangament</h3>
<ul>
    <li>
        <a href='#'><i class="fab fa-amazon-pay"></i> &nbsp;Pay To Teachers</a>
    </li>
    <li>
        <a href='#'><i class="fab fa-apple-pay"></i> &nbsp;Complete Payment</a>
    </li>
    <li>
        <a href='#'><i class="fab fa-searchengin"></i> &nbsp;Advance Payment Searching</a>
    </li>

</ul>

<h3>Pages Mangament</h3>
<ul>
    <li>
        <a href='index.php?terms'><i class="fab fa-amilia"></i> &nbsp;Terms & Conditions Page</a>
    </li>
    <li>
        <a href='index.php?contact'><i class="fab fa-artstation"></i> &nbsp;Contact Us Page</a>
    </li>
    <li>
        <a href='index.php?about'><i class="fab fa-accusoft"></i> &nbsp;About Us Page</a>
    </li>
    <li>
        <a href='index.php?faqs'><i class="far fa-file"></i> &nbsp;FAQs Page</a>
    </li>
    <li>
        <a href='#'><i class="fas fa-edit"></i> &nbsp;Edit Slider</a>
    </li>

</ul>

</div>
<?php
    if(isset($_GET['cat']))
    {
        include("cat.php");
    }
    if(isset($_GET['sub_cat']))
    {
        include("sub_cat.php");
    }
if(isset($_GET['lang']))
    {
        include("lang.php");
    }
if(isset($_GET['terms']))
    {
        include("terms.php");
    }
if(isset($_GET['contact']))
    {
        include("contact.php");
    }
if(isset($_GET['faqs']))
    {
        include("faqs.php");
    }
if(isset($_GET['about']))
    {
        include("about.php");
    }


?>