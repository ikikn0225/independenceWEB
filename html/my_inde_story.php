
<!doctype html>
<script>
</script>
<html lang="ko">
  <head>
    <title>기억</title>
    <link rel="stylesheet" href="mainbody.css">
    <style>
    .table_name{
    text-align: center;
    margin-top: 100px;
    margin-bottom: 50px;
    }

    .table_name h1 {
      /* margin-left: 600px; */
    }

    table {
      border-top: 1px solid #444444;
      border-collapse: collapse;
      margin-left: auto;
      margin-right: auto;
    }

    tr {
      border-bottom: 1px solid #444444;
      padding: 10px;
    }

    td {
      border-bottom: 1px solid #efefef;
      padding: 10px;
    }

    table .even {
      background: #efefef;
    }

    .text {
      text-align: center;
    }

    .text:hover {
      text-decoration: underline;
    }

    a:link {
      color: #57A0EE;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    .write_btn {
      width: 80px;
      height: 40px;
      display: block;
      margin-left: 70%;
      margin-top: 30px;
    }

    .pagination {
      margin-top: 10px;
    }


    .pagination li {
      display: inline-block;
      margin: 0 5px;
    }
    .pagination li a {
      display: inline-block;
      padding: 8px 12px;
      border: 1px solid #eee;
    }
    .pagination li a.active {
      font-weight: bold;
      background: #f5f5f5;
    }

    #footer {
      /* position: absolute; */
      bottom: 0;
      width: 100%;
      height: 150px;

    }

    </style>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
    <body>
        <?php include 'header.php';
        $connect = mysqli_connect('localhost', 'wsx2793', 'Djaakdi1213!!', 'wsx2792') or die ("connect fail");
                $query ="select * from border order by number desc";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);


                ?>




<!--페이지 설명란-->
<div class="table_name">
  <h1>나의 독립 이야기</h1>
  <h5>내가 겪은 독립에 대한 이야기를 나누어주세요.</h5>
</div>



<table align = center>
        <thead align = "center">
        <tr>
        <td width = "50" align="center">번호</td>
        <td width = "500" align = "center">제목</td>
        <td width = "100" align = "center">작성자</td>
        <td width = "200" align = "center">날짜</td>
        <td width = "50" align = "center">조회수</td>
        </tr>
        </thead>

        <tbody>

          <!--페이징 내부 연동 부분-->
        <?php
          if(isset($_GET['page'])) {
            $page = $_GET['page'];
          } else {
            $page = 1;
          }

          if($page == '' || $page == 1) {
            $page1 = 0;
          } else {
            $page1 = ($page*5)-5;
          }

          $sql = 'SELECT * FROM border ORDER BY number desc LIMIT '.$page1.', 5';
          $data = $connect->query($sql);

                while($row = $data->fetch_assoc()) { //DB에 저장된 데이터 수 (열 기준)
                        if($total%2==0){
        ?>                      <tr class = "even">
                        <?php   }
                        else{
        ?>                      <tr>
        <?php }

       if($page >= 2){$amount = $total - $page *5 + 5; }
       else{$amount = $total;}




         ?>


                <td width = "50" align = "center"><?php echo $amount?></td>
                <td width = "500" align = "center">

                  <!--폼과 a태그를 활용해 view.php로 세션 값을 전송함-->
                  <form id="form1" action="view.php?number=<?php echo $row['number']?>" method="post">
                    <a href = "javascript:;" onclick="parentNode.submit();" ><?php echo $row['title']?>
                <input type="hidden" name="userId" value="<?php echo $_SESSION['id'] ?>"/>
               </form>
               </td>
              <!--폼 종료-->
                  <td width = "100" align = "center"><?php echo $row['id']?></td>
                <td width = "200" align = "center"><?php echo $row['date']?></td>
                <td width = "50" align = "center"><?php echo $row['hit']?></td>
                </tr>
        <?php
                $total = $total - 1;


                }

                //페이징 내부 연동 부분 끝

        ?>
        </tbody>
        </table>

        <div class="write_btn">
          <button id="write_btn" style="cursor: hand" onClick="location.href='write.php'">글쓰기</button>
        </div>







        <!--페이징 실제 구동 부분-->
        <?php
        $sql = 'SELECT * FROM border';
        $data = $connect->query($sql);
        $list = 5;
        $block_num = 5;
        $block = ceil($page/$block_num);//현재 리스트의 블럭
        $block_start = (($block - 1) * $block_num) + 1;
        $block_end = $block_start + $block_num - 1;
        $total_page = ceil($total/$list);

        $records = $data->num_rows; //전체 게시물 수
        $records_pages = $records/5;
        $records_pages = ceil($records_pages);//==전체 페이지 수

        $total_block=ceil($total_page/$block_num); //전체 페이지 수/블럭 당 페이지 수 == 전체 블럭 수
        $prev = $page-1;
        $next = $page+1;

        if($block_end > $total_page) {
        $block_end = $total_page+1;}


        echo '<ul class="pagination" style="position: absolute; left: 35%; margin-bottom: 50px; margin-top: 10px;">';
        if($page <= 1) {
        }else {
        echo '<li><a href="?page=1">First</a></li>';
        }
        if($block <= 1) {
        }else {
        echo '<li><a href="?page='.$prev.'">Prev</a></li>';
        }

        for($j = $block_start; $j <= $block_end; $j++) {
          if($page == $j) {
            echo '<li><a href="?page='.$j.'">'.$j.'</a></li>';
          }else {
            $active = $j == $page ? 'class="active"' : '';
            echo '<li><a href="?page='.$j.'" '.$active.'>'.$j.'</a></li>';
          }
        }

        if($block >= $total_block) {

        } else {
          echo '<li><a href="?page='.$next.'">Next</a></li>';
        }

        if($page <= $records_pages && $records_pages >= 5) {
          echo '<li><a href="?page='.$records_pages.'">Last</a></li>';
        }
        echo '</ul>';
         ?>
         <!--페이징 실제 구동 부분 끝-->

<div id="search_box" style="margin-left: 35%; margin-top:100px; margin-bottom: 100px;">
    <form action="<?=$PHP_SELF?>" method="get">
      <select name="catgo">
        <option value="title_search">제목</option>
        <option value="name_search">글쓴이</option>
      </select>
      <input type="text" name="search" size="40" required="required" /> <button>검색</button>
    </form>
    </div>





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
