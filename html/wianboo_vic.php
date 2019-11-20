<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    #input-form {
      margin-left: 70%;
      margin-top: 30px;
    }

    #search {
      margin-left: 70%;
      margin-top: 30px;
    }

    .table_name{
    text-align: center;
    margin-top: 50px;
    }

    .people_list {
      margin-top: 100px;
      vertical-align: top;
      margin-left: 50px;
    }

    .people_list {
      margin-right: -4px;
      position: relative;
    }

    .wianboo_vic {
      display: inline-block;
      width: 150px;
      height: 150px;
      margin-right: -4px;
      margin-bottom: -10px;
      position: relative;
      background-size: 100%;
      transition: 0.5s;
      color: rgba(0, 0, 0, 0);
    }

    .wianboo_vic:hover {
      background-size: 110%;
    }

    .wianboo_vic:after {
      position: absolute;
      top: 100%;
      bottom: 0;
      left: 0;
      right: 0;
      word-wrap: break-word;
      overflow: hidden;
      color: #000;
      padding: 0 8px;
      opacity: 0;
      content:attr(data-text);
      transition: 1s;
      font-size: 1.2em;
    }

    .wianboo_vic:hover:after {
      top:0;
      opacity: 1;
      padding: 8px;

    }

    .wianboo_vic2 {
      display: inline-block;
      width: 100px;
      height: 100px;
      margin-right: -4px;
      margin-bottom: -10px;
      position: relative;
      background-size: 100%;
      transition: 0.5s;
      color: rgba(0, 0, 0, 0);
    }

    .wianboo_vic2:hover {
      background-size: 110%;
    }

    .wianboo_vic2:after {
      position: absolute;
      top: 100%;
      bottom: 0;
      left: 0;
      right: 0;
      word-wrap: break-word;
      overflow: hidden;
      color: #000;
      padding: 0 8px;
      opacity: 0;
      content:attr(data-text);
      transition: 1s;
      font-size: 1.2em;
    }

    .wianboo_vic2:hover:after {
      top:0;
      opacity: 1;
      padding: 8px;

    }

    .people_list p {
      text-align: center;
      font-weight: bold;
      font-size: 1.5em;
    }

    .people_list input {
      margin-left: 45%;
      margin-right: 55%;
    }

    #footer {
      position: relative;
      bottom: 0;
      width: 100%;
      height: 150px;

    }

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script type="text/javascript" src="wianboo_vic.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="wianboo_vic.css">

  </head>
  <body>
    <?php include "header.php";?>


    <!--페이지 설명란-->
    <div class="table_name">
      <h1>위안부 피해자</h1>
      <h5>일본군 위안부 '성노예'피해자 할머님들을 기억합니다.</h5>
    </div>

    <div class="history_cont" id="history_cont">

      <div class="people_list" id="people_list">

        <div class="wianboo_vic" style="background-image:url(/wianboo_images/hasooim.png)" width="150" height="150" data-text="하수임"></div>
        <div class="wianboo_vic" style="background-image:url(/wianboo_images/jeongbocksoo.png)" data-text="정복수"></div>
        <div class="wianboo_vic" style="background-image:url(/wianboo_images/kangilchool.png)" data-text="강일출"></div>
        <div class="wianboo_vic" style="background-image:url(/wianboo_images/leeokseon.png)" data-text="이옥선"></div>
        <div class="wianboo_vic" style="background-image:url(/wianboo_images/leeokseon2.png)" data-text="이옥선"></div>
        <div class="wianboo_vic" style="background-image:url(/wianboo_images/parkokseon.jpg)" data-text="박옥선"></div>

        <div class="wianboo_vic" id="wianboo_vic" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
      </br>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <div class="wianboo_vic2" style="background-image:url(/wianboo_images/wianboo_girl_main.jpg)"></div>
        <p>.</p>
        <p>.</p>
        <p>.</p>
        <p>중국, 타이완, 필리핀 등지에서 일본군의 '성노예'로 고통받은 소녀들은 200,000명에 달할 것으로 추정됩니다.</p>
        <input type="button" style="" onclick="currentDiv(1);" value="슬라이드 보기"/>

      </div>
    </div>
    <!--이미지 슬라이드 선언 및 동작-->
    <div class="w3-display-container">
      <img class="mySlides" src="/wianboo_images/sld_show01.jpg" width=100% height=800>
      <img class="mySlides" src="/wianboo_images/sld_show02.jpg" width=100% height=800>
      <img class="mySlides" src="/wianboo_images/sld_show03.jpg" width=100% height=800>
      <img class="mySlides" src="/wianboo_images/sld_show04.jpg" width=100% height=800>
      <img class="mySlides" src="/wianboo_images/sld_show05.jpg" width=100% height=800>
      <img class="mySlides" src="/wianboo_images/sld_show06.jpg" width=100% height=800>
      <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
      <button class="w3-button w3-display-left w3-white" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-display-right w3-white" onclick="plusDivs(1)">&#10095;</button>
        <!-- <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
        <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div> -->
        <!-- <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span> -->
      </div>
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
