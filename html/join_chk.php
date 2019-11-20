<?php
 include "db.php";

 $id=$_GET['userid'];

 $query=mq("SELECT * FROM user WHERE id='".$id."'");
 $member=$query->fetch_array();

 //id check
 if($member==0) {
  ?>
  <script>
  parent.document.getElementById("chk_id2").value="1";
  parent.alert("사용가능합니다.");
  </script>
  <?php
}else {
?>
<script>
parent.document.getElementById("chk_id2").value="0";
parent.alert("이미 사용중인 아이디입니다.");
</script>
<?php
}
?>
