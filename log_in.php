<?php ob_start(); 
session_start();?>

<?php

$error_message1="";
$n="";
$error_message="";

$connection=mysqli_connect("localhost","root","","carsdb");
// if (!$connection) {
//     die("database connection failed".mysql_error());
//  } 
//   $db_selection=mysqli_select_db("mycms",$connection);
//   if (!$db_selection) {
//         die("database selection failed".mysql_error());

//  }



if (isset($_POST['submit'])) {
  
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
if (empty($username)||empty($password)) {
  $error_message="One or more required fields are blank!! enter all the fields"; 
}
else{


 $query="SELECT * FROM users WHERE username='{$username}' AND password='{$password}'";
 $result_set=mysql_query($query);
 if (mysql_num_rows($result_set)==1) {
  $_SESSION['username']=$username;
    $_SESSION['password']=$password;



  header("Location:index.php");
  

 }
 else{

$error_message1="Invalid combination of username and password";

 }
 
}
}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/log_in.css">
<title>
welcome to CarVentura.com
</title>
</head>
<body>
<div id="head"> 
	<div id="left">
		<h1 style="margin:0px;padding-top:20px;">CarVentura.com</h1>

	</div>

	<div id="right">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<table height="60px" width="400px">
			<tr>
				<td ><span class="label">Username</span></td>
				<td ><span class="label">Password</span></td>

			</tr>
			<tr>
            <td><input type="text" name="username" value="riyad113023"></td>
            <td><input type="password" name="password" value="123"> </td>
            <td><input id="login_button" type="submit" name="submit" value="Login"></td>
			</tr>
</table>
</form>
<h4 style="color:red;"><?php echo $error_message1; ?></h4>

</div>
</div>






<div id="body">
	<div id="welcome">
<h2 style="color:red;margin-bottom:20px;">Welcome to Cars.com</h2>
<h3>Enjoy your best experience with cars</h3>
	</div>



<div id="form"> 
	<strong><h2 style="margin-left:30px;margin-top:15px;font-size:36px;font-weight:normal;color: #333;">Sign Up</h2>

  </strong>
  <div id="reg_form">
      
 <form action="" method="post">
  <table id="table" width="450" height="350"  >
    
      
<tr>
         <td><font >Name :</font></td>
        <td><input type="text" name="name"></td>

    </tr>

    <tr>
        <td><font >Username :</font></td>
         <td><input type="text" name="username"></td>

    </tr>

    <tr>
          <td><font> Password :</font></td>
          <td><input type="password" name="password"></td>

    </tr>
    <tr>
          <td><font>Confirm Password :</font></td>
          <td><input type="password" name="confirmpassword"></td>
         <td> <span style="color:coral"><?php echo $n; ?></span></td>
    </tr>
    <tr>
          <td><font> Email :</font></td>
          <td><input type="email" name="email"></td>

    </tr>

       <tr>
        
          <td><input id="sign_up_button" type="submit" name="sign_up" value="Sign Up"></td>
          

    </tr>

        </table>


</form>

<h4 style="color:red;"><?php echo $error_message; ?></h4>


  </div>

</div>
</div>

</body>


</html>

<?php

$error_message="";
$name="";
$username="";
$password="";
$confirmpassword="";
$email="";
$message="";





if (isset($_POST['sign_up'])) {  
    $name = $_POST['name'];
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$confirmpassword = mysql_real_escape_string( $_POST['confirmpassword']);
$email = mysql_real_escape_string( $_POST['email']);

if ($name && $username && $password && $confirmpassword && $email) {
  
if ($password==$confirmpassword) {
  
$check_email="select * from users where email='{$email}'";
$run=mysql_query($check_email);
if (mysql_num_rows($run)==0) {
  $query="INSERT INTO users(name,username,password,confirmpassword,email) VALUES('{$name}','{$username}','{$password}','{$confirmpassword}','{$email}')";
$result_set=mysql_query($query);
if ($result_set) {
   $_SESSION['username']=$username;
    $_SESSION['password']=$password;
   header("Location:index.php");
  
}
}
else{
  $error_message="Email alredy exists !! Please try a new one.";
}
}

else{

  $n="Passwords don't match !!";

}


}
else{
  $error_message="One or more required field is blank !! ";
}
}
?>

