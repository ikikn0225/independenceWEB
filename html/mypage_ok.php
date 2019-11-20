
<?php

include "db.php";

$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
$username = $_POST['name'];

$sql = mq("update user set password='".$userpw."', nickname='".$username."',email='".$_POST['email']."' where id='".$_SESSION['id']."'");
echo "<script>alert('정보변경이 완료되었습니다 	'); location.href='mainbody.php';</script>";

?>
