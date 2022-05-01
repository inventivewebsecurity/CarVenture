<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>insert post</title>
<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
<style type="text/css">
      td,tr {padding:0px;margin:0px;}
</style>
</head>

<body>
<form action="index.php?insert_post" method="post" enctype="multipart/form-data">
      <table width="795" height="600" align="center" border="1px solid green">
						      <tr>
												    <td colspan="6" align="center">
																<h1>Insert New Post: </h1>													 
																</td>
												</tr>
												<tr>
												 
																<td><input type="text" name="post_title" size="60" placeholder="Post Title"/></td>
												</tr>
												<tr>
												   
																<td>
																<select name="cat">
																       <option value='null'>Select Category</option>
																							<?php
																							include("includes/database.php");
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
												   
																<td><input type="text" name="post_author" size="60" placeholder="Post Author"/></td>
												</tr>
												<tr>
												    
																<td><input type="text" name="post_keywords" size="60" placeholder="Post Keywords"/></td>
												</tr>
												<tr>
												    
																<td><input type="file" name="post_image" size="50" placeholder="Post Keywords"/></td>
												</tr>
												<tr>
												  
																<td><textarea name="post_content" rows="10" cols="40" placeholder="Post Content"></textarea></td>
												</tr>
												<tr>
																<td colspan="6" align="center"><input type="submit" name="submit" value="Publish Comments Now"/></td>
												</tr>
							
						</table>

</form>
</body>
</html>

<?php 
if(isset($_POST['submit']))
{
	   $post_title = $_POST['post_title'];
			 $post_date = date('m-d-Y');
				$post_cat = $_POST['cat'];
				$post_author = $_POST['post_author'];
				$post_keywords = $_POST['post_keywords'];
				$post_image = $_FILES['post_image']['name'];
			 $post_image_tmp = $_FILES['post_image']['tmp_name'];
				$post_content = $_POST['post_content']; 
				if($cats_title=='' OR $post_cat=='null' OR $post_author=='' OR $post_keywords=='' OR $post_image=='' OR $post_content=='')
				{
					echo "<script>alert('Plz fill all fields')</script>";
					exit();
				}
				else
				{
					move_uploaded_file($post_image_tmp,"news_images/$post_image");
					
					$insert_posts = "insert into posts(category_id,post_title,post_date,post_author,post_keywords,post_image,post_content) values('$post_cat','$post_title','$post_date','$post_author','$post_keywords','$post_image','$post_content')";
					
					$run_posts = mysql_query($insert_posts);
					
					echo "<script>alert('Post has been published')</script>";
					echo "<script>window.open('index.php?insert_post','_self')</script>";
				}
}
?>