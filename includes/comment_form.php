

  <?php
  if (isset($_GET['post'])) {
      $post_id=$_GET['post']; 
    
    
    $get_posts="select * from posts where post_id=$post_id";
    $run_posts= mysql_query($get_posts);
    $row=mysql_fetch_array($run_posts);
    $post_new_id=$row['post_id'];
  }

$get_comments="select * from comments where comment_id='$post_new_id' AND status='approved'";
$run_comments=mysql_query($get_comments);
 $count=mysql_num_rows($run_comments);
 echo "
 <h3 style=\"color:red;margin-left:50px;margin-top:20px;margin-bottom:20px;\">Viewers Comments:
($count)</h3>
 ";
while ($row_comments=mysql_fetch_array($run_comments)) {
    $comment_name=$row_comments['comment_name'];
        $comment=$row_comments['comment'];
        $time=$row_comments['Date'];
       

   echo " 

   <div id=\"viewer\">
   
   <h4 style=\"margin-bottom:10px;\"> $comment_name &nbsp; <span style=\"font-size:12px;\">$time</span></h4>
<p style=\"\"> $comment</p>
  </div>

   ";

}


  ?>


    <h3 style="color:red;padding-left:50px;padding-top:50px;">Post a Comment</h3>
    <div id="comment">
    <form id="comment_form" method="post" action="details.php?post=<?php echo $post_new_id;?>">
     
      <table id="table" width="600" height="200" align="center" bgcolor="#5F9EA0">
     <tr>
        <td><label class="label">Name</label></td>
        <td><input type="text" name="comment_name"></td>
     </tr>
     
     <tr>
        <td><label class="label">Comment</label></td>
        <td><textarea name="comment" cols="30" rows="5"></textarea></td>
     <td><input id="comment_button" type="submit" name="submit" value="post comment"></td></tr>
     </table>

    </form>


</div>
<?php
 if (isset($_POST['submit'])) {
     $comment_name=$_POST['comment_name'];
     
     $comment=$_POST['comment'];
     $status="unapproved";

     if ($comment_name==''  OR $comment=='') {
        echo "<script>alert('please fill in all fields')</script>";
        echo "<script>window.open('details.php?post=$post_new_id')</script>"; 
        exit();
      }
      else
      {
        $query_comment="insert into comments(comment_id,comment_name,comment,status,Date) values('$post_new_id','$comment_name','$comment','$status',sysdate())";

      $run_query=mysql_query($query_comment); 
      if ($run_query) {
           echo "<script>alert('Your comment will be published after approval')</script>";
        echo "<script>window.open('details.php?post=$post_new_id')</script>"; 
        
      }
      else
      {
         echo "<script>alert('commenting failed')</script>";

      }


    }

 }

?>