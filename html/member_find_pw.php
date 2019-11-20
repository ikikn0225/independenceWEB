
<?php
	include "db.php";
	// $userid = $_POST['userid'];
  $email_pw = $_POST['email_pw'].'@'.$_POST['emadress_pw'];
$sql = mq("select * from user where email='{$email_pw}'");
$result = $sql->fetch_array();

if($result){

	echo "<script>alert('회원님의 비밀번호를 변경합니다.'); location.href='member_pw_update.php';</script>";

}else{
	echo "<script>alert('없는 계정입니다.'); history.back();</script>";
}
?>
