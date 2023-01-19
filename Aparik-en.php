<?php 
  require "./config/config.php";
  $asr = $mysql -> query("SELECT * FROM `assortment`");
  $mysql -> close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/aparikStyle.php">
    <link rel="stylesheet" href="./css/mainAll.php">
    <link rel="stylesheet" href="./css/aparikMedia768.php">
    <link rel="stylesheet" href="./css/respmenufooter768.php">
     <link rel="stylesheet" href="./css/aparikMedia375.php">
     <link rel="stylesheet" href="./css/respmenufooter375.php">
     <link rel="icon" href="./img/Logo.png">
    <title>Credit sale</title>
</head>
<body>
        <div class="header">
          <a href="index-en.php" class="logo" id="logo"></a>
          <a href="" class="toggle-button" onclick="toggleNav(this)">
            <span class="bar1"></span>
            <span class="bar2"></span>
            <span class="bar3"></span>
          </a>

        <ul class="navbar">
            <li><a href="About-en.php" class="about">About us</a> </li>
            <li><a href="Masnachyux-en.php">Stores</a> </li>
            <li><a href="Blog-en.php">Blog</a> </li>
            <li><a href="Contact-en.php">Contact</a></li>
        </ul>
        <div class="language resp-lang">
            <a href="Aparik.php">ARM</a>
            <a href="Aparik-en.php" class="active">EN</a>
            <a href="Aparik-ru.php">RU</a>
        </div>
        <div class="icons">
            <img class="search_icon" src="./img/search.png" alt="">
        </div>
        <div class="line"></div>
        <div class="call">
            <a class="phone">+374 33 51 55 55</a></a>
        </div>
    </div>
    <form method="POST" action="/Search-en.php">
  <div class="search-box hidden" id="search-box">
      <div class="search-label">Search</div>
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
                echo '<a href="Product.php?type='.$value['category_id'].'" class="sub-menu-a">'.$value['type-eng'].'</a>';
              }
            ?>
        </div>
        <div class="language">
            <a href="Aparik.php">ARM</a>
            <a href="Aparik-en.php" class="active">EN</a>
            <a href="Aparik-ru.php">RU</a>
        </div>
    </div>
    <div class="menu_holder">
        <div class="text_center">
            <div class="border_div"></div>
            <p class="credit">Credit</p>
        </div>
    </div>
    <div class="container">
        <div class="texts">
          <p class="main">Main
          <img src="./img/arrow.png" class="arrow">
          Credit conditions</p>
        </div>
        <p class="credit1">Credit</p>
        <p class="credit_big">Credit conditions</p>
        <p class="transparent_text">
          Below you can familiarize yourself with the terms of credit sales.
        </p>
        <p class="long_text">
          The installment payment is made in the chain of Semur & Co stores,
          passport and social. with card availability. After the installment request, the bank some
          may also require an advance payment and guarantor in some cases.<br /><br />
  
          "HAYECONOMBANK" - 0.55% monthly service fee and 9% annually
          interest rate,<br />
          "AKBA BANK" - 0.5% monthly service fee and 11% annually
          interest rate,<br />
  
          "AMERIABANK" - nominal interest rate 0- 21.5% without service fee.
        </p>
        <div class="text_center1">We cooperate</div>
        <hr />
        <div class="images_bank">
          <img src="./img/ameria.png" class="ameria" alt="ameria" /><img
            src="./img/acba.png"
            class="acba"
            alt="acba"
          /><img src="./img/aeb.png" class="aeb" alt="aeb" />
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
          <a href="#">Factory Kotayk state,c.Eghvard,<br /> Yerevanyan Highway, str. 118:
          </a>
          <a href="">033 51 55 55, 033 52 55 55</a>
          <a href="mailto: info@semur.am" target="blank">info@semur.am</a>
          <div class="resp-menu">
            <ul class="resp-menu-ul">
              <li><a href="Aparanq-en.php">Our products</a></li>
              <li><a href="About-en.php">About us</a></li>
              <li><a href="Masnachyux-en.php">Stores</a></li>
              <li><a href="Contact-en.php">Contacts</a></li>
            </ul>
              <hr class="resp-hr" />
          </div>

          <p class="copy">Semur & Co. © 2022</p>
          <p class="copy1">All rights reserved.</p>
        </div>
        <div class="container-footer">
          <div class="footer-items">
            <a>Product</a>
            <?php 
              foreach ($asr as $value) {
                echo '<a href="Product.php?type='.$value['category_id'].'">'.$value['type-eng'].'</a>';
              }
            ?>
          </div>
          <div class="footer-items footer-info">
            <a>More</a>
            <a href="About-en.php">About us</a>
            <a href="Masnachyux-en.php">Stores</a>
            <a href="Blog-en.php">Blog</a>
            <a href="">Privacy Policy</a>
            <a href="Hashvetvutyun.php">Report</a>
            <a href="Aparik-en.php"> Credit sale</a>
            <a href="Contact-en.php">Contact </a>
          </div>
          <div class="footer-items footer-img">
            <div class="social">
              <p>Follow us</p>
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
    <script src="js/main.js"></script>
</body>
</html>
