<?php
session_start();
include "db.php";

$u=$_POST['username'];
$p=$_POST['password'];

$res=$conn->query(
 "SELECT * FROM users WHERE username='$u' AND password='$p' AND role='admin'"
);

if($res->num_rows==1){
 $_SESSION['role']='admin';
 header("Location: admin.php");
}else{
 echo "Wrong Admin Login";
}