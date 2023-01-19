<?php
  require "./config/config.php";
  $type = $_GET['type'];
  $item_data = $mysql -> query("SELECT * FROM `items` WHERE `incategory`=$type");
  $sub_data = $mysql -> query("SELECT * FROM `subcategories` WHERE `incategory`=$type");
  $asr = $mysql -> query("SELECT * FROM `assortment`");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/product1Style.css">
    <link rel="stylesheet" href="./css/productStyle.php">
    <link rel="stylesheet" href="./css/mainAll.php">
    <link rel="stylesheet" href="./css/productMedia768.php">
    <link rel="stylesheet" href="./css/respmenufooter768.php">
    <link rel="stylesheet" href="./css/respmenufooter375.php">
    <link rel="stylesheet" href="./css/productMedia375.php">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link rel="icon" href="./img/Logo.png">
    <title>Главная / Категории</title>
</head>
<body>
    <main class="body">
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
         <li><a href="Product.php" class="resp-neu-li" class="active">Ассортимент</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
         <li><a href="About.php">О нас</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
        <li><a href="Masnachyux.php">Филиалы</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
        <li><a href="Blog.php">Блог</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
        <li><a href="Contact.php">Контакты</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
        <div class="resp-menu-line"></div>
        <div class="resp-lang-menu">
          <?php
            echo '<a href="Product.php?type='.$type.'">Հայ</a>';
            echo '<a href="Product-en.php?type='.$type.'">EN</a>';
          ?>
        </div>
      </ul>

      <div class="language resp-lang">
      <?php
            echo '<a href="Product.php?type='.$type.'">Հայ</a>';
            echo '<a href="Product-en.php?type='.$type.'">EN</a>';
          ?>
      </div>
      <div class="icons">
        <img class="search_icon" src="./img/search.png" alt="" id="search" />
        <img class="heart_icon" id="heart_icon" src="./img//heart.png" alt="" />
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
          <?php
            echo '<a href="Product.php?type='.$type.'">Հայ</a>';
            echo '<a href="Product-en.php?type='.$type.'">EN</a>';
          ?>
          </div>
      </div>

        <div class="hidden--block"></div>
        <div class="container">

            <div class="breadcrumb">
                <p>Главная</p>
                <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.21967 0.96967C0.512563 0.676777 0.987437 0.676777 1.28033 0.96967L5.78033 5.46967C6.07322 5.76256 6.07322 6.23744 5.78033 6.53033L1.28033 11.0303C0.987437 11.3232 0.512563 11.3232 0.21967 11.0303C-0.0732233 10.7374 -0.0732233 10.2626 0.21967 9.96967L4.18934 6L0.21967 2.03033C-0.0732233 1.73744 -0.0732233 1.26256 0.21967 0.96967Z" fill="#B0AFB3"/>
                </svg>
                <p>Ассортимент</p>                    
            </div>

            <div class="title--mob-filter">
                <h1 class="title">Ассортимент</h1>

                <button type="button" class="mob-filter">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.75 4.2308H12.169C12.5131 5.79731 13.9121 6.97336 15.5805 6.97336C17.2488 6.97336 18.6478 5.79736 18.9919 4.2308H23.25C23.6642 4.2308 24 3.89498 24 3.4808C24 3.06661 23.6642 2.7308 23.25 2.7308H18.9915C18.6467 1.16508 17.2459 -0.0117188 15.5805 -0.0117188C13.9141 -0.0117188 12.5139 1.16489 12.1693 2.7308H0.75C0.335812 2.7308 0 3.06661 0 3.4808C0 3.89498 0.335812 4.2308 0.75 4.2308ZM13.588 3.48277C13.588 3.48009 13.588 3.47738 13.588 3.4747C13.5913 2.37937 14.4851 1.48833 15.5805 1.48833C16.6743 1.48833 17.5681 2.37816 17.5728 3.47297L17.573 3.48398C17.5712 4.58119 16.6781 5.47341 15.5805 5.47341C14.4833 5.47341 13.5904 4.58208 13.5879 3.48553L13.588 3.48277ZM23.25 19.769H18.9915C18.6467 18.2033 17.2459 17.0265 15.5805 17.0265C13.9141 17.0265 12.5139 18.2031 12.1693 19.769H0.75C0.335812 19.769 0 20.1047 0 20.519C0 20.9332 0.335812 21.269 0.75 21.269H12.169C12.5131 22.8355 13.9121 24.0115 15.5805 24.0115C17.2488 24.0115 18.6478 22.8355 18.9919 21.269H23.25C23.6642 21.269 24 20.9332 24 20.519C24 20.1047 23.6642 19.769 23.25 19.769ZM15.5805 22.5115C14.4833 22.5115 13.5904 21.6202 13.5879 20.5237L13.588 20.5209C13.588 20.5182 13.588 20.5155 13.588 20.5129C13.5913 19.4175 14.4851 18.5265 15.5805 18.5265C16.6743 18.5265 17.5681 19.4163 17.5728 20.511L17.573 20.5221C17.5714 21.6194 16.6782 22.5115 15.5805 22.5115ZM23.25 11.2499H11.831C11.4869 9.68339 10.0879 8.50739 8.41955 8.50739C6.75117 8.50739 5.35223 9.68339 5.00808 11.2499H0.75C0.335812 11.2499 0 11.5857 0 11.9999C0 12.4141 0.335812 12.7499 0.75 12.7499H5.00845C5.35331 14.3156 6.75413 15.4924 8.41955 15.4924C10.0859 15.4924 11.4861 14.3158 11.8307 12.7499H23.25C23.6642 12.7499 24 12.4141 24 11.9999C24 11.5857 23.6642 11.2499 23.25 11.2499ZM10.412 11.9979C10.412 12.0007 10.412 12.0033 10.412 12.006C10.4087 13.1013 9.51492 13.9924 8.41955 13.9924C7.32572 13.9924 6.43191 13.1025 6.42717 12.0078L6.42703 11.9968C6.42867 10.8995 7.32188 10.0074 8.41955 10.0074C9.5167 10.0074 10.4096 10.8987 10.4121 11.9953L10.412 11.9979Z" fill="#1D1C20"/>
                    </svg>                        
                </button>
            </div>

            <section class="contant">
                <div class="contant__menu" id="assortment-menu">
                    <div class="filter">
                    <?php
                      $asr = $mysql -> query("SELECT * FROM `assortment`");
                      $i=0;
                      $count = mysqli_num_rows($asr);
                      foreach($asr as $value){
                        echo '
                          <ul>
                            <div style="display: flex; cursor: pointer;" onClick="myFunction('.$i.')">
                              <span>'.$value['type-ru'].'</span>
                              <img src="./img/down.png" alt="" style="width: 23px; transform: rotate(-90deg);" class="dropimg">
                            </div>
                        ';
                        $is = $value['category_id'];
                        $asr0 = $mysql -> query("SELECT * FROM `items` WHERE `incategory`=$is");
                        echo '<div class="dropItems" style="display: none;">';
                        foreach($asr0 as $value){
                          echo '<a href="Apranq-ru.php?id='.$value['id'].'" style="color: #EF4B37;"><li style="margin-left: 30px;">
                            '.$value['nameru'].'
                          </li></a>';
                        }
                        $asr1 = $mysql -> query("SELECT * FROM `subcategories` WHERE `incategory`=$is");
                        foreach($asr1 as $value){
                          echo '<ul style="margin-left: 30px;">
                            <div style="display: flex; cursor: pointer;" class="subItems" onclick="subDrop('.$i.')">
                              <span>'.$value['type-ru'].'</span>
                              <img src="./img/down.png" alt="" style="width: 23px; transform: rotate(-90deg);" class="subdropimg">
                            </div>';
                            $is = $value['category_id'];
                            $asr0 = $mysql -> query("SELECT * FROM `items` WHERE `incategory`=$is");
                            echo '<div class="subDropItems" style="display: none;">';
                            foreach($asr0 as $value){
                              echo '<a href="Apranq-ru.php?id='.$value['id'].'" style="color: #EF4B37;"><li style="margin-left: 50px;">
                                '.$value['nameru'].'
                              </li></a>';
                            }
                            $asr1 = $mysql -> query("SELECT * FROM `subcategories` WHERE `incategory`=$is");
                        foreach($asr1 as $value){
                          echo '<ul style="margin-left: 30px;">
                            <div style="display: flex; margin-left: 20px; cursor: pointer;" onclick="subsubDrop('.$i.')">
                              <span>'.$value['type-ru'].'</span>
                              <img src="./img/down.png" alt="" style="width: 23px; transform: rotate(-90deg);" class="subsubimg">
                            </div>';
                            $is = $value['category_id'];
                            $asr0 = $mysql -> query("SELECT * FROM `items` WHERE `incategory`=$is");
                            echo '<div class="subsubItems" style="display: none;">';
                            foreach($asr0 as $value){
                              echo '<a href="Apranq-ru.php?id='.$value['id'].'" style="color: #EF4B37;"><li style="margin-left: 50px;">
                                '.$value['nameru'].'
                              </li></a>';
                            }
                          echo '</ul>';
                        }
                          echo '</ul>';
                        }
                        echo '</ul>';
                        $i++;
                        if($i===$count){
                          $i=0;
                        }
                      }

                    ?>
                    </div>
                </div>

                <div class="contant__items" id="assortment-items">
                <?php 
                  if(mysqli_num_rows($item_data) > 0){
                    foreach($item_data as $value){
                      echo '<a href="Apranq-ru.php?id='.$value['id'].'" class="contant__items--item">
                        <img src="./img-items/'.$value['ownimage'].'" alt>
                        <div class="shodow"></div>
                        <h3>'.$value['nameru'].'</h3>
                      </a>';
                    }}
                    if(mysqli_num_rows($sub_data) > 0){
                      foreach($sub_data as $value){
                        echo '<a href="Product-ru.php?type='.$value['category_id'].'" class="contant__items--item">
                          <img src="./img-subcategories/'.$value['img'].'" alt>
                          <div class="shodow"></div>
                          <h3>'.$value['type-ru'].'</h3>
                        </a>';
                    }}
                  ?>
                </div>
            </section>
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
    </main> 
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
              <li><a href="Apranq-ru.php">Товар</a></li>
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
    <script src="./js/w.js"></script>
</body>

</html>
