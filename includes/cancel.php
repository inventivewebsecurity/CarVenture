<?php $car_name= $_GET['car'];?>

<div class="post_area">

	<h3 style="background-color:#ADD8E6;text-align:center;padding:10px;">Let's get started....</h3>
	<div style="margin:45px;color:green;font-size:18px;">
<form action="booking_cancel.php?post=<?php echo $car_name; ?>" method="post">
<label>Input your Email ID:</label>&nbsp;&nbsp;<input type="email" name="email">&nbsp;
<input type="submit" name="submit" value="continue">
</form>
</div>

<?php

    


	if (isset($_POST['submit'])) {
		$car=$_GET['post'];
	
 
$email = mysql_real_escape_string( $_POST['email']);


if (empty($email)) {
		$error_message="Please enter your email";

	

}
else{

	   
$query="SELECT * FROM booking_info WHERE email='{$email}' and car_name='{$car}'";
$result_set=mysql_query($query);
$row=mysql_fetch_array($result_set);
if ($row) {
	echo "
<div style=\"border:2px solid #00FFFF;width:600px;text-align:center;margin:auto;padding-left:10px;\">
	<table width=\"400px\" height=\"270px\" >
	<tr><h4 style=\"background-color:#FF00FF;padding:10px;\">Here is your booking information:</h4></tr>
	<tr><td>Name</td><td>$row[0]</td></tr>
		<tr><td>Nationality</td><td>$row[1]</td></tr>
	<tr><td>Age </td><td>$row[2]</td></tr>
	<tr><td>Address</td><td>$row[3]</td></tr>
	<tr><td>Occupation</td><td>$row[4]</td></tr>
	<tr><td>Email </td><td>$row[5]</td></tr>
		<tr><td>Mobile No.</td><td>$row[6]</td></tr>

 




	</table>
	</div>
    <div style=\"margin:45px;\">

	<form action=\"form.php\" method=\"post\">
    <label>Enter your Email for confirmation:</label>&nbsp;&nbsp;<input type=\" email\" name=\"email\">
	<input type=\"submit\" name=\"submit\" value=\"Confirm Cancel\">
	</form></div>
	";

}





else{

	echo "<h4 style=\"color:red; margin:40px;\">You haven't booked this car.</h4>";
		echo "<p>".mysql_error()."</p>";


}


}
} 
?>


</div>