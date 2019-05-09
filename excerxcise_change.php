<?php
$change = 0.0;
//เช็คการ submit form
if (!empty($_POST["submit"]))
{
//รับค่าจากฟอร์มด้วย php
    $price = $_POST["price"];
    $money = $_POST["money"];

    $change = $money - $price;
    //echo $change;
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstab/bootstrap-4.3.1-dist/css/bootstrap.min.css">

</head>
<body>
    <div class="jumbotron bg-danger text-warning">
        <h1 class="display-5 text-center"> โปรแกรมคิดเงินทอน</h1>
    </div>
<div class="container">
    <form class="col-md-6 offset-md-3" method="POST" action ="excerxcise_change.php" >
        <!--ช่อง ใส่ ค่า 1-->
        <div class="form-group row">
            <label for="price" class="col-sm-3 col-form-label">ราคาสินค้า</label>
            <div class="col-sm-9">
                <input type="number" step="0.1" class="form-control" name="price" id="price" placeholder=""  required>
            </div>
        </div>
        <!--ช่อง ใส่ ค่า 2-->
        <div class="form-group row">
            <label for="money" class="col-sm-3 col-form-label">จ่ายเงินมา</label>
            <div class="col-sm-9">
                <input type="number" step="0.1" class="form-control" name="money" id="money" placeholder="" required>
            </div>
        </div>
        <!--ปุ่ม -->
        <div class="form-group row">
        <label for="inputName" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
                <input type="submit" name="submit" value="คำนวณ" class="btn btn-primary">
                <hr>
                    เงินทอน <?=$change;?> บาท
            </div>
        </div>
    </form>
</div>

 <script src="jquery/jquery-3.4.1.min.js"></script>
 <script src="bootstab/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>
