
<?php
  include "db.php";

  if(isset($_SESSION['id'])){
?>
    <script>alert('잘못된 접근입니다.'); history.back();</script>";
<?php
  }else{ ?>
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>아이디/비밀번호 찾기</title>
<style>
* {
  margin: 0 auto;
}

.find h1 {
  margin-bottom: 50px;

}

a {
  color:#333; text-decoration: none;
}
.find {
  margin-left: auto;
  margin-right: auto;
  text-align:center;
  width:500px;
  margin-top:100px; }

  .btn {
    margin-top: 20px;
    margin-bottom: 20px;
  }

</style>
</head>
<body>
  <?php include 'header.php';?>

  <div class="find">
    <form method="post" action="member_find_id.php">
      <h1>회원계정 찾기</h1>

        <fieldset>
          <legend>아이디 찾기</legend>
            <table>
              <tr>
                <td>닉네임</td>
                <td><input type="text" size="35" name="name" placeholder="닉네임"></td>
              </tr>
              <tr>
                <td>이메일</td>
                <td><input type="text" name="email">@<select name="emadress"><option value="naver.com">naver.com</option><option value="nate.com">nate.com</option>
                <option value="hanmail.com">hanmail.com</option><option value="gmail.com">gmail.com</option></select></td>
              </tr>
            </table>
          <input type="submit" class="btn" value="확인" />
      </fieldset>
    </form>
  </div>
  <div class="find">
      <form method="post" action="member_find_pw.php">
        <fieldset>
          <legend>비밀번호 찾기</legend>
            <table>
              
              <tr>
                <td>이메일</td>
                <td><input type="text" name="email_pw">@<select name="emadress_pw"><option value="naver.com">naver.com</option><option value="nate.com">nate.com</option>
                <option value="hanmail.com">hanmail.com</option><option value="gmail.com">gmail.com</option></select></td>
              </tr>
            </table>
          <input type="submit" class="btn" value="확인" />
      </fieldset>
    </form>
  </div>
</body>
</html>
<?php
}
?>
