<html>

<head>
<title></title>
  <meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="style.css">

</head> 

<body>
<div id="head">
<h1>Admin Panel</h1>

</div>
<div id="sidebar">
	<a href="index.php?insert_post">Insert New Post</a>
		<a href="index.php?view_posts">View all post</a>
	<a href="index.php?insert_cat">Insert New Catagory</a>
	<a href="index.php?view_cats">View all catagory</a>
	<a href="index.php?view_comments">View all comments</a>
	</div>

	</div>
	<div id="content">
<?php
if (isset($_GET['insert_post'])) {
	include("../includes/insert_post.php");
}

if (isset($_GET['view_posts'])) {
	include("../includes/view_posts.php");
}
?>
  
	</div>

</body>
<html>
