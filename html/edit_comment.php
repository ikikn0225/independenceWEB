<?php
include "db.php";

  $connect = mysqli_connect("localhost", "wsx2793", "Djaakdi1213!!", "wsx2792") or die("fail");

  $userId = $_POST['userId'];
  $comment = $_POST['comment-post-text'];
  $date = date('y-m-d h:i:s');
  $indexnum = $_POST['indexnum'];
  $number = $_POST['number'];

$query = "update comments set userId='$userId', number='$number', comment='$comment', date='$date' where indexnum = $indexnum";
// $query = "update border set title='$title', content='$content', date='$date', image='$pre_image' where number=$number";
mysqli_query($connect, $query);
echo "<script> alert('댓글 수정 완료');</script>"
  ?>
  <form method="post" name="form" action="view.php?number=<?php echo $number?>">
    <input type="hidden" name="userId" value="<?php echo $userId ?>">
    <script>document.form.submit();</script>
  </form>
  <?php

  // echo "<script> window.location.replace('view.php?number=$number')</script>";





 ?>
