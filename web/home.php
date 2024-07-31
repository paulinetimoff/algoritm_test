<?php

// require_once('templates/top.php');


?>

<section class="py-20 bg-gray-700 flex justify-start md:justify-center">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
        <div class="text-center md:text-left md:mr-8">
            <h1 class="text-4xl text-white font-bold mb-4">Студия дизайна<br>и разработки приложений</h1>
            <p class="text-lg text-white mb-8">Мы беремся только за то, что хорошо умеем делать</p>
            <a href="tel:+375257654321" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded">
                Заказать
            </a>
        </div>
        <div class="mt-8 md:mt-0 shadow-lg rounded-lg w-full md:w-auto">
            <img src="../public/media/img/glav.jpg" alt="Студия дизайна и разработки" class="rounded-lg">
        </div>
    </div>
</section>

<section class="py-16 bg-gray-700">
    <div class="container mx-auto">
        <h2 class="text-3xl text-white font-bold mb-8 text-center">Что мы можем сделать для вас?</h2>
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
</section>

<div class="py-16 bg-gray-700">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
            <div class="shadow-md rounded-md p-6">
            <h3 class="text-2xl text-white font-bold mb-4">Отдохните, мы сделаем всю работу за вас!</h3>
            <p class="text-white mb-4">
                Заполните форму обратной связи, и мы свяжемся с вами в течении часа для выяснения деталей и консультации
            </p>
            <img src="../public/media/img/articles.jpg" alt="ФОТО" class="w-full rounded-md">
            </div>
            <div>
                <form>
                    <div class="mb-4">
                        <input type="text" placeholder="Ваше имя" class="w-full px-4 py-2 bg-purple-200 border-gray-700 rounded-md focus:outline-none focus:border-gray-500">
                    </div>
                    <div class="mb-4">
                        <input type="email" placeholder="Ваш email" class="w-full px-4 py-2 bg-purple-200 border-gray-700 rounded-md focus:outline-none focus:border-gray-500">
                    </div>
                    <div class="mb-4">
                        <input type="tel" placeholder="Ваш телефон" class="w-full px-4 py-2 bg-purple-200 border-gray-700 rounded-md focus:outline-none focus:border-gray-500">
                    </div>
                    <div class="mb-4">
                        <input type="services" placeholder="Какая услуга вас интересует (дизайн или разработка)" class="w-full px-4 py-2 bg-purple-200 border-gray-700 rounded-md focus:outline-none focus:border-gray-500">
                    </div>
                    <div class="mb-4">
                        <textarea placeholder="Ваше сообщение (опишите, что необходимо сделать)" class="w-full px-4 py-2 bg-purple-200 border-gray-700 rounded-md focus:outline-none focus:border-gray-500 h-32"></textarea>
                    </div>
                    <button type="submit" class="bg-purple-500 hover:bg-purple-700 text-white px-4 py-2 rounded-md">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>

<section class="py-16 bg-gray-700">
    <div class="container mx-auto">
        <h2 class="text-3xl text-white font-bold mb-8 text-center">У вас появились вопросы? Давайте на них ответим</h2>
        <div class="space-y-4">
            <div class="bg-white shadow-md rounded-lg">
                <button class="w-full px-6 py-4 text-left bg-white rounded-t-lg focus:outline-none question-btn">
                    <h3 class="text-xl font-bold">Как долго длится процесс разработки сайта?</h3>
                </button>
                <div class="px-6 py-4 rounded-b-lg hidden answer">
                    <p class="text-gray-700">
                        Время разработки зависит от сложности проекта и объема работ. Мы стараемся уложиться в
                        сжатые сроки, чтобы удовлетворять потребности наших клиентов. В среднем это занимает 6-8 недель.
                    </p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg">
                <button class="w-full px-6 py-4 text-left bg-white rounded-t-lg focus:outline-none question-btn">
                    <h3 class="text-xl font-bold">Мне нужен логотип через три дня, справитесь?</h3>
                </button>
                <div class="px-6 py-4 rounded-b-lg hidden answer">
                    <p class="text-gray-700">
                        Разработка логотипа за короткие сроки осуществима. Обычно клиент получает 5 вариантов лого на выбор.
                    </p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg">
                <button class="w-full px-6 py-4 text-left bg-white rounded-t-lg focus:outline-none question-btn">
                    <h3 class="text-xl font-bold">Руководитель делает ребрендинг и ремонт офисного помещения. Можно ли заказать дизайн офиса с учетом всех изменений? </h3>
                </button>
                <div class="px-6 py-4 rounded-b-lg hidden answer">
                    <p class="text-gray-700">
                        Дизайн офиса возможен и проектируется с учетом всех размеров, согласно архитектурному плану здания. Клиент получает 2D и 3D-проекты после рендеринга (отдельные снимки, видео и ссылку на проект) 
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-8 text-center">
            <p class="text-white mb-4">
                Если не нашли нужного ответа, напишите нам или позвоните, <br>мы ответим на интересующие вас вопросы и проконсультуируем бесплатно.
            </p>
            <a href="tel:+375257654321" class="inline-block bg-purple-500 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded">
                Связаться с нами
            </a>
        </div>
    </div>
</section>

<script src="assets/js/feedback.js"></script>
<script src="assets/js/questions.js"></script>

<?php
// require_once('templates/bottom.php')
?>
      
   

 
    
    
