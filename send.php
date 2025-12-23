<?php

// Start the session to access logged-in user data
session_start();
include "db.php";
include "translate.php";

// Get and trim the message sent from the form
$msg=trim($_POST['msg']);
if($msg==""){
   echo "Message field is empty";
   exit;}

   // Translate the message to Sinhala
$tr = translateToSinhala($msg);

// Prepare SQL statement to prevent SQL injection
$stmt=$conn->prepare(
 "INSERT INTO messages(user_id,original_message,translated_message)
  VALUES (?,?,?)"
);

// Bind values to the prepared statement
$stmt->bind_param("iss",$_SESSION['user_id'],$msg,$tr);
$stmt->execute();

