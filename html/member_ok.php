<?php
  include "db.php";
  $connect = mysqli_connect("localhost", "wsx2793", "Djaakdi1213!!", "wsx2792") or die("fail");

  $id = $_POST['id'];
  $pw = password_hash($_POST['password_1'], PASSWORD_DEFAULT);
  $email = $_POST['email'];
  $nickname = $_POST['nickname'];
  $agree = $_POST['agree_private'];
  $memo = $_POST['memo'];

  $query = mq("SELECT id FROM user WHERE id='".$id."'");
  $query_nickname = mq("SELECT nickname FROM user WHERE nickname='".$nickname."'");
  $check = $query->fetch_array();
  $check_nickname = $query_nickname->fetch_array();


  //아이디 중복확인
  if($check == 0){
    //닉네임 중복확인
    if($check_nickname == 0) {

  //정보동의
  if($agree) {
  $sql = mysqli_query($db, "insert into user (id, nickname, email, password, memo) values('$id','$nickname','$email','$pw','$memo')");
  ?>
  <meta charset="utf-8"/>
  <script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
  <meta http-equiv="refresh" content="0 url=/loginform.php">
  <?php
} else {
  ?>
  <script>
    alert("<?php echo "정보제공 동의에 체크해주세요."?>");
    location.replace("register.php", history.back());
  </script>
  <?php
}

} else {
  ?>
  <script>
    alert("<?php echo "존재하는 닉네임입니다."?>");
    location.replace("register.php");
  </script>
  <?php
}
}else {
  ?>
  <script>
    alert("<?php echo "존재하는 아이디입니다."?>");
    location.replace("register.php");
  </script>
  <?php
}
?>
