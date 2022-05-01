<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/details.css" media="all" />
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

                    

            </ul>
        </div>
	</div>

	
    <?php
       include("includes/navbar.php");
       ?>

   <div class="post_area">
    <?php
    if (isset($_GET['post'])) {
        $post_id=$_GET['post']; 
    
    
    $get_posts="select * from posts where post_id=$post_id";
    $run_posts= mysql_query($get_posts);
    while ($row_posts=mysql_fetch_array($run_posts)) {
        
        $post_id=$row_posts['post_id'];
        $post_title=$row_posts['post_title'];
        $post_price=$row_posts['post_price'];
        $post_image=$row_posts['post_image'];
        $post_content=$row_posts['post_content'];

        
        echo "
          <div id=\"photo\">       
        <img style=\"margin:10px\" src =admin/news_images/$post_image width='300' height='200'>
        </div>
        
        <div id=\"specification\">

        <h3 style=\"color:gray;\"><a href=\"\">$post_title</a></h3>
        <br>
         <p style=\"color:red;\">Price: $post_price</p>
         
         </div>

         <div id=\"description\">
                 

         </div>
         <div id=\"services\">
         <ul>
         <li><a href=\"buy.php?post=$post_title\">Buy</a></li>
                  <li><a href=\"book.php?post=$post_title\">Book</a></li>
         <li><a href=\"booking_cancel.php?car=$post_title\">Cancel Booking</a></li>
         <li><a href=\"test_drive.php?post=$post_title\">Test Drive</a></li>
         


         </ul>
         </div>
         <div id=\"details\">
                 $post_content


         </div>
        ";

        
}

    }
    include("includes/comment_form.php");
?>
      

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
        
        <h4 style=\"color:gray;\"><a href=\"details.php?post=$post_id\">$post_title</a></h4>
        
         <p style=\"color:red;\">Price: $post_price</p>
         </div>
             
         
         <hr>
        ";
        


    }

    ?>
	</div>

	<div class="footer_area"></div>


</div>





</body>



</html>