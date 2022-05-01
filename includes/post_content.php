<div class="post_area">



	<?php
    if (!isset($_GET['cat'])) {
        
    
	$get_posts="select * from posts order by rand() limit 0,5 ";
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

        <h4 style=\"\"><a href=\"details.php?post=$post_id\">$post_title</a></h4>
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