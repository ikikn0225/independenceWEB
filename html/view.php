
        <!doctype html>
        <html lang="ko">
          <head>
            <title>기억</title>
            <link rel="stylesheet" href="mainbody.css">
            <style>

            .table_name{
            text-align: center;
            margin-top: 100px;
            }

            .view_table {
            border: 1px solid #444444;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
            }
            .view_title {
            height: 30px;
            text-align: center;
            background-color: #cccccc;
            color: black;
            width: 1000px;
            }
            .view_id {
            text-align: center;
            background-color: #EEEEEE;
            width: 30px;
            }
            .view_id2 {
            background-color: white;
            width: 60px;
            }
            .view_hit {
            background-color: #EEEEEE;
            width: 30px;
            text-align: center;
            }
            .view_hit2 {
            background-color: white;
            width: 60px;
            }
            .view_content {
            padding-top: 20px;
            border-top: 1px solid #444444;
            height: 500px;
            }
            .view_btn {
            width: 700px;
            height: 200px;
            text-align: center;
            margin: auto;
            margin-top: 50px;
            }
            .view_btn1 {
            height: 50px;
            width: 100px;
            font-size: 20px;
            text-align: center;
            background-color: white;
            border: 2px solid black;
            border-radius: 10px;
            }
            .view_comment_input {
            width: 700px;
            height: 500px;
            text-align: center;
            margin: auto;
            }
            .view_text3 {
            font-weight: bold;
            float: left;
            margin-left: 20px;
            }
            .view_com_id {
            width: 100px;
            }
            .view_comment {
            width: 500px;
            }

            .comment-wrapper {

              margin-left: 430px;
              border: 1px solid #e1e1e1;
              height: auto;
              width: 1000px;
            }

            h4.comment-title {
              height: 40px;
              line-height: 37px;
              margin: 5px;
              color: #555;
              border-bottom: 1px solid #e1e1e1;
            }

            .comments-list {
              height: auto;
              font-size: 13px;
              margin: 10px 5px 5px 5px;
              color: #555;
            }

            ul.comments-holder-ul {
              list-style-type: none;
              margin: 0px;
              padding: 0px;
              width: auto;
              height: auto;
              overflow: hidden;
            }

            ul.comments-holder-ul li.comment-holder {
              list-style-type: none;
              background: #fffff5;
              height: auto;
              width: auto;
              margin: 5px 0 10px 0;
              border: 1px solid #e1e1e1;
              overflow: hidden;
              position: relative;
            }

            ul.comments-holder-ul li.comment-holder:hover {
              border: 1px solid #c1c1c1;
            }

            ul.comments-holder-ul li.comment-holder h3.username-field {
              height: 30px;
              line-height: 50px;
              color: #2E5CB8;
              font-size: 18px;
              margin: 0 0 0 10px;
              display: inline;
            }

            ul.comments-holder-ul li.comment-holder h3.username-field:hover {
              color: #000;
            }

            .comment-date {
              display: inline;
              margin-left: 30px;
            }

            ul.comments-holder-ul li.comment-holder .comment-text {
              display: block;
              width: auto;
              font-size: 15px;
              margin: 0 10px 5px 40px;
              word-wrap: normal;
            }

            .comment-body {
              width: auto;
            }

            ul.comments-holder-ul li.comment-holder:hover .comment-buttons-holder {
              display: block;
            }

            .comment-buttons-holder {
              display: none;
              position: absolute;
              top: 0px;
              right: 0px;
              width: 100px;
              height: 25px;
            }

            .comment-buttons-holder ul {

              list-style-type: none;
              width: auto;
              height: auto;
              overflow: hidden;
            }

            .comment-buttons-holder ul input {
              float: right;
              height: 25px;
              width: 25px;
              font-size: 1.2em;
              text-align: center;
              line-height: 25px;
              color: #fff;
              background: #2E5CB8;
              cursor: pointer;
            }

            .comment-buttons-holder ul li:hover {
              color: #444;
              background: #6D8DCD;
            }

            .comment-insert {
              height: 150px;
              width: auto;
              margin: 10px 5px 10px 5px;
              border: 1px solid #e1e1e1;
              position: relative;
            }

            .comment-insert h3.who-says {
              height: 35px;
              line-height: 32px;
              color: #2E5CB8;
              font-size: 14px;
              width: auto;
              margin: 0 10px 0 10px;
              border-bottom: 1px solid #e1e1e1;
            }

            .comment-insert h3.who-says span {
              color: #254A93;
            }

            .comment-insert .comment-insert-container {
              margin: 5px 10px 5px 10px;
              border: 1px solid #e1e1e1;
              width: auto;
              height: auto;
              min-height: 102px;
              position: relative;
            }


            .comment-insert .comment-insert-container:hover {
              border: 1px solid #c1c1c1;
            }

            .comment-insert textarea.comment-insert-text {
              position: absolute;
              top: 0px;
              left: 0px;
              bottom: 0px;
              right: 0px;
              border: none;
              width: 100%;
              height: 100%;
              color: #555;

            }

            .comment-post-btn-wrapper {
              position: absolute;
              top: 5px;
              right: 10px;
              width: 60px;
              height: 25px;
              line-height: 22px;
              background: #6989CC;
              color: #ffffff;
              font-size: 14px;
              text-align: center;
              cursor: pointer;
            }

            .comment-post-btn-wrapper:hover {
              background: #5E7BB8;
              color: #eaeaea;
            }

            .wrap span {
              position: absolute;
              bottom: 5px;
              /* right: 5px; */
            }
            #counter {
              background:rgba(255,0,0,0.5);
              border-radius: 0.5em;
              padding: 0 .5em 0 .5em;
              font-size: 0.75em;
              color: white;
            }


            </style>



        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!--jQuery 라이브러리 선언-->
        <script type="text/JavaScript" src="/jquery.min.js"></script>
        <!--100자 제한 초과 확인 함수-->
        <script>
          function countChar(val) {
            var len = val.value.length;
            if(len >= 100) {
              alert("100자 제한 초과");
            } else {
              $('#counter').text(100 - len);
            }
          };
        </script>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        </head>
            <body>
                <?php


                $userId = $_POST['userId'];


                $connect = mysqli_connect('localhost', 'wsx2793', 'Djaakdi1213!!', 'wsx2792');

                $number = $_GET['number'];

                                $query = "select title, content, image, date, hit, id from border where number =$number";
                                $result = $connect->query($query);
                                $rows = mysqli_fetch_assoc($result);
                                //hit count
                                $hit = "update border set hit=hit+1 where number=$number";
                                $connect->query($hit);
                                $_SESSION['id'] = $userId;

                                //댓글 구하는 쿼리 밑 count
                                $query1 = "SELECT * FROM comments WHERE number='".$number."' ORDER BY indexnum desc";
                                $result11 = $connect->query($query1);
                                $count = mysqli_num_rows($result11);



                                include 'header.php';
                                include 'db.php';

                                if($_SESSION['id'] == "") {
                                ?>              <script>
                                                alert("권한이 없습니다.");
                                                history.back();
                                        </script>


                              <?php   }

                ?>



        <!--페이지 설명란-->
        <div class="table_name">
          <h1>나의 독립 이야기</h1>
          <h5>내가 겪은 독립에 대한 이야기를 나누어주세요.</h5>
        </div>
        <table class="view_table" align=center>
        <tr>
                <td colspan="4" class="view_title"><?php echo $rows['title']?></td>
        </tr>
        <tr>
                <td class="view_id">작성자</td>
                <td class="view_id2"><?php echo $rows['id']?></td>
                <td class="view_hit">조회수</td>
                <td class="view_hit2"><?php echo $rows['hit']?></td>
        </tr>


        <tr>
                <td colspan="4" class="view_content" valign="top" style="font-size: 2.0em; text-align: center;">

                  <img src="<?php echo $rows['image'];?>" width="300"/>
                  <br/>
                  <br/>
                <?php echo $rows['content']?></td>
        </tr>
        </table>

        <!-- MODIFY & DELETE -->
        <div class="view_btn">
                <button class="view_btn1" onclick="location.href='./my_inde_story.php'">목록으로</button>
                <button class="view_btn1" onclick="location.href='./modify.php?number=<?=$number?>&id=<?=$_SESSION['id']?>'">수정</button>
                <button class="view_btn1" onclick="location.href='./delete.php?number=<?=$number?>&id=<?=$_SESSION['id']?>'">삭제</button>
        </div>




        <!--댓글 기능-->
        <div class="comment-wrapper">
          <h4 class="comment-title">댓글 <span><?php echo $count ?></span></h4>
          <?php
          //수정 버튼 클릭 시 댓글 인덱스 값 전송
            $indexnum_comment = $_POST['indexnum_comment'];
            $indexnum = $_POST['indexnum'];

            if(!isset($indexnum_comment)) {
           ?>

           <!--댓글 삭제 버튼 실행-->
          <form action="post_comment.php" method="post">
          <div class="comment-insert">
            <input class="who-says" type="hidden" name="userId" value="<?php echo $_SESSION['id'];?>"/><?php echo $_SESSION['id'];?>
            <input type="hidden" name="number" value="<?=$number?>"/>
            <div class="comment-insert-container">
              <textarea onkeyup="countChar(this)" id="comment-post-text" name="comment-post-text" class="comment-insert-text" maxlength="100"></textarea>
            </div>
            <input type="submit" class="comment-post-btn-wrapper" value="Post"/>
            <span id="counter" >0</span>&nbsp;<span>글자</span>
          </div>
          </form>
          <?php
        } else {
          ?>
          <!--댓글 수정 버튼 생성 후 EDIT버튼 클릭 시 댓글 수정-->
          <form action="edit_comment.php" method="post">
          <div class="comment-insert">
            <input class="who-says" type="hidden" name="userId" value="<?php echo $_SESSION['id'];?>"/><?php echo $_SESSION['id'];?>
            <input type="hidden" name="number" value="<?=$number?>"/>
            <input type="hidden" name="indexnum" value="<?=$indexnum?>"/>
            <div class="comment-insert-container">
              <textarea onkeyup="countChar(this)" id="comment-post-text" name="comment-post-text" class="comment-insert-text" maxlength="100"><?php echo $_POST['indexnum_comment']; ?></textarea>
            </div>
            <input type="submit" class="comment-post-btn-wrapper" value="Edit"/>
            <span id="counter" >0</span>&nbsp;<span>글자</span>
          </div>
          </form>
          <?php

        }
            ?>




          <?php

          $find_comments = "SELECT * FROM comments";
          $result = $connect->query($find_comments);

          //게시물에 맞는 댓글 번호 찾기
          $query = "SELECT * FROM comments WHERE number='".$number."' ORDER BY indexnum desc";
          $result1 = $connect->query($query);



          while($rowsss = mysqli_fetch_assoc($result1)) {

            $userId = $rowsss['userId'];
            $comment = $rowsss['comment'];
            $comment_date = $rowsss['date'];
            $indexnum = $rowsss['indexnum'];

            ?>
            <ul class="comments-holder-ul">
              <li class="comment-holder" id="_1">
                <div class="comment-body">
                  <h3 class="username-field">
                    <?php echo $userId ?>
                  </h3>
                  <div class="comment-date">
                    <?php echo $comment_date ?>
                  </div>
                  <div class="comment-text">
                    <?php echo $comment ?>

                  </div>
                </div>
                <!--세션 값과 댓글 아이디가 같으면 hover시 X 표시가 뜨며, 삭제 가능-->
                <?php if($_SESSION['id'] == $userId) { ?>
                <form action="delete_comment.php" method="post">
                <div class="comment-buttons-holder" id="comment-buttons-holder">
                  <ul>
                    <li>
                      <!--삭제 버튼-->
                      <input type="submit" class="delete-btn" id="delete-btn" value="X"/>
                      <!--아래 3개 input은 post로 값 전달하기위해 선언-->
                      <input class="who-says" type="hidden" name="userId" value="<?php echo $_SESSION['id'];?>"/>
                      <input type="hidden" name="indexnum" value="<?php echo $indexnum?>;"/>
                      <input type="hidden" name="number" value="<?=$number?>"/>
                    </li>
                  </ul>
                </div>
              </form>
            <?php } ?>
                <?php if($_SESSION['id'] == $userId) { ?>
                <form action="edit_comment_in_reply.php" method="post">
                <div class="comment-buttons-holder" id="comment-buttons-holder">
                  <ul>
                    <li>
                      <!--수정 버튼-->
                      <input type="submit" class="edit-btn" id="edit-btn" style="margin-right: 30px; width: 50px;" value="수정"/>
                      <!--아래 3개 input은 post로 값 전달하기위해 선언-->
                      <input class="who-says" type="hidden" name="userId" value="<?php echo $_SESSION['id'];?>"/>
                      <input type="hidden" name="indexnum" value="<?php echo $indexnum?>"/>
                      <input type="hidden" name="comment" value="<?php echo $comment?>"/>
                      <input type="hidden" name="number" value="<?=$number?>"/>
                    </li>
                  </ul>
                </div>
              </form>
            <?php } ?>
            </ul>
            <?php
          }
          ?>


        </div>

            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

            </body>

            <footer id="footer">
                <div class="auto">
                    <span class="footerLogo">
                    <h1>기억</h1>
                    </span>
                    <div class="addrWrap">
                    <a href="privacy_rule.php">개인정보처리방침</a>

                    <address>
                       서울시 동작구 사당동 269-11, TEL:010-7129-5543
                       <p class="copyright">Copyright &copy; 2019 All Right Reserved.</p>
                    </address>
                    </div>
                </div>
            </footer>
        </html>
