<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
                <label>Имя:<input type="text" name="full_name" placeholder="Введите имя"></label><br>
                <label>Фамилия:<input type="text" name="last_name" placeholder="Введите фамилию"></label><br>
                <label>Адрес:<input type="text" name="adr" placeholder="Введите адрес"></label><br>
                <label><span class="text-left">Список профессий :</span>
                     <select name="rubric">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select></label><br>
                <label>Телефон:
                    <input type="text" 
                            name="phone" 
                            id="phone"
                            placeholder="+375(00)000-00-00">
                </label><br>
                <label><span>Согласен на обработку персональных данных : </span>
                <input type="checkbox" name="allowComments" checked /></label><br>
                <label>Прикрепить фото  <input name="avatar" type="file"></label><br>
                <label>Пароль:<input type="password" name="password" placeholder="Ведите пароль"></label><br>
                <label>Повторите пароль:<input type="password" name="password_confirm" placeholder="Повторите пароль"></label><br>
                <button type="submit">Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="/">авторизируйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
  
    </form>

    <script src="https://unpkg.com/imask"></script>
    <script src="script.js"></script> 
</body>
</html>






