<?php 
header("Content-type: text/css; charset: UTF-8");
?>

* {
    margin: 0px;
    padding: 0px;

}

:root {
    --redColor: #ef4b37;
}

.header {
    max-width: 1920px;
    margin: 0 auto;
    width: 100%;    
    height: 92px;
    display: flex;
    background-color: #060606;
    
    opacity: 90%;
    position: fixed;
    left: 50%;
    transform: translate(-50%);
    top: 0;
    z-index: 999;
}

.logo {
    background-image: url(./img/Logo.png);
    min-width: 112px;
    background-repeat: no-repeat;
    margin-top: 14px;
    margin-left: 60px;
}

.navbar {
    width: 643px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-left: 38.5px;
}

.navbar li {
    list-style: none;
}

.navbar a {
    color: white;
    font-size: 112.5%;
    text-decoration: none;
}

.navbar a:hover {
    color: var(--redColor);
}

.icons {
    display: flex;
    align-items: center;
    margin-left: auto;
}

.heart_icon {
    margin-left: 30.55px;
}

.line {
    margin-left: 25.55px;
    margin-top: 24px;
    border-left: 1px solid #85888a;
    height: 44px;
}

.call {
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-left: 24px;
}

.phone {
    margin-right: 60px;
    color: white;
}

.phone:hover {
    color: var(--redColor);
}


.toggle-button {
    position: absolute;
    top: 2px;
    left: 0px;
    display: block;
    flex-direction: column;
    justify-content: space-between;
    width: 25px;
    height: 21px;
    cursor: pointer;
  }
  
.bar1,
.bar2,
.bar3 {

    height: 3px;
    width: 100%;
    background-color: rgb(238, 235, 235);
    border-radius: 10px;
    transition: 0.4s;
  }
  .change .bar1 {
    -webkit-transform: rotate(-45deg) translate(-9px, 6px);
    transform: translateY(9px) rotate(45deg);
}
  
  .change .bar2 {
    opacity: 0;
  }
  
  .change .bar3 {
    -webkit-transform: rotate(45deg) translate(-9px, -9px);
    transform: translateY(-9px) rotate(-45deg);
}

  .resp-lang {
    position: absolute;
    top: 0;
    left: 0px;
    display: block;
    flex-direction: row;
    justify-content: space-between;
    width: 30px;
    height: 21px;
  }
.second-menu {
    max-width: 1920px;
    margin: 0 auto;
    transform: translate(-50%);
    left: 50%;
    width: 100%;
    height: 64px;
    display: flex;
    align-items: center;
    background: #1d1c20;
    opacity: 0.7;
    position: fixed;
    top: 92px;
    z-index: 999;
}

.second-menu-navigation>a {
    text-decoration: none;
    color: white;
    font-size: 112.5%;
    line-height: 24px;
    display: flex;
}

.second-menu-navigation {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-left: 61px;
    width: 78%;
}

.second-menu-navigation a:hover {
    color: var(--redColor);
}

.language {
    display: flex;
    color: white;
    width: 10%;
    margin-left: 85px;
}

.language a {
    color: white;
    text-decoration: none;
    padding-left: 15px;
}

.language a:hover {
    color: var(--redColor);
}

.language a:first-child {
    color: var(--redColor);
}

.resp-lang{
    display: none;
}


.container {
    width: 92%;
    max-width: 1920px;
    margin: 0 auto;
 }

.texts {
    width: 100%;
    display: flex;
    margin-top: 48px;
    margin: 0 auto;

}

.main {
    font-size: 100%;
    color: #1D1C20;
    margin-top: 48px;
}

.arrow{
  margin: 0 5px;
}


.credit1 {
    color: #EF4B37;
    margin-top: 64px;
}

.banks_title hr {
    margin-top: 3%;
}

.credit_big {
    font-family: 'Segoe UI';
    width: 586px;
    height: 49px;
    font-weight: 600;
    font-size: 300%;
    line-height: 24px;
    margin-top: 24px;
    color: #000000;
}

.transparent_text {
    width: 623px;
    height: 36px;
    color: #85888A;
    font-family: 'Segoe UI';
    margin-top: 16px;
    font-style: normal;
    font-weight: 400;
    font-size: 125%;
    line-height: 30px;
}

.long_text {
    width: 1280px;
    height: 182px;
    font-family: 'Segoe UI';
    font-style: normal;
    font-weight: 400;
    font-size: 125%;
    line-height: 30px;
    color: #1D1C20;
    margin-top: 64px;
    word-break: break-word;
}

.text_center1 {
    width: 246px;
    height: 30px;
    font-family: 'Segoe UI';
    font-weight: 400;
    font-size: 20px;
    line-height: 30px;
    margin: 0 auto;
    margin-top: 112px;
    margin-bottom: 24px;
}

.images_bank {
    width: 100%;
    margin-top: 52px;
    display: flex;
    justify-content: space-around;

}

.ameria {
    width: 264px;
    height: 41px;
}

.acba {
    width: 130px;
    height: 43.65px;
}

.aeb {
    width: 112px;
    height: 49px
}


.headphones {
    position: fixed;
    right: 65px;
    bottom: 20px;
    z-index: 999;
}
.footer {
    max-width: 1920px;
    margin: 0 auto;
    height: 334px;
    background: #1d1c20;
    display: flex;
    justify-content: space-between;
    margin-top: 100px;
  }
  
  .logo-semur {
    width: 112px;
    height: 64px;
    margin-bottom: 24px;
  }
  
  .info {
    width: 30%;
    display: flex;
    flex-direction: column;
    margin-left: 60px;
    margin-top: 32px;
  }
  
  .info a {
    color: #f5f5f5;
    font-weight: 400;
    font-size: 87.5%;
    line-height: 24px;
    text-decoration: none;
  }
  
  .info a:first-child {
    width: 267px;
  }
  
  .info p {
    color: #85888a;
    font-weight: 400;
    font-size:87.5%;
    line-height: 24px;
  }
  
  .copy {
    margin-top: 30px;
  }
  
  .footer-items {
    display: flex;
    flex-direction: column;
    margin-top: 32px;
  }
  
  .footer-items a {
    color: #f5f5f5;
    text-decoration: none;
    font-size:87.5%;
    line-height: 24px;
    margin-bottom: 4px;
  }
  
  .footer-items a:hover {
    color: var(--redColor);
  }
  
  .footer-items a:first-child {
    margin-bottom: 8px;
    color: #85888A;
  }
  
  .social p {
    font-size: 14px;
    line-height: 24px;
    color: #85888A;
  }
  
  .social {
    margin-right: 60px;
  }
  
  .container-footer {
    width: 55%;
    display: flex;
    justify-content: space-between;
    margin-left: 150px;
  }
  
  .footer-info {
    margin-left: 50px;
  }
  .resp-menu{
    display: none;
  }
  .resp-hr{
    width: 295px;
    margin-top: 24px;
    border:1px solid #615F66;
    display: none;
}

