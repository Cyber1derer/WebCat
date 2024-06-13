<?php
include ("Include/db_connect.php");
?>
    <?php
        include ("Include/HeaderLogo.php");
        ?>

        <?php
            global $search;
            $search = $_GET["q"];
        ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <title>Поиск - <?php echo $search?> </title>
        <meta name="author" content="Denis" />
    </head>

    <body>
       <!-- Подключение файла, отвечающего за верхнуюю часть.-->
       <?php
        include ("Include/nav.php");
        ?>
      
        <!-- Блок справа-->
        <div class="wrapper">
            <div id="sidebar2" class="aside">
            <li> <?php if (isset($_COOKIE['login_us'])) {
                                $login=$_COOKIE["login_us"]; 
                                $query2 = "SELECT * FROM account WHERE Adminka='1'";
                                $result =mysqli_query($link,$query2) or die("Ошибка проверки прав" . mysqli_error($link));
                                if(mysqli_num_rows($result)>0){ ?>
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
                    
            </div>


            <!-- Наполнение главной-->
            <div id="article">
                <h2>Кто ищет - тот всегда найдет</h2>
                 <!-- Проверка корректности поиска-->
                <?php
                    if (strlen($search) >= 2 && ($search<150)) 
                    {
                ?>
            <ul id="block-tovar-grid">
            <?php
                $query = "SELECT * FROM products WHERE title LIKE '%$search%' AND Visible='1'";
                $result =mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link));
                if (mysqli_num_rows($result)>0){
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
// Конец функции 
                        echo '
                        <li>
                        <div class="block-images-grid" >
                        <img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
                        </div>
                        <p class="style-title-grid"> <a href="">'.$row["title"].' </a> </p>
                        <a class="add-cart-style-grid"> </a>
                        <p class = "style-price-grid" ><strong> '.$row["price"].' </strong> руб. </p>
                        <div class ="features">
                        '.$row["features"].'
                        </div>
                        </li>
                        ';
                    }
                        while( $row = mysqli_fetch_array($result));
                }
                else {
                    echo "<p>Такого товара еще не завезли</p>";
                }
                    
                ?>
                </ul>
        </div>
    
        <?php
    } // Конец проверки поиска
    else {
        echo "<p> Поисковое значение может быть не меньше 2 символов и не более 64 (А количество моих баллов за экзамен -  может) </p>";
    }
    ?>
        </div>
             <!-- Нижняя часть-->
        <div id="footer">
            <p>Все совпадения с реальными марками случайны</p>
            <p>Дизайн предоставлен ужасным вкусом и сайтом Metanit.com</p>
        </div>
       
    </body>
</html>