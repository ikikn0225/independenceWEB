
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
                width: 900px;
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
<script type="text/javascript" src="smarteditor2-2.8.2/js/HuskyEZCreator.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<body>
  <?php include "header.php";
        include "img_script.php";
              session_start();
              $URL = "./my_inde_story.php";
              if(!isset($_SESSION['id'])) {
      ?>

              <script>
                      alert("로그인이 필요합니다");
                      location.replace("<?php echo $URL?>");
              </script>
      <?php
              }
      ?>

      <form method = "post" action = "write_action.php" enctype="multipart/form-data">
      <table  style="padding-top:50px" align = center width=900 border=0 cellpadding=2 >
              <tr>
              <td height=20 align= center bgcolor=#ccc><font color=black> 글쓰기</font></td>
              </tr>
              <tr>
              <td bgcolor=white>
              <table class = "table2">
                      <tr>
                      <td>작성자</td>
                      <td><input type="hidden" name="name" value="<?php echo $_SESSION['id']?>"><?php echo $_SESSION['id']?></td>
                      </tr>

                      <tr>
                      <td>제목</td>
                      <td><input type = text name = title size=60></td>
                      </tr>


                      <tr>
                      <td>내용</td>
                      <td>
                      <p>사진 업로드</p>
                      <div style="position: relative margin-bottom: 10px;" >
                        <input type="file" name="profileImage" id="profileImage" class="form-control" style="margin-bottom: 10px;">
                        <img src="" id="profileDisplay" alt="       사진             미리보기" style="display: none;"/>
                      </div>


                      <textarea name = ir1 id="ir1" style="width:700px; height:300px;"></textarea>
                        <!-- <script type="text/javascript">
                          var oEditors = [];
                          nhn.husky.EZCreator.createInIFrame({
                            oAppRef: oEditors,
                            elPlaceHolder: "ir1",
                            sSkinURI: "smarteditor2-2.8.2/SmartEditor2Skin.html",
                            fCreator: "createSEditor2"
                          });
                          function submitContents(elClickedObj) {
                            oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);

                            try {
                              elClickedObj.form.submit();
                            }catch(e){}
                          }
                        </script> -->

                      </td>
                      </tr>

                      </table>
                        <center>

                      <input type="submit" value="작성완료"/>

                      </center>
              </td>
              </tr>
      </table>
      </form>


</body>
</html>
