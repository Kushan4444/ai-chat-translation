
<?php
session_start();
include "db.php";

if(isset($_POST['username'])){
 $name = $_POST['username'];

 $res = $conn->query("SELECT * FROM users WHERE username='$name' AND role='user'");
 if($res->num_rows==0){
   $conn->query("INSERT INTO users(username,role) VALUES('$name','user')");
   $uid = $conn->insert_id;
 }else{
   $uid = $res->fetch_assoc()['id'];
 }

 $_SESSION['user_id']=$uid;
 $_SESSION['username']=$name;
 $_SESSION['role']='user';
 header("Location: chat.php");
}
?>



<!DOCTYPE html>
<html>
<head>
  <title>User Login</title>
  <link rel="stylesheet" href="style1.css">
</head>
<body>
  <div class="bg">
    <div class="card">
      <h2>Login</h2>

      <img src="1.png" class="img">

     <form method="POST">
   <input name="username" placeholder="Enter your name" required>
   <button class="btn">Login</button>
   
      </a>
    </div>
  </div>
</body>
</html>
