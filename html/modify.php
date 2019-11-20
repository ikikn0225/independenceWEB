<!DOCTYPE>

<html>
<head>
        <meta charset = 'utf-8'>
</head>
<style>
        table {
          margin-left: auto;
          margin-right: auto;
        }

        table.table2{
                border-collapse: separate;
                border-spacing: 1px;
                text-align: left;
                line-height: 1.5;
                border-top: 1px solid #ccc;
                margin : 20px 10px;
        }
        table.table2 tr {
                 width: 50px;
                 padding: 10px;
                font-weight: bold;
                vertical-align: top;
                border-bottom: 1px solid #ccc;
        }
        table.table2 td {
                 width: 100px;
                 padding: 10px;
                 vertical-align: top;
                 border-bottom: 1px solid #ccc;
        }

        #profileDisplay {
          display: block;
          width: 100px;
          height: 100px;
          margin-bottom: 10px;
        }

</style>
<body>
  <?php include "header.php";
        include "img_script.php";
  ?>


<?php    $connect = mysqli_connect("localhost", "wsx2793", "Djaakdi1213!!", "wsx2792") or die("connect fail");
                $id = $_GET[id];
                $number = $_GET[number];
                $query = "select title, content, date, id, image from border where number=$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);

                $title = $rows['title'];
                $content = $rows['content'];
                $usrid = $rows['id'];
                $image = $rows['image'];

                session_start();


                $URL = "./my_inde_story.php";

                if(!isset($_SESSION['id'])) {
        ?>              <script>
                                alert("권한이 없습니다.");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   }
                else if($_SESSION['id']==$usrid) {
        ?>
        <form method = "post" action = "modify_action.php" enctype="multipart/form-data">
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=20 align= center bgcolor=#ccc><font color=black> 글수정</font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                <tr>
                        <td>작성자</td>
                        <td><input type="hidden" name="id" value="<?=$_SESSION['id']?>"><?=$_SESSION['id']?></td>
                        </tr>

                        <tr>
                        <td>제목</td>
                        <td><input type = text name = title size=60 value="<?=$title?>"></td>
                        </tr>

                        <tr>
                        <td>내용</td>
                        <td>
                          <p>사진 업로드</p>
                          <div style="position: relative margin-bottom: 10px;" >
                            <input type="file" name="profileImage" id="profileImage" class="form-control" style="margin-bottom: 10px;">
                              <img src="<?php echo $image ?>" id="profileDisplay" alt="       사진             미리보기"/>
                              <input type="hidden" name="pre_image"  value="<?php echo $image ?>"/>
                            </div>
                          </div>
                          <textarea name = content cols=85 rows=15><?=$content?></textarea></td>
                        </tr>

                        </table>

                        <center>
                        <input type="hidden" name="number" value="<?=$number?>">
                        <input type = "submit" value="작성">
                        </center>
                </td>
                </tr>
        </table>
        <?php   }
                else {
        ?>              <script>
                                alert("권한이 없습니다.");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   }
        ?>


        </body>
        </html>
