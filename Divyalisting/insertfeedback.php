<?php
    $con = mysqli_connect('127.0.0.1','root','');

    if(!$con){
        echo "Not connected to server";
    }

    if(!mysqli_select_db($con,'listingtest')){
        echo "db not selected";
    }

    $Email = $_POST['email_feedback'];
    $Msg = $_POST['message'];
    

    $sql = "INSERT into listing_feedback (feedback_email,feedback_msg) values ('$Email', '$Msg')";

    if(!mysqli_query($con, $sql)){
        echo "Not inserted";
    }
    else{
        echo "inserted";     
    }
?>