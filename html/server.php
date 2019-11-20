<?php

session_start();

//initialising variables

$id = "";
$email = "";

$errors = array();

//connect to db

$db = mysqli_connect('localhost', 'wsx2793', 'Djaakdi1213!!', 'wsx2792') or die("데이터베이스에 연결할 수 없습니다.");

//Register users

$id = mysqli_real_escape_string($db, $_POST['id']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
$nickname = mysqli_real_escape_string($db, $_POST['nickname']);
$memo = mysqli_real_escape_string($db, $_POST['memo']);

//form validation

if(empty($id)) {array_push($errors, "아이디를 적어주세요.")};
if(empty($email)) {array_push($errors, "이메일을 적어주세요.")};
if(empty($password_1)) {array_push($errors, "비밀번호를 적어주세요.")};
if($password_1 != $password_2) {array_push($errors, "비밀번호가 일치하지 않습니다.")};
if(empty($nickname)) {array_push($errors, "닉네임을 적어주세요.")};

// check db for existing user with same username

$user_check_query = "SELECT * FROM user WHERE id = '$id' or email = '$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user) {

  if($user['id'] === $id) {array_push($errors, "존재하는 아이디입니다.")};
  if($user['email'] === $email) {array_push($errors, "입력하신 이메일은 이미 존재합니다.")};
  if($user['nickname'] === $nickname){array_push($errors, "입력하신 닉네임은 이미 존재합니다.")};
}

//Register the user if no error

if(count($errors) == 0) {

  $password = md5($password_1); //should be encrypted
  $query = "INSERT INTO user (id, email, password, memo) VALUES ('$id', '$email', '$password', '$memo')";

  // mysqli_query($db, $query);
  // $_SESSION['id'] = $id;
  // $_SESSION['success'] = "success logged in";

//after register then not going to mainbody.php, go to loginform.php for checking login.
  header('location: loginform.php');

}

 ?>
