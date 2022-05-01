<?php
	ob_start();

$connection=mysql_connect("localhost","root","");
if (!$connection) {
 	die("database connection failed".mysql_error());
 } 
 $db_selection=mysql_select_db("mycms",$connection);
 if (!$db_selection) {
 	 	die("database selection failed".mysql_error());

 }
	if (isset($_POST['submit'])) {
	

$name = mysql_real_escape_string($_POST['name']);
$nationality = mysql_real_escape_string($_POST['nationality']);
$age = mysql_real_escape_string($_POST['age']);
$address = mysql_real_escape_string( $_POST['address']);
$occupation = mysql_real_escape_string( $_POST['occupation']);
$email = mysql_real_escape_string( $_POST['email']);
$mobile = mysql_real_escape_string( $_POST['mobile']);
$car = mysql_real_escape_string( $_POST['car']);






$query="DELETE FROM booking_info WHERE email='{$email}'";
$result_set=mysql_query($query);
if ($result_set) {
	echo "<script>alert('booking cancellation successful')</script>";
	echo "<script>window.open('booking_cancel.php?note=cancellation complete','_self')</script>";

	

}
else{

	
		echo "<p>".mysql_error()."</p>";


}


}




?>