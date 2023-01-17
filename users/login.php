
<?php  include_once '../funaction.php';
include_once '../confing/conn.php';
 $selectUsers= selectUsers();


?>

<?php foreach ($selectUsers as $vall): ?>
<h1><?php  echo $_SESSION['id']= $vall['id']; ?></h1>
<h1><?php  echo $_SESSION['username']= $vall['username']; ?></h1>
<?php endforeach; ?>

<?php


    if (isset($_POST['btn'])){
        $username=$_POST['username'];
        $sql="SELECT * FROM users WHERE  username=? ";
        $result=$connect->prepare($sql);
        $result->bindValue(1,$username);
        $result->execute();
        if ($result->rowCount()){
            $_SESSION['username']=$username;
            header('location:../allRer.php');
        }else{
            header('location:login.php');

        }

}


?>


<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

<div>
    <form action="login.php" method="post">
        <input style="display: none" type="text" name="id" placeholder="id">
        <input type="text" name="username" placeholder="نام کاربری"><br>
        <input type="text" name="password" placeholder="پسوورد"><br>
        <button name="btn">ثبت نام </button>
    </form>
</div>

</body>
</html>
