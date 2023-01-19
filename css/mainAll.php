<?php 
header("Content-type: text/css; charset: UTF-8");
?>

* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    text-decoration: none;
}
button {
    cursor: pointer;
    transition: all ease 0.5s;
}
button:hover {
    box-shadow: rgba(239,75,55, 0.4) 0px 5px, rgba(239,75,55, 0.3) 0px 10px, rgba(239,75,55, 0.2) 0px 15px, rgba(239,75,55, 0.1) 0px 20px, rgba(239,75,55, 0.05) 0px 25px;
}
:root {
    --redColor: #ef4b37;
}
.navbar a.active{
    color: var(--redColor);
}
a.active{
    color: var(--redColor);
}
 .active {
    color: #ef4b37;
} 

body {
    overflow-x: hidden;
    font-family: 'Segoe UI';
}

.header {
    width: 100%;
    height: 92px;
    display: flex;
    background-color: #060606;
    position: fixed;
    left: 50%;
    transform: translate(-50%);
    top: 0;
    z-index: 999;
}

.logo {
    background-image: url(../img/Logo.png);
    min-width: 112px;
    background-repeat: no-repeat;
    margin-top: 14px;
    margin-left: 60px;
}

.navbar {
    width: 41.6%;
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
    font-size: 112.5%px;
    text-decoration: none;
}

.navbar a:hover {
    color: var(--redColor);
}
.navbar a.active{
    color: var(--redColor);
}
a.active{
    color: var(--redColor);
}
li{
    display: flex;
}
.resp-lang-menu{
    display: flex;
    justify-content: center;
    display: none;
}
.resp-lang-menu>a {
    margin: 5px;
}
.resp-menu-li{
    display: none;
}
.resp-menu-ul a{
    color: var(--redColor);
  }
.arrow-right-menu{
    position: relative;
    right: 0;
    display: none;
}

.icons {
    display: flex;
    align-items: center;
    margin-left: auto;
}

.search-box {
    background: rgb(255,255,2555);
    height: 77px;
    position: fixed;
    top: -1px;
    z-index: 999;
    border-radius: 0px 0px 16px 16px;
    display: flex;
    align-items: center;
    padding: 0 35px 0 32px;
    width: 100%;
}


.search-label {
    font-size: 16px;
    line-height: 24px;
    color: #1D1C20;
    margin-right: 10px;
}

.search-input-wrapper {
    position: relative;
    width: max-content;
}

.search-input-wrapper img {
    position: absolute;
    top: 37%;
    transform: translateY(-50%);
    right: 12px;
    cursor: pointer;
}


.search-input {
    height: 38px;
    font-size: 20px;
    transition: 0.4s;
    border-radius: 8px;
    padding: 0 7px;
    width: 700px;
    border: 1px solid #B0AFB3;
  }

  .search-icon-close {
      margin-left: auto;
      cursor: pointer;
  }

  .active1{
    display: block;
  }
  #close{
    position: relative;
    top: 45%;
    right: 30px;
    display: none;

  }
  #search-active{
    display: none;
    color:#111111;
    font-size: 16px;
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

.order-call{
    color: var(--redColor);
    margin-top: 5px;
    font-size: 100%;
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
.hidden {
    display: none;
}
.second-menu {
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
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-left: 61px;
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
.language a.active {
    color: var(--redColor);
}

.resp-lang {
    display: none;
}

.menu_holder {
    position: relative;
    margin: 0 auto;
    height: 330px;
    background: rgb(15, 14, 16, 1);
    background-image: linear-gradient(0deg, rgba(15, 14, 16, 1) 0%, rgba(15, 14, 16, 0.01) 84%, rgba(169, 167, 170, 1) 100%), url("../img/Home.png");
    background-size: cover;
} 
  .text_center {
    display: flex;
    margin-left: 60px;
  }
  
  .border_div {
    width: 5.1%;
    border-bottom: solid 2px #fa4c39;
    margin-bottom: 7px;
  }
  
  .credit {
    font-family: "Mardoto";
    font-style: normal;
    font-weight: 500;
    font-size: 225%;
    line-height: 24px;
    color: #ffffff;
    margin: 12% 0 0 1.3%;
  }
  
.hover-icons {
    position: fixed;
    display: flex;
    flex-direction: column;
    right: 140px;
    bottom: 47px;
    display: none;
}


.button {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    border: none;
    border-radius: 50%;
    margin-top: 12px;
}

.hover-icon-watsup {
    background-color: #39AE41;
}

.hover-icon-call {
    background-color: #02295F;

}

.hover-icon-messanger {
    background-color: #0084FF;
}

.hover-icon-mail {
    background-color: #00897B;
}

.hover-icon-headphone {
    background-color: #EF4B37;
}
.headphones-hover:hover .hover-icons {
    display: block;

}
.headphones-hover{
    width: 400px;
}
.headphones {
    position: fixed;
    right: 65px;
    bottom: 20px;
    z-index: 999;
}


.footer {
    margin: 0 auto;
    background: #1d1c20;
    display: flex;
    justify-content: space-between;
    margin-top: 100px;
    height: 400px;
}

.logo-semur {
    width: 112px;
    height: 64px;
    margin-bottom: 24px;
}

.info {
    display: flex;
    flex-direction: column;
    margin-left: 60px;
    margin-top: 32px;
}

.info a {
    color: #f5f5f5;
    font-size: 87.5%;
    line-height: 24px;
    text-decoration: none;
}

.info a:first-child {
    width: 267px;
}

.info p {
    color: #85888a;
    font-size: 87.5%;
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
    font-size: 87.5%;
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
}

.footer-info {
    margin-left: 50px;
}

.resp-menu {
    display: none;
}
.resp-menu-ul a{
    color: var(--redColor);
  }

  .resp-neu-li{
    display: none;
  }

#product_item {
    text-decoration: none;
}

