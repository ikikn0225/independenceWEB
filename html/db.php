<?php
  session_start();
  header('Content-Type: text/html; charset=utf-8');

  $DATABASE_HOST = 'localhost';
  $DATABASE_USER = 'wsx2793';
  $DATABASE_PASS = 'Djaakdi1213!!';
  $DATABASE_NAME = 'wsx2792';

  $db = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
  $db -> set_charset("utf8");

  $query = "select * from myindestory by number desc";
  $result = $db->query($query);
  $total = mysqli_num_rows($result);


  function mq($sql) {
    global $db;
    return $db -> query($sql);
  }
 ?>
