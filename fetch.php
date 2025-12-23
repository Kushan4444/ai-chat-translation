<?php

// Start the session to check whether a user is logged in

session_start();
include "db.php";


// Get the logged-in user's ID from the session
$uid=$_SESSION['user_id'];

// Retrieve all messages that belong to the current user
$res=$conn->query("SELECT * FROM messages WHERE user_id=$uid");


// Loop through the result set and display each message
while($r=$res->fetch_assoc()){

    
    // Output each message inside a chat bubble
 echo "<div class='bubble'>{$r['original_message']}</div>";
}



