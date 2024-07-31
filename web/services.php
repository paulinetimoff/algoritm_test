<?php

require_once('templates/top.php');

$query = "SELECT * FROM articles";
$art_obj = mysqli_query($link, $query);
if (!$art_obj) {
    exit($query);
}

?>

<section class="py-16 bg-gray-700">
    <div class="container mx-auto">
        <h2 class="text-3xl text-white font-bold mb-8 text-center">Наши услуги</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-pink-200 shadow-md rounded-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-xl text-gray-900 font-bold mb-4">Дизайн</h3>
                    <p class="text-gray-700 mb-4">
                        Разработаем дизайн сайта, фирменный стиль, логотип, медиакит и даже дизайн интерьера для вашего офиса
                    </p>
                    <a href="design.php" class="inline-block bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4 rounded">
                    Подробнее
                    </a>
                </div>
            </div>
            <div class="bg-blue-200 shadow-md rounded-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-xl text-gray-900 font-bold mb-4">Разработка</h3>
                    <p class="text-gray-700 mb-4">
                        Сделаем лендинг, сайт-визитку, корпоративный сайт или мобильное приложение
                    </p>
                    <a href="devolepment.php" class="inline-block bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">
                        Подробнее
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-700">
    <div class="container mx-auto">
        <h2 class="text-3xl text-white font-bold mb-8 text-center">За что нас ценят клиенты?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-purple-200 shadow-md rounded-lg p-6">
            <h3 class="text-xl text-gray-900 font-bold mb-4">Креативность</h3>
            <p class="text-gray-700">
                Мы предлагаем небанальные идеи, рассматриваем с клиентом свежие кейсы из других сфер
            </p>
            </div>
            <div class="bg-purple-200 shadow-md rounded-lg p-6">
            <h3 class="text-xl text-gray-900 font-bold mb-4">Можем работать без ТЗ</h3>
            <p class="text-gray-700">
                Вы можете приходить только с идеей - мы всегда сможем предложить варианты ее реализации
            </p>
            </div>
            <div class="bg-purple-200 shadow-md rounded-lg p-6">
            <h3 class="text-xl text-gray-900 font-bold mb-4">Индивидуальный подход</h3>
            <p class="text-gray-700">
                Мы работаем над каждым проектом индивидуально, ставим себя на место клиента, зная, как важно выделяться на рынке 
            </p>
            </div>
        </div>
    </div>
    <div class="mt-8 text-center">
        <a href="tel:+375257654321" class="inline-block bg-purple-500 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded">
            Связаться с нами
        </a>
    </div>
</section>



<?php
require_once('templates/footer.php');
?>