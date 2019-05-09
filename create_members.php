<?php
require "config/connect_mysql.php";
//include "config/connect_mysql.php";

$msg = "";

//ตรวจสอบการ Submit 
if (!empty($_POST["submit"])) {
    //รับค่าจากฟอร์ม
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $password = $_POST['password'];
    $status = $_POST['status'];

    $sql = "INSERT INTO members(fullname,email,tel,password,status) 
        VALUES('$fullname','$email','$tel',' $password','$status')";

    $query = mysqli_query($connect, $sql);
    if ($query) {
        $msg = "<div class='alert alert-success'>Add member success</div>";
        echo "<meta http-equiv=\"refresh\" content=\"3;url='read_members.php'\">";
    } else {
        $msg = "<div class='alert alert-danger'>Add member fail!!</div>";
    }
}



?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add member</title>

    <link rel="stylesheet" href="bootstab/bootstrap-4.3.1-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="jumbotron bg-success text-light">
        <h1 class="display-5 text-center">Add new member</h1>
    </div>

    <div class="container">
        <?php echo $msg; ?>

        <form col-md-6 offset-md-3" method="POST" action="create_members.php">
            <div class="form-group row">
                <label for="fullname" class="col-sm-3 col-form-label">Full Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">E-Mail</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" id="email" placeholder="" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="tel" class="col-sm-3 col-form-label">Tel</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="tel" id="tel" placeholder="" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="password" id="password" placeholder="" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="status" class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" name="status" id="status" placeholder="" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="submit" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <input type="submit" name="submit" value="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>

    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstab/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>

</html>