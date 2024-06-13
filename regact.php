<?php
include ("Include/db_connect.php");
?>
<?php
    $login = $_POST['reg_login'];
    $pass=  $_POST['reg_pass'];
    $LastName= $_POST['reg_surname'];
    $Firsname= $_POST['reg_name'];
    $email= $_POST['reg_email'];
    $phone= $_POST['reg_phone'];
    $address= $_POST['reg_address'];
    $adm=0;
    $host = "localhost";
    $user = "Admin";
    $passwordB = "123456";
    $database = "db_dnis";
    $link = mysqli_connect($host, $user, $passwordB, $database);
    $link -> set_charset("utf8");
    $puk = "INSERT INTO account VALUES ('$login','$pass','$LastName','$Firsname','$email','$phone','$address',0)";
    $result2 = mysqli_query($link, $puk) or die("Ошибка " . mysqli_error($link));
    if ($result2=='TRUE')
    {
        echo "<script>alert('Успешная Регистрация! Теперь не лишним будет авторизирвоаться');location.href='index.php';</script>";
    }
    else {
        die("<script>alert('Что-то явно пошло не так');location.href='index.php';</script>");
    }
?>