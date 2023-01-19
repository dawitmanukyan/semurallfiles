<?php 
header("Content-type: text/css; charset: UTF-8");
?>

#data {
    margin-top: 200px;
}
#search-header {
    text-align: center;
    font-size: 25px;
    color: #EF4B37;
}
#srch-hr {
    margin: 18px;
}
#items {
    display: flex;
    justify-content: space-around;
    align-tems: center;
}
#item {
    width: 200px;
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 15px;
}
#item-img {
    width 200px;
    height: 200px; 
}
.contant__items {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  width: 100%;
  gap: 25px;
}
.contant__items--item {
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