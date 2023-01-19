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
      right: -6%;
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

  .footer{
      margin-top: 24px;
  }
  .footer-items {
      display: none;
  }

  .resp-menu {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 375px;
      margin-top: 15px;
  }

  .resp-hr{
      display: block;
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
