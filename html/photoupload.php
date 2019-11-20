<?php
include "db.php";
session_start();
if($_SESSION['id'] == '') {
	err_redir("로그인이 필요한 서비스입니다.",$env['url_prefix']."loginform.php");
}

$mode = $_REQUEST['mode'];
$s_idno = $_SESSION['idno'];

if($mode == 'ins') {
	$target = $_FILES['userfile']['tmp_name'];
	$size = getimagesize($target);
	$width = $size[0];
	$height = $size[1];
	$type = $size[2];
	$attr = $size[3];

	if ($type != "2") {
		print "<script>alert('업로드 불가 파일입니다. JPEG(JPG) 사진으로 업로드해주세요.'); history.back();</script>";
		exit;
	}

	if($width>200) {
		$new_width = 200;
		$new_height = $height * (200/$width);

		$image_p = imagecreatetruecolor($new_width, $new_height);
		$image = imagecreatefromjpeg($target);
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
		imagejpeg($image_p, "$target", 100);
		imagedestroy($image);
		imagedestroy($image_p);
	} else {
		$new_width = $width;
		$new_height = $height;

		$image_p = imagecreatetruecolor($new_width, $new_height);
		$image = imagecreatefromjpeg($target);
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
		imagejpeg($image_p, "$target", 100);
		imagedestroy($image);
		imagedestroy($image_p);
	}

	$size = getimagesize($target);
	$width = $size[0];
	$height = $size[1];

	$imageblob = addslashes(fread(fopen($target, "r"), filesize($target)));
	$filesize = filesize($target) ;

	$sql = "select count(*) as cnt from photo where idno='$idno'";
	$row = dbqueryfetch($sql);
	if($row[0]<1) {
		$sql = "insert into photo set `idno`='$s_idno', `image`='$imageblob', `width`='$width', `height`='$height', `filesize`='$filesize', `insdt`=now()";
		$ret = dbquery($sql) or die(mysqli_error());
	} else {
		$sql = "update photo set `image`='$imageblob', `width`='$width', `height`='$height', `filesize`='$filesize', `insdt`=now() where idno='$s_idno'";
		$ret = dbquery($sql) or die(mysqli_error());
	}

	if ($ret) {
		echo "<script>alert('성공적으로 업로드 되었습니다.'); </script>";
		echo "<script>opener.location.reload(); </script>";
		echo "<script>this.close(); </script>";
	} else {
		print "<script>alert('업로드 실패했습니다.'); </script>";
	}
}
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<title>사진 업로드</title>
<link rel="stylesheet" href="/intranet/css/style.css">
</head>
<body bgcolor="white" leftmargin="20" marginwidth="20" topmargin="20" marginheight="20">
<form enctype="multipart/form-data" method="post" action="photoupload.php">
<input type="hidden" name="mode" value="ins">
파일 선택 <input name="userfile" type="file" accept="image/*"/>
<input type="submit" value="확인" />
<p>
<font color="red">jpeg(jpg) 형식의 사진파일만 업로드 가능합니다.</font><br>
</form>
</body>
</html>
