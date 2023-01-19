<?php 
  require "./config/config.php";
  $info = $mysql -> query("SELECT * FROM `site_info`");
  $asr = $mysql -> query("SELECT * FROM `assortment`");
  $id = $_GET['id'];
  $bloginf = $mysql -> query("SELECT * FROM `blogs` WHERE `id`=$id");
  $lastblog = $mysql -> query("SELECT * FROM `blogs`");
  $mysql -> close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/BlogTaniqstyle.php" />
    <link rel="stylesheet" href="./css/BlogTaniqmedia768.php" />
    <link rel="stylesheet" href="./css/BlogTaniqmedia375.php" />
    <link rel="stylesheet" href="./css/mainAll.php">
    <link rel="stylesheet" href="./css/respmenufooter768.php">
    <link rel="stylesheet" href="./css/respmenufooter375.php">
    <link rel="icon" href="./img/Logo.png">
</head>

<body>
    <div class="header">
        <a href="index.php" class="logo" id="logo"></a>
        <a href="" class="toggle-button" onclick="toggleNav(this)">
          <span class="bar1"></span>
          <span class="bar2"></span>
          <span class="bar3"></span>
        </a> 

        <ul class="navbar">
             <li><a href="Abouten.php" class="about">About us</a> </li>
            <li><a href="Masnachyux-en.php">Stores</a> </li>
            <li><a href="Blog-en.php">Blog</a> </li>
            <li><a href="Contact-en.php">Contact</a></li>
            <li><a href="Hashvich-en.php">Online calculator</a></li>
        </ul>
        <div class="language resp-lang">
        <div class="language resp-lang">
        <?php 
                echo '<a href="BlogTaniq.php?id='.$_GET['id'].'">Հայ</a>';
                echo '<a href="BlogTaniq-en.php?id='.$_GET['id'].'" class="active">EN</a>';
                echo '<a href="BlogTaniq-ru.php?id='.$_GET['id'].'">РУ</a>';
            ?>
        </div>
        <div class="icons">
            <img class="search_icon" src="./img/search.png" alt="">
        </div>
        <div class="line"></div>
        <div class="call">
            <a class="phone">+374 33 51 55 55</a></a>
        </div>
    </div>
    <div class="second-menu">
        <div class="second-menu-navigation">
        <?php 
              foreach ($asr as $value) {
                echo '<a href="Product-ru.php?type='.$value['category_id'].'" class="sub-menu-a">'.$value['type-eng'].'</a>';
              }
            ?>
        </div>
        <div class="language">
        <div class="language resp-lang">
        <?php 
                echo '<a href="BlogTaniq.php?id='.$_GET['id'].'">Հայ</a>';
                echo '<a href="BlogTaniq-en.php?id='.$_GET['id'].'" class="active">EN</a>';
                echo '<a href="BlogTaniq-ru.php?id='.$_GET['id'].'">РУ</a>';
            ?>
        </div>
    </div>
    <div class="menu_holder">
        <div class="text_center">
            <div class="border_div"></div>
            <p class="credit">Blog</p>
        </div>
    </div>


    <div class="container">
        <div class="texts">
            <p class="main">Home
                <img src="./img/arrow.png" class="arrow"> News and articles
                <img src="./img/arrow.png" class="arrow">
                <?php
                 foreach ($bloginf as $value) {
                    echo $value['nameeng'];
                 }
                 ?>
            </p>
        </div>

        <div class="main-content">
            <div class="blog-title">
            <h5 class="item-date">
                    <?php 
                        foreach ($bloginf as $value) {
                        echo 'Created '.$value['date'];
                        }
                    ?>
                </h5>
                <h3 class="item-title">
                    <?php 
                        foreach ($bloginf as $value) {
                        echo $value['nameeng'];
                        }
                    ?>
                </h3>
            </div>
            <div class="item-img">
            <?php 
                        foreach ($bloginf as $value) {
                            echo '<img src="img-blog/'.$value['img'].'" alt="1" class="item1">';
                        }
                    ?>
                    <?php 
                        foreach ($bloginf as $value) {
                            echo '<img src="img-blog/'.$value['img2'].'" alt="2" class="item2">';
                        }
                    ?>
                    <?php 
                        foreach ($bloginf as $value) {
                            echo '<img src="img-blog/'.$value['img3'].'" alt="3" class="item3">';
                        }
                    ?>
            </div>
            <div class="img-slide">
                    <div class="slide-num">01|10</div>
                    <div class="img-slide-arrow">
                        <img src="img/arrow-left.png" alt="arrow-left">
                        <img src="img/arrow-right.png" alt="arrow-right" class="img-slide-arrow2">
                    </div>
               
            </div>
            <div>
            <h1 class="title-content">
                <?php 
                    foreach ($bloginf as $value) {
                        echo $value['nameru'];
                    }
                ?>
                </h1>
                <div class="title-text-first">
                    <div>
                    <?php 
                        foreach ($bloginf as $value) {
                            echo $value['descriptionarm'];
                        }
                    ?>
                    </div></div>
                <div class="item-blog-img">
                    <?php 
                        foreach ($bloginf as $value) {
                            echo '<img src="img-blog/'.$value['img4'].'" alt="1" class="item1">';
                        }
                    ?>
                </div>
            </div>        
            <div>
                    <?php 
                        foreach ($bloginf as $value) {
                            echo '<img src="img-blog/'.$value['img5'].'" alt="1" class="item1">';
                        }
                    ?>
            </div>

        <div>
            <div class="hr-line"></div>
            <div class="after-hr">
               <div class="after-hr-icons">
                   <a href="">
                       <img src="img/copy-link.png"/>
                   </a>
                   <a target="_blank" href="https://www.instagram.com/semur.co/">
                       <img src="./img/InstagramBlog Icon.png" alt="Instagram" />
                   </a>
                   <a target="_blank" href="https://www.facebook.com/pages/category/Building-Materials/Semur-Co-118059506271527/">
                       <img src="./img/FacebookBlog Icon.png" alt="Facebook" />
                     </a>
               </div>
            </div>
        </div>

        <div class="blog-news-footer">
            <div>
                <div class="end-news">Latest news</div> 
                <div class="end-news-title">Blog and articles</div>
                <div class="end-news-text">Latest news and articles</div>
                <button class="end-news-button">See all</button>
            </div>
           <div>
           <?php 
                foreach ($lastblog as $value);
                echo '<a class="item-img-blog" href="BlogTaniq-en.php?id='.$value['id'].'">';
            ?>
            <div class="item-img-blog">
                <div class="blog-item1">
                <div class="item-img1">
                            <?php 
                                foreach ($lastblog as $value);
                                echo '<img src="./img-blog/'.$value['img'].'" alt="1pic"/>';
                            ?>
                    </div>
                    <div class="item-info1">
                        <h5 class="item-date1">
                            <?php 
                                foreach ($lastblog as $value);
                                echo $value['date'];
                            ?>
                        </h5>
                        <h3 class="item-title1">
                            <?php 
                                foreach ($lastblog as $value);
                                echo $value['nameeng'];
                            ?>
                        <img src="./img/arrow-up-right.png" /></h3>
                     </div>
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
          <a href="#">Factory Kotayq state c.Eghvard<br/>Yerevanyan Highway, str. 118:
          </a>
          <a href="">033 51 55 55, 033 52 55 55</a>
          <a href="mailto: info@semur.am" target="blank">info@semur.am</a>
          <div class="resp-menu">
            <ul class="resp-menu-ul">
                <li><a href="Apranq-en.php">Our products</a></li>
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
      <script src="js/Blog.js"></script>

</body>
</html>
