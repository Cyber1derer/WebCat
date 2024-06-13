<?php
$db_host = 'localhost';
$db_user = 'Admin';
$db_pass ='123456';
$db_database='db_dnis';
global $link;
$link = mysqli_connect($db_host,$db_user,$db_pass,$db_database) or die("Ты опять все сломаю Бд нет.".mysqli_error());
$link -> set_charset("utf8");
?>