<?php
session_start();

  include "db.php";



  $sql = mq("DELETE FROM user where id='".$_SESSION['id']."'");
  session_destroy();
  echo "<script>alert('회원탈퇴 완료되었습니다.'); location.href='mainbody.php';</script>";


 ?>
