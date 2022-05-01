<html>
<head></head>


<body>

<center><h2>All Cars Info:</h2></center>
<table width="1100" align="center" border="5">
	<tr bgcolor="red">
    <th>car_id</th>
        <th>car_name</th>
    <th>price</th>
    <th>image</th>
        <th>keywords</th>
                <th>content</th>
                <th>edit</th>
                <th>delete</th>
        


    </tr>
    
<?php

$connection=mysql_connect("localhost","root","");
if (!$connection) {
 	die("database connection failed".mysql_error());
 } 
 $db_selection=mysql_select_db("mycms",$connection);
 if (!$db_selection) {
 	 	die("database selection failed".mysql_error());

 }

  $query="select * from posts";
  $run=mysql_query($query);
  while ($row=mysql_fetch_array($run)) {
  	$car_id=$row[0];
  	$car_name=$row[1];
  	$price=$row[2];
  	$image=$row[3];
  	$keywords=$row[4];
        $content=$row[5];
    


  




?>

<tr align="center">
<td><?php echo $car_id ; ?></td>
<td><?php echo $car_name ; ?></td>
<td><?php echo $price ; ?></td>
<td><?php echo $image ; ?></td>
<td><?php echo $keywords; ?></td>
<td><?php echo $content; ?></td>
<td><a href="edit_post.php?edit_post=<?php echo $car_id;?>">Edit</a></td>


<td><a href="includes/delete_post.php?delete_post=<?php echo $car_id;?>">Delete</a></td>



    </tr>
  
    <?php } ?>



 </table>


</body>





</html>