<?php 
header("Content-type: text/css; charset: UTF-8");
?>

.container {
    width: 92%;
    max-width: 1920px;
    margin: 0 auto;
 }

.texts {
    width: 100%;
    display: flex;
    margin-top: 48px;
    margin: 0 auto;

}

.main {
    font-size: 100%;
    color: #1D1C20;
    margin-top: 48px;
}

.arrow{
  margin: 0 5px;
}


.credit1 {
    color: #EF4B37;
    margin-top: 64px;
}

.banks_title hr {
    margin-top: 3%;
}

.credit_big {
    font-family: 'Segoe UI';
    height: 49px;
    font-weight: 600;
    font-size: 300%;
    line-height: 24px;
    margin-top: 24px;
    color: #000000;
}

.transparent_text {
    width: 623px;
    height: 36px;
    color: #85888A;
    font-family: 'Segoe UI';
    margin-top: 16px;
    font-style: normal;
    font-weight: 400;
    font-size: 125%;
    line-height: 30px;
}

.long_text {
    height: 182px;
    font-family: 'Segoe UI';
    font-style: normal;
    font-weight: 400;
    font-size: 125%;
    line-height: 30px;
    color: #1D1C20;
    margin-top: 64px;
    word-break: break-word;
}

.text_center1 {
    width: 246px;
    height: 30px;
    font-family: 'Segoe UI';
    font-weight: 400;
    font-size: 20px;
    line-height: 30px;
    margin: 0 auto;
    margin-top: 112px;
    margin-bottom: 24px;
}

.images_bank {
    width: 100%;
    margin-top: 52px;
    display: flex;
    justify-content: space-around;

}
.images_bank>img {
    margin-top: 10px;
}
.ameria {
    width: 264px;
    height: 41px;
}

.acba {
    width: 130px;
    height: 43.65px;
}

.aeb {
    width: 112px;
    height: 49px
}

@media screen and (max-width:597px) {
  .transparent_text {
    font-size: 100%;

}

  .long_text {
    width: 100%;
}
  .images_bank {
    display: flex;
    flex-direction: column;
    align-items: center;
}

}
@media screen and (max-width:743px) {
  .long_text {
    width: 50%;
}


}
@media screen and (max-width:846px) {
  .long_text {
    width: 100%;
}
}

