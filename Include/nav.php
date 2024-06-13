  <!-- Меню навигации-->
  <?php
include ("Include/db_connect.php");
?>
        <head>
        <meta charset="utf-8">
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
  <div id="nav">






                <ul>
					<li class="active"><b><u><a href="index.php">Главная</a></u></b></li>
					<li><a href="blog.html">Блог</a></li>
					<li><a href="about.html">О проекте</a></li>
                    <li><a href="contact.html">Контакты</a></li>

                    <!--- Выбор города начат--->
                    <?php 
                    if (isset ($_GET["c"])) {
                   $city=$_GET["c"];
                   setcookie("ccity", $city);
                   ?>
                      <?php  switch ($city) {
                        case "Eg":
                         ?> <p id="Zabil">  <li id="Egoryevsk">  <a href="#zatemnenie" class="Zabil"> Ваш город -  <span>  Егорьевск </span> </a> </li> 
                         <?php  break;
                         case "Moscow":
                         ?> <p id="Zabil">  <li id="Egoryevsk">  <a href="#zatemnenie" class="Zabil"> Ваш город -  <span>  Москва </span> </a> </li> 
                        <?php  break;
                          case "Ber":
                            ?> <p id="Zabil">  <li id="Egoryevsk">  <a href="#zatemnenie" class="Zabil"> Ваш город -  <span>  Берлин  </span> </a> </li> 
                             <?php  break;
                    }
                  }
                      else {  
                        if (isset($_COOKIE['ccity'])) { ?>
                        <?php  switch ($_COOKIE['ccity']) {
                        case "Eg":
                         ?> <p id="Zabil">  <li id="Egoryevsk">  <a href="#zatemnenie" class="Zabil"> Ваш город -  <span>  Егорьевск </span> </a> </li> 
                         <?php  break;
                         case "Moscow":
                         ?> <p id="Zabil">  <li id="Egoryevsk">  <a href="#zatemnenie" class="Zabil"> Ваш город -  <span>  Москва </span> </a> </li> 
                        <?php  break;
                          case "Ber":
                            ?> <p id="Zabil">  <li id="Egoryevsk">  <a href="#zatemnenie" class="Zabil"> Ваш город -  <span>  Берлин  </span> </a> </li> 
                             <?php  break;
                    }
                  } 
                        else {        
                        $city="Москва"; ?>
                          <p id="Zabil">  <li id="Egoryevsk">  <a href="#zatemnenie" class="Zabil"> Ваш город -  <span>  Москва </span> </a> </li> 
                              
                        <?php }}
                      ?>


                    <div id="zatemnenie">
      <div id="okno">
       Выберите свой город.
      <p><br><br><br><br></p>
      <a href="index.php?c=Eg" class = "sds">Егорьевск</a></li>
      <a href="index.php?c=Moscow" class = "sds">Москва</a></li>
      <a href="index.php?c=Ber" class = "sds">Берлин</a></li>
      <p><br><br></p>
        <a href="#" class="close">Закрыть окно</a>
      </div>

<!--- Выбор города окончен--->


    </div></p>
                </ul>
                <?php
                if(session_id() == '') {
                    session_start();
                }
                if (isset($_COOKIE['login_us'])) {
                    $login=$_COOKIE["login_us"];
  
                  // Если куки не пусты, то выводим надпись и кнопки
                 echo 'Добро пожаловать, <b>'.$login.'</b>';
                 echo '<p id="reg-sing-title"aling= "right"> <a class ="top-sing" href="logout.php"> Выход </a> </p>';
            }
            if (empty($login))
            {
           echo  '<p id="reg-sing-title"aling= "right"> <a class ="top-sing" href="aut.php"> Вход </a>  <a href = "registration.php"> Регистрация </a></p>';
            }
                ?>
        </div>