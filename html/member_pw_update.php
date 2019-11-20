
<?php
  include "db.php";
  if(isset($_SESSION['uid'])){
    echo "<script>alert('잘못된 접근입니다.'); location.href='loginform.php'</script>";
  }else{
    ?>

<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>회원가입 폼</title>
<style>
* {margin: 0 auto;}

.find {
  text-align:center;
  width:500px;
  margin-top:100px;
  margin-left: auto;
  margin-right: auto;
}

.find h1 {
  margin-bottom: 50px;

}
</style>
</head>
<body>
  <?php include 'header.php';?>

  <div class="find">
  <form method="post" action="member_pw_update_ok.php">
    <h1>비밀번호 변경</h1>
      <fieldset>
        <legend></legend>
          <table>
            <tr>
              <td>아이디</td>
              <td><input type="text" size="35" name="userid" placeholder="아이디"></td>
            </tr>
            <tr>
              <td>비밀번호 변경 : </td>
              <td><input type="password" size="35" name="pw" placeholder="변경비밀번호"></td>
            </tr>
          </table>
        <input type="submit" value="변경하기" />
      </fieldset>
  </form>
</div>
</body>
</html>
<?php } ?>
