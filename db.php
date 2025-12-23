<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "ai_chat1";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli($host, $user, $pass, $db);
    $conn->set_charset("utf8mb4"); // emoji, sinhala support

} catch (mysqli_sql_exception $e) {

    // Dont show user
    error_log("Database Connection Error: " . $e->getMessage());
    die("Service temporarily unavailable");
}
