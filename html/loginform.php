<!DOCTYPE html>
<html lang="ko">
<script>
</script>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="loginform.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>로그인</title>
    <script src="cookie.js"></script>

  </head>

  <body cellpadding="0" cellspacing="0" marginleft="0" margintop="0" width="100%" height="100%">
    <!--헤더 인클루드-->
    <?php include 'header.php';?>

	<div class="card align-middle" style="width:20rem; border-radius:20px; margin-top:100px; left:40%;" >
		<div class="card-title" style="margin-top:30px;">
			<h2 class="card-title text-center" style="color:#113366;">로그인</h2>
		</div>
		<div class="card-body">
      <form class="form-signin" action="login_ok.php" method="POST">
        <h5 class="form-signin-heading">로그인 정보를 입력하세요</h5>

        <label for="inputEmail" class="sr-only">아이디</label>
        <input type="text" id="id" name="id" class="form-control" placeholder="아이디" required autofocus><BR>

        <label for="inputPassword" class="sr-only">비밀번호</label>
        <input type="password" id="password_1" name="password_1" class="form-control" placeholder="비밀번호" required><br>

        <button id="btn-Yes" class="btn btn-lg btn-secondary btn-block" type="submit" >로 그 인</button>

        <ul class="btns">
          <a href="register.php" style="float:left">회원 가입</a>
          <a href="member_find.php" style="float:right">아이디/비밀번호 찾기</a>
        </ul>

      </form>

		</div>
	</div>

	<div class="modal">
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>