<?php
include "header.php";

?>
<div class="jumbotron">
    <div class="containerH">
      <h1>Businesses</h1> 
        </div>
    </div>

<html>
<body>
<div class="container">

  <div class="row">



<?php

        $con = mysqli_connect('127.0.0.1','root','');
        //connect server
        if(!$con){
            echo "Not connected to server";
        }
        //select database
        if(!mysqli_select_db($con,'listingtest')){
            echo "db not selected";
        }

        //query
        $sql = "select * from businesses";

        //execute the query
        $records= mysqli_query($con,$sql);

        while ($row = mysqli_fetch_array($records))
        { 
          
          echo "<div class='col-md-4 col-xs-6'>";
          
          echo "<h2><a href='listingpage.php?listing_id=" .$row['ID'] . "'>". ucfirst($row['listing_name']) ."</a></h2><div>";
          echo "<p><strong>". ucfirst($row['listing_category']) ."</strong></p>";
          echo "<p>City:". ucfirst($row['listing_city']) ."</p>";
          echo "<p>Contact:". ucfirst($row['listing_contact']) ."</p>";
          echo "<p>Email:". ucfirst($row['listing_email']) ."</p></div></div>";
          

            
        }
    




?>
</div>
<button type="button" class="btn btn-outline-primary"><a href="listingform.html">Add listing</a></button>
</div>

</body>
</html>
 <!--    Footer   -->
 <?php
include "footer.php";
?>
