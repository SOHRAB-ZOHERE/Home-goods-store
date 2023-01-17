<?php  include_once '../confing/inude.php';
$selectBrand= selectBrand();
$selectColor= selectColor();
insertRef();
?>
<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>یخچال</title>
</head>
<body>
<div class="box">
    <div class="box_right">
        <p>یخچال</p>
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
        <?php if (isset($_GET['checkRef'])){ ?>
            <p> این نام از قبل ثبت شده! </p>
        <?php }?>
        <?php if (isset($_GET['refrigerator'])){ ?>
            <p> لطفا جاهای خالی را پر کنید!</p>
        <?php }?>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="&nbsp;&nbsp;نام یخچال ... "><br><br>
            <input type="file" name="picture"><br><br>
            <input type="text" name="price" placeholder="&nbsp;&nbsp;قیمت..."><br><br>
            <input type="text" name="description" placeholder="&nbsp;&nbsp;توضیحات..."><br><br>
            <select name="color">
                <?php foreach ($selectColor as $value):  ?>
                    <option value="<?php echo $value['id'] ?>" ><?php echo $value['name'];  ?></option>
                <?php  endforeach; ?>
            </select>
            <br><br>
            <select name="brand">
                <?php foreach ($selectBrand as $value):  ?>
                <option value="<?php echo $value['id'] ?>" ><?php echo $value['name'];  ?></option>
                <?php  endforeach; ?>
            </select>
            <br><br><br>
            <button name="btn">ثبت</button>
        </form>
    </div>
</div>
</body>
</html>







