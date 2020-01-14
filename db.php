<?php

$h = 'localhost';
$u = 'root';
$p = '';
$db = 'tobasa';

 
    $connect = new mysqli($h, $u, $p, $db);
if($connect->connect_error){
	echo 'gagal';
}

?>