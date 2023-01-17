<?php  include_once 'confing/conn.php';
  include_once 'funaction.php';

 $selectRef= selectRef();
 $selectBrand= selectBrand();
 $selectColor= selectColor();
if (isset($_SESSION['username'])){

}else{
    header('location:users/login.php');
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/all.min.css">


    <title>  نمایش همه یخچال ها</title>
</head>
<body>
<div class="header">
    <div class="hed-1">
        <div class="img"><img src="images/1.png" alt=""></div>
        <div class="search">
            <form action="">
                <input type="text" name="" placeholder="...جستجو">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="left">
            <span><i class="fa fa-shopping-bag"></i></span>
            <ul>
                <?php if (isset($_SESSION['username'])){ ?>
                <li><a href="#"><?php echo $_SESSION['username'] ?></a><i class="fa fa-user"></i></li>/

                <?php } else{?>


                <li><a href="#">ورود</a><i class="fa fa-user"></i></li>/
                <li><a href="#">عضویت</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
    <div class="hed-2">
        <ul>
            <li><i class="fa fa-bars"></i><a href="#">دسته بندی محصولات</a></li>
            <li><i class="fa fa-credit-card"></i><a href="#">فروش اقساطی</a></li>
            <li><i class="fa fa-calculator"></i><a href="#">محاسبه گر اقساط</a></li>
            <li><i class="fa fa-percent"></i><a href="#">فروش ویژه</a></li>
            <li><i class="fa fa-newspaper"></i><a href="#">مقالات</a><span>جدید</span></li>
        </ul>
        <div class="namber">
            <ul>
                <li><a href="#">09160283522</a><i class="fa fa-phone-volume"></i></li>
                <li><i class="fa fa-comment-dots"></i></li>
            </ul>
        </div>
    </div>
</div>
<!-----------end header------//-->
<!---------------min------------->
<div class="min">

    <div class="all_1" >

    </div>
    <p class="p_brand" >برند</p>
    <div class="all_2">
        <ul>
            <?php foreach ($selectBrand as $value): ?>
            <li><a href="allRer.php?br=<?php echo $value['id'] ?>"><?php  echo $value['name']  ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <p class="p_color">رنگ</p>
    <div class="all_color">
        <ul>
            <?php foreach ($selectColor as $value): ?>
                <li><a href="allRer.php?co=<?php echo $value['id'] ?>"><?php  echo $value['name']  ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="tv_all">
        <div class="tv_all_1"><i class="small fa fa-poll-h"></i><a href="">تلویزیون</a></div>
        <div class="tv_all_2"></div>
    </div>
   <div class="all_3">

   </div>

    <div class="all_4">

        <?php  foreach ($selectRef as $value): ?>
        <div class="all_box">
            <h3><?php echo $value['name1']  ?></h3>
            <img src="admin/image/<?php echo $value['picture']  ?>" alt="">
            <h2><?php echo  $value['price'] ?></h2>
            <p><?php echo selectBrandName( $value['brand']);  ?></p>
            <span><?php echo $value['description']  ?></span>
            <h4><?php echo selectColorName( $value['color'])  ?></h4>

        </div>
<?php  endforeach; ?>



    </div>



</div>
<script type="text/javascript" src="js/jquery-3.3.1.min.js" ></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>

