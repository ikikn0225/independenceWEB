<?php
  ini_set("allow_url_fopen", 1);
  include "simple_html_dom.php";

  $data = file_get_html("http://e-gonghun.mpva.go.kr/user/ContribuMeritList.do?goTocode=20002");

  echo $data;

  // $a = $data->find("");
  //
  // foreach($a as $b) {
  //   echo $b;
  // }


 ?>
