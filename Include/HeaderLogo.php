<link href="css/reset.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">


<div id="header">
            <a href="index.php"><img id="img-logo" src="Content/Todd.png" alt="Смотреть не нужно - нужно покупать"width = 5% >  </a> 
            <h1 id="logo-text">Купи товар</h1>

                    <div id="info">
            <p aling ="right"> Номер телефона поддержки. </p>
              <h3 aling="right"> +7-964-716-11-69 </h3>
              <?php
              	session_start();
              if (empty($_COOKIE['login_us']))
               {
                  // Если пусты, то мы не выводим ссылку
                  echo "Зарегистрируйтесь, ведь эта фунция зачем-то сделана";
                  
               }
                else
                {
                  $login = $_COOKIE['login_us'];
                  // Если не пусты, то мы выводим ссылку
                 echo "Денис, вставь сюда корзину что-ли ";
                 
                }
                ?>
         </div>  
          <!--Блок поиска-->
        <div id="block-search">
            <!--Все что напишет пользователь, запишется в переменную q -->
        <form method="GET" action = "search.php?q=">
        <!--Создание поля-->
               <?php if (isset ($_GET["q"])) {
                 ?>
            <input type= "text" id="input-search" name="q" placeholder= " Поиск среди товаров" value = "<?php echo $_GET["q"] ?>"/>
            <?php  }
              else {  ?>
                <input type= "text" id="input-search" name="q" placeholder= " Поиск среди товаров">
                <?php }
              ?>
        <input type="submit" id="buttom-search" value="Поиск" />
        </div>
         </div> 