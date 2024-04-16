<?php
start_session();
include("connection.php");
$name = $_POST['name'];
$matricNo = $_POST['matricNo'];
$email = $_POST['email'];
$currentAddress = $_POST['currentAddress'];
$homeAddress = $_POST['homeAddress'];
$mobilePhoneNo = $_POST['mobilePhoneNo'];
$homePhoneNo = $_POST['homePhoneNo'];
$conn->query("insert into studentform values('$name','$matricNo','$email', '$currentAddress', '$homeAddress', '$mobilePhoneNo', '$homePhoneNo')");

  $message = "Student details submitted successfully!";

  $storedData = "<br> Name: $name \n Matric No.: $matricNo \n Email: $email \n Current Address: $currentAddress \n Home Address: $homeAddress \n Mobile Phone No.: $mobilePhoneNo \n Home Phone No.: $homePhoneNo";
  echo "<p style='color:green;'>$message</p>";
  echo "<pre>$storedData</pre>";
?>