<?php
$msg = "";
$css_class = "";


if(isset($_POST['save-user'])) {
  echo "<pre>", print_r($_FILES['profileImage']['name']), "</pre>";

  $bio = $_POST['bio'];
  $profileImageName = time() . '_' . $_FILES['profileImage']['name'];

  $target = 'images/' . $profileImageName;

  if(move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)) {
    $msg = "성공";
    $css_class = "alert-success";
  } else {
    $msg = "실패";
    $css_class = "alert-danger";
  }
}

?>
