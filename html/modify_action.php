<?php
    $connect = mysqli_connect("localhost", "wsx2793", "Djaakdi1213!!", "wsx2792") or die ("connect fail");
    $number = $_POST['number'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_POST['profileImage'];
    $pre_image = $_POST['pre_image'];
    $date = date('Y-m-d H:i:s');
    // $query = "update border set title='$title', content='$content', date='$date', image='$image' where number=$number";
    // $result = $connect->query($query);

    if(isset($title)){

      echo "<pre>", print_r($_FILES['profileImage']['name']), "</pre>";

      $bio = $_POST['bio'];
      $profileImageName = time() . '_' . $_FILES['profileImage']['name'];

      $target = '/var/www/html/' . $profileImageName;
      if($_FILES['profileImage']['tmp_name']) {
      move_uploaded_file($_FILES['profileImage']['tmp_name'], $target);
      $query = "update border set title='$title', content='$content', date='$date', image='$profileImageName' where number=$number";

    }else {
      $query = "update border set title='$title', content='$content', date='$date', image='$pre_image' where number=$number";
            }
              mysqli_query($connect, $query);
      echo "<script> alert(\"글이 수정되었습니다.\"); location.replace(\"my_inde_story.php\");</script>";
    }
    else {
        echo "fail";
    }
?>
