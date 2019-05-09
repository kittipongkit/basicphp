<?php
$host   = "localhost";
$user   = "root";
$pass   = "1234";
$dbname = "phpbasicdb";

//เชื่อมต่อฐานข้อมูล
$connect = mysqli_connect($host, $user, $pass, $dbname);
//เข้ารหัส utf8
mysqli_set_charset($connect, 'utf8'); // เข้ารหัส utf8

//ตรวจการเชื่อมต่อ
if ($connect) {
    // echo "Connect database success";
} else {
    echo "Connect database unsuccess";
}
