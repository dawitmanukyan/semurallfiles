<?php 
header("Content-type: text/css; charset: UTF-8");
?> 

* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

:root {
    --redColor: #ef4b37;
}

body {
    min-height: 100%;
    width: 100%;
    overflow-x: hidden;
}

.logo {
    background-image: url(../img/Logo.png);
    min-width: 112px;
    background-repeat: no-repeat;
    margin-top: 14px;
    margin-left: 60px;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
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
.resp-menu-line{
    border: 1px solid #D8D7D9;
    display: none;
}
.resp-lang-menu{
    display: flex;
    margin-left: 150px;
    display: none;
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
}ive1{
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
#search_icon-active{
    display: block;
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
    width: 95px;
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
    margin-top: 226px;
    margin-left: 24px;
}
.container {
    width: 100%;
    margin: 0 auto;
    overflow: hidden;
}


.vector {
    height: 47.88px;
    margin-top: 64px;
}

.texts {
    width: 100%;
    display: flex;
    margin-top: 48px;
}

.arrow {
    margin: 0 5px;
}

.main {
    font-size: 16px;
    color: #1d1c20;
    padding-left: 60px;
}

.blog-title {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 80px;
}

.blog-title1 {
    color: var(--redColor);
    font-size: 14px;
}

.blog-title2 {
    font-size: 48px;
    color: #060606;
    margin-top: 16px;
}

.blog-title3 {
    margin-top: 16px;
    color: #85888A;
    font-size: 20px;
}

.blog-search {
    height: 42px;
    border-radius: 8px;
    border: 1px solid #E5E5E5;
    padding: 1% 4%;
    margin-top: 32px;
    background-image: url("img/search.png");
    background-size: contain;
    background-repeat: no-repeat;
    outline: 0;
    background-position: 12px;
    background-size: 16px;
    font-size: 16px;

}


.blog-container {
    display: flex;
    overflow-x: scroll;
    margin: 0 auto; 
}


.blogs {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    overflow: hidden;

}

.blog-item {
    width: 384px;
    height: 526px;
    border-radius: 6px;
    overflow: hidden;
    padding: 32px;
}
.item-img > img {
    width: 250px;
}


.item-date {
    font-size: 12px;
    color: var(--redColor);
    margin-top: 20px;
}

.item-title {
    font-size: 24px;
    font-weight: 500;
    color: rgba(6, 6, 6, 1);
    font-family: Mardoto;
    margin-top: 8px;
}

.item-text {
    font-size: 16px;
    color: #85888A;
    margin-top: 8px;

}

.blog-button {
    display: flex;
}

.blog-button button {
    margin: 5px;
    height: 24px;
    background-color: rgba(45, 156, 219, 0.2);
    text-align: center;
    border: none;
    margin-top: 40px;
}

.button1 {
    width: 95px;
    height: 24px;
    font-size: 12px;
    color: #2a5845;
}

.colorBlue {
    color: #3538CD;
}

.colorRose {
    color: #C11574;
}

.colorBoldBlue {
    color: #363F72;
}

.colorBl {
    color: #026AA2;
}

.colorRed {
    color: #B93815;
}

.colorPurpl {
    color: #6941C6;
}


.blogs .blog-item.hide {
    display: none;
}

.blogs .blog-item.show {
    display: block;
}

.pagination{
    text-align: center;
    margin: 30px;
    user-select: none;
    margin-bottom: 106px;

}
.pagination li{
    display: inline-block;
    margin: 5px;
    line-height: 45px;
    box-shadow: 0 5PX 25px rgb(1 1 1 / 10%);

}

.pagination li a{
    text-decoration: none;
    color: #1D1C20;

}

.previous-page{
    position:absolute;
    left: 50px;
    margin-top: -20px;
    
}
.next-page{
    position: absolute;
    right: 50px;
    font-size: 18px;
}
.current-page, .dots{
    background: #ccc;
    width: 36px;
}

.pagination .active{
    background: #EF4B37;
    color: solid #D8381E    ;
    opacity: 20%;
}
.disable{
    background: #ccc;
} 

.social p {
    font-size: 14px;
    line-height: 24px;
    color: #85888A;
}

.social {
    margin-right: 60px;
}
