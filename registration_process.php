<?php

include 'config.php';

@$name = $_POST['name'];
@$collegeName = $_POST['collegeName'];
@$contact = $_POST['contact'];
@$wcontact = $_POST['wcontact'];
@$email = $_POST['email'];
@$profession = $_POST['profession'];
@$events = $_POST['workshop1']." ".$_POST['workshop2']." ".$_POST['workshop3']." ".$_POST['jugaad'];
@$sipp = $_POST['sipp'];
@$txnid = $_POST['txnid'];
date_default_timezone_set('Asia/Kolkata');
$date=date("Y-m-d");
$time=date("H:i:sa");

if(isset($_POST['submit'])){
    $query = "INSERT INTO esummit18studentRegistration( fullname, collegeName, contactNumber, wNumber, email, profession, events, SIPP,  fdate, ftime, Txn_id) VALUES ('$name', '$collegeName', '$contact', '$wcontact', '$email', '$profession', '$events', '$sipp','$date', '$time', '$txnid')";
    // echo $query;
}
if ($conn->query($query) === TRUE)
 {
    //echo "New record created successfully";
    header("Location: registration_successful.html");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>
