
<?php
	include "db.php";
	if(isset($_SESSION['id'])){
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>내 정보</title>
<style>
* {margin: 0 auto;}
a {color:#333; text-decoration: none;}
.find {
  text-align:center;
  width:550px;
  margin-top:30px;
  margin-left: auto;
  margin-right: auto;
 }

 .find h1 {
   margin-top: 100px;
   margin-bottom: 50px;
 }

 table {
   border-spacing: 20px;
   border-collapse: separate;
 }

</style>
</head>
<body>
  <?php include 'header.php';?>
	<div class="find">
		<form method="post" action="mypage_ok.php">
			<?php
				$sql = mq("select * from user where id='{$_SESSION['id']}'");
				while($member = $sql->fetch_array()){
					?>
			<h1>내 정보</h1>
				<fieldset>
					<legend>마이페이지</legend>
						<table>
							<tr>
								<td>아이디</td>
								<td><input type="text" size="35" name="userid" value="<?php echo $_SESSION['id'];?>" disabled></td>
							</tr>
							<tr>
								<td>비밀번호</td>
								<td><input type="password" size="35" name="userpw" placeholder="비밀번호"></td>
							</tr>
							<tr>
								<td>닉네임</td>
								<td><input type="text" size="35" name="name" placeholder="이름" value="<?php echo $member['nickname']; ?>" disabled></td>
							</tr>
							<tr>
								<td>이메일</td>
								<td><input type="text" size="35" name="email" placeholder="이메일" value="<?php echo $member['email']; ?>"></td>
							</tr>
						</table>
					<input type="submit" value="정보변경"/>
					</br>
					</br>
			</fieldset>
		</br>
			<?php } ?>
		</form>
		<input type="button" value="회원탈퇴" onclick="delete_id()"  />
		<script>
			function delete_id() {
				location.href="delete_id.php";
			}
		</script>
	</div>
</body>
</html>
<?php }else{
	echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
}
