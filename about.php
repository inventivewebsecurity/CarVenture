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

   <div style="padding:15px;"><h3 style="color:#006674;font-weight:400;font-size:26px;line-height:1.5;margin-bottom:20px;font-family: Verdana,Arial,sans-serif">About us</h3>
    <p style="font-family: Verdana,Arial,sans-serif;
line-height: 1.5;color:#333;"><strong>Cars.com</strong> is one of Bangladesh's best parallel importers for cars and a one stop centre for all you're motoring needs. It is our passion and commitment to provide you with a wide choice of cars at competitive prices, together with our top quality advice and friendly sup port, we don't believe in sell we believe in best service..</p>

<h4 style="margin-top:30px;color:#006674;font-family: Verdana,Arial,sans-serif">Background</h4><hr>
<p style="font-family: Verdana,Arial,sans-serif;
line-height: 1.5;color:#333;">
<strong>Cars.com</strong> was established in 2014 as an online automobile information provider. <strong>Cars.com</strong> wishes to share diverse automobile information with companies and consumers via internet and thus enhance the customer's quality of life. Our aim is to bring about a distribution revolution in the global automobile market.

Since inception,<strong>Cars.com</strong> has gradually acquired recognition as one of the biggest automotive websites in Bangladesh that offer user's complete car-buying information.</p>






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