<?php

include __DIR__.'/css/html2pdf-style.php';
include __DIR__.'/utils.php';
require  __DIR__.'/../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

session_start();

// Create a unique timestamp to identify the user's entry
$entry_id = date_timestamp_get(date_create());
$logo_path = '';
$company_name = htmlspecialchars($_POST['companyName']);
$company_desc = htmlspecialchars($_POST['companyDesc']);
$founder_bio = htmlspecialchars($_POST['founderBio']);
$market_size = htmlspecialchars($_POST['marketSize']);
$industry_future_forecast = htmlspecialchars($_POST['industryFutureForecast']);
$how_make_money = htmlspecialchars($_POST['howMakeMoney']);

$competitors = [];
$competitors_url = [];
$competitors_diff = [];
for ($i = 0; $i < 3; $i++) {
  if ($_POST['competitionName'][$i]) {
    array_push($competitors, $i+1 . '. ' . htmlspecialchars($_POST['competitionName'][$i]));
  } else {
    array_push($competitors, ' ');
  }

  if ($_POST['competitionURL'][$i]) {
    array_push($competitors_url, htmlspecialchars($_POST['competitionURL'][$i]));
  } else {
    array_push($competitors_url, ' ');
  }

  if ($_POST['competitionDifference'][$i]) {
    array_push($competitors_diff, htmlspecialchars($_POST['competitionDifference'][$i]));
  } else {
    array_push($competitors_diff, ' ');
  }
}

$expenses = [];
$expenses_values = [];
$expenses_total = 0;
for ($i = 0; $i < 7; $i++) {
  if ($_POST['expense'][$i]) {
    array_push($expenses, htmlspecialchars($_POST['expense'][$i]));
  } else {
    array_push($expenses, ' ');
  }

  if ($_POST['expenseValue'][$i]) {
    $expenses_total = $expenses_total + (float) htmlspecialchars($_POST['expenseValue'][$i]);
    array_push($expenses_values, htmlspecialchars($_POST['expenseValue'][$i]));
  } else {
    array_push($expenses_values, ' ');
  }
}

$incomes = [];
$incomes_values = [];
$incomes_total = 0;
for ($i = 0; $i < 5; $i++) {
  if ($_POST['income'][$i]) {
    array_push($incomes, htmlspecialchars($_POST['income'][$i]));
  } else {
    array_push($incomes, ' ');
  }

  if ($_POST['incomeValue'][$i]) {
    $incomes_total = $incomes_total + (float) htmlspecialchars($_POST['incomeValue'][$i]);
    array_push($incomes_values, htmlspecialchars($_POST['incomeValue'][$i]));
  } else {
    array_push($incomes_values, ' ');
  }
}

$net_burn_rate = (float) $expenses_total - (float) $incomes_total;
$profit_main_product = (float) htmlspecialchars($_POST['profitMainProduct']);
$breakeven_number = ceil(((float) $expenses_total * 12 ) / $profit_main_product);

$year_start = htmlspecialchars($_POST['yearStart']);
$cover_image = htmlspecialchars($_POST['coverImage']);

$months = [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ];
$annual_budget = array(0 => array("Jan", 0.0, $incomes_total, $expenses_total, $incomes_total - $expenses_total));
for ($i = 1; $i < 12; $i++) {
  $prev_balance = $annual_budget[$i-1][4];
  $savings = (float) $prev_balance + (float) $incomes_total - (float) $expenses_total;
  $annual_budget[$i] = array($months[$i], $prev_balance, $incomes_total, $expenses_total, $savings);
}

/*
 * Create the content of the pdf document
 */
$template = '';

// Check if the user uploaded a valid image or didn't upload an image at all
if (is_image_valid($entry_id) || !$_FILES["companyLogo"]["name"]) {
  if (empty($cover_image)) {
    $template = $template . '
      <page backimg="./template-backgrounds/page1_1.png" style="position:relative;">
        <div class="page-one-title-container">
          ' . ($logo_path ? '<img src="./'.$logo_path.'">' : '') . '
          <h2>' . $company_name . '</h2>
        </div>
      </page>
    ';
  } else {
    $template = $template . '
      <page backimg="./template-backgrounds/page1_' . $cover_image . '.jpg" style="position:relative;">
        <div class="page-one-title-container title-without-logo">
          <div class="logo-on-img-cover logo-' . $cover_image . '">' . ($logo_path ? '<img src="./'.$logo_path.'">' : '') . '</div>
          <h2>' . $company_name . '</h2>
        </div>
      </page>
    ';
  }

  // Page 2 of the document
  $template = $template . '
    <page backimg="./template-backgrounds/page2.png">
      <div class="page-two-logo-container">
        ' . ($logo_path ? '<img src="./'.$logo_path.'">' : '') . '
      </div>
      <div class="page-two-title-container ' . ($logo_path ? 'title-right' : '') . '">
        <h2>' . $company_name . '</h2>
      </div>
      <div class="company-info-container">
        <div class="company-description"><p>' . $company_desc . '</p></div>
        <div class="founder-bio"><p>' . $founder_bio . '</p></div>
        <div class="marked-size"><p>' . $market_size . '</p></div>
        <div class="industry-forecast"><p>' . $industry_future_forecast . '</p></div>
        <div class="how-make-money"><p>' . $how_make_money . '</p></div>
      </div>
      <div class="competitors">
        <table>
          <tr>
            <td class="competitor competitor-col-3">
              <h3>' . $competitors[0] . '</h3>
              <a href="' . $competitors_url[0] . '">' . $competitors_url[0] . '</a>
              <p>' . $competitors_diff[0] . '</p>
            </td>
            <td class="competitor competitor-col-3">
              <h3>' . $competitors[1] . '</h3>
              <a href="' . $competitors_url[1] . '">' . $competitors_url[1] . '</a>
              <p>' . $competitors_diff[1] . '</p>
            </td>
            <td class="competitor competitor-col-3">
              <h3>' . $competitors[2] . '</h3>
              <a href="' . $competitors_url[2] . '">' . $competitors_url[2] . '</a>
              <p>' . $competitors_diff[2] . '</p>
            </td>
          </tr>
        </table>
      </div>

      <div class="monthly-revenue-container">
        <table>
          <tr>
            <td class="income-type">' . $incomes[0] . '</td>
            <td class="amount">' . format_money($incomes_values[0]) . '</td>
          </tr>
          <tr>
            <td class="income-type">' . $incomes[1] . '</td>
            <td class="amount">' . format_money($incomes_values[1]) . '</td>
          </tr>
          <tr>
            <td class="income-type">' . $incomes[2] . '</td>
            <td class="amount">' . format_money($incomes_values[2]) . '</td>
          </tr>
          <tr>
            <td class="income-type">' . $incomes[3] . '</td>
            <td class="amount">' . format_money($incomes_values[3]) . '</td>
          </tr>
          <tr>
            <td class="income-type">' . $incomes[4] . '</td>
            <td class="amount">' . format_money($incomes_values[4]) . '</td>
          </tr>
          <tr class="total-row">
            <td></td>
            <td class="total">' . format_money($incomes_total) . '</td>
          </tr>
        </table>
      </div>

      <div class="monthly-expenses-container">
        <table>
          <tr>
            <td class="expense">' . $expenses[0] . '</td>
            <td class="cost">' . format_money($expenses_values[0]) . '</td>
          </tr>
          <tr>
            <td class="expense">' . $incomes[1] . '</td>
            <td class="cost">' . format_money($expenses_values[1]) . '</td>
          </tr>
          <tr>
            <td class="expense">' . $expenses[2] . '</td>
            <td class="cost">' . format_money($expenses_values[2]) . '</td>
          </tr>
          <tr>
            <td class="expense">' . $expenses[3] . '</td>
            <td class="cost">' . format_money($expenses_values[3]) . '</td>
          </tr>
          <tr>
            <td class="expense">' . $expenses[4] . '</td>
            <td class="cost">' . format_money($expenses_values[4]) . '</td>
          </tr>
          <tr>
            <td class="expense">' . $expenses[5] . '</td>
            <td class="cost">' . format_money($expenses_values[5]) . '</td>
          </tr>
          <tr>
            <td class="expense">' . $expenses[6] . '</td>
            <td class="cost">' . format_money($expenses_values[6]) . '</td>
          </tr>
          
          <tr class="total-row">
            <td></td>
            <td class="total">' . format_money($expenses_total) . '</td>
          </tr>
        </table>
      </div>

      <div class="burn-rate">
        <p>' . format_money($net_burn_rate) . '</p>
      </div>
      <div class="breakeven-analysis">
        <p>' . $breakeven_number . ' unit(s)</p>
      </div>
      
    </page>
  ';

  /*
   * PAGE THREE
   */
  $template = $template . '
    <page backimg="./template-backgrounds/page3.png">
      <div class="page-three-logo-container">
        ' . ($logo_path ? '<img src="./'.$logo_path.'">' : '') . '
      </div>
      <div class="page-three-title-container ' . ($logo_path ? 'title-right' : '') . '">
        <h2>' . $company_name . '</h2>
      </div>
      
      <div class="page-three-main-title">
        <h3>Annual Budget By Month ' . $year_start . '</h3>
      </div>

      <div class="annual-budget-container">
        <table>';
          for ($i = 0; $i < 12; $i++) {
            $tr_class = ($i % 2) ? 'even' : 'odd';
            $template = $template . '
              <tr class="' . $tr_class . '">
                <td class="month">' . $annual_budget[$i][0] . '</td>
                <td class="prev-month-balance">' . format_money($annual_budget[$i][1]) . '</td>
                <td class="available-cash">' . format_money($annual_budget[$i][2]) . '</td>
                <td class="monthly-expense">' . format_money($annual_budget[$i][3]) . '</td>
                <td class="savings">' . format_money($annual_budget[$i][4]) . '</td>
              </tr>
            ';
          }
          
          $template = $template . '
        </table>
      </div>
    </page>
  ';

  $html2pdf = new Html2Pdf('P','A4','en', false, 'UTF-8', array(0, 0, 0, 0));
  $html2pdf->addFont('centurygothic', '', 'centurygothic');
  $html2pdf->addFont('centurygothicb', 'B', 'centurygothicb');
  $html2pdf->writeHTML($style . $template);
  $pdfContent = $html2pdf->output('document-'.$entry_id.'.pdf', 'S');
  //$html2pdf->output(__DIR__.'/../documents/document-'.$entry_id.'.pdf', 'F');
  
  //$path = './path/to/file.pdf';

	header('Content-Type: application/pdf');
	header('Content-Disposition: inline; filename='.$pdfContent);
	header('Content-Transfer-Encoding: binary');
	header('Accept-Ranges: bytes');

	readfile($pdfContent);

/* 
  $email = new \SendGrid\Mail\Mail();
  $email->setFrom("info@portboost.com", "Portboost");
  $email->setSubject("PDF Report");
  $email->addTo(htmlspecialchars($_POST['email']), "");
  $email->addContent("text/plain", "Here's your PDF report");
  
  $file_encoded = base64_encode($pdfContent);
  $email->addAttachment(
    $file_encoded,
    "application/pdf",
    "Report.pdf",
    "attachment"
  );  

  $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
  try {
      $response = $sendgrid->send($email);
      //print $response->statusCode() . "\n";
      //print_r($response->headers());
      //print $response->body() . "\n";
      echo create_alert("success", "Success! The Report was sent to your email");
  } catch (Exception $e) {
      echo 'Caught exception: '. $e->getMessage() ."\n";
  } */
  
}

?>
