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
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div> 
        <?php
          while($article = mysqli_fetch_array($art_obj)){
        ?>
          <h1 class="text-3xl text-white font-bold mb-4"><?= $article['tittle'] ?></h1>
          <p class="text-white mb-6">
            <?= $article['small_content'] ?>
          </p>
          <p class="text-white mb-6">
          <?= $article['content'] ?>
          </p>
          <a href="/article.php?url=<?= $article['url'] ?>"class="inline-block bg-purple-500 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded">
          Узнать больше
          </a>
      </div>
      <?php
        }
      ?>
      <div class="flex items-center justify-center">
          <img src="../public/media/img/about.jpg" alt="О нас" class="rounded-lg shadow-lg">
      </div>
    </div>
  </div>
  </section>
    
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

  <section class="py-20 bg-gray-700">
    <div class="container mx-auto">
      <h2 class="text-3xl text-white font-bold mb-8">Контакты</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-gray-800 rounded-lg p-6 shadow-lg">
          <h3 class="text-xl text-white font-bold mb-2">Адрес</h3>
          <p class="text-white">
            пр.Пушкина, 10<br>
            Минск, Беларусь, 220109
          </p>
        </div>
        <div class="bg-gray-800 rounded-lg p-6 shadow-lg">
          <h3 class="text-xl text-white font-bold mb-2">Телефон</h3>
          <p class="text-white">
            +375-(25)-765-43-21
          </p>
        </div>
        <div class="bg-gray-800 rounded-lg p-6 shadow-lg">
          <h3 class="text-xl text-white font-bold mb-2">Email</h3>
          <p class="text-white">
            info@tipo.by
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gray-700">
    <div class="container mx-auto">
      <h2 class="text-3xl text-white font-bold mb-8">Также вы можете написать нам в Telegram или Viber</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-gray-800 rounded-lg p-6 shadow-lg">
          <div class="flex items-center mb-4">
            <img src="https://via.placeholder.com/40x40" alt="Телеграм" class="h-10 w-10 mr-4">
            <h3 class="text-xl text-white font-bold">Telegram</h3>
          </div>
          <p class="text-white mb-4">
            Свяжитесь с нами через Telegram <a href="https://t.me/tipo" class="text-white hover:text-blue-700">@tipo</a>
          </p>
          <a href="https://t.me/mycompany" class="inline-block bg-purple-500 hover:bg-purple-700 text-white px-4 py-2 rounded-md">
            Написать в Телеграм
          </a>
        </div>
        <div class="bg-gray-800 rounded-lg p-6 shadow-lg">
          <div class="flex items-center mb-4">
            <img src="https://via.placeholder.com/40x40" alt="Viber" class="h-10 w-10 mr-4">
            <h3 class="text-xl text-white font-bold">Вайбер</h3>
          </div>
          <p class="text-white mb-4">
            Свяжитесь с нами через Viber по номеру <a href="viber://chat?number=+375257654321" class="text-white hover:text-blue-700">+375-(25)-765-43-21</a>
          </p>
          <a href="viber://chat?number=+375257654321" class="inline-block bg-purple-500 hover:bg-purple-700 text-white px-4 py-2 rounded-md">
            Написать в Viber
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gray-700">
    <div class="container mx-auto">
      <h2 class="text-3xl text-white font-bold mb-8">Как нас найти?</h2>
      <div class="rounded-lg overflow-hidden shadow-lg">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2350.632441414882!2d27.55831465160127!3d53.901066580044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcfb2b3751f99%3A0xd0d3823d5d1e66b5!2sPushkin%20Ave%2C%2020%2C%20Minsk%2C%20Belarus!5e0!3m2!1sen!2sru!4v1655367800365!5m2!1sen!2sru"
          width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </section>

<?php
require_once('templates/footer.php');
?>