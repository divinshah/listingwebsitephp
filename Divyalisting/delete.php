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
    $sql = "delete from businesses where id='$_GET[id]'";

    //execute the query
    if(mysqli_query($con,$sql))
        header("refresh:1; url=deletelisting.php");
    else 
        echo "Not deleted";


?>