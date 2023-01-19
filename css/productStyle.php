<?php 
header("Content-type: text/css; charset: UTF-8");
?>

:root {
  --black: #1D1C20;
  --mainFont: Arial;
  --red: #EF4B37;
}

body, * {
  margin: 0;
  padding: 0;
  font-family: var(--mainFont);
}

.body {
  width: 100%;
  height: 100vh;
  overflow-x: hidden;
}

.container {
  width: 100%;
  max-width: 1440px;
  margin: 0 auto;
}
@media screen and (max-width: 1440px) {
  .container {
    width: 92%;
  }
}

.hidden--block {
  height: 170px;
  width: 100%;
}

.breadcrumb {
  color: var(--black);
  font-weight: 400;
  font-size: 16px;
  line-height: 24px;
  display: flex;
  align-items: center;
  gap: 10px;
}

.dark-over {
  width: 100%;
  height: 100vh;
  position: fixed;
  z-index: 5;
  top: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.6);
}

.title--mob-filter {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 64px;
}
.title--mob-filter .title {
  font-weight: 600;
  font-size: 30px;
  line-height: 24px;
  color: var(--red);
}
.title--mob-filter button {
  background-color: transparent;
  border: none;
  display: none;
}
@media screen and (max-width: 1024px) {
  .title--mob-filter button {
    display: block;
  }
}
@media screen and (max-width: 600px) {
  .title--mob-filter button {
    display: none;
  }
}

.contant {
  margin-top: 20px;
  display: flex;
  align-items: flex-start;
  gap: 30px;
}
@media screen and (max-width: 1024px) {
  .contant {
    margin-top: 40px;
  }
}
@media screen and (max-width: 600px) {
  .contant {
    flex-direction: column;
    margin-top: 16px;
  }
}
.contant__menu {
  min-width: 300px;
  width: 300px;
  border-top: 2px solid #D8D7D9;
  padding-top: 32px;
}
.contant__menu details {
  color: var(--black);
  margin-bottom: 16px;
}
.contant__menu details summary {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  display: flex;
  align-items: center;
  justify-content: space-between;
  cursor: pointer;
  font-weight: 600;
  font-size: 16px;
  line-height: 24px;
  margin-bottom: 8px;
  text-transform: capitalize;
}
.contant__menu details a {
  font-weight: 400;
  font-size: 16px;
  line-height: 24px;
  margin-bottom: 4px;
  margin-left: 20px;
  cursor: pointer;
  text-transform: capitalize;
  display: block;
  color: var(--black);
  text-decoration: none;
}
.contant__menu details a:hover, .contant__menu details a.active {
  color: var(--red);
}
.contant__menu details[open] svg {
  transform: rotate(180deg);
}
.contant__menu .mob-menu {
  display: none;
}
@media screen and (max-width: 1024px) {
  .contant__menu {
    position: fixed;
    z-index: 10;
    background-color: #fff;
    height: 100vh;
    right: -330px;
    top: 0;
    border-radius: 16px 0px 0px 16px;
    padding: 0 32px;
    box-sizing: border-box;
    width: 320px;
    border: none;
    transition: 0.3s;
  }
  .contant__menu .mob-menu {
    display: block;
    margin-top: 46px;
  }
  .contant__menu .mob-menu h2 {
    display: block;
    font-weight: 600;
    font-size: 20px;
    line-height: 24px;
    text-align: center;
    margin-bottom: 45px;
  }
  .contant__menu .mob-menu button {
    background-color: transparent;
    border: none;
    float: right;
    margin-top: -24px;
  }
  .contant__menu.active {
    right: 0;
  }
}
@media screen and (max-width: 600px) {
  .contant__menu {
    position: static;
    height: auto;
    width: 100%;
    border-top: 2px solid #D8D7D9;
    padding: 0;
    padding-top: 16px;
    border-radius: 0;
  }
  .contant__menu .mob-menu {
    display: none;
  }
}
.contant__items {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  width: 100%;
  gap: 25px;
}
.contant__items--item {
  width: calc(33.3333333333% - 20px);
  height: 380px;
  filter: drop-shadow(0px 8px 16px rgba(0, 0, 0, 0.1));
  border-radius: 20px;
  overflow: hidden;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}
.contant__items--item .shodow {
  background: linear-gradient(0deg, #000000 0%, rgba(0, 0, 0, 0.867037) 13.3%, rgba(0, 0, 0, 0.8) 26%, rgba(0, 0, 0, 0.6) 51.4%, rgba(0, 0, 0, 0.38) 68.87%, rgba(0, 0, 0, 0.152572) 84.74%, rgba(0, 0, 0, 0) 100%);
  width: 100%;
  height: 40%;
  position: absolute;
  bottom: 0;
}
.contant__items--item img {
  height: calc(100% + 170px);
}
.contant__items--item h3 {
  position: absolute;
  font-weight: 400;
  font-size: 24px;
  color: #F5F5F5;
  bottom: 24px;
  left: 24px;
  right: 24px;
  text-transform: capitalize;
}
@media screen and (max-width: 1440px) {
  .contant__items--item {
    height: 330px;
  }
}
@media screen and (max-width: 1200px) {
  .contant__items--item {
    height: 250px;
    min-width: 200px;
  }
  .contant__items--item h3 {
    font-size: 20px;
  }
}
@media screen and (max-width: 750px) {
  .contant__items--item {
    width: calc(33.3333333333% - 15px);
    height: 210px;
  }
}
@media screen and (max-width: 600px) {
  .contant__items--item {
    width: 100%;
    height: 350px;
  }
  .contant__items--item img {
    width: 600px;
  }
}
@media screen and (max-width: 750px) {
  .contant__items {
    gap: 15px;
  }
}/*# sourceMappingURL=style.css.map */

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

#filter{
font-family: 'Segoe UI';
font-style: normal;
font-weight: 600;
font-size: 16px;
line-height: 24px;
float:left;
}

.dropbtn {
  background:none;
  border:none;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: relative;
  min-width: 160px;
  overflow: auto;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}