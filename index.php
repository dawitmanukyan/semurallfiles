<?php 
  require "./config/config.php";
  $info = $mysql -> query("SELECT * FROM `home_info`");
  $asr = $mysql -> query("SELECT * FROM `assortment`");
  $asr0 = $mysql -> query("SELECT * FROM `items` WHERE `inhomepage`='on'");
  $subc = $mysql -> query("SELECT * FROM `subcategories`");
  $mysql -> query("DELETE FROM `opening_number`");
  $today = date("F j, Y, g:i a");
  $mysql -> query("INSERT INTO `opening_number` (`date`) VALUES ('$today')");
  $mysql -> close();
?>

<!DOCTYPE html>
<html lang="en">  

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.php">
    <link rel="stylesheet" href="./css/mainAll.php">
    <link rel="stylesheet" href="./css/glxavorMedia768.php">
    <link rel="stylesheet" href="./css/respmenufooter768.php">
    <link rel="stylesheet" href="./css/glxavorMedia375.php">
    <link rel="stylesheet" href="./css/respmenufooter375.php">
    <link rel="icon" href="./img/Logo.png">
    <title>Գլխավոր</title>
    <style>
      .homepageitem {
        width: 200px;
        height: 200px;
        background: red;
      }
    </style>
</head>

<body>
  <div class="header" id="header">
    <a href="index.php" class="logo" id="logo"></a>
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
      <li><a href="Apranq.php" class="resp-neu-li">Տեսականի</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="About.php" >Մեր մասին</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Masnachyux.php">Մասնաճյուղեր</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Blog.php">Բլոգ</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Contact.php" >Կապ</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>

      <div class="resp-lang-menu">
        <a href="#" class="active">Հայ</a>
        <a href="index-en.php">EN</a>
        <a href="index-ru.php">РУ</a>
      </div>
    </ul>

    <div class="language resp-lang">
      <a href="#" class="active">Հայ</a>
      <a href="index-en.php">EN</a>
      <a href="index-ru.php">РУ</a>
    </div>
    <div class="icons">
      <img class="search_icon" src="./img/search.png" alt="" id="search" />
    </div>
    <div class="line" id="line"></div>
    <div class="call" id="call">
      <a class="phone">+374 33 51 55 55</a>
      <p class="order-call" style="cursor: pointer;">Պատվիրել զանգ</p>
    </div>
  </div>
  <form method="POST" action="/Search.php">
  <div class="search-box hidden" id="search-box">
      <div class="search-label">Որոնում</div>
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
                echo '<a href="Product.php?type='.$value['category_id'].'" class="sub-menu-a">'.$value['type-arm'].'</a>';
              }
            ?>
          </div>
          <div class="language">
              <a href="index.php" class="active">Հայ</a>
              <a href="index-en.php">EN</a>
              <a href="index-ru.php">РУ</a>
          </div>
      </div>
    <div class="container-fluid slider">
        <div class="slider-row" style="left: 0">
                <?php 
                  foreach($info as $value) {
                    echo '
                    <div class="slider-item">
                      <div class="slider-title">
                        '.$value['titlearm'].'
                      </div>
                      <div class="slider-text">
                        '.$value['infoarm'].'
                      </div>
                      <a href="About.php"><button class="slider-button">Իմանալ ավելին</button></a>
                    </div>
                    ';
                  }
                ?>
        </div>
          <form action="/sendmail.php" class="container-form-order" method="post">
          <div class="close-icon"></div>
              <h1 class="oder-call">Պատվիրեք զանգ</h1>
                <div class="oder-call-text">Եթե չեք կողմնորոշվում ապրանքատեսականու ընտրության հարցում կամ ունեք հարցեր, 
                    լրացրեք ներքևի դաշտերը<span class="resp375"> և մեր աշխատակիցները կապ կհաստատեն Ձեզ հետ և կօգնեն գտնել լավագույն լուծումը։</span></div>
                  <div class="inputBox-call">
                    <div class="inputBox">
                        <span>Անուն</span>
                        <input type="text" required name="username">
                    </div>
                    <div class="inputBox A-order">
                        <span>Հեռախոսահամար</span>
                        <input type="text" required name="phone">
                    </div>
                    <div class="inputBox B-order">
                        <button class="btn-callOrder" type="submit">Ուղարկել</button>
                    </div>
                  </div>
            </form>
        <div class="arrow arrow-left"><img src="./img/tesakani/arrow-left.png" alt="arrow-left" class="arrowl"></div>
        <div class="arrow arrow-right"><img src="./img/tesakani/arrow-right.png" alt="arrow-right" class="arrowl"></div>
        <div class="slider-dots"></div>
    </div>

    <div class="title">
        Առաջարկվող տեսականի
    </div>

    <div class="slider__items">
          <?php 
              foreach ($asr0 as $value) {
                echo '
                <a href="Product.php?type='.$value['incategory'].'"" class="slider--items--item" style="display: flex;">
                  <div style="background-repeat: no-repeat; background-size: cover; background-image: url(./img-items/'.$value['ownimage'].'); height: 300px; width: 300px; display: flex; justify-content: center; align-tems: center; " alt="">
                  <span style="color: #fff; display: flex; justify-content: center; align-items: center; font-size: 25px;">'.$value['namearm'].'</span>
                  </div>
                </a>
                ';
              }
            ?>
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
            >Գործարան, Կոտայքի մարզ, ք. Եղվարդ,<br />
            Երևանյան Խճուղի, շ․ 118
          </a>
          <a href="">033 51 55 55, 033 52 55 55</a>
          <a href="mailto: info@semur.am" target="blank">info@semur.am</a>
          <div class="resp-menu">
            <ul class="resp-menu-ul">
              <li><a href="Aparanq.php">Արտադրանք</a></li>
              <li><a href="About.php">Մեր մասին</a></li>
              <li><a href="Masnachyux.php">Մասնաճյուղեր</a></li>
              <li><a href="Contact.php">Կապ</a></li>
            </ul>
          </div>
          <div class="resp-hr"></div>
  
          <p class="copy">Սեմուր ընդ Կո © 2022</p>
          <p class="copy1">Բոլոր իրավունքները պաշտպանված են:</p>
        </div>
        <div class="container-footer">
          <div class="footer-items">
            <a>Արտադրանք</a>
            <?php 
              foreach ($asr as $value) {
                echo '<a href="Product.php?type='.$value['category_id'].'">'.$value['type-arm'].'</a>';
              }
            ?>
          </div>
          <div class="footer-items footer-info">
            <a>Ավելին</a>
           <a href="About.php" class="about">Մեր մասին</a>          
            <a  href="Masnachyux.php" class="masnachyux">Մասնաճյուղեր</a>
            <a href="Blog.php">Semur բլոգ</a>
            <a href="#">Գաղտնիության քաղաքականություն</a>
            <a href="Hashvetvutyun.php">Հաշվետվություն</a>
            <a href="Aparik.php"> Ապառիկ վաճառք</a>
            <a href="Contact.php">Կապ </a>
          </div>
          <div class="resp-footer-line"></div>
  
          <div class="footer-items footer-img">
            <div class="social">
              <p>Հետևեք մեզ</p>
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
    <script src="./js/call.js"></script>
</body>

</html>
