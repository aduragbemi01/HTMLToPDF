<?php

// Show money value
function format_money($value) {
  if ($value && $value != ' ') {
    if ($value < 0) {
      return '-$' . ($value * -1);
    }

    return '$' . $value;
  }

  return $value;
}

// Create an alert to show to the user
function create_alert($alert_type, $alert_message) {
  return "<div class='alert alert-$alert_type alert-dismissible fade show' role='alert'>$alert_message<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
}

// Check if the user uploaded a valid image
function is_image_valid($entry_id) {
  global $logo_path;

  if ( $_FILES["companyLogo"]["name"] ) {
    $max_size = 500 * 1024; // 500 KB
    $destination_directory = "upload/";
    $validextensions = array("jpeg", "jpg", "png");
  
    $temporary = explode(".", $_FILES["companyLogo"]["name"]);
    $file_extension = end($temporary);
  
    // We need to check for image format and size again, because client-side code can be altered
    if ( (($_FILES["companyLogo"]["type"] == "image/png") ||
          ($_FILES["companyLogo"]["type"] == "image/jpg") ||
          ($_FILES["companyLogo"]["type"] == "image/jpeg")
         ) && in_array($file_extension, $validextensions)) {
      if ( $_FILES["companyLogo"]["size"] < ($max_size) ) {
        if ( $_FILES["companyLogo"]["error"] > 0 ) {
          echo create_alert("danger", "Error: " . $_FILES["companyLogo"]["error"]);
          return false;
        } else {
          if ( file_exists($destination_directory . $_FILES["companyLogo"]["name"]) ) {
            echo create_alert("danger", "Error: File " . $_FILES["companyLogo"]["name"] . " already exists.");
            return false;
          } else {
            $sourcePath = $_FILES["companyLogo"]["tmp_name"];
            $targetPath = $destination_directory . "logo-" . $entry_id . '.' . $file_extension;
            $logo_path = $targetPath;
            move_uploaded_file($sourcePath, $targetPath);
            return true;
          }
        }
      } else {
        echo create_alert("danger", "The size of image you are attempting to upload is " . round($_FILES["companyLogo"]["size"]/1024, 2) . " KB, maximum size allowed is " . round($max_size/1024, 2) . " KB");
        return false;
      }
    } else {
      echo create_alert("danger", "Unvalid image format. Allowed formats: JPG, JPEG, PNG.");
      return false;
    }
  }
}

?>