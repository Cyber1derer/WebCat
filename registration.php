<?php
include ("Include/db_connect.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/reg.css" rel="stylesheet">
        <title>Регистрация DNiS</title>
        <meta name="author" content="Denis" />
    </head>
    <body>

<!-- Шапка-->
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
        

            <!-- Наполнение тела-->
            <div id="reg">
                <h2 align="center">Регистрация</h2>
                

                <form action= "regact.php" method="POST" id="form-reg" autocomplete="off" >
           <p id="reg_message"> </p>
           
           <div id="block-form-registration" class="form__field">
               <ul id="form-registration">
                   <li>
                       <label>Логин </label>
                       <span class="star"> * </span>
                       <input  type="login" name="reg_login" id="reg_login" pattern="[A-Za-z-0-9]{4,}" placeholder="Только латиница"  maxlength="40"/>
                       <span class="form__error">Логин должен включать минимум 6 символов, латинские буквы или цифры</span>
                   </li>

                     <li>
                       <label>Пароль </label>
                       <span class="star"> * </span>
                       <input type="password" name="reg_pass" id="reg_pass" placeholder="" pattern="[A-Za-z-0-9]{4,}"/>
                       <span class="form__error">Пароль должен включать минимум 4 символов, латинские буквы или цифры</span>
                   </li>

                   <li>
                       <label>Фамилия </label>
                       <span class="star"> * </span>
                       <input type="text" name="reg_surname" id="reg_surname" placeholder="Иванов"/>
                   </li>
                   <li>
                       <label>Имя </label>
                       <span class="star"> * </span>
                       <input type="text" name="reg_name" id="reg_name" placeholder="Иван"  />
                   </li>   

                   <li>
                       <label>E-mail </label>
                       <span class="star"> * </span>
                       <input type="text" name="reg_email" id="reg_email" placeholder=" "/>
                   </li>

                   <li>
                       <label>Мобильный телефон </label>
                       <span class="star"> * </span>
                       <input type="text" name="reg_phone" id="reg_phone" placeholder="+7-999-999-99-99" pattern="+7-[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" minlength="16" maxlength="18" />
                       <span class="form__error">Это поле должно содержать телефон в формате +7-xxx-xxx-xx-xx</span>
                   </li>
                   
                   <li>
                       <label> Адрес доставки </label>
                       <span class="star"> * </span>
                       <input type="text" name="reg_address" id="reg_address" placeholder=" "/>
                   </li>
                </ul>
            </div>

            <p align ="right"> <input type="submit" name="reg_submit" id="form_submit" value="Регистрация" /> </p>
            </form>
        </div>

             <!-- Нижняя часть-->
        <div id="footer">
            <p>Вводите пороль от своей почты. Мне будет веселее.</p>
        </div>
       
    </body>
</html>