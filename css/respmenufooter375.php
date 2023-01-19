
<?php 
header("Content-type: text/css; charset: UTF-8");
?>
@media screen and (max-width: 800px){
    .toggle-button {
        display: flex;
        left: 93%;
        top: 63%;
        transform: translatey(-80%);
    }
    .resp-menu-ul{
    width: 306px;
    display: flex;
}
.container-footer{
    display: block;
    width: 0;
}
}

@media screen and (max-width: 680px){
    .line,
    .resp-lang {
        display: none;
    }
    .arrow-right-menu,
    .resp-menu-line,
    .resp-lang-menu,
    .resp-neu-li {
        display: block;
    }
    .resp-menu ul li {
        color: var(--redColor);
        line-height: 15px;
    }
    .second-menu {
        display: none;
    }
    .toggle-button {
        display: flex;
        left: 92%;
        top: 63%;
        transform: translatey(-80%);
    }
}
@media screen and (max-width:800px)  {

    .line,
    .phone,
    .order-call,
    .resp-lang,
    .second-menu,
    .headphones {
        display: none;
    }

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


    
    .search-input{
        width: 100%;
    }
       
    .arrow-right-menu {
        display: block;

    }

    .navbar.active::before {
        transform: translateY(0px) rotate(50deg);
    }

    .resp-lang-menu{
        display: flex;
    }

    <!-- menu -->
    .arrow-right-menu,
    .resp-menu-line,
    .resp-lang-menu,
    .resp-neu-li {
        display: block;
    }
    .resp-menu ul li {
        color: var(--redColor);
        line-height: 15px;
    }
    .second-menu {
        display: none;
    }

    .menu_holder {
        height: 250px;
        background-image: url("../img/bachground3.png");
        background-size: cover;
    }

    .footer {
        display: flex;
        align-items: center;
        text-align: center;
    }
    .credit {
        font-size: 112.5%;
    }

    .border_div {
        width: 51px;
    }
    .footer{

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
    .info a{
            text-align: center;

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
        left: 46%;
        margin-top: 130px;
    }
 
    
    .footer {
        display: flex;
        justify-content: center;
    }
    .info {
        margin-left: 0px;
    }

}
@media screen and (max-width: 392px){
    form {
        width: 100%;
    }
    textarea,input {
        width: 90%;
    }
 
}
@media screen and (max-width: 370px){
    .info {
        display: flex;
        justify-content: center;
        align-items: center;

        margin-top: -19px;
    }
    <!-- .container-footer {
        display: none;
    }
    .footer {
        display: flex;
        justify-content: center;
    } -->
}