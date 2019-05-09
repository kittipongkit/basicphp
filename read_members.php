<?php
require "config/connect_mysql.php";
//include "config/connect_mysql.php";

//การดึงข้อมูลจาก database
$sql = "SELECT * FROM members";
$query = mysqli_query($connect, $sql);
// $query = mysqli_query($connect, "SELECT * FROM members");

//นับจำนวนแถวที่พบในตาราง
$row = mysqli_num_rows($query);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Member List</title>

    <link rel="stylesheet" href="bootstab/bootstrap-4.3.1-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="jumbotron bg-success text-light">
        <h1 class="display-5 text-center">Member List</h1>
    </div>

    <div class="container-fluid">

        <?php
        echo "<p>พบข้อมูลทั้งหมด " . $row . " รายการ</p>";

        echo "<p><a href='create_members.php' class='btn btn-success'>เพิ่มสมาชิกใหม่</a></p>";

        //ทำการ loop ข้อมูลในตารางมาแสดง
        echo "<table class ='table table-bordered table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th >";
        echo "<th>Full Name</ th>";
        echo "<th>E-mail </th>";
        echo "<th>Password </th>";
        echo "<th>Tel.</th>";
        echo "<th>Status</th>";
        echo "<th>Manage</th>";
        echo "</thead>";
        echo "</tr>";

        echo "<tbody>";
        while ($data = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>", $data["id"], "</td>";
            echo "<td>", $data["fullname"], "</td>";
            echo "<td>", $data["email"], "</td>";
            echo "<td>", $data["password"], "</td>";
            echo "<td>", $data["tel"], "</td>";
            echo "<td>", $data["status"], "</td>";
            echo "<td>
                    <a href='update_members.php?id=" . $data["id"] . "'class='btn btn-warning'>Edit</a>
                    <a href='delete_members.php?id=" . $data["id"] . "'class='btn btn-danger'>Delete</a>
                </td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        ?>
    </div>

    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstab/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>

</html>