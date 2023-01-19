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
.active1{
  display: block;
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
.map-logo-text{
        display: flex;
    }

.map-logo-text p {
    margin: 72px 16px;
    font-style: normal;
    font-weight: 600;
    font-size: 225%;
    line-height: 24px;
}

.vector {
    height: 47.88px;
    margin-top: 64px;
    margin: 60px 0 0  60px;
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
    font-size: 100%;
    color: #1d1c20;
    margin-left: 60px;
}

.masnachyux-hr {
    width: 100%;
    margin-top: 40px;
}

.main-container {
    display: flex;
    justify-content: space-between;
    padding-left: 61px;
    margin: 45px auto 0;
    font-size: 87.5%;
    line-height: 24px;
}

.info-contact {
    width: 18%;
}


.main-1 {
    color: var(--redColor);
    font-weight: 600;
}

.gray-contact {
    width: 100%;
    color: #85888A;
    margin-top: 12px;
}

.gray-contact p:first-child {
    margin-bottom: 8px;
}
.onMap {
background-color: var(--redColor);
color: white;
border: none;
height: 40px;
border-radius: 8px;
padding: 8px;
}
.map-karta {
    max-width: 1920px;
    width: 90%;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    margin-top: 69px;
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



