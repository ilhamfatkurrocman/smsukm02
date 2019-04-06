<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'sms_gammu';

$connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($connect->connect_error) {
    die('Maaf Gagal:' . $connect->connect_error);
}

?>