<?php 
header("Content-type: text/css; charset: UTF-8");
?>

@media screen and (max-width:1200px) {
.header {
    height: 76px;
    left: 0;
    transform: translate(0);
}

.logo {
    background-image: url(../img/Logo.png);
    min-width: 63px;
    height: 36px;
    background-size: cover;
    margin-top: 14px;
    margin-left: 60px;
}

.toggle-button {
    display: flex;
    left: 95%;
    top: 55%;
    transform: translatey(-50%);
}

.icons {
    display: flex;
    position: absolute;
    right: 10%;
    top: 40%;
}

.resp-lang {
    display: flex;
    left: 58%;
    top: 60%;
    transform: translatey(-50%);
}

.line {
    display: flex;
    top: 1%;
    position: absolute;
    left: 83%;
    margin: 16px 0 16px 0;
    height: 44px;
}

.phone,.order-call {
    display: none;
}


.navbar {
   width: 100vw;
    height: 0px;
    overflow: hidden;
    display: block;
    background-color: rgb(0, 0, 0);
    position: absolute;
    top: 76px;
    transition: 1s;
    background-color: white;
    margin-left: 0;
   
}

.navbar li {
    padding: 5px 10px;
    margin-right: 0;
    display: flex;
    justify-content: space-between;

}
.navbar a {
    color: black;
}
.arrow-right-menu{
    display: block;
}



.navbar.active {
    height: 200px;
   
}

.navbar.active::before {
    transform: translateY(0px) rotate(50deg);
}

.active1{
display: block;
}

.second-menu {
    display: none;
}
.search_icon{
    color: black;
}




.search-box{
    gap: 24px;
}
.search-input {
    width: 500px;
}

.menu_holder {
    width: 100vw;
    width: 100%;
    height: 250px;
    background-image: linear-gradient(0deg, rgb(74, 64, 83) 0%,
            rgba(0, 0, 0, 0) 84%,
            rgba(169, 167, 170, 1) 100%),
        url("../img/background2.png");
    background-size: cover;
}

.text_center {
    font-family: 'Mardoto';
    font-style: normal;
    font-weight: 500;
    font-size: 150%;
    margin-left: 32px;
}

.main {
    display: none;
}

.texts {
    margin-top: 1%;
}

.border_div {
    width: 68px;
}

.credit {
    font-size: 36px;
    margin-top: 150px;
}
  
   
.footer {
    position: relative;
    height: 380px;
}
  
.social p {
    display: none;
}

.footer-img {
    position: absolute;
    left: 8%;
    top: 58%;
}

.copy {
    width: 276px;
    margin-top: 82px;
}
.copy1 {
    width: 350px;
} 
.resp-neu-li{
    display: block;
}
}
