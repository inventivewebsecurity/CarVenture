
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>insert post</title>
<link rel="stylesheet" type="text/css" href="styles/insert_post.css" media="all" />

<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
<style type="text/css">
      td,tr {padding:0px;margin:0px;}
</style>
</head>

<body>
	<div style="width:650px;background-color:#6495ED;">
<form action="insert_post.php" method="post" enctype="multipart/form-data">
      <table width="600" height="600" align="center" border="1px solid green">
						      <tr>
   <td colspan="6" align="center">
			<h1>Insert New Post: </h1>													 
		</td>
			</tr>
					<tr>
												 
					<td><input type="text" name="post_title" size="60" placeholder="Car Name"/></td>
</tr>
<tr>
	
<td>
<select name="cat">
	<option value='null'>Select Car Company</option>
	<?php
	include("../includes/database.php");
	$get_cats = "select * from categories";
	$run_cats = mysql_query($get_cats);
	while($cats_row = mysql_fetch_array($run_cats))
	{
		$cat_id = $cats_row['cat_id'];
	$cats_title = $cats_row['cat_title'];
	echo "<option value='$cat_id'>$cats_title</option>";
	}
		?>
	</select>
	</td>
	</tr>
	
	<tr>
												    
																<td><input type="text" name="post_price" size="50" placeholder="Car Price"/></td>
												</tr>
	
												<tr>
												    
																<td><input type="file" name="post_image" size="50" placeholder="Car Image"/></td>

												</tr>
                                                <tr>
												    
																<td><input type="text" name="car_keywords" size="50" placeholder="Car Keywords"/></td>

												</tr>
                                               


												<tr>
												  
																<td><textarea name="post_content" rows="10" cols="40" placeholder="Specification"></textarea></td>
												</tr>
												<tr>
																<td colspan="6" align="center"><input type="submit" name="submit" value="Publish Post Now"/></td>
												</tr>
							
						</table>

</form>
</div>
</body>
</html>

<?php 
if(isset($_POST['submit']))
{
	   $post_title = $_POST['post_title'];
			 
				$post_cat = $_POST['cat'];
				$post_price = $_POST['post_price'];
				
				$post_image = $_FILES['post_image']['name'];
			 $post_image_tmp = $_FILES['post_image']['tmp_name'];
			 				$car_keywords = $_POST['car_keywords']; 

				$post_content = $_POST['post_content']; 
				if($cats_title=='' OR $post_cat=='null' OR $post_price=='' OR  $post_image=='' OR $post_content=='')
				{
					echo "<script>alert('Plz fill all fields')</script>";
					exit();
				}
				else
				{
					move_uploaded_file($post_image_tmp,"news_images/$post_image");
					
$insert_posts = "insert into posts(category_id,post_title,post_price,post_image,car_keywords,post_content) values('$post_cat','$post_title','$post_price','$post_image','$car_keywords','$post_content')";
					
					$run_posts = mysql_query($insert_posts);
					
					echo "<script>alert('Post has been published')</script>";
					
				}
}
?>