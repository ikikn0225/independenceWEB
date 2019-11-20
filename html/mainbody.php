<!doctype html>
<script>
function notice_getCookie( name ) {
    var nameOfCookie = name + "=";
    var x = 0;
    while ( x <= document.cookie.length ) {
        var y = (x+nameOfCookie.length);
        if ( document.cookie.substring( x, y ) == nameOfCookie ) {
            if ( (endOfCookie=document.cookie.indexOf( ";", y )) == -1 )
                endOfCookie = document.cookie.length;
            return unescape( document.cookie.substring( y, endOfCookie ) );
        }
        x = document.cookie.indexOf( " ", x ) + 1;
        if ( x == 0 )  break;
    }
    return "";
}

function open_pop() {
if ( notice_getCookie( "NEW1" ) != "done" ) {
window.open('popup.php','notice1','width=800,height=415, left=1,top=1');
}

}
</script>
<html lang="ko">
  <head>
    <title>기억</title>
    <link rel="stylesheet" href="mainbody.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
    <body onload="javascript:open_pop()">
        <?php include 'header.php';?>



        <!--이미지 슬라이드 선언 및 동작-->
<div class="w3-display-container">
  <img class="mySlides" src="100image1.jpg" width=100% height=800>
  <img class="mySlides" src="100image2.jpg" width=100% height=800>
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
  <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
    <!-- <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div> -->
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
  </div>
</div>



<!--공지사항 및 나의 독립 이야기 간단보기 창 만들기-->
<div class="container">
      <div class="row">

        <?php
        include 'db.php';

        $query_main = 'SELECT * FROM border ORDER BY number desc LIMIT 5';
        $data = $db->query($query_main);

          $query_main_image = 'SELECT * FROM border ORDER BY number desc LIMIT 1';
          $data_image = $db->query($query_main_image);
          $row_image = $data_image->fetch_assoc()


         ?>


      <div class="col-md-6">
            <!--왼쪽은 최신 정보, 오른쪽은 공지사항 및 나의 독립이야기 탭메뉴-->
            <div class="jb-wrap" style=" height: 500px; border: 0px;">
			<div class="jb-image"><img src="100image1.jpg" style="position:absolute; left: -100px;" alt=""></div>
      <div class="jb-image"><img src=<?php echo $row_image['image']; ?> style="position:absolute; width:100%; height:300px; left: -100px;" alt=""></div>
			<div class="jb-text" style="position:absolute; margin-top:255px; left: -100px; width:570px;">
				<p><?php echo $row_image['title']; ?></p>
			</div>
		</div>
        </div>

        <div class="col-md-6">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#qwe">나의 독립 이야기</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade show active" id="qwe">
                <ul>
                  <?php while($rowsss = $data->fetch_assoc()) { ?>
                    <li>
                    <form id="form1" action="view.php?number=<?php echo $rowsss['number']?>" method="post">
                      <a href="javascript:;" onclick="parentNode.submit();"><?php echo $rowsss['title'] ?></a><span><?php echo $rowsss['date'] ?></span>

                  <input type="hidden" name="userId" value="<?php echo $_SESSION['id'] ?>"/>
                 </form>
               </li>

                  <?php } ?>
                </ul>
              </div>
            </div>
        </div>
      </div>
    </div>


<!--슬라이드 재생 JS 연결-->
    <script type="text/javascript" src="mainbody_image_slide.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
