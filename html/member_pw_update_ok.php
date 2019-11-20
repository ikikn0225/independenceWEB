
<?php

include "db.php";
$userid = $_POST['userid'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);

$query_id = mq("SELECT id FROM user WHERE id='".$userid."'");
$check_id = $query_id->fetch_array();

if($check_id != 0) {
$sql = mq("update user set password='".$userpw."' where id = '".$userid."'");
session_destroy();
echo "<script>alert('비밀번호를 변경했습니다.'); location.href='loginform.php';</script>";
} else {
  echo "<script>alert('정확한 아이디를 입력하세요.'); history.back();</script>";
}

?>
