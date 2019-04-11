<!DOCTYPE html>
<html>
<body>

<h2>Update Business </h2>
<p><a href="logout.php">Click here</a> to Logout.</p>

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
    
    

?>
<table>
    <tr>
        <th>Business Title </th>
        <th>City</th>
        <th>Category </th>
        <th>Contact </th>
        <th>Email </th>
    </tr>
    <?php

    session_start(); /* Starts the session */
    if(!isset($_SESSION['UserData']['Username'])){
    header("location:login.php");
    exit;
    }
    while($row = mysqli_fetch_array($records))
    {
        echo "<form action=updatelist.php method=post>";
        echo "<td><input type=text name=listingname value= '".$row['listing_name']."'></td>";
        echo "<td><input type=text name=listingcity value= '".$row['listing_city']."'></td>";
        echo "<td><input type=text name=listingcategory value= '".$row['listing_category']."'></td>";
        echo "<td><input type=text name=listingcontact value= '".$row['listing_contact']."'></td>";
        echo "<td><input type=text name=listingemail value= '".$row['listing_email']."'></td>";
        echo "<input type=hidden name=id value= '".$row['ID']."'></td>";
        echo "<td><input type=submit>";
        echo "</form></tr>";
    }
    
    
    ?>



</body>
</html>