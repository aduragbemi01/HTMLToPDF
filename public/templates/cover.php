<?php

include __DIR__.'/../css/html2pdf-style.php';
require  __DIR__.'/../../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf('P','A4','en', false, 'UTF-8', array(0, 0, 0, 0));
$html2pdf->addFont('centurygothic', '', 'centurygothic');
$html2pdf->addFont('centurygothicb', 'B', 'centurygothicb');
//$html2pdf->setDefaultFont('centurygothic');
$html2pdf->writeHTML($style . '
<page backimg="./img/page1_1.png" style="position:relative;">
	<div class="page-one-title-container">
    <img src="logo.png">
		<h2>CIS CAT PROFESSIONAL Inst.</h2>
	</div>
</page>

<page backimg="page1_cover1.jpg" style="position:relative;">
	<div class="page-one-title-container title-without-logo">
    <div class="logo-on-img-cover logo-cover1"><img src="logo.png" alt=""></div>
		<h2>CIS CAT PROFESSIONAL Inst.</h2>
	</div>
</page>

<page backimg="page1_cover2.jpg" style="position:relative;">
	<div class="page-one-title-container title-without-logo">
    <div class="logo-on-img-cover logo-cover2"><img src="logo.png" alt=""></div>
		<h2>CIS CAT PROFESSIONAL Inst.</h2>
	</div>
</page>

<page backimg="page1_cover3.jpg" style="position:relative;">
	<div class="page-one-title-container title-without-logo">
    <div class="logo-on-img-cover logo-cover3"><img src="logo.png" alt=""></div>
		<h2>CIS CAT PROFESSIONAL Inst.</h2>
	</div>
</page>

<page backimg="page2.png">
  <div class="page-two-logo-container">
    <img src="logo.png">
  </div>
  <div class="page-two-title-container title-right">
    <h2>CIS CAT PROFESSIONAL Inst.</h2>
  </div>
  <div class="company-info-container">
    <div class="company-description"><p>A company, abbreviated as co., is a legal entity representing an association of people, whether natural, legal or a mixture of both, with a specific objective.</p></div>
    <div class="founder-bio"><p>It depends on where you are planning</p></div>
    <div class="industry-forecast"><p>As the industry emerges from a chaotic year,</p></div>
    <div class="marked-size"><p>you need to understand your target.</p></div>
    <div class="how-make-money"><p>There a ton of ways for content creators to make</p></div>
  </div>
  <div class="competitors">
    <table>
      <tr>
        <td class="competitor competitor-col-3">
          <h3>1. Davis Bergson</h3>
          <a href="#">https:/www.fakelink.com</a>
          <p>A company, abbreviated as co., is a legal entity.</p>
        </td>
        <td class="competitor competitor-col-3">
          <h3>2. Martin Gouse</h3>
          <a href="#">https:/www.fakelink.com</a>
          <p>A company, abbreviated as co., is a legal entity.</p>
        </td>
        <td class="competitor competitor-col-3">
          <h3>3. Buy Gouse</h3>
          <a href="#">https:/www.fakelink.com</a>
          <p>A company, abbreviated as co., is a legal entity.</p>
        </td>
      </tr>
    </table>
  </div>

  <div class="monthly-revenue-container">
    <table>
      <tr>
        <td class="income-type">Self Tape: $5</td>
        <td class="amount">$2100</td>
      </tr>
      <tr>
        <td class="income-type">Line readers: $3.75</td>
        <td class="amount">$950</td>
      </tr>
      <tr>
        <td class="income-type">Coaches: $8.75</td>
        <td class="amount">$3000</td>
      </tr>
      <tr>
        <td class="income-type"></td>
        <td class="amount"></td>
      </tr>
      <tr>
        <td class="income-type"></td>
        <td class="amount"></td>
      </tr>
      <tr class="total-row">
        <td></td>
        <td class="total">$4.6k</td>
      </tr>
    </table>
  </div>

  <div class="monthly-expenses-container">
    <table>
      <tr>
        <td class="expense">Development Team</td>
        <td class="cost">$2100</td>
      </tr>
      <tr>
        <td class="expense">Designer</td>
        <td class="cost">$950</td>
      </tr>
      <tr>
        <td class="expense">Marketing</td>
        <td class="cost">$3000</td>
      </tr>
      <tr>
        <td class="expense">Server</td>
        <td class="cost">$250</td>
      </tr>
      <tr>
        <td class="expense">Legal</td>
        <td class="cost">$350</td>
      </tr>
      <tr>
        <td class="expense">Taxes</td>
        <td class="cost">$300</td>
      </tr>
      <tr>
        <td class="expense">Bookeeping</td>
        <td class="cost">$350</td>
      </tr>
      
      <tr class="total-row">
        <td></td>
        <td class="total">$4.6k</td>
      </tr>
    </table>
  </div>

  <div class="burn-rate">
    <p>48%</p>
  </div>
  <div class="breakeven-analysis">
    <p>Lorem Ipsum</p>
  </div>
  
</page>

<page backimg="page3.png">
  <div class="page-three-logo-container">
    <img src="logo.png">
  </div>
  <div class="page-three-title-container title-right">
    <h2>CIS CAT PROFESSIONAL Inst.</h2>
  </div>
  
  <div class="page-three-main-title">
    <h3>Annual Budget By Month 2021</h3>
  </div>

  <div class="annual-budget-container">
    <table>
      <tr class="odd">
        <td class="month">Jan</td>
        <td class="prev-month-balance">$0</td>
        <td class="available-cash">$13.3k</td>
        <td class="monthly-expense">$8.700</td>
        <td class="savings">$4.6k</td>
      </tr>
      <tr class="even">
        <td class="month">Feb</td>
        <td class="prev-month-balance">$0</td>
        <td class="available-cash">$13.3k</td>
        <td class="monthly-expense">$8.700</td>
        <td class="savings">$4.6k</td>
      </tr>
      <tr class="odd">
        <td class="month">Mar</td>
        <td class="prev-month-balance">$0</td>
        <td class="available-cash">$13.3k</td>
        <td class="monthly-expense">$8.700</td>
        <td class="savings">$4.6k</td>
      </tr>
      <tr class="even">
        <td class="month">Apr</td>
        <td class="prev-month-balance">$0</td>
        <td class="available-cash">$13.3k</td>
        <td class="monthly-expense">$8.700</td>
        <td class="savings">$4.6k</td>
      </tr>
      <tr class="odd">
        <td class="month">May</td>
        <td class="prev-month-balance">$0</td>
        <td class="available-cash">$13.3k</td>
        <td class="monthly-expense">$8.700</td>
        <td class="savings">$4.6k</td>
      </tr>
      <tr class="even">
        <td class="month">Jun</td>
        <td class="prev-month-balance">$0</td>
        <td class="available-cash">$13.3k</td>
        <td class="monthly-expense">$8.700</td>
        <td class="savings">$4.6k</td>
      </tr>
      <tr class="odd">
        <td class="month">Jul</td>
        <td class="prev-month-balance">$0</td>
        <td class="available-cash">$13.3k</td>
        <td class="monthly-expense">$8.700</td>
        <td class="savings">$4.6k</td>
      </tr>
      <tr class="even">
        <td class="month">Aug</td>
        <td class="prev-month-balance">$0</td>
        <td class="available-cash">$13.3k</td>
        <td class="monthly-expense">$8.700</td>
        <td class="savings">$4.6k</td>
      </tr>
      <tr class="odd">
        <td class="month">Sep</td>
        <td class="prev-month-balance">$0</td>
        <td class="available-cash">$13.3k</td>
        <td class="monthly-expense">$8.700</td>
        <td class="savings">$4.6k</td>
      </tr>
      <tr class="even">
        <td class="month">Oct</td>
        <td class="prev-month-balance">$0</td>
        <td class="available-cash">$13.3k</td>
        <td class="monthly-expense">$8.700</td>
        <td class="savings">$4.6k</td>
      </tr>
      <tr class="odd">
        <td class="month">Nov</td>
        <td class="prev-month-balance">$0</td>
        <td class="available-cash">$13.3k</td>
        <td class="monthly-expense">$8.700</td>
        <td class="savings">$4.6k</td>
      </tr>
      <tr class="even">
        <td class="month">Dec</td>
        <td class="prev-month-balance">$0</td>
        <td class="available-cash">$13.3k</td>
        <td class="monthly-expense">$8.700</td>
        <td class="savings">$4.6k</td>
      </tr>
    </table>
  </div>
</page>');
$html2pdf->output();

?>