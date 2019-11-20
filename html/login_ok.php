<meta charset = "utf-8"/>

<?php include "db.php";


$auto_login = $POST['auto_login'];


  if(!isset($_POST['id'], $_POST['password_1'])) {
    die('Please fill both the id and password field!');
  }


  // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $db->prepare('SELECT id, password FROM user WHERE id = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['id']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
}
if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	if (password_verify($_POST['password_1'], $password)) {
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['id'] = $id;
		// echo 'Welcome ' . $_SESSION['id'] . '!';
    header('Location:mainbody.php');
	} else {
    ?>
    <script>
      alert("<?php echo "비밀번호를 정확히 입력해주세요."?>");
      location.replace("loginform.php");
    </script>

    <?php
	}
} else {
  ?>
  <script>
    alert("<?php echo "아이디를 정확히 입력해주세요."?>");
    location.replace("loginform.php");
  </script>
  <?php
}
$stmt->close();

?>
