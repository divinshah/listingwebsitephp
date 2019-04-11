<?php
    $con = mysqli_connect('127.0.0.1','root','');

    if(!$con){
        echo "Not connected to server";
    }

    if(!mysqli_select_db($con,'listingtest')){
        echo "db not selected";
    }

    $Title = $_POST['listingname'];
    $City = $_POST['listingcity'];
    $Category = $_POST['listingcategory'];
    $Contact = $_POST['listingcontact'];
    $Email = $_POST['listingemail'];

    $sql = "insert into businesses (listing_name, listing_category, listing_city, listing_contact, listing_email) values ('$Title', '$Category', '$City', '$Contact', '$Email')";

    if(!mysqli_query($con, $sql)){
        echo "Not inserted";
    }
    else{
        echo "inserted";
        header("Location: listingdisplay.php");        
    }


?>