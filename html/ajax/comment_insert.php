<?php



  if(isset($_POST['task']) && $_POST['task'] == 'comment_insert') {
    require_once $_SERVER['DOCUMENT_ROOT'] . 'defines.php';
    $userId = (int)$_POST['userId'];
    $comment = addslashes(str_replace("\n", "</br>", $_POST['comment']));
    $std = new stdClass();
    $std->comment_id = 24;
    $std->userId = $userId;
    $std->comment = $comment;
    $std->userName = "David Thorn";

    require_once MODELS_DIR . 'comments.php';

    if(class_exists('Comments')) {
      $commentInfo = Comments::insert($comment_txt, $userId);
      if($commentInfo != null) {

      }
    }

    echo json_encode($std);

  } else {
    header('location: /');
  }
 ?>
