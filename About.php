<?php 
  require "./config/config.php";
  $gallery = $mysql -> query("SELECT * FROM `gallery`");
  $asr = $mysql -> query("SELECT * FROM `assortment`");
  $infos = $mysql -> query("SELECT * FROM `aboutus`");
  $mysql -> close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/aboutStyle.php" />
    <link rel="stylesheet" href="./css/mainAll.php">
    <link rel="stylesheet" href="./css/aboutMedia768.php" />
    <link rel="stylesheet" href="./css/respmenufooter768.php">
    <link rel="stylesheet" href="./css/aboutMedia375.php" />
    <link rel="stylesheet" href="./css/respmenufooter375.php">
    <link rel="icon" href="./img/Logo.png">
    <title>Մեր մասին</title>
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
      </a><ul class="navbar" id="navbar">
        <li><a href="Apranq.php" class="resp-neu-li">Տեսականի</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
        <li><a href="About.php"  class="active">Մեր մասին</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
        <li><a href="Masnachyux.php">Մասնաճյուղեր</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
        <li><a href="Blog.php">Բլոգ</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
        <li><a href="Contact.php" >Կապ</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>  
        <div class="resp-lang-menu">
          <a href="#" class="active">Հայ</a>
          <a href="About-en.php">EN</a>
          <a href="About-ru.php">РУ</a>
        </div>
      </ul>
  
      <div class="language resp-lang">
        <a href="#" class="active">Հայ</a>
        <a href="About-en.php">EN</a>
        <a href="About-ru.php">РУ</a>
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
                <a href="About-en.php">EN</a>
                <a href="About-ru.php">РУ</a>
            </div>
        </div>
    <div class="menu_holder">
      <div class="text_center">
        <div class="border_div"></div>
        <p class="credit">Մեր մասին</p>
      </div>
    </div>
    <div class="container">
      <div class="texts">
          <p class="main">Գլխավոր
              <img src="./img/arrow.png" class="arrow">Մեր մասին
          </p>
      </div>
  
      <div class="container-text">
          <div>
              <div class="titleA-about">Մեր մասին</div>
              <div class="titleB-about">Մեր ընկերության մասին</div>
              <div class="titleC-about">«Սեմուր ընդ Կո»  ընկերությունն այսօր Հայաստանի շինանյութերի <span class="resp-about375">արտադրության արդյունաբերության ոլորտի ամենախոշոր ձեռնարկություններից մեկն է: Այն հիմնադրվել է 2003 թվականին։</span>
              </div>
          </div>           
              <div class="content-about-text">
                  <div class="content-about-textA">
                    <?php 
                      foreach($infos as $value){
                        echo $value['infoarm'];
                      }
                    ?>
                  </div>
                  <div class="content-about-textB">
                      «Սեմուր ընդ Կո» ընկերությունը  միևնույն ժամանակ զբաղվում է շինարարական ապրանքների ներկրմամբ ու վաճառքով:
                     <div class="content-about-textB-br">
                          Ապրանքատեսականու  ներկրումը իրականացվում է աշխարհի տարբեր երկրներից, մասնավորապես՝ Հարավային Կորեայից, Չինաստանից, Իրանից:
                     </div> 
                     <div class="content-about-textC-br">
                      <ul class="contact-about-item">
                          Մեր ընկերության հիմնական նպատակներն են՝
                         <li>• ապահովել տեղական  շուկան որակյալ և մրցունակ արտադրանքով </li>  
                          <li>•շինարարական ծառայությունների բարձրակարգ մատուցումը </li>
                          <li>• վաճառքի ու սպասարկման կենտրոնների  հասանելությունը</li>
                          <li>• ժամանակի ու հավելյալ ռեսուրսների խնայումը </li>
                      </ul>
                     
                     </div>
                    
                  </div>
              </div>
          </div>


          <div class="items-about"> 
              <div class="items-aboutA">
                  <div class="item-aboutA">
                      400+
                  </div>
                  <div class="item-aboutB">
                      Գործընկերներ
                  </div>
                  <div class="item-aboutC">
                      Մենք ունենք ավելի քան գործընկերներ աշխարհի տարբեր ծայրերից
                  </div>
              </div>
              <div class="items-aboutB">
                  <div class="item-aboutA">
                      600+
                  </div>
                  <div class="item-aboutB">
                      Գործընկերներ
                  </div>
                  <div class="item-aboutC">
                      Մենք ունենք ավելի քան գործընկերներ աշխարհի տարբեր ծայրերից
                  </div>
              </div>
              <div class="items-aboutC">
                  <div class="item-aboutA">
                      10K
                  </div>
                  <div class="item-aboutB">
                      Գործընկերներ
                  </div>
                  <div class="item-aboutC">
                      Մենք ունենք ավելի քան գործընկերներ աշխարհի տարբեր ծայրերից
                  </div>
              </div>
          </div>

          <div class="about-items-img">
             <div class="about-item-img-title">Նկարներ</div>
          <div class="aboutSlide">
            <?php 
              foreach($gallery as $value){
                echo '<div class="slide-item"><img src="./img/'.$value['img'].'" alt="" class="about-item--img'.$value['id'].'"></div>';
              }
            ?>
          </div>
             <div class="pagination">
              <div class="page">0<span class="page-num"></span></div>
              <div class="img-slide-arrow">
                  <img src="img/arrow-left.png" alt="arrow-left" class="img-slide-arrow1 prev">
                  <img src="img/arrow-right.png" alt="arrow-right" class="img-slide-arrow2 next">
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
         <a href="About.php" class="about active">Մեր մասին</a>          
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
 
    <script src="./js/script.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/style.js"></script>
  </body>
</html>
