<!DOCTYPE html>
<html>
<body>

<h2>Delete Business </h2>
<p><a href="logout.php">Click here</a> to Logout.</p>
<table border=1 cellpadding=1 cellspacing=1>
    <tr>
        <th>Business title</th>
        <th>City</th>
        <th>Category </th>
        <th>Delete</th>
    </tr>

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

    while($row= mysqli_fetch_array($records))
    {
        echo "<tr>";
        echo "<td>".$row['listing_name']."</td>";
        echo "<td>".$row['listing_city']."</td>";
        echo "<td>".$row['listing_category']."</td>";
        echo "<td>".$row['listing_contact']."</td>";
        echo "<td>".$row['listing_email']."</td>";
        echo "<td><a href= delete.php?id=" .$row['ID'].">Delete</a></td>";
    }
    
    

?>
</table>

</body>
</html>