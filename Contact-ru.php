<?php 
  require "./config/config.php";
  $info = $mysql -> query("SELECT * FROM `site_info`");
  $asr = $mysql -> query("SELECT * FROM `assortment`");
  $mysql -> close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Contacstyle.php">
    <link rel="stylesheet" href="./css/mainAll.php">
    <link rel="stylesheet" href="./css/Contacmedia768.php">
    <link rel="stylesheet" href="./css/respmenufooter768.php">
    <link rel="stylesheet" href="./css/respmenufooter375.php">
    <link rel="stylesheet" href="./css/Contacmedia375.php">
    <link rel="icon" href="./img/Logo.png">
    <title>Контакт</title>
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
      <li><a href="Artadranq-ru.php" class="resp-neu-li">Ассортимент</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="About-ru.php">О нас</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Masnachyux-ru.php">Филиалы</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Blog-ru.php">Блог</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Contact-ru.php"  class="active">Контакт</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>

      <div class="resp-menu-line"></div>
      <div class="resp-lang-menu">
        <a href="Contact.php">Հայ</a>
        <a href="Contact-en.php">EN</a>
        <a href="Contact-ru.php" style="color: #EF4B37">РУ</a>
      </div>
    </ul>

    <div class="language resp-lang">
      <a href="Contact.php">Հայ</a>
      <a href="Contact-en.php">EN</a>
      <a href="Contact-ru.php" style="color: #EF4B37">РУ</a>
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
              <a href="Contact.php">Հայ</a>
              <a href="Contact-en.php">EN</a>
              <a href="Contact-ru.php" style="color: #EF4B37">РУ</a>
          </div>
      </div>
    <div class="menu_holder">
        <div class="text_center">
            <div class="border_div"></div>
            <p class="credit">Контакт</p>
        </div>
    </div>
    <div class="container">
        <div class="texts">
            <p class="main">Главная
                <img src="./img/arrow.png" class="arrow">Контакт
            </p>
        </div>

        <div class="contact-title">Обратная связь</div>
        <div class="contact-text">Наша команда всегда готова помочь вам с любыми вопросами.</div>
        <div class="contact-container">
            <div class="contact-right">          
                <div class="contact-icon">
                    <div class="contact-icon1"><img src="./img/mail.png" /><div class="contact-icon-text">@semur.am</div></div>
                    <div class="contact-icon1"><img src="./img/phone-call.png"/><div class="contact-icon-text">+374 33 51 55 55</div></div>
                    <div class="contact-icon1"><img src="./img/map-pin.png" class="contact-icon-img"><div class="contact-icon-text">Завод, Котайкская область,г. Егвард, Ереванское шоссе, д. 118</div></div>
                </div>
                <div class="map-karta-contact">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aedc40bf50c15d9f2a3ac07a08d563dec88f84049535007d1923e23db348a7c7a&amp;source=constructor" width="658px" height="431px"  frameborder="0" style="border:0; border-radius: 15px; filter:invert(90%)" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
            <div class="contact-left ">
                <form action="/sendmail.php" method="post">
                    <h1 class="contact-left-title">Связаться с нами</h1>
                            <div class="input-group">
                                <label>Имя</label>
                                <input type="text" placeholder="Введите свое имя" name="username">
                            </div>
                        
                            <div class="input-group">
                                <label>Эл. адрес</label>
                                <input type="text" placeholder="Введите свой адрес электронной почты" name="useremail">
                            </div>
                            <div class="input-group">
                                <label>Номер телефона</label>
                                <input type="tel" placeholder="Введите свой номер телефона" name="phone">
                            </div>
                            <div class="input-group">
                                <label>Сообщение</label>
                                <textarea class="textareaResp" name="message">Отправьте свой вопрос</textarea>
                            </div>
                            <div class="input-group-button input-group">
                                <button type="submit">Отправить</button>
                                <div class="text-group">Нажав на кнопку Отправить, я даю свое согласие на передачу данных.</div>
                            </div>
                </form>
             
            </div>
        </div>
      
        <div class="line-hr"></div>
      
        <div class="map-logo-text">
            <img src="./img/map.png" class="vector">
            <p>Наши филиалы</p>
        </div>
        <div class="main-container">
            <div class="info-contact">
                <p class="main-1">Офис</p>
                <div class="Address1">
                    <p>С. Ереван,</p>
                    <p>Пр. Маршала Баграмяна,</p>
                    <p>1 дом (Кентрон адм.район Еревана) круг)</p>
                </div>
                <div class="gray-contact">
                    <p>Пн. - Пт. 09.30-17.Ноль ноль</p>
                    <p>+374 33 51 55 55 </p>
                    <p>+374 33 52 55 55 </p>
                    <button class="onMap">Посмотреть на карте</button>

                </div>
            </div>
            <div class="info-contact">
                <p class="main-1">Завод</p>
                <div class="Address2">
    
                    <p>Котайкская область, г. Егвард,</p>
                    <p>Ереванское шоссе, д. 118</p>
                </div>
                <div class="gray-contact margin-top">
                    <p>Пн. - Пт. 09.30-17.Ноль ноль</p>
                    <p>+374 33 51 55 55 </p>
                    <p>+374 33 52 55 55</p>
                    <button class="onMap">Посмотреть на карте</button>

                </div>
            </div>
            <div class="info-contact">
                <p class="main-1">Специализированный магазин</p>
                <div class="Address">
                  Котайкская область, г. Абовян,
                    <div>Верин Птгни, район бойни, 1-й</div>
                    <div>улица, стр. 7 (около автовокзала С.) </div>
                </div>
                <div class="gray-contact">
                    <p>Пн. - Пт. 09.30-17.Ноль ноль</p>
                    <p>+374 33 51 55 55 </p>
                    <p>+374 33 52 55 55</p>
                    <button class="onMap">Посмотреть на карте</button>

                </div>
            </div>
            <div class="info-contact main-resp padding">
                <p class="main-1">Специализированный магазин</p>
                <div class="Address">
                    <p>г. Ереван,</p>
                    <p>ул Себастии., Дом 134/1</p>
                    <p> (Малатия-Себастия адм. круг)</p>
                </div>
                <div class="gray-contact">
                    <p>Пн. - Пт. 09.30-17.Ноль ноль</p>
                    <p>+374 33 51 55 55 </p>
                    <p>+374 33 52 55 55</p>
                    <button class="onMap">Посмотреть на карте</button>

                </div>
            </div>
            <div class="info-contact main-resp padding">
                <p class="main-1">Специализированный магазин</p>
                <div class="Address">
                    <p>г. Ереван,</p>
                    <p>Пр. Аршакуняц, Дом 270/1</p>
                    <p>(Шенгавит адм. круг)</p>
                </div>
                <div class="gray-contact">
                    <p>Пн. - Пт. 09.30-17.Ноль ноль</p>
                    <p>+374 33 51 55 55 </p>
                    <p>+374 33 52 55 55</p>
                <button class="onMap">Посмотреть на карте</button>

                </div>
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
        

    <div class="footer">
        <div class="info">
          <img src="./img/logo_semur.png" class="logo-semur" alt="logo" />
          <a href="#"
            >Завод, Котайкская область,г. Егвард,<br />
            Ереванское шоссе, д. 118
          </a>
          <a href="">033 51 55 55, 033 52 55 55</a>
          <a href="mailto: info@semur.am" target="blank">info@semur.am</a>
          <div class="resp-menu">
            <ul class="resp-menu-ul">
              <li><a href="Apranq-ru.php">Продукты</a></li>
              <li><a href="About-ru.php">О нас</a></li>
              <li><a href="Masnachyux-ru.php">Филиалы</a></li>
              <li><a href="Contact-ru.php">Контакт</a></li>
            </ul>
          </div>
          <div class="resp-hr"></div>
  
          <p class="copy">Semur энд Ко © 2022</p>
          <p class="copy1">Все права защищены:</p>
        </div>
        <div class="container-footer">
          <div class="footer-items">
            <a>Продукты</a>
            <?php 
              foreach ($asr as $value) {
                echo '<a href="Product-ru.php?type='.$value['category_id'].'">'.$value['type-ru'].'</a>';
              }
            ?>
          </div>
          <div class="footer-items footer-info">
            <a>Больше</a>
           <a href="About-ru.php" class="about">О нас</a>          
            <a  href="Masnachyux-ru.php" class="masnachyux">Филиалы</a>
            <a href="Blog.php">Semur блог</a>
            <a href="#">Политика конфиденциальности</a>
            <a href="Hashvetvutyun.php">Отчет</a>
            <a href="Aparik-ru.php"> Продажа в кредит</a>
            <a href="Contact-ru.php">Контакт </a>
          </div>
          <div class="resp-footer-line"></div>
  
          <div class="footer-items footer-img">
            <div class="social">
              <p>Следуйте за нами</p>
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
   
    <script src="./js/style.js"></script>
</body>
</html>
