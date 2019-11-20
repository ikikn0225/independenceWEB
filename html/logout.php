<?php
session_start();

session_destroy();
setcookie('id', '', time()-3600, "/");
setcookie('password_1', '', time()-3600, "/");
header('Location: mainbody.php');
 ?>
