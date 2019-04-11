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

    //update query
    $sql = "update businesses set listing_name='$_POST[listingname]', listing_city='$_POST[listingcity]', listing_category='$_POST[listingcategory]', listing_contact='$_POST[listingcontact]', listing_email='$_POST[listingemail]' where id='$_POST[id]'";

    //execute the query
    if(mysqli_query($con,$sql))
        header("refresh:1; url=updatelisting.php");
    else 
        echo "not updated";
     

?>