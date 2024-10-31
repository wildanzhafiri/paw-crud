<?php
$host = 'localhost';
$dbusername = 'root';
$dbpassword = '456YES';
$dbname = 'LKCRUD';
$mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($mysqli->connect_errno) {
    die('Database connection failure');
}
