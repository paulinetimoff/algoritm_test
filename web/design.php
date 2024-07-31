<?php

require_once('templates/top.php');

?>

<section class="py-20 bg-gray-700">
  <div class="container mx-auto">
    <h2 class="text-3xl font-bold text-white mb-8 text-center">Наши услуги по дизайну</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <div class="bg-gray-800 shadow-md rounded-lg overflow-hidden">
        <div class="p-6">
          <h3 class="text-xl text-white font-bold mb-4">Дизайн сайтов</h3>
          <p class="text-white mb-4">
            Разработка уникального, адаптивного и привлекательного дизайна для ваших веб-проектов.
          </p>
          <a href="#" class="inline-block bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4 rounded">
            Подробнее
          </a>
        </div>
      </div>
      <div class="bg-gray-800 shadow-md rounded-lg overflow-hidden">
        <div class="p-6">
          <h3 class="text-xl text-white font-bold mb-4">Создание баннеров</h3>
          <p class="text-white mb-4">
            Разработка эффектных баннеров, рекламных объявлений и других креативных элементов.
          </p>
          <a href="#" class="inline-block bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4 rounded">
            Подробнее
          </a>
        </div>
      </div>
      <div class="bg-gray-800 shadow-md rounded-lg overflow-hidden">
        <div class="p-6">
          <h3 class="text-xl text-white font-bold mb-4">Создание брендбуков</h3>
          <p class="text-white mb-4">
            Разработка фирменного стиля, логотипа, цветовой палитры и других брендовых элементов.
          </p>
          <a href="#" class="inline-block bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4 rounded">
            Подробнее
          </a>
        </div>
      </div>
      <div class="bg-gray-800 shadow-md rounded-lg overflow-hidden">
        <div class="p-6">
          <h3 class="text-xl text-white font-bold mb-4">Дизайн интерьера</h3>
          <p class="text-white mb-4">
            Создание уникальных, стильных и функциональных интерьерных решений для вашего бизнеса.
          </p>
          <a href="#" class="inline-block bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4 rounded">
            Подробнее
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="py-16 bg-gray-800">
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
              <input type="text" placeholder="Ваше имя" class="w-full px-4 py-2 bg-pink-100 border-gray-700 rounded-md focus:outline-none focus:border-gray-500">
          </div>
          <div class="mb-4">
              <input type="email" placeholder="Ваш email" class="w-full px-4 py-2 bg-pink-100 border-gray-700 rounded-md focus:outline-none focus:border-gray-500">
          </div>
          <div class="mb-4">
              <input type="tel" placeholder="Ваш телефон" class="w-full px-4 py-2 bg-pink-100 border-gray-700 rounded-md focus:outline-none focus:border-gray-500">
          </div>
          <div class="mb-4">
              <input type="services" placeholder="Какая услуга вас интересует (дизайн или разработка)" class="w-full px-4 py-2 bg-pink-100 border-gray-700 rounded-md focus:outline-none focus:border-gray-500">
          </div>
          <div class="mb-4">
              <textarea placeholder="Ваше сообщение (опишите, что необходимо сделать)" class="w-full px-4 py-2 bg-pink-100 border-gray-700 rounded-md focus:outline-none focus:border-gray-500 h-32"></textarea>
          </div>
          <button type="submit" class="bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4 rounded">Отправить</button>
        </form>
      </div>
    </div>
  </div>
</div>

<section class="py-16 bg-gray-700">
  <div class="container mx-auto">
    <h2 class="text-3xl text-white font-bold mb-8 text-center">Часто задаваемые вопросы о дизайне</h2>
    <div class="space-y-4">
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
            <h3 class="text-xl font-bold">Руководитель делает ребрендинг и ремонт офисного помещения. Можно ли заказть дизайн офиса с учетом всех изменений? </h3>
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
      <a href="#" class="inline-block bg-pink-400 hover:bg-pink-500 text-white font-bold py-3 px-6 rounded">
          Связаться с нами
      </a>
    </div>
  </div>
</section>

<script src="assets/js/feedback.js"></script>
<script src="assets/js/questions.js"></script>

<?php
require_once('templates/footer.php');
?>