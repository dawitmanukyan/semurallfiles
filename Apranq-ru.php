<?php
  require "./config/config.php";
  $id = $_GET['id'];
  $itm = $mysql -> query("SELECT * FROM `items` WHERE `id`=$id");
  $asr = $mysql -> query("SELECT * FROM `assortment`");
  $mysql -> close();
?>

<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/aparikStyle.php">
    <link rel="stylesheet" href="./css/aparikMedia768.css">
    <link rel="stylesheet" href="./css/mainAll.php">
     <link rel="stylesheet" href="./css/aparikMedia375.php">
     <link rel="stylesheet" href="./css/apranqStyle.css">
     <link rel="stylesheet" href="./css.apranqStyle.scss">
    <link rel="stylesheet" href="./css.apranqStyle.css.map">
    <link rel="stylesheet" href="./css/respmenufooter768.php">
    <link rel="stylesheet" href="./css/respmenufooter375.php">
    <link rel="icon" href="./img/Logo.png">
    <title>Технические характеристики</title>
    <style>
    .colors-img{
      height: 500px;
      width: 500px;
    }
    .resp {
      display: none;
    }
    @media screen and (max-width: 1030px){
      .frst {
        display: none;
      }
      .resp {
      display: block;
      }
    }
    @media screen and (max-width: 520px){
      .colors-img{
      width: 300px;
      height: 300px;
    }
    }
  </style>
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
      <li><a href="Masnachyux-ru.php">Ветви</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Blog-ru.php">Блог</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Contact-ru.php" >Контакт</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>

      <div class="resp-menu-line"></div>
      <div class="resp-lang-menu">
      <?php
      echo '<a href="Apranq.php?id='.$id.'" class="active">Հայ</a>';
      echo '<a href="Apranq-en.php?id='.$id.'">EN</a>';
      echo '<a href="Apranq-ru.php?id='.$id.'">РУ</a>';
      ?>
      </div>
    </ul>

    <div class="language resp-lang">
    <?php
      echo '<a href="Apranq.php?id='.$id.'" class="active">Հայ</a>';
      echo '<a href="Apranq-en.php?id='.$id.'">EN</a>';
      echo '<a href="Apranq-ru.php?id='.$id.'">РУ</a>';
      ?>
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
            <?php
            echo '<a href="Apranq.php?id='.$id.'">ՀԱՅ</a>';
            echo '<a href="Apranq-en.php?id='.$id.'">EN</a>';
            echo '<a href="Apranq-en.php?id='.$id.'"  class="active">РУ</a>';
?>
          </div>
      </div>
    <div class="hidden--menu--block"></div>

    <section class="contect">
      <div class="container">

        <div class="contect__breadcrumb">
          <p>Главное</p>
          <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.21967 0.96967C0.512563 0.676777 0.987437 0.676777 1.28033 0.96967L5.78033 5.46967C6.07322 5.76256 6.07322 6.23744 5.78033 6.53033L1.28033 11.0303C0.987437 11.3232 0.512563 11.3232 0.21967 11.0303C-0.0732233 10.7374 -0.0732233 10.2626 0.21967 9.96967L4.18934 6L0.21967 2.03033C-0.0732233 1.73744 -0.0732233 1.26256 0.21967 0.96967Z" fill="#B0AFB3"/>
          </svg>            
          <p>Ассортимент</p>
          <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.21967 0.96967C0.512563 0.676777 0.987437 0.676777 1.28033 0.96967L5.78033 5.46967C6.07322 5.76256 6.07322 6.23744 5.78033 6.53033L1.28033 11.0303C0.987437 11.3232 0.512563 11.3232 0.21967 11.0303C-0.0732233 10.7374 -0.0732233 10.2626 0.21967 9.96967L4.18934 6L0.21967 2.03033C-0.0732233 1.73744 -0.0732233 1.26256 0.21967 0.96967Z" fill="#B0AFB3"/>
          </svg> 
        </div>

        <div class="product">
          <div class="product__img">
            <div class="product--img--main">
              <?php
                foreach ($itm as $value) {
                  $imgitm = $value['ownimage'];
                  echo '<img src="./img-items/'.$imgitm.'" alt="">';
                }
               ?>
            </div>
            <div class="product--img--childs">
              <div>
              <?php
                foreach ($itm as $value) {
                  $imgitm = $value['image2'];
                  echo '<img src="./img-items/'.$imgitm.'" alt="">';
                }
               ?>
              </div>
              <div>
              <?php
                foreach ($itm as $value) {
                  $imgitm = $value['image3'];
                  echo '<img src="./img-items/'.$imgitm.'" alt="">';
                }
               ?>
              </div>
              <div>
              <?php
                foreach ($itm as $value) {
                  $imgitm = $value['image4'];
                  echo '<img src="./img-items/'.$imgitm.'" alt="">';
                }
               ?>
              </div>
              <div>
              <?php
                foreach ($itm as $value) {
                  $imgitm = $value['image5'];
                  echo '<img src="./img-items/'.$imgitm.'" alt="">';
                }
               ?>
              </div>
              <div>
              <?php
                foreach ($itm as $value) {
                  $imgitm = $value['image6'];
                  echo '<img src="./img-items/'.$imgitm.'" alt="">';
                }
               ?>
              </div>
              <div>
              <?php
                foreach ($itm as $value) {
                  $imgitm = $value['image7'];
                  echo '<img src="./img-items/'.$imgitm.'" alt="">';
                }
               ?>
              </div>
              <div>
              <?php
                foreach ($itm as $value) {
                  $imgitm = $value['image8'];
                  echo '<img src="./img-items/'.$imgitm.'" alt="">';
                }
               ?>
              </div>
              <div>
              <?php
                foreach ($itm as $value) {
                  $imgitm = $value['image9'];
                  echo '<img src="./img-items/'.$imgitm.'" alt="">';
                }
               ?>
              </div>
              <div>
              <?php
                foreach ($itm as $value) {
                  $imgitm = $value['image10'];
                  echo '<img src="./img-items/'.$imgitm.'" alt="">';
                }
               ?>
              </div>
              <div>
              <?php
                foreach ($itm as $value) {
                  $imgitm = $value['image11'];
                  echo '<img src="./img-items/'.$imgitm.'" alt="">';
                }
               ?>
              </div>
              <div>
              <?php
                foreach ($itm as $value) {
                  $imgitm = $value['image12'];
                  echo '<img src="./img-items/'.$imgitm.'" alt="">';
                }
               ?>
              </div>
              <div>
              <?php
                foreach ($itm as $value) {
                  $imgitm = $value['image13'];
                  echo '<img src="./img-items/'.$imgitm.'" alt="">';
                }
               ?>
              </div>
              <div>
              <?php
                foreach ($itm as $value) {
                  $imgitm = $value['image14'];
                  echo '<img src="./img-items/'.$imgitm.'" alt="">';
                }
               ?>
              </div>
              <div>
              <?php
                foreach ($itm as $value) {
                  $imgitm = $value['image15'];
                  echo '<img src="./img-items/'.$imgitm.'" alt="">';
                }
               ?>
              </div>
            </div>
          </div>
          <div class="product__text__info-two">
          <div class="product__text__info-one">
              <h3>Технические характеристики</h3>
              <?php foreach($itm as $value) {
                echo '<b>'.$value['descriptionru'].'</b>';
                } ?>
            </div>
          <div class="product__text__info-two">
              <h3>Данные</h3>
                <table style="font-size:20px">
                <?php 
                foreach ($itm as $value){
                 echo "<tr>
                 <td>Длина - </td>
                 <td>{$value['length']}</td>
                 </tr>
                 <tr>
                 <td>Ширина - </td>
                 <td>{$value['width']}</td>
                 </tr><tr>
                 <td>Полезная ширина - </td>
                 <td>{$value['useful_width']}</td>
                 </tr>
                 " ;
                }
                $sts = $value['colored']; 
                ?>
                </table>
            </div>
            <?php
              if($sts == 'on'){
                echo '
                <a href="./img/colors.png"><img src="./img/colors.png" class="colors-img frst"></a> 
                ';
              }elseif($sts == 'me') {
                echo '
                <a href="./img/colors.png"><img src="./img/colorson.png" class="colors-img frst"></a> 
                ';
              }
            ?>
          </div>
        </div>
        <?php
              if($sts == 'on'){
                echo '
                <a href="./img/colors.png"><img src="./img/colors.png" class="colors-img frst"></a> 
                ';
              }elseif($sts == 'me') {
                echo '
                <a href="./img/colors.png"><img src="./img/colorson.png" class="colors-img frst"></a> 
                ';
              }
            ?>
        <div class="slider slider--frist">
          <h2>Дополняющие детали</h2>
            <a href="Apranq.php" class="slider--items--item">
              <img src="./img/Rectangle 11864.png" alt="">
              <div class="slider--items--item--text">
                <p>Банга</p>
              </div>
            </a>
          </div>
        </div>

        <div class="slider slider--second">
          <h2>последние просмотры</h2>
          <div class="slider__items">
            <a href="Apranq.php" class="slider--items--item">
              <img src="./img/Rectangle 11873.png" alt="">
              <div class="slider--items--item--text">
                <p>Банга</p>
              </div>
            </a>

            <a href="Apranq.php" class="slider--items--item">
              <img src="./img/Rectangle 11873.png" alt="">
              <div class="slider--items--item--text">
                <p>Банга</p>
              </div>
            </a>

            <a href="Apranq.php" class="slider--items--item">
              <img src="./img/Rectangle 11873.png" alt="">
              <div class="slider--items--item--text">
                <p>Банга</p>
              </div>
            </a>

            <a href="Apranq.php" class="slider--items--item">
              <img src="./img/Rectangle 11873.png" alt="">
              <div class="slider--items--item--text">
                <p>Банга</p>
              </div>
            </a>
              </div>
            <div class="pagination__btn">
              <button type="button">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19 12H5" stroke="#B0AFB3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M12 19L5 12L12 5" stroke="#B0AFB3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                  
              </button>

              <button type="button">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 12H19" stroke="#615F66" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M12 5L19 12L12 19" stroke="#615F66" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                  
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

  
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
          <a href="#">Завод. Котайкский район, Г. Егвард<br /> Ереванское шоссе 118
          </a>
          <a href="">033 51 55 55, 033 52 55 55</a>
          <a href="mailto: info@semur.am" target="blank">info@semur.am</a>
          <div class="resp-menu">
            <ul class="resp-menu-ul">
              <li><a href="Aparanqru.php">Производства</a></li>
              <li><a href="Aboutru.php">О нас</a></li>
              <li><a href="Masnachyuxru.php">Филиалы</a></li>
              <li><a href="Contactru.php">Связь</a></li>
            </ul>
              <hr class="resp-hr" />
          </div>

          <p class="copy">Семур энд Ко © 2022</p>
          <p class="copy1">Все права защищены.</p>
        </div>
        <div class="container-footer">
          <div class="footer-items">
            <a>Производства</a>
            <?php 
              foreach ($asr as $value) {
                echo '<a href="Product-ru.php?type='.$value['category_id'].'">'.$value['type-ru'].'</a>';
              }
            ?>
          </div>
          <div class="footer-items footer-info">
            <a>Еще</a>
            <a href="About-ru.php">О нас</a>
            <a href="Masnachyux-ru.php">Филиалы</a>
            <a href="Blog-ru.php">Блог</a>
            <a href="">Политика конфиденциальности</a>
            <a href="Hashvetvutyun.php">Отчет</a>
            <a href="Aparik-ru.php">Продажа в кредит</a>
            <a href="Contact-ru.php">Связь</a>
          </div>
          <div class="footer-items footer-img">
            <div class="social">
              <p>Следите за нами</p>
              <a target="_blank" href="https://www.instagram.com/semur.co/">
                <img src="./img/Instagram Icon.png" alt="Instagram" />
              </a>
              <a target="_blank" href="https://www.facebook.com/pages/category/Building-Materials/Semur-Co-118059506271527/">
                <img src="./img/Facebook Icon.png" alt="Facebook" />
              </a>
              <a target="_blank" href="https://www.youtube.com/channel/UCRKkZQOBU7hrXgYhSgnRBNg">
                <img src="./img/Youtube Icon.png" alt="Youtube" />
              </a>
            </div>
          </div>
        </div>
      </div>
	
    <script src="./js/style.js"></script>
</body>
</html>
