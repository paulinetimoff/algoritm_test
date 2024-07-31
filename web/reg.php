<?php
require_once 'templates/top.php';


if(!empty($_POST)){
    $error = [];
    if ($_POST['password'] !== $_POST['сonf_password']){
        $error[] = 'Не совпадают пароли';
    }

   
    $query = "SELECT * FROM users WHERE email = '".$_POST['email']."'";
    $usr = mysqli_query($link, $query);
    $check = mysqli_fetch_array($usr);

    if($check){
        $error[] = "Пользователь с таким email уже существует";
    }

    $pattern_login = strlen($_POST['login']);
    $pattern_password = strlen($_POST['password']);
    $pattern_conf_password = strlen($_POST['сonf_password']);
    $pattern_name = strlen($_POST['name']);

    if($pattern_login < 6){
        $error[] = 'В поле логин ввели менее 6 символов';
    }
    if($pattern_password < 6){
        $error[] = 'В поле пароль ввели менее 6 символов';
    }
    if($pattern_conf_password < 6){
        $error[] = 'В поле подтверждения пароля ввели менее 6 символов';
    }
    if($pattern_name < 2){
        $error[] = 'В поле имя ввели менее 2 символов';
    }

    if (empty($error)){
        $query = "INSERT INTO users (name, login, email, password, status, lastvisit, datereg)
                  VALUES ('{$_POST['name']}',
                          '{$_POST['login']}',
                          '{$_POST['email']}',
                          '{$_POST['password']}',
                          'default',
                          NOW(),
                          NOW())";
    
        $result = mysqli_query($link, $query);
    
        if (!$result){
            $error = mysqli_error($link);
            exit('Ошибка: ' . $error);
        }else{
            echo 'Спасибо, вы зарегистрированы! Войдите в личный кабинет.';
        }
    }
    
        
    
}
