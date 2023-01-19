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
    <title>Կապ</title>
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
      <li><a href="Apranq.php.php" class="resp-neu-li">Տեսականի</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="About.php">Մեր մասին</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Masnachyux.php">Մասնաճյուղեր</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Blog.php">Բլոգ</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <li><a href="Contact.php"  class="active">Կապ</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
      <div class="resp-menu-line"></div>
      <div class="resp-lang-menu">
        <a href="#" style="color: #EF4B37">Հայ</a>
        <a href="Contact-en.php">EN</a>
        <a href="Contact-ru.php">РУ</a>
      </div>
    </ul>

    <div class="language resp-lang">
      <a href="#" style="color: #EF4B37">Հայ</a>
      <a href="Contact-en.php">EN</a>
      <a href="Contact-ru.php">РУ</a>
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
              <a href="#" style="color: #EF4B37">Հայ</a>
              <a href="Contact-en.php">EN</a>
              <a href="Contact-ru.php">РУ</a>
          </div>
      </div>
    <div class="menu_holder">
        <div class="text_center">
            <div class="border_div"></div>
            <p class="credit">Կապ</p>
        </div>
    </div>
    <div class="container">
        <div class="texts">
            <p class="main">Գլխավոր
                <img src="./img/arrow.png" class="arrow">Կապ
            </p>
        </div>

        <div class="contact-title">Հետադարձ կապ</div>
        <div class="contact-text">Մեր թիմը մշտապես պատրաստ է Ձեզ օգնել ցանկացած հարցում։</div>
        <div class="contact-container">
            <div class="contact-right">          
                <div class="contact-icon">
                    <div class="contact-icon1"><img src="./img/mail.png" /><div class="contact-icon-text">@semur.am</div></div>
                    <div class="contact-icon1"><img src="./img/phone-call.png"/><div class="contact-icon-text">+374 33 51 55 55</div></div>
                    <div class="contact-icon1"><img src="./img/map-pin.png" class="contact-icon-img"><div class="contact-icon-text">Գործարան, Կոտայքի մարզ, ք. Եղվարդ, Երևանյան Խճուղի, շ․ 118</div></div>
                </div>
                <div class="map-karta-contact">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aedc40bf50c15d9f2a3ac07a08d563dec88f84049535007d1923e23db348a7c7a&amp;source=constructor" width="658px" height="431px"  frameborder="0" style="border:0; border-radius: 15px; filter:invert(90%)" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
            <div class="contact-left ">
                <form action="/sendmail.php" method="post">
                    <h1 class="contact-left-title">Կապ մեզ հետ</h1>
                            <div class="input-group">
                                <label>Անուն</label>
                                <input type="text" placeholder="Մուտքագրեք Ձեր անունը" name="username">
                            </div>
                        
                            <div class="input-group">
                                <label>Էլ․ հասցե</label>
                                <input type="text" placeholder="Մուտքագրեք Ձեր էլեկտրոնային հասցեն" name="useremail">
                            </div>
                            <div class="input-group">
                                <label>Հեռախոսահամար</label>
                                <input type="tel" placeholder="Մուտքագրեք Ձեր հեռախոսահամարը" name="phone">
                            </div>
                            <div class="input-group">
                                <label>Հաղորդագրություն</label>
                                <textarea class="textareaResp" name="message">Ներկայացրեք Ձեր հարցը</textarea>
                            </div>
                            <div class="input-group-button input-group">
                                <button type="submit">Ուղարկել</button>
                                <div class="text-group">Սեղմելով ուղարկել կոճակը ես տալիս եմ իմ համաձայնությունը՝ տվյալների փոխանցման համար։</div>
                            </div>
                </form>
             
            </div>
        </div>
      
        <div class="line-hr"></div>
      
        <div class="map-logo-text">
            <img src="./img/map.png" class="vector">
            <p>Մեր մասնաճյուղերը</p>
        </div>
        <div class="main-container">
            <div class="info-contact">
                <p class="main-1">Գրասենյակ</p>
                <div class="Address1">
                    <p>Ք. Երևան,</p>
                    <p>Մարշալ Բաղրամյան պող.,</p>
                    <p>1 շենք (Կենտրոն վարչ. շրջան)</p>
                </div>
                <div class="gray-contact">
                    <p>Երկ․- ուրբ․ 09։30-17։00</p>
                    <p>+374 33 51 55 55 </p>
                    <p>+374 33 52 55 55 </p>
                    <button class="onMap">Տեսնել քարտեզի վրա</button>

                </div>
            </div>
            <div class="info-contact">
                <p class="main-1">Գործարան</p>
                <div class="Address2">
    
                    <p>Կոտայքի մարզ, ք. Եղվարդ,</p>
                    <p>Երևանյան Խճուղի, շ․ 118</p>
                </div>
                <div class="gray-contact margin-top">
                    <p>Երկ․- ուրբ․ 09։30-17։00</p>
                    <p>+374 33 51 55 55 </p>
                    <p>+374 33 52 55 55</p>
                    <button class="onMap">Տեսնել քարտեզի վրա</button>

                </div>
            </div>
            <div class="info-contact">
                <p class="main-1">Մասնագիտացված խանութ</p>
                <div class="Address">
                    Կոտայքի մարզ, ք․ Աբովյան,
                    <div>Վերին Պտղնի, Բոյնի թաղամաս, 1-ին</div>
                    <div>փողոց, շին․ 7 (Հս․ ավտոկայանի մոտ) </div>
                </div>
                <div class="gray-contact">
                    <p>Երկ․- ուրբ․ 09։30-17։00</p>
                    <p>+374 33 51 55 55 </p>
                    <p>+374 33 52 55 55</p>
                    <button class="onMap">Տեսնել քարտեզի վրա</button>

                </div>
            </div>
            <div class="info-contact main-resp padding">
                <p class="main-1">Մասնագիտացված խանութ</p>
                <div class="Address">
                    <p>ք․ Երևան,</p>
                    <p>Սեբաստիայի փող., 134/1 շենք </p>
                    <p> (Մալաթիա-Սեբաստիա վարչ. շրջան)</p>
                </div>
                <div class="gray-contact">
                    <p>Երկ․- ուրբ․ 09։30-17։00</p>
                    <p>+374 33 51 55 55 </p>
                    <p>+374 33 52 55 55</p>
                    <button class="onMap">Տեսնել քարտեզի վրա</button>

                </div>
            </div>
            <div class="info-contact main-resp padding">
                <p class="main-1">Մասնագիտացված խանութ</p>
                <div class="Address">
                    <p>ք․ Երևան,</p>
                    <p>Արշակունյաց պող., 270/1 շենք</p>
                    <p>(Շենգավիթ վարչ. շրջան)</p>
                </div>
                <div class="gray-contact">
                    <p>Երկ․- ուրբ․ 09։30-17։00</p>
                    <p>+374 33 51 55 55 </p>
                    <p>+374 33 52 55 55</p>
                <button class="onMap">Տեսնել քարտեզի վրա</button>

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
</body>
</html>
