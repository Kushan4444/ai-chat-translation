<?php
include "db.php";

/* TEMP USER */
$_SESSION['user_id'] = 1;
$_SESSION['role'] = 'user';

header("Location: chat.php");