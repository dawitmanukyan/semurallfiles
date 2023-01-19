<?php 
header("Content-type: text/css; charset: UTF-8");
?>
.pdf-an {
  text-align: right;
  margin: 10px;
  color: #EF4B37;
}
.arrow {
  margin: 0 5px;
}
.main {
  margin: 15px;
}
.report-titleA {
  color: var(--redColor);
  font-size: 100%;
  margin-top: 6.4%;
  margin: 15px;
}

.report-titleB {
  margin: 15px;
  font-size: 300%;
  margin-top: 2.4%;
}

.reports {
  font-size: 125%;
  margin-top: 1.6%;
  color: #85888A;
  margin: 15px;
}

.reportsTable {
  width: 100%;
  margin-top: 6.4%;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 16px;
}


@media screen and (max-width:1090px) {
  .second-menu {
    display: none;
  }
}

@media screen and (max-width:610px) {
  .credit {
    font-size: 40px;
  }

}

@media screen and (max-width:580px) {
  .resp-lang a {
    display: none;
  }
  .report-titleB {
    font-size: 250%;
  }
}
@media screen and (max-width:450px) {
  .report-titleB {
    font-size: 200%;
  }
  .credit {
    font-size: 100%;
  }
}



