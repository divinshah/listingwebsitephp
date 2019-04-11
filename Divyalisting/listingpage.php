
<?php
include "header.php";


$con = mysqli_connect('127.0.0.1','root','');
//connect server
if(!$con){
    echo "Not connected to server";
}
//select database
if(!mysqli_select_db($con,'listingtest')){
    echo "db not selected";
}

$sql = "SELECT * FROM businesses WHERE ID = ' " . $_GET['listing_id'] . "'";
$records= mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($records))
        {
            echo "<div class='jumbotron'>
                <div class='containerH'>
                <h1>" .ucfirst($row['listing_name']) ."</h1> 
                    </div>
                </div>"; 
            echo "<div class='container'><div class='row'>";
            echo "<div class='col-sm-6'>";
            echo "<tr>";
            echo "<p><strong>". ucfirst($row['listing_category']) ."</strong></p>";
            echo "<p><strong>City:</strong>". ucfirst($row['listing_city']) ."</td>";
            echo "<p><strong>Contact:</strong>". ucfirst($row['listing_contact']) ."</td>";
            echo "<p><strong>Email:</strong>". ucfirst($row['listing_email']) ."</td></div></div></div>";

        }

    
?>
<html>
<head>
<title> Comment</title>
<style>
body{
	font-family:helvetica;
	background:url(../background2.png);
}
/*
h1{
	text-align:center;
	margin-top:20px;
	font-size:40px;
	color:#fff;
	text-shadow: 2px 2px 0px rgba(255,255,255,.7), 5px 7px 0px rgba(0, 0, 0, 0.1); 
}
*/
#container{
	margin:auto;
	width:38%;
}
#username{
	width:100%;
	height:40px;
	border:1px solid silver;
	margin-top:40px;
	border-radius:5px;
	font-size:17px;
	padding:10px;
	font-family:helvetica;
	margin-bottom:10px;
}
#comment{
	width:100%;
	height:100px;
	border:1px solid silver;
	border-radius:5px;
	font-size:17px;
	padding:10px;
	font-family:helvetica;
}
#submit{
	width:200px;
	height:60px;
	border:none;
	background-color:tomato;
	color:#fff;
	margin-top:20px;
	border-radius:5px;
	font-size:20px;
	border-bottom:6px solid #E90003;
	margin-left:140px;
}
.comment_div
{
	width:500px;
	text-align:left;
	margin:20px auto;
	background:#F3F3F3;
	text-align:center;
}
.name{
	height:30px;
	line-height:30px;
	padding:8px;
	background:#fff;
	color:#777;
	text-align:left;
}
.comments{
	padding:0px 0px 24px 0px;
	font-size:20px;	
}
</style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

 <script type="text/javascript">
function post()
{
  var comment = document.getElementById("comment").value;
  var name = document.getElementById("username").value;
	var listid= document.getElementById("sid").value;
    

  if(comment && name)
  {
    $.ajax
    ({
      type: 'post',
      url: 'post_comments.php',
      data: 
      {
         user_comm:comment,
	     user_name:name,
			 sid:listid
      },
      success: function (response) 
      {
	    document.getElementById("all_comments").innerHTML=response+document.getElementById("all_comments").innerHTML;
	    document.getElementById("comment").value="";
        document.getElementById("username").value="";
				document.getElementById("sid").value="";
  
      }
    });
  }
  
  return false;
}
</script>

</head>

<body>

<?php
$id = isset($_GET['listing_id']) ? $_GET['listing_id'] : '';
echo $id; 
?>

  <form method='post' action="" onsubmit="return post();" id="container">
    <input type="hidden" id="sid" name="sid" value=<?php echo $id ?>>
	  <input type="text" id="username" placeholder="Your Name" autocomplete="off">
	  <textarea id="comment" placeholder="Write Your Comment Here....."></textarea>  
	  <input type="submit" value="Post Comment" id="submit">
  </form>

  <div id="all_comments">
  <?php
    $host="localhost";
    $username="root";
    $password="";
    $databasename="listingtest";

    $connect=mysqli_connect($host,$username,$password);
    $db=mysqli_select_db($connect, $databasename);
    
    $comm = mysqli_query($connect, "select name,comment,post_time from comments WHERE listingid = ' " . $_GET['listing_id'] . "' order by id desc");
    while($row=mysqli_fetch_array($comm))
    {
	  $name=$row['name'];
	  $comment=$row['comment'];
      $time=$row['post_time'];
    ?>
	
<div class="comment_div"> 
 <p class="name"><strong>Posted By:</strong> <?php echo $name;?> <span style="float:right"><?php echo date("j-M-Y g:ia", strtotime($time)) ?></span></p>
 <p class="comments"><?php echo $comment;?></p>	
</div>
  
    <?php
    }
    
    
    ?>
  </div>

</body>
</html>


<?php 

include "footer.php"; ?>