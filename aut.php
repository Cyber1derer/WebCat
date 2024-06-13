<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/reg.css" rel="stylesheet">
        <title>Регистрация DNiS</title>
        <meta name="author" content="Denis" />
	<?php 
  include ("Include/db_connect.php");
        $title = "Авторизация - DNiS";
        ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <div id="header">
            <a href="index.php"><img id="img-logo" src="Content/Todd.png" alt="Смотреть не нужно - нужно покупать"width = 5% >  </a> 
            <h1 id="logo-text">Купи товар</h1>

                    <div id="info">
            <p aling ="right"> Номер телефона поддержки. </p>
            <h3 aling="right"> +7-964-716-11-69 </h3>
         </div>  
         </div> 
         <!-- Конец шапки-->
           <!-- Меню навигации-->
           <div id="nav">
                <ul>
		        <li class="active"><b><u><a href="index.php"> <--- Назад на главную</a></u></b></li>
                </ul>
        </div>
</head>
<body>

      <div class="container">
	 <center> <h2>Авторизация</h2></center>
                <form action= "autcheck.php" method="POST" class="form-singin" autocomplete="off" >    
                       <label>Логин </label>
                       <input  type="login" name="aut_log" class="form-control" pattern="[A-Za-z-0-9]{4,}" placeholder="username"  maxlength="40"/>
                       <span class="form__error">Логин должен включать минимум 6 символов, латинские буквы или цифры</span>
                       <label>Пароль </label>
                       <input  type="password" name="aut_pass" id="aut_pass" class="form-control"  placeholder="password" pattern="[A-Za-z-0-9]{4,}"  maxlength="40"/>
                       <span class="form__error">Пароль должен включать минимум 4 символов, латинские буквы или цифры</span>

                       <button class='btn btn-lh btn-primary btn-block" type="submit" id="buttomLog'>Войти</buttom>              
    <!--* Кнопочка отправляет данные на страничку testreg.php --> 
                   </div>
   
	</form>
    <br>
      </div>
 <p id="Zabil">
    <a href="#zatemnenie" class="Zabil" >Забыли пароль?</a> 
	<br>
	
	<div id="zatemnenie">
      <div id="okno">
        Тут, не доделано, но это уже точно не до <b> вторника <b>.
        <a href="#" class="close">Закрыть окно</a>
      </div>
    </div>
    </p>
    </body>
</html>