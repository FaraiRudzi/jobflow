<?php
// --- DATABASE CONNECTION ---
// require_once 'admin/db_connect.php'; // We can move the DB connection here

// --- DEFINE BASE URL ---
// This makes all links and asset paths work correctly from any page
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$script_name = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

// Define the base URL constant
define('BASE_URL', $protocol . $host . $script_name);
?>