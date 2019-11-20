<?php include "db.php";?>
<!DOCTYPE html>
<html lang="ko">

<script>

function chid(){
  document.getElementById("chk_id2").value=0;
  var id=document.getElementById("chk_id1").value;

  if(id==""){
  alert("빈칸입니다.");
  exit;
  }

  ifrm1.location.href="join_chk.php?userid="+id;
 }

 function chid_nick(){
   document.getElementById("chk_id3").value=0;
   var nickname=document.getElementById("nickname").value;

   if(nickname==""){
   alert("빈칸입니다.");
   exit;
   }

   ifrm1.location.href="join_ck_nick.php?nickname="+nickname;
  }

  function chpw() {
    var pw = document.getElementById("password_1").value;
    var pw2 = document.getElementById("password_2").value;

    if(pw != pw2) {
      alert("비밀번호가 일치하지 않습니다.");
      exit;
    } else {
      alert("비밀번호가 일치합니다.");
      exit;
    }

  }




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
    <title>회원가입</title>

    <!--회원가입 정형식 체크 JS-->
    <script defer src="check_register_id.js"></script>
    <style>

    .check_font {
      color: red;
      margin-top: -20px;
    }
    </style>

  </head>

  <body cellpadding="0" cellspacing="0" marginleft="0" margintop="0" width="100%" height="100%" >
    <!--헤더 인클루드-->
    <?php include 'header.php';?>

	<div class="card align-middle" style="width:40%; border-radius:20px; margin-top:100px; margin-bottom:100px; left:30%;" >
		<div class="card-title" style="margin-top:30px;">
			<h2 class="card-title text-center" style="color:#113366;">회원가입</h2>
		</div>
		<div class="card-body">
      <form class="form-signin" id="form" action="member_ok.php" method="POST">

       <h6 class="form-signin-heading">아이디</h6>
        <input class="form-signin-heading" type="button" value="중복검사" style="float: right; margin-bottom: 5px;" onclick="chid()">
        <input type=hidden id="chk_id2" name=chk_id2 value="0">
        <label for="inputEmail" class="sr-only">아이디를 입력해주세요</label>
        <input type="text" id="chk_id1" name="id" class="form-control" placeholder="a~z, 0~9로 시작하는 4~12자리" required autofocus><BR>
          <div class="check_font" id="id_check"></div>


          <h6 class="form-signin-heading">이메일 주소</h6>
          <label for="inputEmail" class="sr-only">이메일 주소를 입력해주세요</label>
          <input type="text" id="email" name="email" class="form-control" placeholder="이메일 주소를 입력해주세요" required autofocus><BR>
            <div class="check_font" id="email_check"></div>

          <h6 class="form-signin-heading">비밀번호</h6>
        <label for="inputPassword" class="sr-only">비밀번호를 입력해주세요</label>
        <input type="password" id="password_1" name="password_1" class="form-control" placeholder="A~Z, a~z, 0~9로 시작하는 4~12자리" required><br>
        <div class="check_font" id="pw_check"></div>


        <h6 class="form-signin-heading">비밀번호 확인</h6>
        <input class="form-signin-heading" type="button" value="일치확인" style="float: right; margin-bottom: 5px;" onclick="chpw()">
        <input type=hidden id="chk_pw" name=chk_pw value="0">
      <label for="inputPassword" class="sr-only">비밀번호 확인을 위해 입력해주세요</label>
      <input type="password" id="password_2" name="password_2" class="form-control" placeholder="비밀번호 확인을 위해 입력해주세요" required><br>
      <div class="check_font" id="pw2_check"></div>

      <h6 class="form-signin-heading">닉네임</h6>
      <input class="form-signin-heading" type="button" value="중복검사" style="float: right; margin-bottom: 5px;" onclick="chid_nick()">
      <input type=hidden id="chk_id3" name=chk_id3 value="0">
      <label for="inputEmail" class="sr-only">닉네임을 입력해주세요</label>
      <input type="text" id="nickname" name="nickname" class="form-control" placeholder="닉네임을 입력해주세요" required autofocus><BR>

        <h6 class="form-signin-heading">하고 싶은 말을 적어주세요</h6>
        <label for="inputEmail" class="sr-only">하고 싶은 말을 적어주세요</label>
        <textarea id="memo" name="memo" class="form-control" placeholder="하고 싶은 말을 적어주세요" style="height: 300px" cols="60" rows="3" required autofocus></textarea><BR>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="agree_private" name="agree_private" style="margin-top: 10px; margin-bottom: 10px"> 정보 제공에 동의합니다.
          </label>
        </div>
        <button id="btn-Yes" class="btn btn-lg btn-secondary btn-block" type="submit" style="width: 50%; margin: 0 auto;" >회원 가입</button>

      </form>
<iframe src="" id="ifrm1" scrolling=no frameborder=no width=0 height=0 name="ifrm1"></iframe>
<!-- <iframe src="" id="ifrm2" scrolling=no frameborder=no width=0 height=0 name="ifrm2"></iframe> -->
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
