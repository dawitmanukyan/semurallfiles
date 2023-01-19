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
        <a  href="#" class="toggle-button" onclick="toggleNav(this)" >
            <span class="bar1"></span>
            <span class="bar2"></span>
            <span class="bar3"></span>
        </a>  

        <ul class="navbar">
               <li><a href="About.php" class="about">Մեր մասին</a> </li>
            <li><a href="Masnachyux.php">Մասնաճյուղեր</a> </li>
            <li><a href="Blog.php">Բլոգ</a> </li>
            <li><a href="Contact.php">Կապ</a></li>
        </ul>
        <div class="language resp-lang">
            <?php 
                echo '<a href="#" class="active">Հայ</a>';
                echo '<a href="BlogTaniq-en.php?id='.$_GET['id'].'">EN</a>';
                echo '<a href="BlogTaniq-ru.php?id='.$_GET['id'].'">РУ</a>';
            ?>
        </div>
        <div class="icons">
            <input class="search-input" type="text" name="" placeholder="Որոնել" id="search-input">
            <img class="search_icon" src="./img/search.png" alt="" id="search">
            <img class="heart_icon" src="./img//heart.png" alt="">
        </div>
        <div class="line"></div>
        <div class="call">
            <a class="phone">+374 33 51 55 55</a>
        </div>
    </div>
    <div class="second-menu">
        <div class="second-menu-navigation">
        <?php 
              foreach ($asr as $value) {
                echo '<a href="Product.php?type='.$value['category_id'].'" class="sub-menu-a">'.$value['type-arm'].'</a>';
              }
            ?>
        </div>
        <div class="language">
            <?php 
                echo '<a href="#" class="active">Հայ</a>';
                echo '<a href="BlogTaniq-en.php?id='.$_GET['id'].'">EN</a>';
                echo '<a href="BlogTaniq-ru.php?id='.$_GET['id'].'">РУ</a>';
            ?>
        </div>
    </div>
    <div class="menu_holder">
        <div class="text_center">
            <div class="border_div"></div>
            <p class="credit">Բլոգ</p>
        </div>
    </div>


    <div class="container">
        <div class="texts">
            <p class="main">Գլխավոր
                <img src="./img/arrow.png" class="arrow"> Նորություններ և հոդվածներ
                <img src="./img/arrow.png" class="arrow"> <?php
                 foreach ($bloginf as $value) {
                    echo $value['namearm'];
                 }
                 ?>
            </p>
        </div>

        <div class="main-content">
            <div class="blog-title">
                <h5 class="item-date">
                    <?php 
                        foreach ($bloginf as $value) {
                        echo 'Ստեղծվել է '.$value['date'];
                        }
                    ?>
                </h5>
                <h3 class="item-title">
                    <?php 
                        foreach ($bloginf as $value) {
                        echo $value['namearm'];
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
                        echo $value['namearm'];
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
                    </div> 
                <div class="item-blog-img">
                    <?php 
                        foreach ($bloginf as $value) {
                            echo '<img src="img-blog/'.$value['img4'].'" alt="1" class="item1">';
                        }
                    ?>
                </div>
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
                <div class="end-news">Վերջին նորություններ</div> 
                <div class="end-news-title">Բլոգ և հոդվածներ</div>
                <div class="end-news-text">Վերջին նորություները և հոդվածները</div>
                <a href="Blog.php"><button class="end-news-button">Տեսնել բոլորը</button></a>
            </div>
           <div>
           <?php 
                foreach ($lastblog as $value);
                echo '<a class="item-img-blog" href="BlogTaniq.php?id='.$value['id'].'">';
            ?>
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
                                echo $value['namearm'];
                            ?>
                        <img src="./img/arrow-up-right.png" /></h3>
                     </div>
                </div>    
            </a>

          

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
   
      <script src="./js/style.js"></script>

</body>
</html>
