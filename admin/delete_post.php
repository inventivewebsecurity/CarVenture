<?php

$connection=mysql_connect("localhost","root","");
if (!$connection) {
 	die("database connection failed".mysql_error());
 } 
 $db_selection=mysql_select_db("mycms",$connection);
 if (!$db_selection) {
 	 	die("database selection failed".mysql_error());

 }

$delete_car=$_GET['delete_post'];

$query="delete from posts where post_id='$delete_car'"; 

if (mysql_query($query)) {
	 	
echo "<script>alert('A post has been deleted')</script>";
echo "<script>window.open('../index.php?view_posts','_self')</script>";
}

?>