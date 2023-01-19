<?php 
header("Content-type: text/css; charset: UTF-8");
?>
.slider {
  width: 100%;
  min-height: 500px;
  height: 120vh;
  overflow: hidden;
  position: relative;
  background-size:100% 100%;
}

.slider-row {
  display: flex;
  width: calc(4 * 100%);
  height: 100%;
  position: relative;
  transition: .3s;
}

.slider-item {
  width: calc(100% / 4);
  padding: 0 2.6%;
  background-image:
    linear-gradient(0deg, rgba(15, 14, 16, 1) 0%, rgba(15, 14, 16, 0.01) 84%, rgba(169, 167, 170, 1) 100%),
    url('../img/tesakani/home1.png');
  color: #F5F5F5;
  background-size: cover;
}

.arrow-left {
  left: 84px;
}

.arrow-right {
  left: calc(100vw - 110px);
}


.arrow {
  position: absolute;
  top: 0;
  height: 100%;
  width: 16px;
  display: flex;
  align-items: center;
}
.arrowl{
  height: 32px;
  width: 16px;
}


.slider-title {
  width: 54%;
  font-size: 50px;
  line-height: 67px;
  font-weight: 700;
  margin-top: 26%;

}

.slider-text {
  font-size: 24px;
  line-height: 32px;
  margin-top: 1%;
}

.slider-button {
  padding: 10px 24px;
  margin-top: 24px;
  line-height: 24px;
  font-family: "Mardoto";
  font-size: 16px;
  background: var(--redColor);
  color: white;
  border: none;
  border-radius: 6px;
}

.slider-dots {
  position: absolute;
  bottom: 24px;
  display: flex;
  
  justify-content: center;
  width: 100%;
  height: 1.9%;
  gap: 1%;
}

.slider-dots button {
  width: 1.1%;
  align-items: center;
  border-radius: 50%;
  border: none;
  background: #F5F5F5;
  opacity: 0.5;
}

.slider-dots button.active {
  opacity: 1;
}

.title {
  font-size: 40px;
  line-height: 24px;
  font-weight: 600;
  color: #1D1C20;
  margin: 8.2% auto 0;
  position: relative;
  width: max-content;
}

.title::after {
  position: absolute;
  content: '';
  display: block;
  border: 1px solid #EF4B37;
  width: 90px;
  margin-top: 15px;
  transform: rotate(180deg);
}

.hover-icons {
  position: fixed;
  display: flex;
  flex-direction: column;
  right: 140px;
  bottom: 47px;
  display: none;
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
.product-list {
  display: flex;
  flex-wrap: wrap;
  width: 87%;
  gap: 2% 2%;
  margin: 57px auto 0;

}

.product-list div {
  width: 32%;
  height: 416.93px;
  border-radius: 20px;
  background-size: cover;
}

.product-1 {
  background-image: url(../img/tesakani/tesakani1.png);
}

.product-2 {
  background-image: url(../img/tesakani/tesakani2.png);
}

.product-3 {
  background-image: url(../img/tesakani/tesakani3.png);
}

.product-4 {
  background-image: url(../img/tesakani/tesakani4.png);
}

.product-5 {
  background-image: url(../img/tesakani/tesakani5.png);
}

.product-6 {
  background-image: url(../img/tesakani/tesakani6.png);
}

.product-7 {
  background-image: url(../img/tesakani/tesakani7.png);
}

.product-8 {
  background-image: url(../img/tesakani/tesakani8.png);
}

.product-9 {
  background-image: url(../img/tesakani/tesakani9.png);
}

.product-items-text {
  font-size: 30px;
  color: #F5F5F5;
}
.container-form-order{
  position: absolute;
  top: 300px;
  background: #fff;
  padding: 50px;
  border-radius: 20px;
}
.oder-call{
  font-size: 48px;
}
.oder-call-text{
  margin-top: 12px;
  font-size: 14px;
}
.inputBox-call{
  display: flex;
}
.inputBox-call{
  margin-top: 41px;
  display: flex;
  justify-content: space-around;
}
.inputBox{
  display: flex;
  flex-direction: column;
}
.inputBox input{
 outline: none;
 background: transparent;
 font-size: 18px;
 border: none;
 border-bottom: 2px solid;
 margin: 10px;
}
.inputBox span{
  font-size: 15px;
  pointer-events: none;
  transition: all 0.3s ease;
}
.btn-callOrder{
  background-color: var(--redColor);
  border: none;
  width: 122px;
  height: 40px;
  border-radius: 8px;
  color: white;
}

 .inputBox input:focus ~ span,
 .inputBox input:valid ~ span{
    font-size: 15px;
    color: #85888A;
    transform: translateY(-20px);

}

@media screen and (max-width:546px) {
  .footer-img {
    display: none;
  }

  .copy {
    display: none;
  }

  .copy1 {
    display: none;
  }
}
.close-icon {
  width: 40px;
  height: 40px;
  background-repeat: no-repeat;
  background-size: contain;
  background-image: url('../img/close (1).png');
  cursor: pointer;
}
