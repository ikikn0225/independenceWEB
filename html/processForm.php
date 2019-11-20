<?php
$msg = "";
$css_class = "";


// if(isset($_POST['save-user'])) {
  echo "<pre>", print_r($_FILES['profileImage']['name']), "</pre>";

  
  $profileImageName = time() . '_' . $_FILES['profileImage']['name'];

  $target = '/var/www/html/images/' . $profileImageName;

  if(move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)) {
    $msg = "업로드 성공";
    $css_class = "alert-success";
  }else {
    $msg = "업로드 실패";
    $css_class = "alert-danger";
  };
// }
