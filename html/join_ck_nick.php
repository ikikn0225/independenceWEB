<?php
include "db.php";

 $nickname=$_GET['nickname'];

 $query_nick=mq("SELECT * FROM user WHERE nickname='".$nickname."'");
 $member_nick=$query_nick->fetch_array();

//nickname checkbox
if($member_nick == 0) {
  ?>
  <script>
  parent.document.getElementById("chk_id3").value="1";
  parent.alert("사용가능합니다.");
  </script>
  <?php
}else {
?>
<script>
parent.document.getElementById("chk_id3").value="0";
parent.alert("이미 사용중인 닉네임입니다.");
</script>
<?php
}
?>
