<?php
require "config/connect_mysql.php";

//รับค่า ID ที่จะแก้ไข 
//echo $_GET['id'];
$id = $_GET['id'];

$sql = "DELETE FROM members WHERE id=$id";
$query = mysqli_query($connect, $sql);

if ($query) {
    echo "<div class='alert alert-success'>Delete member success</div>";
    echo "<meta http-equiv=\"refresh\" content=\"3;url='read_members.php'\">";
} else {
    echo "<div class='alert alert-danger'>Delete member fail!!</div>";
}
