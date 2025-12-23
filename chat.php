<?php
session_start();
if($_SESSION['role']!='user') exit;
?>
<link rel="stylesheet" href="style.css">


<div class="chat-box">
 <div class="chat-header">
    <?=$_SESSION['username'];?>
 </div>

 <div id="messages" ></div>

 <div class="input">
  <input type = "text" id="msg" placeholder="Type message">
  <button type="button" onclick="sendMsg()">➤</button>
</div>


<div id="error" style="color:red;text-align:center;font-size:13px"></div>
<script src="chat.js"></script>



