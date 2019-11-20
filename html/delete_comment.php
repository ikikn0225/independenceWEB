<?php
  include 'db.php';

  $userId = $_POST['userId'];
  $indexnum = $_POST['indexnum'];
  $number = $_POST['number'];
?>
  <form method="post" name="form" action="view.php?number=<?php echo $number?>">
    <input type="hidden" name="userId" value="<?php echo $userId ?>">
    <script>document.form.submit();</script>
  </form>
<?php
  $sql = mysqli_query($db, "DELETE FROM comments where indexnum = $indexnum ");
  echo "<script> window.location.replace('view.php?number=$number')</script>";

 ?>
