<?php
include ("Include/db_connect.php");
?>
    <?php
        include ("Include/HeaderLogo.php");
        ?>
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
                <li> <?php if (isset($_COOKIE['login_us'])) {
                                $login=$_COOKIE["login_us"]; 
                                $query2 = "SELECT * FROM account WHERE Adminka='1'";
                                $result =mysqli_query($link,$query2) or die("Ошибка проверки прав" . mysqli_error($link));
                                if($result){ ?>
                                  <a href="AdminIndex.php">  <img src="Content/Admin.jpg"  alt="Смотреть не нужно - нужно покупать" > </a> 
                         <?php   }
                            } ?>
                </li>
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
                <h2>Выбирай - не скупись</h2>
            <ul id="block-tovar-grid">
            <?php
              if (isset ($_COOKIE['ccity'])) { 
                  $cccity=$_COOKIE['ccity'];
                $query = "SELECT * FROM products WHERE Visible='1' AND Cyti_product LIKE '%$cccity%' ";
              }
              else {
                  echo 'Город не выбран. Вы видете весь каталог.';
                $query = "SELECT * FROM products WHERE Visible='1'"; 
                }
                $result =mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link));
                if (mysqli_num_rows($result)>0)
                {
                    $row = mysqli_fetch_array($result); /* -хранит массив с результатом запроса */
                    do {

// Функция уменьшения картинки, сохраняя пропорции
                       if ($row["image"] !="" && file_exists("./db_images/".$row["image"]))
                        {
                            $img_path='./db_images/'.$row["image"];
                            $max_width=200;
                            $max_height=200;
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

                        if(session_id() == '') {
                            session_start();
                        }
                        if (isset($_COOKIE['login_us'])) {
                            $login=$_COOKIE["login_us"];}
// Конец функции 
                        echo '
                        <li>
                        <div class="block-images-grid" >
                        <img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
                        </div>
                        <p class="style-title-grid"> <a href="view-content.php?id='.$row["products_id"].'">'.$row["title"].' </a> </p>
                        <a href="#" class="add-cart-style-grid"> </a>
                        <p class = "style-price-grid" ><strong> '.$row["price"].' </strong> руб. </p>
                        <div class ="features">
                        '.$row["features"].'                               
                        </div>
                        </li>
                        ';
                    }
                        while( $row = mysqli_fetch_array($result));
                }
                    
                ?>
                 </ul>
        </div>
        </div>
             <!-- Нижняя часть-->
        <div id="footer">
            <p>Все совпадения с реальными марками случайны</p>
            <p>Дизайн предоставлен ужасным вкусом и сайтом Metanit.com</p>
        </div>
       
    </body>
</html>