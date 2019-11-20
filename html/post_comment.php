<?php
include "db.php";

  $connect = mysqli_connect("localhost", "wsx2793", "Djaakdi1213!!", "wsx2792") or die("fail");

  $userId = $_POST['userId'];
  $comment = $_POST['comment-post-text'];
  $date = date('y-m-d h:i:s');
  $number = $_POST['number'];

  $comment_length = strlen($comment);



  if($comment_length > 100) {
    echo "<script> alert(\"100자를 초과했습니다.\"); history.back();</script>";
  }else {
    $sql = mysqli_query($db, "INSERT INTO comments VALUES(null, '$userId', '$comment', '$date', '$number')");
    ?>
    <form method="post" name="form" action="view.php?number=<?php echo $number?>">
      <input type="hidden" name="userId" value="<?php echo $userId ?>">
      <script>document.form.submit();</script>
    </form>
    <?php

     // echo "<script> alert('$number')</script>";

            echo "<script> window.location.replace('view.php?number=$number')</script>";
          }




 ?>
