<!DOCTYPE html>
<html lang="ko">

<?php
    $id = $_POST["id"];
?>
  <head>
    <title>Title</title>
    <link rel="stylesheet" href="style.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    </head>
  <body>
    <div class="header">
        <div class="inner_header">

<!--if user exists, it shows 'nickname', 'logout'. if not, shows 'login'-->
<!-- 로그인 확인-->
<?php
  session_start();
  if(empty($_SESSION['id'])) { ?>
          <!--no exist-->
                <div class="login">
                  <a id="uid" class="head_id" style="cursor: pointer" name="login" onClick="gotoLogin()">로그인</a>
                  <a id="uid" class="head_id" style="cursor: pointer" name="login" onClick="gotoRegister()">회원가입</a>
                  <script>
                      function gotoLogin() {
                        location.href="loginform.php";
                      }
                      function gotoRegister() {
                        location.href="register.php";
                      }
                </script>
                </div>
              <?php }else {
                 ?>
                 <div class="login">
                   <a id="uid" name="head_id" style="cursor: pointer" onClick="gotoLogin()">로그아웃</a>
                   <a id="uid" name="head_id" style="cursor: pointer" href="mypage.php" onClick="Location:mainbody.php">마이페이지</a>

                   <script>
                       function gotoLogin() {
                         alert('로그아웃 되었습니다.');
                         location.href="logout.php";
                       }
                 </script>
                 </div>
                 <?php
                  }
                  ?>
<!--헤더 "기억" 클릭 시-->
            <div class="logo_container">
                <h1 style="cursor: pointer" onClick="gotoMain()">기억</h1>
                <script>
                      function gotoMain() {
                        location.href="mainbody.php";
                      }
                </script>
            </div>

            <ul class="navigation">
                <a style="cursor: pointer" onclick="gotoInde()"><li>독립운동가</li></a>
                <a style="cursor: pointer" onclick="gotowianboo_vic()"><li>위안부 피해자</li></a>
                <a style="cursor: pointer" onclick="gotomap()"><li>독립 지도</li></a>
                <a style="cursor: pointer" onclick="gotoMyIndeStory()"><li>나의 독립 이야기</li></a>
                <a style="cursor: pointer" onclick="gotoIndeFind()"><li>독립유공자 후손 찾기</li></a>
                <script>
                function gotoMyIndeStory() {
                  location.href="my_inde_story.php";
                }
                function gotoInde() {
                  location.href="inde.php";
                }
                function gotowianboo_vic() {
                  location.href="wianboo_vic.php";
                }
                function gotomap() {
                  location.href="inde_map.php";
                }
                function gotoIndeFind() {
                  location.href="inde_find.php";
                }
                </script>
            </ul>

        </div>
    </div>
    </body>
</html>
