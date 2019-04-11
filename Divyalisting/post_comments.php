<?php
$host="localhost";
$username="root";
$password="";
$databasename="listingtest";

$connect=mysqli_connect($host,$username,$password);
$db=mysqli_select_db($connect, $databasename);

if(isset($_POST['user_comm']) && isset($_POST['user_name']))
{
  $comment=$_POST['user_comm'];
  $name=$_POST['user_name'];
  $id= $_POST['sid'];
  $insert=mysqli_query($connect,"insert into comments (name,comment,post_time,listingid) values('$name','$comment',CURRENT_TIMESTAMP,'$id')");
  
  //$id=mysqli_insert_id($db);

  $select=mysqli_query($connect,"select name,comment,post_time from comments where name='$name' and comment='$comment'");
  
  if($row=mysqli_fetch_array($select))
  {
	  $name=$row['name'];
	  $comment=$row['comment'];
      $time=$row['post_time'];
  ?>
<div class="comment_div"> 
 <p class="name"><strong>Posted By:</strong> <?php echo $name;?> <span style="float:right"><?php echo date("j/m/Y g:ia", strtotime($time)) ?></span></p>
 <p class="comments"><?php echo $comment;?></p>	
</div>
  <?php
  }
exit;
}

?>