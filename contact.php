<?php
session_start();
if (!$_SESSION['username']) {
    header("Location:login.php");
}

 ?>



<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/style.css" media="all" />
<title>
Car Showroom website
</title>
</head>

<body>

<div class="container">

  <div class="head">
    <div id="name"><h1>Cars.Com</h1></div>
        <div id="option">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>

               <li><a href="contact.php">Contact</a></li>
             <li><a href="logout.php">Logout</a></li>

                

                    

            </ul>
        </div>
  </div>

  
    <?php
       include("includes/navbar.php");

?>

<div class="post_area" style="width:100%,margin:0px;padding:0px;" >
  <div id="contact" style="padding:10px;">

   <div style="padding:15px;"><h3 style="color:#006674;font-weight:400;font-size:26px;line-height:1.5;margin-bottom:20px;">Contact us</h3>
    <p style="font-family: font-family: Verdana,Arial,sans-serif;
line-height: 1.5;color:#333;">If you would like to update your contact details, send us feedback, make a complaint or report misuse of the Scheme, please use the dropdown below to select an option. If you would like to speak to a Customer Services advisor, please call <strong>0300 456 4566</strong>.</p>
<hr>

<div style="float:left;width:32%;margin:0px;border-right:1px solid #006674 ;margin-top:30px;">
<h3 style="color:#006674;font-weight:450;">General enquiries</h3>
<p style="margin-top:10px;margin-bottom:10px;"><strong>Tel: 0300 456 4566</strong></p>
<p style="color:#333;">8am - 7pm Monday to Friday</p>
<p style="color:#333;margin-bottom:10px;">9am - 1pm Saturday</p>
<p>Miniphone (textphone):
<strong>0300 037 0100</strong></p>

</div>


<div style="float:left;width:32%;margin:0px;border-right:1px solid #006674;margin-top:30px;margin-left:10px;">
<h3 style="color:#006674;font-weight:450;margin-bottom:15px;">Call times</h3>
<p style="color:#333;line-height:1.5;">Our busiest times are on Mondays from 9am - 11am so you may find it quicker to call us outside of these hours.</p>


</div>

<div style="float:right;width:32%;margin:0px;margin-top:30px;padding:4px;">
<h3 style="color:#006674;font-weight:450;margin-bottom:15px;"> online enquiry</h3>
<p style="color:#333;line-height:1.5;">Alternatively, you can submit a general enquiry via our online form.</p>

</div>

   </div> 

  </div>


</div>

  <div class="sidebar">
    <div id="note">Follow Us</div>

    <div id="media">
 <a href="https://www.facebook.com/" title="Like @ Facebook"><img src="images/facebook.ico" width="50"></a>
<a href="https://www.youtube.com/" title="Follow @ Youtube"><img src="images/youtube.ico" width="50"></a>
 <a href="https://www.twitter.com/" title="Follow @ Twitter"><img src="images/twitter.ico" width="50"></a>

 <a href="https://www.google.com/" title="Follow @ Google"> <img src="images/google.ico" width="50"></a> 

    </div>
    <div id="latest">Latest Cars</div>
         <?php
    $get_posts="select * from posts order by 1 desc limit 0,5 ";
    $run_posts= mysql_query($get_posts);
    while ($row_posts=mysql_fetch_array($run_posts)) {
        
        $post_id=$row_posts['post_id'];
        $post_title=$row_posts['post_title'];
        $post_price=$row_posts['post_price'];
        $post_image=$row_posts['post_image'];
        $post_content=$row_posts['post_content'];

        
        echo "
          <div id=\"sidebar_content\">       
        <img style=\"margin:10px\" src =admin/news_images/$post_image width='150' height='120'>
        
        <h5 style=\"color:gray;\"><a href=\"details.php?post=$post_id\">$post_title</a></h5>
        
         <p style=\"color:red;font-size:14px;\">Price: $post_price</p>
         </div>
             
         
         <hr>
        ";
        


    }

    ?>
  </div>

  <div class="footer_area">
   <h4 style="text-align:center;padding:30px;color:gray;">&copy; All Rights Reserved 2015 - Cars.com</h4>
    </div>


</div>





</body>



</html>