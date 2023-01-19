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
    <title>Ապառիկ</title>
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
     <li><a href="About.php">Մեր մասին</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Masnachyux.php">Մասնաճյուղեր</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Blog.php" class="active">Բլոգ</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Contact.php">Կապ</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <div class="resp-menu-line"></div>
      <div class="resp-lang-menu">
      <a href="#" class="active">Հայ</a>
      <a href="Aparik-en.php">EN</a>
      <a href="Aparik-ru.php">РУ</a>
      </div>
    </ul>

    <div class="language resp-lang">
    <a href="#" class="active">Հայ</a>
      <a href="Aparik-en.php">EN</a>
      <a href="Aparik-ru.php">РУ</a>
    </div>
    <div class="icons">
      <img class="search_icon" src="./img/search.png" alt="" id="search" />
    </div>
    <div class="line" id="line"></div>
    <div class="call" id="call">
      <a class="phone">+374 33 51 55 55</a>
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
    <a href="#" class="active">Հայ</a>
      <a href="Aparik-en.php">EN</a>
      <a href="Aparik-ru.php">РУ</a>
    </div>
  </div>
  <div class="menu_holder">
    <div class="text_center">
        <div class="border_div"></div>
        <p class="credit">Ապառիկ</p>
    </div>
</div>
    <div class="container">
        <div class="texts">
          <p class="main">Գլխավոր
          <img src="./img/arrow.png" class="arrow">
          Ապառիկի պայմաններ</p>
        </div>
        <p class="credit1">Ապառիկ</p>
        <p class="credit_big">Ապառիկի պայմաններ</p>
        <p class="transparent_text">
          Ստորև կարող եք ծանոթանալ ապառիկ վաճառքի պայմաններին:
        </p>
        <p class="long_text">
          Ապառիկի ձևակերպումը կատարվում է Սեմուր ընդ Կո խանութների ցանցում,
          անձնագրի և սոց. քարտի առակայությամբ: Ապառիկի հարցումից հետո բանկը որոշ
          դեպքերում կարող է նաև պահանջել կանխավճար և երաշխավոր:<br /><br />
  
          «ՀԱՅԷԿՈՆՈՄԲԱՆԿ» - 0,55 % ամսական սպասարկման վճար և տարեկան 9 %
          տոկոսադրույք,<br />
          «ԱԿԲԱ ԲԱՆԿ» - 0.5% ամսական սպասարկման վճար և տարեկան 11 %
          տոկոսադրույք,<br />
  
          «ԱՄԵՐԻԱԲԱՆԿ» -անվանական տոկոսադրույք 0- 21.5% առանց սպասարկման վճար։
        </p>
        <div class="text_center1">ՀԱՄԱԳՈՐԾԱԿՑՈՒՄ ԵՆՔ</div>
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
        <a href="#"
          >Գործարան, Կոտայքի մարզ, ք. Եղվարդ,<br />
          Երևանյան Խճուղի, շ․ 118
        </a>
        <a href="">033 51 55 55, 033 52 55 55</a>
        <a href="mailto: info@semur.am" target="blank">info@semur.am</a>
        <div class="resp-menu">
          <ul class="resp-menu-ul">
            <li><a href="Apranq.php">Արտադրանք</a></li>
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
         <a href="About.php">Մեր մասին</a>          
          <a  href="Masnachyux.php">Մասնաճյուղեր</a>
          <a href="Blog.php">Semur բլոգ</a>
          <a href="#">Գաղտնիության քաղաքականություն</a>
          <a href="Hashvetvutyun.php">Հաշվետվություն</a>
          <a href="Aparik.php" class="active" > Ապառիկ վաճառք</a>
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
 
    <script src="./js/style.js"></script>
</body>
</html>
