<?php
//----------------BRAND---------------------------
function insertBrand()
{
    global $connect;
    if (isset($_POST['btn'])){
        if (checkName()== true){
            header('location:brand.php?checkName');
        }else {
            if (!empty($_POST['name'])) {
                $sql = "INSERT INTO brand SET name=?";
                $result = $connect->prepare($sql);
                $result->bindValue(1, $_POST['name']);
                $result->execute();
                header('location:brand.php?sevebrand=error');

            } else {
                header('location:brand.php?brand=error');
            }
        }
    }
}

function selectBrand()
{
    global $connect;
        $sql = "SELECT * FROM brand";
        $result = $connect->prepare($sql);
        $result->execute();
        if ($result->rowCount()) {
            $row = $result->fetchAll(PDO::FETCH_ASSOC);

            return $row;
        } else {
            return false;
        }

}

function checkName()
{
    global $connect;
    $sql="SELECT * FROM brand WHERE name=?";
    $result=$connect->prepare($sql);
    $result->bindValue(1, $_POST['name']);
    $result->execute();
    if ($result->rowCount()){
        return $result;
    }else{
        return false;
    }
}


//--------------------COLORS-----------

function insertColor()
{
    global $connect;
    if (isset($_POST['btn'])){
        if (checkColor() == true){
           header('location:colors.php?checkColor');
        }else {
            if (!empty($_POST['name'])) {
                $sql = "INSERT INTO color SET name=?";
                $result = $connect->prepare($sql);
                $result->bindValue(1, $_POST['name']);
                $result->execute();
                header('location:colors.php?sevecolor=error');

            } else {
                header('location:colors.php?color=error');
            }
        }
    }
}

function checkColor()
{
    global $connect;
    $sql="SELECT * FROM color WHERE name=?";
    $result=$connect->prepare($sql);
    $result->bindValue(1,$_POST['name']);
    $result->execute();
    if ($result->rowCount()){
        return $result;
    }else{
        return false;
    }
}

function selectColor()
{
    global $connect;
    $sql="SELECT * FROM color ";
    $result=$connect->prepare($sql);
    $result->execute();
    if ($result->rowCount()){
        $row=$result->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }else{
        return false;
    }
}

//------------------REFRIGERATOR--------

function insertRef()
{
    global $connect;
    if (isset($_POST['btn'])) {
        if (checkRef() == true) {
         header('location:Refrigerator.php?checkRef');
        } else {

            $sql = "INSERT INTO refrigerator SET name1=?,picture=?,price=?,description=?,color=?,brand=?";
            $result = $connect->prepare($sql);
            $result->bindValue(1, $_POST['name']);
            $file = $_FILES['picture'];
            $_1=explode('.',$file['name']);
            $_2=end($_1);
            $name='img-'.rand(1,5000).'.'.$_2;
            move_uploaded_file($file['tmp_name'],'image/'.$name);
            $result->bindValue(2, $name);
            $result->bindValue(3, $_POST['price']);
            $result->bindValue(4, $_POST['description']);
            $result->bindValue(5, $_POST['color']);
            $result->bindValue(6, $_POST['brand']);
            $result->execute();
                }
        }

}

function checkRef(){
    global $connect;
    $sql="SELECT * FROM refrigerator WHERE   name1=?  ";
    $result = $connect->prepare($sql);
    $result->bindValue(1, $_POST['name']);
    $result->execute();
    if ($result->rowCount()){
        return $result;
    }else{
        return false;
    }
}

function selectRef()
{
    global $connect;
        if (isset($_GET['br'])){
            $br=$_GET['br'];
            $sqlbr="SELECT * FROM refrigerator WHERE brand = '$br'";
            $resultbr=$connect->prepare($sqlbr);
            $resultbr->execute();
            if ($resultbr->rowCount() >=1){
                $rowbr=$resultbr->fetchAll(PDO::FETCH_ASSOC);
                return $rowbr;
            }
        }elseif (isset($_GET['co'])){
            $co=$_GET['co'];
            $sqlbr="SELECT * FROM refrigerator WHERE color= '$co'";
            $resultbr=$connect->prepare($sqlbr);
            $resultbr->execute();
            if ($resultbr->rowCount() >=1){
                $rowbr=$resultbr->fetchAll(PDO::FETCH_ASSOC);
                return $rowbr;
            }

        }else {
            $sql = "SELECT * FROM refrigerator";
            $result = $connect->prepare($sql);
            $result->execute();
            if ($result->rowCount()) {
                $row = $result->fetchAll(PDO::FETCH_ASSOC);
                return $row;
            } else {
                return false;
            }
        }
}

//-------------------SELECT BRAND NAME-------------

function selectBrandName($value)
{
    global $connect;
    $sql="SELECT * FROM brand WHERE id=?";
    $result=$connect->prepare($sql);
    $result->bindValue(1,$value);
    $result->execute();
    if ($result->rowCount()){
        $row=$result->fetchAll(PDO::FETCH_ASSOC);
        foreach ($row as $valueBrand){
            return $valueBrand['name'];
        }
    }else{
        return false;
    }
}

function selectColorName($value)
{
    global $connect;
    $sql="SELECT * FROM color WHERE id=?";
    $result=$connect->prepare($sql);
    $result->bindValue(1,$value);
    $result->execute();
    if ($result->rowCount()){
        $row=$result->fetchAll(PDO::FETCH_ASSOC);
        foreach ($row as $valueColor){
            return $valueColor['name'];
        }
    }else{
        return false;
    }

}






//------------------register--------------

function insertRegister()
{
    global $connect;
    if (isset($_POST['btn'])){
        $sql="INSERT INTO users SET username=? , password=?";
        $result=$connect->prepare($sql);
        $result->bindValue(1,$_POST['username']);
        $result->bindValue(2,$_POST['password']);
        $result->execute();

    }
}







function selectUsers()
{
    global $connect;
    $sql="SELECT * FROM users";
    $result=$connect->prepare($sql);
    $result->execute();
    if ($result->rowCount()){
        $row=$result->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }else{
        return false;
    }
}







