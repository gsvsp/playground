<?php
$path = $_SERVER['REQUEST_URI'];
if ($path == '/') {
    include 'pages/home.php';
} elseif ($path == '/postgres') {
    include 'pages/postgres.php';
} else {
    include 'pages/not_found.php';
}
?>