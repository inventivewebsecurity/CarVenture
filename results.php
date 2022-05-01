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
                <li><a href="">Home</a></li>
                              <li><a href="">About</a></li>
               <li><a href="">Contact</a></li>
                <li><a href="">Log in</a></li>
                <li><a href="">Register</a></li>

                    

            </ul>
        </div>
    </div>

    
    <?php
       include("includes/navbar.php");
?>

<div class="post_area">

    <?php
    if (isset($_GET['search'])) {
     $get_query=$_GET['search_query'];    
    
    $get_posts="select * from posts where car_keywords like '%$get_query%' ";
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

        <h4 style=\"color:gray;\"><a href=\"details.php?post=$post_id\">$post_title</a></h4>
        <br>
         <p style=\"color:red;\">Price: $post_price</p>
         
         </div>

         <div id=\"description\">
                 

         </div>
         <div id=\"read_more\" align=\"right\">

         <a id=\"rmlink\" href=\"details.php?post=$post_id\">See Specification</a>
         </div>
         <hr>
        ";
        


    }
}


       if (isset($_GET['cat'])) {
        $cat_id=$_GET['cat'];
    
    $get_posts="select * from posts where category_id='$cat_id' ";
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

        <h4 style=\"color:gray;\"><a href=\"details.php?post=$post_id\">$post_title</a></h4>
        <br>
         <p style=\"color:red;\">Price: $post_price</p>
         
         </div>

         <div id=\"description\">
                 

         </div>
         <div id=\"read_more\" align=\"right\">

         <a id=\"rmlink\" href=\"details.php?post=$post_id\">See Specification</a>
         </div>
         <hr>
        ";
        


    }
}


    ?>  
    </div>

    <div class="sidebar">
        <div id="note">Follow Us</div>

        <div id="media">
        <img src="images/facebook.ico" width="50">
         <img src="images/youtube.ico" width="50">
         <img src="images/twitter.ico" width="50">

        <img src="images/google.ico" width="50">

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

    <div class="footer_area">
   <h4 style="text-align:center;padding:30px;">&copy; All Rights Reserved 2015 - Cars.com</h4>
    </div>


</div>





</body>



</html>