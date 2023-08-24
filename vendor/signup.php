<?php

    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $last_name = $_POST['last_name'];
    $adr = $_POST['adr'];
    $rubric = $_POST['rubric'];
    $phone = $_POST['phone'];
    $allowComments = $_POST['allowComments'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];


    if ($password === $password_confirm) {

        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../register.php');
        }

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`full_name`, `last_name`, `adr`, `rubric`, `phone`,'allowComments', `avatar`) 
        VALUES (NULL, '$full_name', '$last_name', '$adr', '$rubric', '$phone', '$allowComments','$password')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>




