
<?php 
header("Content-type: text/css; charset: UTF-8");
?>
* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
.container {
    padding: 15px;
}
:root {
    --redColor: #ef4b37;
}
.icons {
    display: flex;
    align-items: center;
    margin-left: auto;
}
  .active1{
    display: block;
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
    font-size: 225%;
    line-height: 24px;
    color: #ffffff;
    margin-top: 226px;
    margin-left: 24px;
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
    padding-left: 60px;
}

.contact-container {
    display: flex;
    justify-content: space-around;
}

.contact-title {
    color: var(--redColor);
    font-size: 150%;
    margin-top: 64px;
    padding-left:60px;
}

.contact-text {
    font-size: 100%;
    color: #85888A;
    margin: 12px 0 38px 60px;

}


.contact-icon1{
    display: flex;
    margin: 18px 0 18px;
}
.contact-icon-text{
    margin-left: 14px;
}
.contact-icon-img{
    width: 15px;
    height: 18.33px;
}

.map-karta-contactResp375{
    display: none;
}
.contact-left {
    display: flex;
}

form {
    width:450px;
    background-color: white;
    margin-top: -18px;
    border: 1px solid #FFFFFF;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.1);
}


.contact-left-title {
    font-size: 150%;
    color: var(--redColor);
    text-align: center;

}

.input-group {
    margin-bottom: 5px;
    padding: 15px;
}

label {
    display: flex;
    font-size: 87.5%;
    letter-spacing: 3%;
    font-family: "Segoe UI";
    font-style: "Regular";
    color: #030303;

}

input,
textarea {
    width: 400px;
    height: 42px;
    padding: 5px;
    outline: 0;
    border: 1px solid;
    color: #B0AFB3;
    font-size: 87.5%;
    border-radius: 8px;

}

textarea {
    height: 116px;
}

.input-group-button {
    display: flex;
}

.input-group-button button {
    background-color: var(--redColor);
    color: white;
    outline: 0;
    border: none;
    padding: 15px;
    border-radius: 8px;
}

.text-group {
    margin-left: 24px;
    color: #85888A;
}

.map-karta-contactResp375{
    display: none;
}
.map-logo-text {
    display: flex;
}

.map-logo-text p {
    padding: 72px 16px;
    font-style: normal;
    font-size: 225%;
    line-height: 24px;

}

.vector {
    height: 47.88px;
    margin-top: 64px;
}


.line-hr {
    border: 1px solid #D8D7D9;
    margin-top: 64px;
    margin-right: 62px;
}

.main-container {
    display: flex;
    justify-content: space-between;
    margin: auto 0;
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
    cursor: pointer;
    }
.map-karta {
    margin: 0 auto;
    display: flex;
    justify-content: center;
}

.Address1 {
    width: 210px;
}

.map-karta img {
    width: 90%;
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

.social p {
    font-size: 14px;
    line-height: 24px;
    color: #85888A;
}

.social {
    margin-right: 60px;
}
