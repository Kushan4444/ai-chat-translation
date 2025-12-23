<?php
session_start();
include "db.php";
if($_SESSION['role']!='admin') exit;
?>


<link rel="stylesheet" href="style.css">

<div class="chat-box">
 <div class="chat-header"> Admin Panel</div>


 <form method="GET" style="padding:10px">
 <select name="uid" class = "user-select">


 <?php
 $u=$conn->query("SELECT * FROM users WHERE role='user'");
 while($r=$u->fetch_assoc()){
   echo "<option value='{$r['id']}'>{$r['username']}</option>";
 }
 ?>
 </select>
 <button>View</button>
 </form>

 <div id="messages">
 <?php
 if(isset($_GET['uid'])){
  $m=$conn->query("SELECT * FROM messages WHERE user_id=".$_GET['uid']);
  while($r=$m->fetch_assoc()){
   echo "<div class='bubble admin-bubble'>{$r['translated_message']}</div>";
   echo "<details class='original-toggle'>
          <summary>Original</summary>
          <div class='bubble original-bubble'>{$r['original_message']}</div>
        </details>";
  }
 }
 ?>
 </div>
</div>