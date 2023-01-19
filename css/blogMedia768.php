
<?php 
header("Content-type: text/css; charset: UTF-8");
?>
@media screen and (max-width:768px){

    .header{
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
        font-size: 150%;
        margin-left: 32px;
    }
    .main{
        display: none;
    }
    .texts{
        margin-top: 1%;
    }
    .credit {
        margin-top: 150px;
    }
    .blog-container{
        margin-left: 5px;
    }
    .item-img {
        width: 343px;
    }
}
