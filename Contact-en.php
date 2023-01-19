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
    <title>Contact</title>
</head>
<body>
    <div class="header" id="header">
        <a href="index-en.php" class="logo" id="logo"></a>
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
          <li><a href="Artadranq-en.php" class="resp-neu-li">Assortment</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
          <li><a href="About-en.php" >About us</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
          <li><a href="Masnachyux-en.php">Branches</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
          <li><a href="Blog-en.php">Blog</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
          <li><a href="Contact-en.php" class="active">Contact</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li>
          <!-- <li><a href="Hashvich-ru.php">Онлайн калькулятор</a><img src="./img/arrow-right-menu.png" class="arrow-right-menu"></li> -->
    
          <div class="resp-lang-menu">
            <a href="Contact.php">Հայ</a>
            <a href="Contact-en.php" class="active">EN</a>
            <a href="Contact-ru.php">РУ</a>
          </div>
        </ul>
    
        <div class="language resp-lang">
          <a href="Contact.php">Հայ</a>
          <a href="Contact-en.php" class="active">EN</a>
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
                  <a href="Contact.php">Հայ</a>
                  <a href="Contact-en.php" class="active">EN</a>
                  <a href="Contact-ru.php">РУ</a>
              </div>
          </div>
    <div class="menu_holder">
        <div class="text_center">
            <div class="border_div"></div>
            <p class="credit">Contact</p>
        </div>
    </div>
    <div class="container">
        <div class="texts">
            <p class="main">Home
                <img src="./img/arrow.png" class="arrow">Contact
            </p>
        </div>

        <div class="contact-title">Feedback</div>
        <div class="contact-text">Our team is always ready to help you in any matter.</div>
        <div class="contact-container">
            <div class="contact-right">          
                <div class="contact-icon">
                    <div class="contact-icon1"><img src="./img/mail.png" /><div class="contact-icon-text">@semur.am</div></div>
                    <div class="contact-icon1"><img src="./img/phone-call.png"/><div class="contact-icon-text">+374 33 51 55 55</div></div>
                    <div class="contact-icon1"><img src="./img/map-pin.png" class="contact-icon-img"><div class="contact-icon-text">Plant, Kotayk region, Egvard, Yerevan highway, 118</div></div>
                </div>
                <div class="map-karta-contact">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aedc40bf50c15d9f2a3ac07a08d563dec88f84049535007d1923e23db348a7c7a&amp;source=constructor" width="658px" height="431px"  frameborder="0" style="border:0; border-radius: 15px; filter:invert(90%)" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            </div>
            <div class="contact-left ">
                <form action="/sendmail.php" method="post">
                    <h1 class="contact-left-title">Contact us</h1>
                            <div class="input-group">
                                <label>Name</label>
                                <input type="text" placeholder="Enter your name" name="username">
                            </div>
                        
                            <div class="input-group">
                                <label>E-mail: address:</label>
                                <input type="text" placeholder="Enter your email address" name="useremail">
                            </div>
                            <div class="input-group">
                                <label>Phone number</label>
                                <input type="text" placeholder="Enter your phone number" name="phone">
                            </div>
                            <div class="input-group">
                                <label>Message</label>
                                <textarea class="textareaResp" name="message">Submit your question</textarea>
                            </div>
                            <div class="input-group-button input-group">
                                <button type="submit">Send</button>
                                <div class="text-group">By clicking the send button, I give my consent to the transfer of data.</div>
                            </div>
                </form>
             
            </div>
            <div class="map-karta-contactResp375">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3049.32253132832!2d44.50084746542619!3d40.15737206806434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abc03bd154a47%3A0xc8a1eebdbc592c87!2zQXJzaGFrdW55YXRzIEF2ZSwgWWVyZXZhbiwg0JDRgNC80LXQvdC40Y8!5e0!3m2!1sru!2s!4v1665993778715!5m2!1sru!2s"
                    width="375px" height="431px" style="border:0; border-radius: 15px; filter:invert(90%)" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
      
        <div class="line-hr"></div>
      
        <div class="map-logo-text">
            <img src="./img/map.png" class="vector">
            <p>Our stores</p>
        </div>
        <div class="main-container">
            <div class="info-contact">
                <p class="main-1">Office</p>
                <div class="Address1">
                    <p>C.Erevan</p>
                    <p>Marshal Baghramyan avenue</p>
                    <p>1 building(Central administrative district)</p>
                </div>
                <div class="gray-contact">
                    <p>Monday-Friday 09։30-17։00</p>
                    <p>+374 33 51 55 55 </p>
                    <p>+374 33 52 55 55 </p>
                    <button class="onMap">View on map</button>

                </div>
            </div>
            <div class="info-contact">
                <p class="main-1">Factory</p>
                <div class="Address2">
    
                    <p>Kotayq state, c. Eghvard,</p>
                    <p>Yerevanyan Highway, str.118</p>
                </div>
                <div class="gray-contact margin-top">
                    <p>Monday-Friday 09։30-17։00</p>
                    <p>+374 33 51 55 55 </p>
                    <p>+374 33 52 55 55</p>
                    <button class="onMap">View on map</button>

                </div>
            </div>
            <div class="info-contact">
                <p class="main-1">Specialized store</p>
                <div class="Address">
                    Kotayq state, c.Abovyan,
                    <div>Upper Ptghni, Boyni district, 1st</div>
                    <div>street, building 7(Hs. near the bus station.) </div>
                </div>
                <div class="gray-contact">
                    <p>Monday-Friday 09։30-17։00</p>
                    <p>+374 33 51 55 55 </p>
                    <p>+374 33 52 55 55</p>
                    <button class="onMap">View on map</button>

                </div>
            </div>
            <div class="info-contact main-resp padding">
                <p class="main-1">Specialized store</p>
                <div class="Address">
                    <p>C.Erevan</p>
                    <p>Sebastia St., 134/1 building</p>
                    <p> (Malatia-Sebastia adm. circle)</p>
                </div>
                <div class="gray-contact">
                    <p>Monday-Friday 09։30-17։00</p>
                    <p>+374 33 51 55 55 </p>
                    <p>+374 33 52 55 55</p>
                    <button class="onMap">View on map</button>

                </div>
            </div>
            <div class="info-contact main-resp padding">
                <p class="main-1">Specialized store</p>
                <div class="Address">
                    <p>C.Erevan</p>
                    <p>Arshakunyats Avenue, 270/1 building</p>
                    <p>(Shengavit adm. circle)</p>
                </div>
                <div class="gray-contact">
                    <p>Monday-Friday 09։30-17։00</p>
                    <p>+374 33 51 55 55 </p>
                    <p>+374 33 52 55 55</p>
                    <button class="onMap">View on map</button>

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
          <a href="#">Factory,Kotayq state,C.Eghvard<br /> Yerevanyan Highway, str. 118:
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
            <a>Our products</a>
            <?php 
              foreach ($asr as $value) {
                echo '<a href="Product-en.php?type='.$value['category_id'].'">'.$value['type-eng'].'</a>';
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
      <script src="js/Contact.js"></script>
      <script src="js/Blog.js"></script>
      <script src="./js/script.js"></script>
      <script src="./js/slide.js"></script>
      <script src="./js/style.js"></script>
</body>
</html>
