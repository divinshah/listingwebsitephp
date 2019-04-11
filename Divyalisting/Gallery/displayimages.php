<div class="jumbotron">
<div class="containerH">
  <h1>Gallery</h1> 
    </div>
</div>
<?php include "header.php"; ?>
<div class= "container">
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

    $sql = "select * from gallery";
    $records= mysqli_query($con,$sql);
    while ($row = mysqli_fetch_array($records)){
        echo "<div class='col-md-4 col-xs-6'>";
            echo "<img src='images/".$row['image']."' class='img-responsive img-thumbnail' >";
            echo "<div>";
            echo "<h5>" .$row['name'] . "<h5>";
            echo "</div>";
        echo "</div>";
    }
    
?>

</div>
<a class="btn btn-primary" href="addnew.php"> Add new </a>
</div>

<?php include "footer.php"; ?>

