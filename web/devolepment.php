<?php

require_once('templates/top.php');

$query = "SELECT * FROM articles";
$art_obj = mysqli_query($link, $query);
if (!$art_obj) {
    exit($query);
}

?>

<section class="py-20 bg-gray-700">
  <div class="container mx-auto">
    <h2 class="text-3xl font-bold text-white mb-8 text-center">Наши услуги по разработке</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-gray-800 shadow-md rounded-lg overflow-hidden">
        <div class="p-6">
          <h3 class="text-xl text-white font-bold mb-4">Веб-сайты</h3>
          <p class="text-white mb-4">
            Разработка лендингов, корпоративных сайтов, интернет-магазинов и других веб-проектов под ключ.
          </p>
          <a href="#" class="inline-block bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">
            Подробнее
          </a>
        </div>
      </div>
      <div class="bg-gray-800 shadow-md rounded-lg overflow-hidden">
        <div class="p-6">
          <h3 class="text-xl text-white font-bold mb-4">Мобильные приложения</h3>
          <p class="text-white mb-4">
            Разработка нативных или кроссплатформенных мобильных приложений для iOS и Android.
          </p>
          <a href="#" class="inline-block bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">
            Подробнее
          </a>
        </div>
      </div>
      <div class="bg-gray-800 shadow-md rounded-lg overflow-hidden">
        <div class="p-6">
          <h3 class="text-xl text-white font-bold mb-4">Системы управления</h3>
          <p class="text-white mb-4">
            Разработка кастомных систем управления бизнес-процессами, CRM и ERP-систем.
          </p>
          <a href="#" class="inline-block bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">
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
              <input type="text" placeholder="Ваше имя" class="w-full px-4 py-2 bg-blue-100 border-gray-700 rounded-md focus:outline-none focus:border-gray-500">
          </div>
          <div class="mb-4">
              <input type="email" placeholder="Ваш email" class="w-full px-4 py-2 bg-blue-100 border-gray-700 rounded-md focus:outline-none focus:border-gray-500">
          </div>
          <div class="mb-4">
              <input type="tel" placeholder="Ваш телефон" class="w-full px-4 py-2 bg-blue-100 border-gray-700 rounded-md focus:outline-none focus:border-gray-500">
          </div>
          <div class="mb-4">
              <input type="services" placeholder="Какая услуга вас интересует (дизайн или разработка)" class="w-full px-4 py-2 bg-blue-100 border-gray-700 rounded-md focus:outline-none focus:border-gray-500">
          </div>
          <div class="mb-4">
              <textarea placeholder="Ваше сообщение (опишите, что необходимо сделать)" class="w-full px-4 py-2 bg-blue-100 border-gray-700 rounded-md focus:outline-none focus:border-gray-500 h-32"></textarea>
          </div>
          <button type="submit" class="bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">Отправить</button>
        </form>
      </div>
    </div>
  </div>
</div>

<section class="py-16 bg-gray-700">
  <div class="container mx-auto">
    <h2 class="text-3xl text-white font-bold mb-8 text-center">Часто задаваемые вопросы о разработке</h2>
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
    </div>
    <div class="mt-8 text-center">
      <p class="text-white mb-4">
          Если не нашли нужного ответа, напишите нам или позвоните, <br>мы ответим на интересующие вас вопросы и проконсультуируем бесплатно.
      </p>
      <a href="#" class="inline-block bg-purple-500 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded">
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