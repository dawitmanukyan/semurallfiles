<?php 
header("Content-type: text/css; charset: UTF-8");
?>
@media screen and (max-width:440px) {

    .line,
    .phone,
    .order-call,
    .resp-lang,
    .second-menu,
    .headphones {
        display: none;
    }

    .header {
        width: 412px;
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
        left: 87%;
        top: 55%;
        transform: translatey(-50%);
    }


    .icons {
        display: flex;
        position: absolute;
        right: 17%;
        top: 40%;
    }


    .navbar {
        width: 350px;
        height: 0px;
        overflow: hidden;
        flex-direction: column;
        background-color: rgb(0, 0, 0);
        position: relative;
        top: 76px;
        right: -5%;
        transition: 1s;
        margin-left: -55px;
    }

    .navbar li {
        padding: 10px 10px;
        margin-right: 0;
    }

    .navbar.active {
        height: 200px;
        transform: translate(3px);
    }

    .navbar.active::before {
        transform: translateY(0px) rotate(50deg);
    }


    .second-menu {
        display: none;
    }

    .menu_holder {
        width: 412px;
        height: 250px;
        background-image: url("../img/bachground3.png");
        background-size: cover;
    }

    .credit {
        font-size: 112.5%;
    }

    .border_div {
        width: 51px;
    }

  
    .blog-title {
        margin-top: 2px;
    }
    .item-title{
        font-size: 150%;
    }
    .texts{
        margin-top: 1%;
        width: 343px;
        height: 55px;
        font-size: 112.5%;
    }
    .texts  span{
        display: none;
    }
    .item-img{
        display: flex;
        width: 304px;
        margin-top: 42px;
    
    }
    .item1{
        width: 240px;
    }
    .title-text-first{
        width: 704px;
        height: 330px;
    
    }
    .title-text2{
        width: 343px;
        height: 632px;
        margin-top: 1px;
    }
    .title-tex,.title-text{
        width: 343px;

    }

    .blog-news-footer{
        display: flex;
        flex-direction: column;
    }
    .end-news-title{
        font-size: 150%;
    }
    .item-img-blog{
      margin-left: -78px;
      display: flex;
      flex-direction: column;
    }
    .item-blog-img{
        width: 343px;
    }
    .center-text{
        margin-left: -200px;
    }
    .center-text-border{
        height: 168px;
    }
    .center-text-main{
        width: 321px;
        height: 168px;
        font-size: 100%;

    }
    .title-content-img{
        width: 343px;
    }
    .after-hr{
        margin-top: 200px;
        display: flex;
        flex-direction: column;
    }
 
    .footer{
        margin-top: 24px;
        height: 402px;
    }
    .footer-items {
        display: none;
    }

    .resp-menu {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 375px;
        margin-top: 15px;
    }
 
    .resp-hr{
        display: block;
        justify-content: center;
        align-items: center;
    }

    .resp-menu ul li {
        text-decoration: none;
        list-style-type: none;
        display: inline;
        font-size: 87.5%;  
        padding: 6px;
    }

    .resp-menu ul li {
        color: var(--redColor);
        line-height: 15px;
    }

    .info {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 402px;
        width: 267px;
        margin-top: -19px;
    }

    .info p {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .resp-footer-line {
        color: rgb(245, 238, 238);
        width: 295px;
    }

    .copy {
        width: 276px;
        margin-top: 24px;
    }

    .copy1 {
        width: 350px;
    }

   

    .footer-img {
        display: block;
        position: absolute;
        left: 45%;
        margin-top: 130px;
    }
}