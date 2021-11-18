<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PortBoost</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">

  <link rel="stylesheet" href="css/main.css">

</head>

<body>


  <nav class="sidebar">
    <div class="position-sticky pt-3 text-center">
      <img class="mt-5 mb-5" src="img/portboosts.png" alt="">
      <img class="mt-5 mb-5" src="img/portboost shirt.png" alt="">
      <h3>Company Data Report:</h3>
      <p class="px-5">Creating a customized data report has never been easier. We at PortBoost aim to make the tech startup journey simpler for every Founder to navigate.</p>
      <p class="px-5">"Technology has the ability to change the future...we help you build something that can."<br>- D. Gordon</p>
    </div>
  </nav>

  <main id="main" class="">
    <div class="border-bottom">
      <h2>ENTER YOUR COMPANY DETAILS:</h2>
      <p>Once completed please hit the submit button to have your customized PDF Data Report sent to your email.</p>
    </div>
    
    <form action="" method="post" enctype="multipart/form-data">
      <div class="container-fluid">

        <!-- Alert Messages -->
        <div id="alert-messages-container" class="mb-4 row"></div>

        <!-- Company Name -->
        <div class="mb-4 row">
          <label for="companyName" class="col-sm-5 ps-0 col-form-label">Enter your Company Name</label>
          <div class="col-sm-7 pe-0">
            <input type="text" class="form-control placeholder-italic" id="companyName" name="companyName" placeholder="e.g. CIS Infrastructure" value="">
          </div>
        </div>

        <!-- Email -->
        <div class="mb-4 row">
          <label for="email" class="col-sm-5 ps-0 col-form-label">Email</label>
          <div class="col-sm-7 pe-0">
            <input type="email" class="form-control placeholder-italic" id="email" name="email" placeholder="yourname@example.com" value="" required>
          </div>
        </div>

        <!-- Company logo -->
        <div class="mb-4 row">
          <label class="col-sm-5 ps-0 col-form-label">Attach your Company Logo</label>
          <div class="col-sm-7">
            <div class="logo-uploader-container text-center" id="logo-uploader-container">
              <label for="companyLogo" class="form-label">
                <input class="form-control d-none" type="file" name="companyLogo" id="companyLogo">
                <img class="mb-2" src="img/img upload icon.png" alt="">
                <p class="mb-0">Drag Your Logo here,<br><strong>or browse</strong></p>
              </label>
            </div>
          </div>
        </div>

        <!-- Company Description -->
        <div class="mb-4 row">
          <label for="companyDesc" class="col-sm-5 ps-0 col-form-label">Describe your Company</label>
          <div class="col-sm-7 pe-0">
            <textarea class="form-control placeholder-italic" id="companyDesc" name="companyDesc" placeholder="e.g. A company description provides an...." maxlength="360"></textarea>
          </div>
        </div>

        <!-- Bio of Founder -->
        <div class="mb-4 row">
          <label for="founderBio" class="col-sm-5 ps-0 col-form-label">Bio of Founder</label>
          <div class="col-sm-7 pe-0">
            <textarea class="form-control placeholder-italic" id="founderBio" name="founderBio" placeholder="e.g. It depends on where you are planning...." maxlength="120"></textarea>
          </div>
        </div>

        <!-- Market Size -->
        <div class="mb-4 row">
          <label for="marketSize" class="col-sm-5 ps-0 col-form-label">Market Size</label>
          <div class="col-sm-7 pe-0">
            <input type="text" class="form-control placeholder-italic" id="marketSize" name="marketSize" placeholder="e.g. you need to understand your target....." value="" maxlength="120">
          </div>
        </div>

        <!-- Industry Future forecast -->
        <div class="mb-4 row">
          <label for="industryFutureForecast" class="col-sm-5 ps-0 col-form-label">Industry Future Forecast</label>
          <div class="col-sm-7 pe-0">
            <textarea class="form-control placeholder-italic" id="industryFutureForecast" name="industryFutureForecast" placeholder="e.g. As the industry emerges from....." maxlength="120"></textarea>
          </div>
        </div>

        <!-- How will you make money? -->
        <div class="mb-4 row">
          <label for="howMakeMoney" class="col-sm-5 ps-0 col-form-label">How will you make money?</label>
          <div class="col-sm-7 pe-0">
            <textarea class="form-control placeholder-italic" id="howMakeMoney" name="howMakeMoney" placeholder="e.g. As the industry emerges from....." maxlength="120"></textarea>
          </div>
        </div>

        <!-- Competition -->
        <div class="mb-4 row">
          <label class="col-sm-5 ps-0 col-form-label">Competition</label>
          <div class="col-sm-7 pe-0">
            <div class="competitors-container">
              <div class="container-fluid px-0">
                <div class="mb-4 row">
                  <div class="col-sm-6">
                  <input type="text" class="form-control" name="competitionName[]" placeholder="Name" value="" maxlength="30" required>
                  </div>
                  <div class="col-sm-6">
                  <input type="text" class="form-control" name="competitionURL[]" placeholder="URL" value="">
                  </div>
                </div>
              </div>

              <textarea class="form-control mb-4" name="competitionDifference[]" placeholder="What makes you different?" maxlength="50" required></textarea>
            </div>
            
            <button class="btn btn-primary btn-add-competitor w-100">+ Add another competition</button>
          </div>

          <div class="border-bottom px-0"></div>
        </div>

        <!-- Profit on Main Product -->
        <div class="mb-4 row">
          <label for="profitMainProduct" class="col-sm-5 ps-0 col-form-label">How much profit do you make from selling one unit of your main service/product?</label>
          <div class="col-sm-7 pe-0">
            <div class="input-group">
              <input type="text" class="form-control" id="profitMainProduct" name="profitMainProduct" placeholder="Profit" value="" required>
              <span class="input-group-text">$</span>
            </div>
          </div>
        </div>

        <!-- Expenses -->
        <div class="mb-4 row">
          <label class="col-sm-5 ps-0 col-form-label">Expenses</label>
          <div class="col-sm-7 pe-0">
            <div class="expenses-container">
              <div class="container-fluid px-0">
                <div class="mb-4 row">
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="expense[]" placeholder="Expense" value=""  maxlength="40" required>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-group">
                      <input type="text" class="form-control" name="expenseValue[]" placeholder="Value" value="" required>
                      <span class="input-group-text">$</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-primary btn-add-expense w-100">+ Add another expense</button>
          </div>

          <div class="border-bottom px-0"></div>
        </div>

        <!-- Income -->
        <div class="mb-4 row">
          <label class="col-sm-5 ps-0 col-form-label">Income</label>
          <div class="col-sm-7 pe-0">
            <div class="income-container">
              <div class="container-fluid px-0">
                <div class="mb-4 row">
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="income[]" placeholder="Income" value="" maxlength="40" required>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-group">
                      <input type="text" class="form-control" name="incomeValue[]" placeholder="Value" value="" required>
                      <span class="input-group-text">$</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-primary btn-add-income w-100">+ Add another income</button>
          </div>
        </div>

        <!-- Income/Expense Sheet -->
        <div class="mb-5 row">
          <div class="col-sm-5 ps-0">
            <label for="yearStart" class="form-label mb-0">Income/Expense Sheet</label>
            <p class="m-0">Select year when company is starting</p>
          </div>
          <div class="col-sm-7 pe-0">
            <input type="number" class="form-control" id="yearStart" name="yearStart" value="2021">
          </div>
        </div>

        <!-- Cover image options -->
        <div class="mb-4 row">
          <label class="col-sm-5 ps-0 col-form-label">Which Image do you want on Cover Page of PDF?</label>
          <div class="col-sm-7 pe-0">
            <fieldset class="form-group d-flex justify-content-between">
              <div class="form-check form-check-inline">
                <input class="form-check-input d-none" id="cover1" type="radio" name="coverImage" value="cover1">
                <label class="form-check-label" for="cover1">
                  <img class="cover-image" src="img/cover choice 1.png" alt="">
                </label>
                <img class="checkmark-icon" src="img/checkmark.png" alt="">
                <div class="zoom-image-icon-container">
                  <img class="zoom-image-icon" src="img/eye.png" alt="" data-bs-toggle="modal" data-bs-target="#cover1Modal"> 
                </div>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input d-none" id="cover2" type="radio" name="coverImage" value="cover2">
                <label class="form-check-label" for="cover2">
                  <img class="cover-image" src="img/cover choice 2.png" alt="">
                </label>
                <img class="checkmark-icon" src="img/checkmark.png" alt="">
                <div class="zoom-image-icon-container">
                  <img class="zoom-image-icon" src="img/eye.png" alt="" data-bs-toggle="modal" data-bs-target="#cover2Modal">
                </div>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input d-none" id="cover3" type="radio" name="coverImage" value="cover3">
                <label class="form-check-label" for="cover3">
                  <img class="cover-image" src="img/cover choice 3.png" alt="">
                </label>
                <img class="checkmark-icon" src="img/checkmark.png" alt="">
                <div class="zoom-image-icon-container">
                  <img class="zoom-image-icon" src="img/eye.png" alt="" data-bs-toggle="modal" data-bs-target="#cover3Modal">
                </div>
              </div>
            </fieldset>
          </div>

          <div class="border-bottom pt-5 mt-3 px-0"></div>
        </div>

        <div class="row">
          <button type="submit" class="btn btn-submit text-uppercase ms-auto">Submit</button>

        </div>

      </div>
    </form>

    <!-- Modal for cover option 1-->
    <div class="modal fade" id="cover1Modal" tabindex="-1" aria-labelledby="cover1Modal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <img src="img/cover choice 1 big.jpg" alt="">
        </div>
      </div>
    </div>
    <!-- Modal for cover option 2-->
    <div class="modal fade" id="cover2Modal" tabindex="-1" aria-labelledby="cover2Modal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <img src="img/cover choice 2 big.jpg" alt="">
        </div>
      </div>
    </div>
    <!-- Modal for cover option 3-->
    <div class="modal fade" id="cover3Modal" tabindex="-1" aria-labelledby="cover3Modal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <img src="img/cover choice 3 big.jpg" alt="">
        </div>
      </div>
    </div>
  </main>

  <script
			  src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous"></script>
  <!--script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></!--script-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  
  <script src="js/main.js"></script>
</body>

</html>
