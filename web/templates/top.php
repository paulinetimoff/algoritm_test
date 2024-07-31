<?php

session_start();

require_once('config/config.php');
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="сайты на заказ, разработка сайтов, дизайн сайта, веб-студия, дизайн, разработка">   
    <meta name="description" content="Студия дизайна и разработки приложений TIPO.">
    <title>Веб-студия TIPO</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

    <header class="bg-gray-900 text-white py-4">
        <div class="container mx-auto flex flex-col md:flex-row md:justify-between items-center">
            <div class="text-2xl font-bold">
                <a href="/">
                    <img src="logo_tipo.png" alt="Логотип TIPO" class="w-15 h-5">
                </a>
            </div>
            <nav class="mt-4 md:mt-0">
                <ul class="flex flex-wrap justify-center space-x-4 md:space-x-4">
                <li><a href="/" class="hover:text-gray-400">Главная</a></li>
                <li><a href="services.php" class="hover:text-gray-400">Услуги</a></li>
                <li><a href="about.php" class="hover:text-gray-400">О нас</a></li>

                <?php

                if(isset($_SESSION['user_id'])){
                    // echo $_SESSION['user_id'];

                ?>

                <li><a href="logout.php" class="hover:text-gray-400">Выйти</a></li>

                <?php

                }else{
                ?>

                <li><a href="registration.php" class="hover:text-gray-400">Войти</a></li>
                </ul>

                <?php

                }
                ?>
            </nav>
        </div>
    </header>



    