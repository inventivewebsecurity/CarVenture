<?php
session_start();
if (!$_SESSION['username']) {
    header("Location:log_in.php");
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

   include("includes/post_content.php");
    ?>

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