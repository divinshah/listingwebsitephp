<?php
   session_start(); /* Starts the session */
   /* Check Login form submitted */
   if(isset($_POST['Submit'])){
   /* Define username and associated password array */
   $logins = array('divya' => '123456','username1' => 'password1','username2' => 'password2');
   
   /* Check and assign submitted Username and Password to new variable */
   $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
   $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
   
   /* Check Username and Password existence in defined array */
   if (isset($logins[$Username]) && $logins[$Username] == $Password){
   /* Success: Set session variables and redirect to Protected page  */
   $_SESSION['UserData']['Username']=$logins[$Username];
   header("location:index.php");
   exit;
   } else {
   /*Unsuccessful attempt: Set error message */
   $msg="<span style='color:red'>Invalid Login Details</span>";
   }
   }
   
?>
<html>
   
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <title>Login Page</title>
            
      <style type = "text/css">
        body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
        }
        .navbar-custom{
        background-color: #123977;
        }
        .navbar a{
        color: white !important;
        font-size: 1.2em !important;
        }
        .navbar li{
        padding-right: 5px;
        }
        label {
        font-weight:bold;
        width:100px;
        font-size:14px;
        }
        .box {
        border:#ffffff solid 1px;
        }
        .container{
            padding-top: 50px;
        }
        .footer{
        background-image: url("images/footer1.jpg");
        padding: 30px 0px 30px 0px;
        }
        
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
<!-------- Header --------->
   <nav class="navbar navbar-expand-sm navbar-dark fixed-top navbar-custom">
  <a class="navbar-brand" href="#">TO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Explore</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blogs</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="listingform.html"><button type="button" class="btn btn-outline-light">+Add Listing</button></a>
      </li> 
    </ul>
  </div>  
</nav>
<div class="jumbotron">
<div class="container">
  <h1>Login Page</h1> 
    </div>
</div>
	
    <div align = "center">
         
            
				
    <div style = "margin:30px">
               
    <form action="" method="post" name="Login_Form">
    <table " border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
        <?php if(isset($msg)){?>
        <tr>
        <td colspan="3" align="center" valign="top"><?php echo $msg;?></td>
        </tr>
        <?php } ?>
        
        <tr>
        <td align="right" valign="top">Username</td>
        <td><input name="Username" type="text" class="Input"></td>
        </tr>
        <tr>
        <td align="right">Password</td>
        <td><input name="Password" type="password" class="Input"></td>
        </tr>
        <tr>
        <td> </td>
        <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
        </tr>
    </table>
    </form>
               
               
					
        </div>
				
        
			
      </div>
      <!--    Footer   -->
  <div class="footer text-center text-white" style="margin-bottom:0">
    <h1 class="display-1 text-center">TO</h1>
    <p>Toronto's very own</p>
    <div class="row">
    <div class="col-sm-4" ></div>
    <div class="col-sm-4" ></div>
    <div class="col-sm-4"><a href="https://www.facebook.com/"><img src="images/facebook-logo.png" height="40px" alt="facebook"></a>&nbsp &nbsp<a href="https://www.instagram.com/"><img src="images/instagram-logo.png" class="float" height="40px" alt="instagram"></a></div>
      
    </div>
  </div>

   </body>
</html>