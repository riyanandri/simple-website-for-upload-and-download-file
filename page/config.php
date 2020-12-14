<?php
//koneksi ke database
$server = "localhost";
$user = "root";
$pass = "";
$db = "db_riyan";
$connect = new mysqli($server, $user, $pass, $db);
	if ($connect->connect_error) {
        die("Connect Error: " . $connect->connect_error);
    }else {
    
    }
//fungsi untuk mengkonversi size file
function formatBytes($bytes, $precision = 2) { 
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 
    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(10000)); 
    $pow = min($pow, count($units) - 1); 

    $bytes /= pow(10000, $pow); 

    return round($bytes, $precision) . ' ' . $units[$pow]; 
} 
?>