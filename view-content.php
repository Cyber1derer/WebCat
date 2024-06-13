<?php
include ("Include/db_connect.php");
?>
    <?php
        include ("Include/HeaderLogo.php");
        $id =$_GET["id"];        ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <title>Магазин техники DNiS - Главная</title>
        <meta name="author" content="Denis" />

        <!-- Put this script tag to the <head> of your page -->
        <script type="text/javascript" src="https://vk.com/js/api/openapi.js?166"></script>
        <script src="https://vk.com/js/api/openapi.js?166" type="text/javascript"></script>

        <script type="text/javascript">
        VK.init({apiId: API_ID, onlyWidgets: true});
        </script>


    </head>

    <body>
       <!-- Подключение файла, отвечающего за верхнуюю часть.-->

        <!-- Меню навигации-->
        <?php
        include ("Include/nav.php");
        ?>
        <!-- Блок справа-->
        <div class="wrapper">
            <div id="sidebar2" class="aside">
            <ul id="block-sidebar">
            <li> <h1>Актуальные предложения </h1> 
                <img src="Content/rekl.png"  alt="Смотреть не нужно - нужно покупать" >  </li>
                <li> <h2> Товар дня </h2>
                <img src="db_images/zach.jpeg"  alt="Смотреть не нужно - нужно покупать" > </li>
                <li> <h2> Создатель сайта </h2>
                <img src="Content/Hackerman.jpg"  alt="Смотреть не нужно - нужно покупать" > 
                Это конечно не я, но именно так я себя чувствовал, когда база данных наконец то заработала.</li>
                    
                    
                <script type="text/javascript">
                    VK.init({
                        apiId:7296461,
                        onlyWidgets: true
                    });
                    </script>
                 <!-- Put this div tag to the place, where the Comments block will be -->
                 <li>  <div class="vk_comments" id="vk_comments"></div>
                 <script type="text/javascript">
                  VK.Widgets.Comments("vk_comments", {limit: 10, width: "200", attach: "*"});
                </script>
            </div> </li>


            <!-- Наполнение главной-->
            <div id="article">
                
                <?php

                    $query = "SELECT * FROM products WHERE products_id='$id' AND Visible='1'";
                    $result =mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link));
                    if (mysqli_num_rows($result)>0) {
                    $row = mysqli_fetch_array($result); /* -хранит массив с результатом запроса */
                    do {

// Функция уменьшения картинки, сохраняя пропорции
                       if ($row["image"] !="" && file_exists("./db_images/".$row["image"]))
                        {
                            $img_path='./db_images/'.$row["image"];
                            $max_width=400;
                            $max_height=400;
                            list($width,$height)=getimagesize($img_path);
                            $ratioh =$max_height/$height;
                            $ratiow =$max_width/$width;
                            $ratio = min($ratioh,$ratiow);
                            $width=intval($ratio*$width);
                            $height = intval($ratio*$height);
                        } else {
                            $img_path="db_images/noImage.jpg";
                            $width=264;
                            $height =191;
                        }
// Конец функции 
                        echo '
                            <div id="block-content-info">
                            <img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
                                <div id="block-features">
                                    <p id="content-title">'.$row["title"].'</p>
                                    <p id="style-price"> '.$row["price"].' руб</p>
                                    <a class="add-cart-style-grid" id="add-cart-viev" tid="'.$row["products_id"].'"> </a>
                                    <p id="content-text">'.$row["features"].' </p>
                                </div>
                                <div id="block-fcontent">
                                <p id="full-content-text">'.$row["description"].' </p>
                                </div>
                             </div>
                        ';
                    }
                        while( $row = mysqli_fetch_array($result));
                    }
                ?>


<!-- Комментирвоание -->
<div id="vk_comments2" class ="vkcomments22"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments2", {limit: 10, width: "850", attach: "*"});
</script>
        </div>
             <!-- Нижняя часть-->
        <div id="footer">
            <p>Все совпадения с реальными марками случайны</p>
            <p>Дизайн предоставлен ужасным вкусом и сайтом Metanit.com</p>
        </div>
       
    </body>
</html>