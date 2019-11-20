<?php
class Comments {
  public static function getComments() {

  }

//return a stdClass Object from the db
  public static function insert($comment_txt, $userId) {
    //insert data into the db



    $std = new stdClass();
    $std->comment_id = null;
    $std->comment = $comment_txt;
    $std->userId = (int)$userId;

    return $std;
  }

  public static function update($data) {

  }


  public static function delete($comment_id) {

  }

}
?>
