<?php  include_once '../funaction.php';
  include_once '../confing/conn.php';
 insertRegister();


?>

<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
</head>
<body>

<div>
    <form action="register.php" method="post">
        <input type="text" name="username" placeholder="نام کاربری"><br>
        <input type="text" name="password" placeholder="پسوورد"><br>
        <button name="btn">ثبت نام </button>
    </form>
</div>

</body>
</html>
