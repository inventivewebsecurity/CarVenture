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

   <div style="padding:15px;"><h3 style="color:#006674;font-weight:400;font-size:24px;line-height:1.5;margin-bottom:20px;">Our Services</h3>
    <hr>
   <h4 style="color:#006674;">Our Services include:</h4>
   <ul style="padding:15px;color:#333;">
    <li>Import of Vehicles Worldwide </li>
    <li> Retail of Recondition and Trade-in Used Vehicles</li>
    <li> Motor Vehicles Hire Purchase Financing </li>
    <li>A Enlagre and secure service centre. </li>
    <li> Motor Vehicles Insurance </li>

   </ul>
   <p style="
line-height: 1.5;color:#333;margin-bottom:20px;">With our customers at the heart of our company, we firmly believe in providing you with the best experience in working with us. </p>
    
    <h4 style="color:#006674;margin-bottom:10px;">Service with a smile</h4>

    <p style="font-family: font-family: Verdana,Arial,sans-serif;
line-height: 1.5;color:#333;margin-bottom:20px;">Our warm and friendly culture, coupled with our strong passion for cars, brings us to serve you with a friendly and positive attitude, every single time.</p>

<h4 style="color:#006674;margin-bottom:10px;">Quality Advice</h4>

    <p style="font-family: font-family: Verdana,Arial,sans-serif;
line-height: 1.5;color:#333;margin-bottom:20px;">We believe buying a car is like a journey. Whether you are buying your first car, or considering changing to a new one, we listen to your needs attentively and provide quality advice to help you decide. We recognize that buying a car involves a substantial investment; hence our experienced sales staff are equipped with the right knowledge to help you make an informed choice.</p>


<h4 style="color:#006674;margin-bottom:10px;">Just-in-time  Delivery</h4>

    <p style="font-family: font-family: Verdana,Arial,sans-serif;
line-height: 1.5;color:#333;margin-bottom:20px;">We pride ourselves to our promise of delivery. Our JiT promise to you is to fully ensure your purchased car is delivered on-time, if not earlier.</p>

<h4 style="color:#006674;margin-bottom:10px;">After-sales support</h4>

    <p style="font-family: font-family: Verdana,Arial,sans-serif;
line-height: 1.5;color:#333;margin-bottom:20px;">Our quality service doesn't stop after you drive your dream car home. We continue to provide the same friendly service and support even after you have purchased your car.</p>


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