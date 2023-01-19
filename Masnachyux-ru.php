<?php 
  require "./config/config.php";
  $info = $mysql -> query("SELECT * FROM `site_info`");
  $asr = $mysql -> query("SELECT * FROM `assortment`");
  $mysql -> close();
?>


<!DOCTYPE html>
<html lang="ру">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/masnachyuxStyle.php">
    <link rel="stylesheet" href="./css/mainAll.php">
    <link rel="stylesheet" href="./css/masnachyuxMedia.php">
    <link rel="stylesheet" href="./css/masnachyuxMedia375.php">
    <link rel="stylesheet" href="./css/masnachyuxMedia768.php">
    <link rel="stylesheet" href="./css/respmenufooter768.php">
    <link rel="stylesheet" href="./css/respmenufooter375.php">
    <link rel="icon" href="./img/Logo.png">
    <title>Филиалы</title>
</head>
<body>
  <div class="header" id="header">
    <a href="index-ru.php" class="logo" id="logo"></a>
    <a
      href="#"
      class="toggle-button"
      id="toggle-button"
      onclick="toggleNav(this)"
    >
      <span class="bar1"></span>
      <span class="bar2"></span>
      <span class="bar3"></span>
    </a>      <ul class="navbar" id="navbar">
    <li><a href="Apranq-ru.php" class="resp-neu-li">Ассортимент</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="About-ru.php" >О нас</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Masnachyux-ru.php" class="active">Ветви</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Blog-ru.php">Блог</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Contact-ru.php" >Контакт</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>

      <div class="resp-lang-menu">
        <a href="Masnachyux.php">Հայ</a>
        <a href="Masnachyux-en.php">EN</a>
        <a href="Masnachyux-ru.php" class="active">РУ</a>
      </div>
    </ul>

    <div class="language resp-lang">
      <a href="Masnachyux.php">Հայ</a>
      <a href="Masnachyux-en.php">EN</a>
      <a href="Masnachyux-ru.php" class="active">РУ</a>
    </div>
    <div class="icons">
      <img class="search_icon" src="./img/search.png" alt="" id="search" />
     
    </div>
    <div class="line" id="line"></div>
    <div class="call" id="call">
      <a class="phone">+374 33 51 55 55</a>
    </div>
  </div>
  <form method="POST" action="/Search-ru.php">
  <div class="search-box hidden" id="search-box">
      <div class="search-label">Поиск</div>
      <div class="search-input-wrapper">
        <input class="search-input"  type="text" name="search" id="search-input" />
        <button type="submit"><img id="search_icon-active" src="./img/activ-search.png" alt="" /></button>
     </div>
    <div class="search-icon-close" id="close-search"><img src="./img/search-icon-close.png" alt=""></div>
  </div>
  </form>
  <div class="second-menu">
          <div class="second-menu-navigation">
          <?php 
              foreach ($asr as $value) {
                echo '<a href="Product-ru.php?type='.$value['category_id'].'" class="sub-menu-a">'.$value['type-ru'].'</a>';
              }
            ?>
          </div>
          <div class="language">
              <a href="Masnachyux.php">Հայ</a>
              <a href="Masnachyux-en.php">EN</a>
              <a href="Masnachyux-ru.php" class="active">РУ</a>
          </div>
      </div>
    <div class="menu_holder">
        <div class="text_center">
            <div class="border_div"></div>
            <p class="credit">Филиалы</p>
        </div>
    </div>
    <div class="container">
        <div class="texts">
            <p class="main">Главное
                <img src="./img/arrow.png" class="arrow">Филиалы
            </p>
        </div>
        <div class="map-logo-text">
            <img src="./img/map.png" class="vector">
            <p>Наши Филиалы</p>
        </div>
        <hr />
    </div>
    <div class="main-container">
        <div class="info-contact">
            <p class="main-1">Офис</p>
            <div class="address">
                <p>Г. Ереван,</p>
                <p>Пр-т. Маршала Баграмяна.,</p>
                <p>Дом 1 (Адм. район Кентрон)</p>
            </div>
            <div class="gray-contact">
                <p>ПН․- ПТ․ 09։30-17։00</p>
                <p>+374 33 51 55 55 </p>
                <p>+374 33 52 55 55 </p>
		<a href = "https://www.google.com/maps/place/1+Marshal+Baghramyan+Ave,+Yerevan,+Armenia/@40.1889576,44.5109506,17z/data=!3m1!4b1!4m5!3m4!1s0x406abd1e8ad39175:0xf5913660c6f4f127!8m2!3d40.1889535!4d44.5131393?shorturl=1" target="blank"><button class="onMap">Посмотреть на карте</button></a>
            </div>
        </div>
        <div class="info-contact">
            <p class="main-1">Завод</p>
            <div class="Address">

                <p>Котайкская область, Г. Егвард</p>
                <p>Ереванское шоссе, д․ 118</p>
            </div>
            <div class="gray-contact margin-top">
                <p>ПН․- ПТ․ 09։30-17։00</p>
                <p>+374 33 51 55 55</p>
                <p>+374 33 52 55 55</p>
		<a href = "https://www.google.com/maps/place/%22Semur+%26+Co%22+LLC/@40.2730478,44.4955827,14z/data=!4m5!3m4!1s0x0:0xab170a8335c5fda2!8m2!3d40.2793292!4d44.4864267" target="blank"><button class="onMap">Посмотреть на карте</button></a>
            </div>
        </div>
        <div class="info-contact">
            <p class="main-1">Специализированный магазин</p>
            <div class="Address">
                <p>Котайкский район, Г․ Абовян,</p>
                <p>Верин Птгни, Боенсикй Район, 1-ый</p>
                <p>Улица, Стр․ 7 (Рядом с Сев. Автовокзалом)</p>
            </div>
            <div class="gray-contact">
                <p>ПН․- ПТ․ 09։30-17։00</p>
                <p>+374 33 51 55 55 </p>
                <p>+374 98 68 80 36</p>
		<a href = "https://www.google.com/maps/place/40%C2%B014'38.1%22N+44%C2%B034'38.3%22E/@40.2439251,44.575104,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d40.243921!4d44.577298?shorturl=1" target="blank"><button class="onMap">Посмотреть на карте</button></a>
            </div>
        </div>
        <div class="info-contact main-resp padding">
            <p class="main-1">Специализированный магазин</p>
            <div class="Address">
                <p>Г. Ереван,</p>
                <p>Улица Себастия 134/1</p>
                <p>(Административный район Малатия-Себастия)</p>
            </div>
            <div class="gray-contact">
                <p>ПН․- ПТ․ 09։30-17։00</p>
                <p>+374 33 51 55 55 </p>
                <p>+374 98 68 80 37</p>
		<a href = "https://www.google.com/maps/place/134+Sebastia+St,+Yerevan,+Armenia/@40.1732054,44.4554742,17z/data=!3m1!4b1!4m5!3m4!1s0x406abdc411cdb5f3:0x19f99f90afb497b6!8m2!3d40.1732013!4d44.4576682" target="blank"><button class="onMap">Посмотреть на карте</button></a>
            </div>
        </div>
        <div class="info-contact main-resp padding">
            <p class="main-1">Специализированный магазин</p>
            <div class="Address">
                <p>Г. Ереван,</p>
                <p>Аршакуняц пр-т, 270/1</p>
                <p>(Административный район Шенгавит)</p>
            </div>
            <div class="gray-contact">
                <p>ПН․- ПТ․ 09։30-17։00</p>
                <p>+374 33 51 55 55 </p>
                <p>+374 77 48 02 06</p>
		<a href = "https://www.google.com/maps/place/Arshakunyats+Ave,+Yerevan,+Armenia/@40.1544566,44.4977555,17z/data=!3m1!4b1!4m5!3m4!1s0x406abc03bd154a47:0xc8a1eebdbc592c87!8m2!3d40.1544525!4d44.4999495" target="blank"><button class="onMap">Посмотреть на карте</button></a>
            </div>
        </div>
    </div>

  
    <div class="headphones-hover">
        <div class="headphones">
          <img src="./img/naushnik.png" alt="" />
        </div>
        <div class="hover-icons">
          <div class="hover-icon-watsup button">
            <a href="watsup:+374 33 51 55 55" target="_blank"><img src="./img/wUp.png" alt="" /></a>
          </div>
          <div class="hover-icon-messanger button">
           <a href="https://www.facebook.com/messages/t/100000024311828" target="_blank"><img src="./img/messanger-icon.png" alt="" /></a>
          </div>
          <div class="hover-icon-call button">
          <a href="tel:+374 33 51 55 55" target="_blank"><img src="./img/icon-hover-call.png" alt="tel" /></a>
          </div>
          <div class="hover-icon-mail button">
            <a href="mailto:@semur.am" target="_blank"><img src="./img/icon-hover-mail.png" alt="" /></a>
          </div>
          <div class="hover-icon-headphone button">
            <img src="./img/headphone-hover.png" alt="headphone" target="_blank" />
          </div>
        </div>
      </div>
        
    <div class="map-karta">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aedc40bf50c15d9f2a3ac07a08d563dec88f84049535007d1923e23db348a7c7a&amp;source=constructor" width="1280" height="450"
            style="border:0; border-radius: 15px; filter:invert(90%)" allowfullscreen=""
            loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>
    </div>
    <div class="footer">
      <div class="info">
        <img src="./img/logo_semur.png" class="logo-semur" alt="logo" />
        <a href="#"
          >Фабрика, Котайкский марз, г. Егвард,<br />
          Ереванян шоссе, ул. 118:
        </a>
        <a href="">033 51 55 55, 033 52 55 55</a>
        <a href="mailto: info@semur.am" target="blank">info@semur.am</a>
        <div class="resp-menu">
          <ul class="resp-menu-ul">
            <li><a href="Aparanq-ru.php">Товар</a></li>
            <li><a href="About-ru.php">О нас</a></li>
            <li><a href="Masnachyux-ru.php">Ветви</a></li>
            <li><a href="Contact-ru.php">Контакт</a></li>
          </ul>
        </div>
        <div class="resp-hr"></div>

        <p class="copy">Семур анд Ко © 2022</p>
        <p class="copy1">Все права защищены.</p>
      </div>
      <div class="container-footer">
        <div class="footer-items">
          <a>Товар</a>
          <?php 
              foreach ($asr as $value) {
                echo '<a href="Product-ru.php?type='.$value['category_id'].'">'.$value['type-ru'].'</a>';
              }
            ?>
        </div>
        <div class="footer-items footer-info">
          <a>Больше</a>
         <a href="About-ru.php" class="about">О нас</a>          
          <a  href="Masnachyux-ru.php" class="masnachyux">Ветви</a>
          <a href="Blog-ru.php">Semur блог</a>
          <a href="#">Политика конфиденциальности</a>
          <a href="Hashvetvutyun.php">Отчет</a>
          <a href="Aparik-ru.php"> Продажа в кредит</a>
          <a href="Contact-ru.php">Контакт </a>
        </div>
        <div class="resp-footer-line"></div>

        <div class="footer-items footer-img">
          <div class="social">
            <p>Подписывайтесь на нас</p>
            <a target="_blank" href="https://www.instagram.com/semur.co/">
              <img src="./img/Instagram Icon.png" alt="Instagram" />
            </a>
            <a
              target="_blank"
              href="https://www.facebook.com/pages/category/Building-Materials/Semur-Co-118059506271527/"
            >
              <img src="./img/Facebook Icon.png" alt="Facebook" />
            </a>
            <a
              target="_blank"
              href="https://www.youtube.com/channel/UCRKkZQOBU7hrXgYhSgnRBNg"
            >
              <img src="./img/Youtube Icon.png" alt="Youtube" />
            </a>
          </div>
        </div>
      </div>
    </div>
  <script src="./js/main.js"></script>
  <script src="./js/style.js"></script>
</body>

</html>
