<?php

$style = '<style>
  /*
   * PAGE ONE
   */
  .page-one-title-container {
    font-family: centurygothicb;
    margin-top: 52%;
    padding: 20px 40px; 
    position: relative;
    height: 35%;
    width: 86%;
    vertical-align: middle;
  }

  .title-without-logo {
    margin-top: 62%;
    height: 290px;
  }

  .page-one-title-container img {
    max-height: 160px;
    width: auto;
  }

  .logo-on-img-cover {
    position: absolute;
    vertical-align: middle;
    text-align: center;
  }

  .logo-cover1 {
    height: 100px;
    max-height: 100px;
    max-width: 100px;
    left: 362px;
    top: -510px;
    width: 100px;
  }

  .logo-cover1 img {
    max-height: 100px;
    max-width: 100px;
  }

  .logo-cover2 {
    height: 120px;
    max-height: 120px;
    max-width: 120px;
    left: 170px;
    top: -490px;
    width: 120px;
  }

  .logo-cover2 img {
    max-height: 120px;
    max-width: 120px;
  }

  .logo-cover3 {
    height: 100px;
    max-height: 100px;
    max-width: 100px;
    left: 287px;
    top: -450px;
    width: 100px;
  }

  .logo-cover3 img {
    max-height: 100px;
    max-width: 100px;
  }

  .page-one-title-container h2 {
    font-size: 62px;
    color: #2C3164;
    text-transform: uppercase;
    margin-top: 20px;
  }

  .page-two-logo-container,
  .page-three-logo-container {
    box-sizing: border-box;
    display: inline-block;
    height: 132px;
    max-height: 132px;
    max-width: 132px;
    text-align: center;
    vertical-align: middle;
    width: 132px;
  }

  .page-two-logo-container img,
  .page-three-logo-container img {
    max-height: 87px;
    max-width: 87px;
    width: auto;
  }

  .page-two-title-container,
  .page-three-title-container {
    display: inline-block;
    font-family: centurygothicb;
    height: 132px;
    max-height: 132px;
    max-width: 380px;
    position: absolute;
    left: 26px;
    overflow: hidden;
    vertical-align: middle;
    width: 380px;
  }

  .title-right {
    left: 132px;
  }

  .page-two-title-container h2,
  .page-three-title-container h2 {
    color: #fff;
    display: inline-block;
    font-size: 35px;
    height: 132px;
    max-height: 132px;
    text-transform: uppercase;
  }

  .company-info-container {
    font-family: centurygothicb;
    margin-left: 47px;
    margin-right: 47px;
    position: relative;
  }

  .company-info-container .company-description,
  .company-info-container .founder-bio,
  .company-info-container .industry-forecast,
  .company-info-container .marked-size,
  .company-info-container .how-make-money {
    color: #7C7F9B;
    font-size: 14px;
  }

  .company-info-container .company-description {
    left: 0;
    position: absolute;
    top: 25px;
    width: 100%;
  }

  .company-info-container .founder-bio {
    left: 0;
    position: absolute;
    top: 115px;
    width: 50%;
  }

  .company-info-container .marked-size {
    left: 53%;
    position: absolute;
    top: 115px;
    width: 47%;
  }

  .company-info-container .industry-forecast {
    left: 0;
    position: absolute;
    top: 190px;
    width: 50%;
  }

  .company-info-container .how-make-money {
    left: 53%;
    position: absolute;
    top: 190px;
    width: 47%;
  }

  .competitors {
    color: #7C7F9B;
    font-family: centurygothicb;
    height: 120px;
    margin-left: 47px;
    margin-right: 47px;
    margin-top: 290px;
    max-height: 120px;
    position: relative;
    text-align: center;
  }

  .competitors table {
    border-collapse: collapse;
    border-spacing: 0;
    table-layout: fixed;
    width: 100%;
    min-width: 100%;
    max-width: 100%;
  }  

  .competitor-col-1 {
    width: 100%;
  }

  .competitor-col-2 {
    width: 50%;
  }

  .competitor-col-3 {
    width: 33.333333333%;
  }

  .competitor h3,
  .competitor a,
  .competitor p {
    font-size: 14px;
    margin: 0;
    padding: 0;
  }

  .competitor h3 {
    color: #242958;
  }

  .competitor a {
    color: #7C7F9B;
    font-family: centurygothic;
    text-decoration: none;
  }

  .monthly-revenue-container {
    color: #7C7F9B;
    font-family: centurygothic;
    margin-left: 27px;
    margin-right: 27px;
    margin-top: 193px;
    max-width: 148px;
    width: 148px;
    position: relative;
  }

  .monthly-revenue-container table {
    border-collapse: collapse;
    border-spacing: 0;
    table-layout: fixed;
    width: 148px;
    min-width: 148px;
    max-width: 148px;
  }

  .monthly-revenue-container tr {
    border: 0;
  }

  .monthly-revenue-container td {
    height: 22.7px;
    font-size: 11px;
    max-height: 22.7px;
    vertical-align: middle;
  }

  .monthly-revenue-container .income-type {
    padding-left: 26px;
    padding-right: 0;
    max-width: 220px;
    width: 220px;
  }

  .monthly-revenue-container .amount {
    padding-right: 0px;
    width: 65px;
  }

  .monthly-revenue-container .total {
    color: #242958;
    font-family: centurygothicb;
    height: 40px;
  }

  .monthly-expenses-container {
    color: #7C7F9B;
    font-family: centurygothic;
    left: 396px;
    margin-right: 27px;
    top: 745.5px;
    max-width: 343px;
    width: 343px;
    position: absolute;
  }

  .monthly-expenses-container table {
    border-collapse: collapse;
    border-spacing: 0;
    table-layout: fixed;
    width: 343px;
    min-width: 343px;
    max-width: 343px;
  }

  .monthly-expenses-container tr {
    border: 0;
  }

  .monthly-expenses-container td {
    height: 22.7px;
    font-size: 11px;
    vertical-align: middle;
  }

  .monthly-expenses-container .expense {
    padding-left: 26px;
    padding-right: 0;
    max-width: 225px;
    width: 225px;
  }

  .monthly-expenses-container .cost {
    padding-right: 0px;
    width: 65px;
  }

  .monthly-expenses-container .total {
    color: #242958;
    font-family: centurygothicb;
    height: 35px;
  }

  .burn-rate, .breakeven-analysis {
    color: #8B91A8;
    font-family: centurygothicb;
    font-size: 11px;
    position: absolute;
    top: 985px;
  }

  .burn-rate {
    left: 54px;
    width: 100px;
  }

  .breakeven-analysis {
    left: 219px;
    width: 130px
  }


  /* Page Three */
  .page-three-main-title {
    color: #242958;
    font-family: centurygothicb;
    font-size: 19px;
    margin-top: 10px;
    margin-left: 26px;
    margin-right: 26px;
    text-align: center;
  }

  .annual-budget-container {
    box-sizing: border-box;
    display: block;
    margin-left: 26.5px;
    margin-right: 27px;
    margin-top: 87px;
    position: relative;
    min-width: 740px;
    max-width: 740px;
    width: 740px;
  }

  .annual-budget-container table {
    border-collapse: collapse;
    border-spacing: 0;
    table-layout: fixed;
    width: 100%;
    min-width: 100%;
    max-width: 100%;
  }

  .annual-budget-container table,
  .annual-budget-container tr,
  .annual-budget-container td {
    border: 0px solid transparent !important;
  }

  .annual-budget-container td {
    color: #6E7592;
    font-family: centurygothicb;
    font-size: 19px;
    vertical-align: middle;
    text-align: center;
  }

  .annual-budget-container .odd td {
    height: 43.25px;
  }

  .annual-budget-container .even td {
    height: 63.5px;
  }

  .annual-budget-container .month {
    color: #242958;
    width: 105px;
  }

  .annual-budget-container .prev-month-balance {
    width: 205px;
  }

  .annual-budget-container .available-cash {
    width: 145px;
  }

  .annual-budget-container .monthly-expense {
    width: 165px;
  }

  .annual-budget-container .savings {
    width: 100.5px;
  }

</style>'

?>