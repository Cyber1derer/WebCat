<?php
include ("Include/db_connect.php");
$id = $_COOKIE['idAdm'];
?>
<?php 
if(isset($_POST['vision'])) {
    if ( $_POST['vision'] ){
        $query= "UPDATE products SET Visible=1 WHERE products_id='$id'";
        $result =mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link));
            echo 'Изменения прошли успешно. Товар теперь виден.';
    }
    else {
        $query= "UPDATE products SET Visible=1 WHERE products_id='$id'";
        $result =mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link));
            echo 'Изменения прошли успешно. Товар теперь виден.';
    }
}
else {
    $query= "UPDATE products SET Visible=0 WHERE products_id='$id'";
    $result =mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link));
            echo 'Изменения прошли успешно. Товар убран из поля зрения.';
 }