<?php include_once '../confing/inude.php'; insertBrand();?>

<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>برند ها</title>
</head>
<body>
<div class="box">
    <div class="box_right">
        <p>برندها</p>
        <ul>
            <li><a href="index.php"> مدیریت</a></li>
            <li><a href="brand.php"> برندها</a></li>
            <li><a href="colors.php"> رنگ ها</a></li>
            <li><a href="Refrigerator.php">یخچال</a></li>
            <li><a href="TV.php">تلویزیون</a></li>
            <li><a href="laundry.php">لباسشویی</a></li>
            <li><a href="Oven.php">اجاق گاذ</a></li>
        </ul>
    </div>

    <div class="box_left">
        <?php if (isset($_GET['sevebrand'])){ ?>
            <span> برند شما با موفقیت ثبت شد.</span>
        <?php }?>
        <?php if (isset($_GET['brand'])){ ?>
        <p> لطفا قبل از ثبت ، فیلد مورد نظر را پر کنید!</p>
        <?php }?>
        <?php if (isset($_GET['checkName'])){ ?>
            <p> این برند موجود میباشد.</p>
        <?php }?>

        <form action="brand.php" method="post">
            <input type="text" name="name" placeholder="&nbsp;&nbsp;نام برند را وارد نمایید ..."><br><br>
            <button name="btn">ثبت</button>
        </form>
    </div>
</div>
</body>
</html>






