
<?php 
header("Content-type: text/css; charset: UTF-8");
?>
@media screen and (max-width:768px){

    .header{
        width: 768px;
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
    
    .toggle-button{
        display: flex;
        left: 95%;
        top: 55%;
        transform: translatey(-50%);
    }
 
    .icons{
        display: flex;
        position: absolute;
        right: 10%;
        top: 40%;
    }

    .resp-lang  {
        display: flex;
        left: 48%;
        top: 60%;
        transform: translatey(-50%);
    }
    .line{
        display: flex;
        top: 1%;
        position: absolute;
        left: 77%;
        margin: 16px 0 16px 0;
        height: 44px;
    }

    .phone,.order-call {
        display: none;
    }


    .navbar {
        width: 440px;
        height: 0px;
        overflow: hidden;
        flex-direction: column;
        background-color: rgb(0, 0, 0);
        position: relative;
        top: 76px;
        right: -34%;
        transition: 1s;
        margin-left: -55px;
    } 

    .navbar li {
        padding: 10px 10px;
        margin-right: 0;
    } 
    
    .navbar.active {
        height: 200px;
        transform: translate(5px);
    } 

    .navbar.active::before {
        transform: translateY(0px) rotate(50deg);
    } 
   
   
    .second-menu{
        display: none;
    }


    .menu_holder {
        width: 768px;
        width: 100%;
        height: 250px;
        background-image: linear-gradient(0deg, rgb(74, 64, 83) 0%,
                rgba(0, 0, 0, 0) 84%,
                rgba(169, 167, 170, 1) 100%),
            url("../img/background\ 2.png");
        background-size: cover;
    }

    .text_center {
        font-family: 'Mardoto';
        font-style: normal;
        font-weight: 500;
        font-size: 150%;
        margin-left: 32px;
    }
    .main{
        display: none;
    }
   
    .border_div {
        width: 68px;
    }
    .credit {
        margin-top: 150px;
    }
    .blog-title {
        margin-top: 32px;
    }
    .texts{
        margin-top: 1%;
        width:804px;
        height: 62px;
        font-size: 125%;
    }
    .texts  span{
        display: none;
    }
    .item-img{
        display: flex;
        width: 736px;
        margin-top: 32px;
    
    }
    .title-text-first{
        width: 704px;
        height: 330px;
    
    }
    .title-text2{
        width: 704px;
        margin-top: 1px;
    }
    .title-tex,.title-text{
        width: 704px;

    }
    .blog-news-footer{
        display: flex;
        flex-direction: column;
    }
    .item-img-blog{
      margin-left: -78px;
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
}
