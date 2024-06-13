<?php
include ("Include/db_connect.php");
?>
<?php
    session_start();
    
    if(isset($_POST['aut_log']) and isset($_POST['aut_pass'])) {
        $login = $_POST['aut_log'];
        $pass=  $_POST['aut_pass'];
        $query ="SELECT *FROM account WHERE user_login= '$login' and user_pass='$pass'";
        $result= mysqli_query($link,$query) or die(  mysqli_error($link));
        $count = mysqli_num_rows($result);
        if($count==1) {
            $_SESSION['user_login'] = $login;
            if (isset ($_SESSION['user_login'])) {
                $login=$_SESSION['user_login'];
                echo "<script>alert('Успешный вход, $login');location.href='index.php';</script>";
                 setcookie("login_us", $login);
            }   
            else {
                echo "Что-то не так на строке 20";
            }
        } else {
            $fmsg ="Ошибка, пользователь не найден или неверный пароль";
            echo ("$fmsg");
        }
   
    }
    else {
        echo "Все пошло совсем не так ( 29 строка )";
    }
    ?>