<?php 
header("Content-type: text/css; charset: UTF-8");
?>

.container {
    padding: 15px;
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

.container-text {
    font-style: Regular;
    font-family: 'Segoe UI';
}

.titleA-about {
    font-size: 100%;
    color: var(--redColor);
    margin-top: 5%;
    padding-left: 60px;
}

.titleB-about {
    font-size: 300%;
    margin-top: 1.3%;
    padding-left: 60px;
}

.titleC-about {
    height: 66px;
    font-size: 125%;
    margin-top: 1%;
    color: #85888A;
    padding-left: 60px;

}

@media screen and (max-width:720px){
    .titleC-about {
        font-size: 55%;
    }
}

.content-about-text {
    display: flex;
    justify-content: space-around;
    margin-top: 6%;
    color: #1D1C20;
    font-size: 113%;
    line-height: 30px;

}

.content-about-textB {
    margin-left: 5%;
}

.items-about {
    width: 100%;
    display: flex;
    justify-content: space-between;
    margin-top: 5%;
    gap: 12%;
}

.item-aboutA {
    width: 100%;
    font-size: 250%;
    line-height: 24px;
    margin-top: 5%;
    color: #EF4B37;
}

.content-about-textA-br {
    margin-top: 4%;
}

.content-about-textB-br {
    margin-top: 4%;
}

.content-about-textC-br {
    margin-top: 4%;
}

.contact-about-item li {
    list-style: none;
}

.about-item--img1 {
    width: 37%;
}

.about-item--img3 {
    margin-bottom: 7%;
    width: 10%;
}

.about-item--img2 {
    width: 46%;
    margin: 0 3% 25%;
}

.item-aboutB {
    width: 100%;
    margin-top: 8%;
    color: #1D1C20;
    font-size: 87.5%;
    line-height: 2%;
    font-family: Segoe UI;
    font-style: Regular;
}

.item-aboutC {
    width: 100%;
    margin-top: 5%;
    color: #85888A;
    font-size: 87.5%;
    line-height: 24px;
    font-family: Segoe UI;
    font-style: Regular;
}

.about-item-img-title {
    margin-top: 9%;
    font-size: 187.5%;
    line-height: 24px;
    color: var(--redColor);
}

.about-item-img {
    margin-top: 3%;

}

.about-item--img {
    margin-left: 3%;
}

.aboutSlide {
    display: flex;
    overflow: hidden;
    margin-left: -10px;
    margin-top: 32px;
}


.about-item--img1 {
    width: 480px;
    height: 720px;
}

.about-item--img2 {
    width: 720px;
    height: 480px;
    padding: 32px;
    margin-top: -30px;
}

.about-item--img3 {
    width: 840px;
    height: 560px;
    padding: 32px;
    margin-top: -40px;
}



.pagination {
    margin-left: 28px;
    margin-top: 21px;
    display: flex;
    padding: 32px;
    border-radius: 1px solid;
}

.page {
    margin-left: -60px;
    margin-top: 2px;
}

.img-slide-arrow{
    margin-left: 49px;
}
.img-slide-arrow1 {
    padding-left: 32px;
}

.img-slide-arrow2 {
    padding-left: 32px;
}


.aboutSlide .pagination .prev.disabled,
.aboutSlide .pagination .next.disabled {
    border-color: gray;
    color: gray;
    pointer-events: none;
}

.aboutSlide .slide-item.hide {
    display: none;
}

.aboutSlide .slide-item.show {
    display: block;
    animation: show .5s ease;
}


