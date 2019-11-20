<?php
include "db.php";

  $connect = mysqli_connect("localhost", "wsx2793", "Djaakdi1213!!", "wsx2792") or die("fail");

  $userId = $_POST['userId'];
  $comment = $_POST['comment'];
  $date = date('y-m-d h:i:s');
  $number = $_POST['number'];
  $indexnum = $_POST['indexnum'];

  // $query = mysqli_query("SELECT comment FROM comments WHERE indexnum='".$indexnum."'");

  //수정할 댓글이 존재하면(1개면)
  // if($value >= 1) {
  echo $comment;

    ?>
    <form method="post" name="form" action="view.php?number=<?php echo $number?>">
      <input type="hidden" name="userId" value="<?php echo $userId ?>">
      <input type="hidden" name="indexnum_comment" value="<?php echo $comment ?>">
      <input type="hidden" name="indexnum" value="<?php echo $indexnum ?>">
      <script>document.form.submit();</script>
    </form>
    <?php

    echo "<script> window.location.replace('view.php?number=$number')</script>";






 ?>
