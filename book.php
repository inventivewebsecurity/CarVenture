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
  </html>

	
    <?php
       include("includes/navbar.php");
       ?>



   <div class="post_area">
   
   <?php
 
$error_message="";
$connection=mysql_connect("localhost","root","");
if (!$connection) {
  die("database connection failed".mysql_error());
 } 
 $db_selection=mysql_select_db("mycms",$connection);
 if (!$db_selection) {
    die("database selection failed".mysql_error());

 }

?>
<?php
if (isset($_GET['post'])) {
  

$post_id= $_GET['post'];
 $get_posts="select * from posts where post_title='$post_id'";
      $row=mysql_fetch_array(mysql_query($get_posts));
       $post_new_id=$row['post_title'];
    }
  
?>

<html>
<title></title>
<head>
<link rel="stylesheet" type="text/css" href="styles/book_style.css">

</head>

<body>
  

<div id="body">
  


<h3 style="text-align:center;margin-bottom:40px;">Please Enter Details To Book <?php echo "$post_new_id"; ?></h3>


<form method="post" action="book.php?post=<?php echo $post_id; ?>">
  <table width="600" height="450" align="center" bgcolor="#DCDCDC" >

    

         
   <tr>
          <td class="label"> Name :</td>
          <td><input type="text" name="name"></td>

    </tr>



    <tr>
          <td class="label"><font> Nationality :</font></td>
          <td><input type="text" name="nationality"></td>

    </tr>

    <tr>
          <td class="label"><font>Age :</font></td>
          <td><input type="text" name="age"></td>

    </tr>
    <tr>
          <td class="label"><font >Address:</font></td>
          <td><input type="text" name="address"></td>

    </tr>
    <tr>
          <td class="label"><font >Occupation :</font></td>
          <td><input type="text" name="occupation"></td>

    </tr>
    <tr>
          <td class="label"><font >Email :</font></td>
          <td><input type="email" name="email"></td>

    </tr>
    <tr>
          <td class="label"><font>Mobile No :</font></td>
          <td><input type="text" name="mobile"></td>

    </tr>

    

       <tr>
           <td align="center" colspan="2"><input type="submit" name="submit" value="Book" style="height: 30px;width: 60px;background: yellowgreen"></td>
          

    </tr>

       



  </table>


</form>

<h4><?php echo $error_message; ?></h4>

</div>
</html>



<?php

if (isset($_POST['submit'])) {
  $post_com_id= $post_id;
$name = mysql_real_escape_string($_POST['name']);
$nationality = mysql_real_escape_string($_POST['nationality']);
$age = mysql_real_escape_string($_POST['age']);
$address = mysql_real_escape_string( $_POST['address']);
$occupation = mysql_real_escape_string( $_POST['occupation']);
$email = mysql_real_escape_string( $_POST['email']);
$mobile = mysql_real_escape_string( $_POST['mobile']);



if (empty($name)|| empty($nationality) || empty($age) || empty($address) ||empty($occupation) ||empty($email) || empty($mobile)) {
    $error_message="1 or more required fields are blank ";

  

}
else{


$query="INSERT INTO booking_info(name,nationality,age,address,occupation,email,mobile,car_name) VALUES('{$name}','{$nationality}',{$age},'{$address}','{$occupation}','{$email}',{$mobile},'{$post_com_id}')";
$result_set=mysql_query($query);
if ($result_set) {
  
echo "<h3 style=\"text-align:center;color:red;\">You have succefully booked this car</h3>";
}
else{

  echo "<p>user registration failed</p>";
    echo "<p>".mysql_error()."</p>";


}


}
} 
?>






<html>




      
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

	<div class="footer_area"></div>


</div>





</body>



</html>