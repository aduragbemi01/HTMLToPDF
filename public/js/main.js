$(document).ready(function() {
  const maxsize = 500 * 1024; // 500 KB
  const logoUploaderContainer = document.getElementById('logo-uploader-container');
  const logoUploaderInput = $("input[type='file'");
  const competitorsContainer = $(".competitors-container");
  const expensesContainer = $(".expenses-container");
  const incomeContainer = $(".income-container");
  const addCompetitorBtn = $(".btn-add-competitor");
  const addExpenseBtn = $('.btn-add-expense');
  const addIncomeBtn = $('.btn-add-income');

  const createAlert = function(alertType, message) {
    return `<div class="alert alert-${alertType} alert-dismissible fade show" role="alert">${message}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>`;
  }

  /* Logo Upload Area - Begin */
  ;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    logoUploaderContainer.addEventListener(eventName, function(e) {
      e.preventDefault();
      e.stopPropagation();
    }, false)
  })

  logoUploaderContainer.addEventListener('drop', function(e) {
    let dt = e.dataTransfer;
    let files = dt.files;

    document.querySelector('input[type="file"]').files = files;
    logoUploaderInput.trigger('change');
  }, false);

  logoUploaderInput.on('change', function() {
    // Empty the alerts container
    $('#alert-messages-container').empty();

    var file = this.files[0];
    var match = ["image/jpeg", "image/png", "image/jpg"];

    // Show error if the user tries to upload a file that is not an image
    if (!((file.type == match[0]) || (file.type == match[1]) || (file.type == match[2]))) {
      $("html, body").animate({ scrollTop: 0 }, "fast");
      $('#alert-messages-container').html(createAlert('warning', 'Unvalid image format. Allowed formats: JPG, JPEG, PNG.'));

      return false;
    }

    // Show error if the user tries to upload a file too big
    if (file.size > maxsize) {
      $("html, body").animate({ scrollTop: 0 }, "fast");
      $('#alert-messages-container').html(createAlert('danger', `The size of image you are attempting to upload is ${(file.size/1024).toFixed(2)} KB, maximum size allowed is ${(maxsize/1024).toFixed(2)} KB`));

      return false;
    }

    updateUploadMessage(this.files[0].name);
  });

  function updateUploadMessage(fileName) {
    $(".logo-uploader-container p").text(fileName);
  }
  /* Logo Upload Area - End */

  /* Submit Form - Begin */
  $("form").on('submit', function(e) {
    e.preventDefault();

    // Empty the alerts container
    $('#alert-messages-container').empty();

    $.ajax({
      url: "upload-form.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function(data) {
        $("html, body").animate({ scrollTop: 0 }, "fast");
        $('#alert-messages-container').html(data);
      }
    });

  });
  /* Submit Form - End */
  

  // Add more competition button
  $(addCompetitorBtn).click(function(e) {
      e.preventDefault();
      
      if (competitorsContainer.children(".container-fluid").length < 3) {
        $(competitorsContainer).append('<div class="container-fluid px-0"> <div class="mb-4 row"> <div class="col-sm-6"> <input type="text" class="form-control" name="competitionName[]" placeholder="Name" maxlength="30" required> </div><div class="col-sm-6"> <input type="text" class="form-control" name="competitionURL[]" placeholder="URL" required> </div></div></div><textarea class="form-control mb-4" name="competitionDifference[]" placeholder="What makes you different?" maxlength="50" required></textarea>');
      } else {

      }
  });

  // Add more expenses button
  $(addExpenseBtn).click(function(e) {
    e.preventDefault();
    
    if (expensesContainer.children(".container-fluid").length < 7) {
      $(expensesContainer).append('<div class="container-fluid px-0"> <div class="mb-4 row"> <div class="col-sm-6"> <input type="text" class="form-control" name="expense[]" placeholder="Expense" maxlength="40" required> </div><div class="col-sm-6"> <div class="input-group"> <input type="text" class="form-control" name="expenseValue[]" placeholder="Value" required> <span class="input-group-text">$</span> </div></div></div></div>');
    } else {

    }
  });

  // Add more income button
  $(addIncomeBtn).click(function(e) {
    e.preventDefault();
    
    if (incomeContainer.children(".container-fluid").length < 5) {
      $(incomeContainer).append('<div class="container-fluid px-0"> <div class="mb-4 row"> <div class="col-sm-6"> <input type="text" class="form-control" name="income[]" placeholder="Income" maxlength="40" required> </div><div class="col-sm-6"> <div class="input-group"> <input type="text" class="form-control" name="incomeValue[]" placeholder="Value" required> <span class="input-group-text">$</span> </div></div></div></div>');
    } else {

    }
  });
});