<?php
$car_name=$_GET['car_name']; 
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
if (isset($_POST['submit'])) {
$name = mysql_real_escape_string($_POST['name']);
$nationality = mysql_real_escape_string($_POST['nationality']);
$age = mysql_real_escape_string($_POST['age']);
$address = mysql_real_escape_string( $_POST['address']);
$occupation = mysql_real_escape_string( $_POST['occupation']);
$email = mysql_real_escape_string( $_POST['email']);
$mobile = mysql_real_escape_string( $_POST['mobile']);



if (empty($name)|| empty($nationality) || empty($age) || empty($address) ||empty($occupation) ||empty($email) || empty($mobile)) {
		$error_message="one or more required fields are blank ";

	

}
else{


$query="INSERT INTO booking_info(name,nationality,age,address,occupation,email,mobile,car_name) VALUES('{$name}','{$nationality}',{$age},'{$address}','{$occupation}','{$email}',{$mobile},'{$car_name}')";
$result_set=mysql_query($query);
if ($result_set) {
	
echo "<script>window.open('index.php','self')</script>";
}
else{

	echo "<p>user registration failed</p>";
		echo "<p>".mysql_error()."</p>";


}

mysql_close($connection);
}
} 
?>





<html>
<title></title>
<head>
<link rel="stylesheet" type="text/css" href="styles/book_style.css">

</head>

<body>
	

<div id="body">
	


         <h3 style="text-align:center;color:gray;margin-bottom:20px;">Please Enter Details</h3>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<table width="600" height="450" align="center" bgcolor="pink" >

		

         
         
     
		
      

      <tr>
          <td><font color="green"> Name :</font></td>
          <td><input type="text" name="name"></td>

		</tr>



		<tr>
          <td><font color="green"> Nationality :</font></td>
          <td><input type="text" name="nationality"></td>

		</tr>

		<tr>
          <td><font color="green">Age :</font></td>
          <td><input type="text" name="age"></td>

		</tr>
		<tr>
          <td><font color="green">Address:</font></td>
          <td><input type="text" name="address"></td>

		</tr>
		<tr>
          <td><font color="green">Occupation :</font></td>
          <td><input type="text" name="occupation"></td>

		</tr>
		<tr>
          <td><font color="green">Email :</font></td>
          <td><input type="email" name="email"></td>

		</tr>
		<tr>
          <td><font color="green">Mobile No :</font></td>
          <td><input type="text" name="mobile"></td>

		</tr>

		

       <tr>
          <td align="center" colspan="2"><input type="submit" name="submit" value="Book"></td>
          

		</tr>

       



	</table>


</form>
<h4><?php echo $error_message; ?></h4>

</div>
</html>
