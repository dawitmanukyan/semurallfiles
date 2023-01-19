<?php 
header("Content-type: text/css; charset: UTF-8");
?>
@media screen and (max-width:1247px){
    .slider-dots button {
        width: 12px;
        height: 12px;
    }
}

@media screen and (max-width: 590px){
    .title {
        font-size: 27px;
    }
}

@media screen and (max-width:768px) {
    .toggle-button {
        display: flex;
        left: 90%;
        top: 55%;
        transform: translatey(-50%);
    }
    .slider-title {
        font-size: 25px;
    }

    .slider-text {
        font-size: 18px;
    }

    .arrow-left {
        left: 44px;
    }

    .arrow-right {
        left: calc(100vw - 80px);
    }


    .arrowl {
        width: 8px;
        height: 16px;
    }

    .slider-dots button {
        width: 12px;
        height: 12px;
    }
}
