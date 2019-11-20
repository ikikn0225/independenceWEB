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
      height: 1500px;
    }

    .people_list img {
      margin-right: -4px;
      position: relative;
    }

    .inde {
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

    .inde:hover {
      background-size: 110%;
    }

    .inde:after {
      position: absolute;
      top: 100%;
      bottom: 0;
      left: 0;
      right: 0;
      word-wrap: break-word;
      overflow: hidden;
      color: #fff;
      padding: 0 8px;
      opacity: 0;
      content:attr(data-text);
      transition: 1s;
      font-size: 1.2em;
    }

    .inde:hover:after {
      top:0;
      opacity: 1;
      padding: 8px;

    }

    #footer {
      position: relative;
      bottom: 0;
      width: 100%;
      height: 150px;

    }

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    //검색 기능
    $(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#people_list div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

  //사진 클릭 시 네이버 검색 결과 팝업 창 띄우기
  function open_inde_popup(theURL, winName, features) {
    window.open(theURL, winName, features);
  }
    </script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="mainbody.css">
  </head>
  <body>
    <?php include "header.php";?>

    <!--페이지 설명란-->
    <div class="table_name">
      <h1>독립 운동가</h1>
      <h5>우리나라를 위해 한 몸 바쳐 희생하신 독립 운동가분들을 소개합니다.</h5>
    </div>

    <div class="history_cont" id="history_cont">

      <input id="search" type="text" placeholder="검색..">

      <div class="people_list" id="people_list">
        <div class="inde" style="background-image:url(/images/anheuje.jpg)" data-text="안희제" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3572496&cid=59011&categoryId=59011', '', 'width=800, height=350')">안희제</div>
        <div class="inde" style="background-image:url(/images/anjaehong.jpg)" data-text="안재홍" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=579940&cid=46626&categoryId=46626', '', 'width=800, height=350')">안재홍</div>
        <div class="inde" style="background-image:url(/images/banghanmin.jpg)" data-text="방한민" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=1340359&cid=40942&categoryId=37404', '', 'width=800, height=350')">방한민</div>
        <div class="inde" style="background-image:url(/images/bangsoonheu.jpg)" data-text="방순희" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3578158&cid=59011&categoryId=59011', '', 'width=800, height=350')">방순희</div>
        <div class="inde" style="background-image:url(/images/chaheusick.jpg)" data-text="차희식" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3571439&cid=59011&categoryId=59011', '', 'width=800, height=350')">차희식</div>
        <div class="inde" style="background-image:url(/images/eoyunheu.jpg)" data-text="어윤희" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3571799&cid=59011&categoryId=59011', '', 'width=800, height=350')">어윤희</div>
        <div class="inde" style="background-image:url(/images/hanyongun.jpg)" data-text="한용운" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3571357&cid=59011&categoryId=59011', '', 'width=800, height=350')">한용운</div>
        <div class="inde" style="background-image:url(/images/hongwonsick.jpg)" data-text="홍원식" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3577189&cid=59011&categoryId=59011', '', 'width=800, height=350')">홍원식</div>
        <div class="inde" style="background-image:url(/images/jangdobin.jpg)" data-text="장도빈" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=538199&cid=46668&categoryId=46668', '', 'width=800, height=350')">장도빈</div>
        <div class="inde" style="background-image:url(/images/jeonginbo.jpg)" data-text="정인보" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3575431&cid=59011&categoryId=59011', '', 'width=800, height=350')">정인보</div>
        <div class="inde" style="background-image:url(/images/jomaria.jpg)" data-text="조마리아" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3596622&cid=59011&categoryId=59011', '', 'width=800, height=350')">조마리아</div>
        <div class="inde" style="background-image:url(/images/kangeugyu.jpg)" data-text="강우규" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3574911&cid=59011&categoryId=59011', '', 'width=800, height=350')">강우규</div>
        <div class="inde" style="background-image:url(/images/kimbeoplin.jpg)" data-text="김법린" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=552195&cid=46648&categoryId=46648', '', 'width=800, height=350')">김법린</div>
        <div class="inde" style="background-image:url(/images/kimbyoungjo.jpg)" data-text="김병조" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=552215&cid=46623&categoryId=46623', '', 'width=800, height=350')">김병조</div>
        <div class="inde" style="background-image:url(/images/kimdongsam.jpg)" data-text="김동삼" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3573995&cid=59011&categoryId=59011', '', 'width=800, height=350')">김동삼</div>
        <div class="inde" style="background-image:url(/images/kimjoonggeon.jpg)" data-text="김중건" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3573683&cid=59011&categoryId=59011', '', 'width=800, height=350')">김중건</div>
        <div class="inde" style="background-image:url(/images/kimseongsook.jpg)" data-text="김성숙" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=552462&cid=46626&categoryId=46626', '', 'width=800, height=350')">김성숙</div>
        <div class="inde" style="background-image:url(/images/kwandongjin.jpg)" data-text="권동진" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=550099&cid=46623&categoryId=46623', '', 'width=800, height=350')">권동진</div>
        <div class="inde" style="background-image:url(/images/leeheula.jpg)" data-text="이애라" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3569961&cid=59011&categoryId=59011', '', 'width=800, height=350')">이애라</div>
        <div class="inde" style="background-image:url(/images/leeheuseung.jpg)" data-text="이희승" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3577549&cid=59011&categoryId=59011', '', 'width=800, height=350')">이희승</div>
        <div class="inde" style="background-image:url(/images/leepeeljoo.jpg)" data-text="이필주" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3571601&cid=59011&categoryId=59011', '', 'width=800, height=350')">이필주</div>
        <div class="inde" style="background-image:url(/images/leetaejoon.jpg)" data-text="이태준" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3581017&cid=59011&categoryId=59011', '', 'width=800, height=350')">이태준</div>
        <div class="inde" style="background-image:url(/images/moonilpyung.jpg)" data-text="문일평" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=554764&cid=46623&categoryId=46623', '', 'width=800, height=350')">문일평</div>
        <div class="inde" style="background-image:url(/images/parkchanik.jpg)" data-text="박찬익" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3572262&cid=59011&categoryId=59011', '', 'width=800, height=350')">박찬익</div>
        <div class="inde" style="background-image:url(/images/parkdonghwan.jpg)" data-text="박동환" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=555672&cid=46623&categoryId=46623', '', 'width=800, height=350')">박동환</div>
        <div class="inde" style="background-image:url(/images/parkseungjoon.jpg)" data-text="박준승" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=556190&cid=46623&categoryId=46623', '', 'width=800, height=350')">박준승</div>
        <div class="inde" style="background-image:url(/images/ryuinsick.jpg)" data-text="류인식" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3579580&cid=59011&categoryId=59011', '', 'width=800, height=350')">류인식</div>
        <div class="inde" style="background-image:url(/images/scofield.jpg)" data-text="스코필드" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3580352&cid=59011&categoryId=59011', '', 'width=800, height=350')">스코필드</div>
        <div class="inde" style="background-image:url(/images/seojaepeel.jpg)" data-text="서재필" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3572899&cid=59011&categoryId=59011', '', 'width=800, height=350')">서재필</div>
        <div class="inde" style="background-image:url(/images/shimhoon.jpg)" data-text="심훈" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=579070&cid=46645&categoryId=46645', '', 'width=800, height=350')">심훈</div>
        <div class="inde" style="background-image:url(/images/shinhyungoo.jpg)" data-text="신현구" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3571090&cid=59011&categoryId=59011', '', 'width=800, height=350')">신현구</div>
        <div class="inde" style="background-image:url(/images/shinsook.jpg)" data-text="신숙" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3574748&cid=59011&categoryId=59011', '', 'width=800, height=350')">신숙</div>
        <div class="inde" style="background-image:url(/images/ugeun.jpg)" data-text="유근" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3575618&cid=59011&categoryId=59011', '', 'width=800, height=350')">유근</div>
        <div class="inde" style="background-image:url(/images/ukwansoon.jpg)" data-text="유관순" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=539103&cid=46623&categoryId=46623', '', 'width=800, height=350')">유관순</div>
        <div class="inde" style="background-image:url(/images/uyeodae.jpg)" data-text="유여대" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=539468&cid=46623&categoryId=46623', '', 'width=800, height=350')">유여대</div>
        <div class="inde" style="background-image:url(/images/yanggeonbaek.jpg)" data-text="양전백" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=580593&cid=46623&categoryId=46623', '', 'width=800, height=350')">양전백</div>
        <div class="inde" style="background-image:url(/images/yanggeunhwan.jpg)" data-text="양근환" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=580343&cid=46623&categoryId=46623', '', 'width=800, height=350')">양근환</div>
        <div class="inde" style="background-image:url(/images/yoondongjoo.jpg)" data-text="윤동주" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=1133201&cid=40942&categoryId=33384', '', 'width=800, height=350')">윤동주</div>

        <div class="inde" style="background-image:url(/inde_image2/baekyongseong.jpg)" data-text="백용성" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3571581&cid=59011&categoryId=59011', '', 'width=800, height=350')">백용성</div>
        <div class="inde" style="background-image:url(/inde_image2/bangjeonghwan.jpg)" data-text="방정환" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3582539&cid=59011&categoryId=59011', '', 'width=800, height=350')">방정환</div>
        <div class="inde" style="background-image:url(/inde_image2/choiyangok.jpg)" data-text="최양옥" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=529208&cid=46623&categoryId=46623', '', 'width=800, height=350')">최양옥</div>
        <div class="inde" style="background-image:url(/inde_image2/gyebongu.jpg)" data-text="계봉우" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=567078&cid=46623&categoryId=46623', '', 'width=800, height=350')">계봉우</div>
        <div class="inde" style="background-image:url(/inde_image2/hangjing.jpg)" data-text="한징" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=526539&cid=46623&categoryId=46623', '', 'width=800, height=350')">한징</div>
        <div class="inde" style="background-image:url(/inde_image2/heolbert.jpg)" data-text="헐버트" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=1162751&cid=40942&categoryId=40526', '', 'width=800, height=350')">헐버트</div>
        <div class="inde" style="background-image:url(/inde_image2/hwangbyunggil.jpg)" data-text="황병길" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=570992&cid=46623&categoryId=46623', '', 'width=800, height=350')">황병길</div>
        <div class="inde" style="background-image:url(/inde_image2/jangdeokjoon.jpg)" data-text="장덕준" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3587875&cid=59011&categoryId=59011', '', 'width=800, height=350')">장덕준</div>
        <div class="inde" style="background-image:url(/inde_image2/jeongjeonghwa.jpg)" data-text="정정화" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3569904&cid=59011&categoryId=59011', '', 'width=800, height=350')">정정화</div>
        <div class="inde" style="background-image:url(/inde_image2/jeongtaejin.jpg)" data-text="정태진" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3570526&cid=59011&categoryId=59011', '', 'width=800, height=350')">정태진</div>
        <div class="inde" style="background-image:url(/inde_image2/jomansik.jpg)" data-text="조만식" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3572612&cid=59011&categoryId=59011', '', 'width=800, height=350')">조만식</div>
        <div class="inde" style="background-image:url(/inde_image2/jookicheol.jpg)" data-text="주기철" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3575578&cid=59011&categoryId=59011', '', 'width=800, height=350')">주기철</div>
        <div class="inde" style="background-image:url(/inde_image2/joosikyung.jpg)" data-text="주시경" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3570365&cid=59011&categoryId=59011', '', 'width=800, height=350')">주시경</div>
        <div class="inde" style="background-image:url(/inde_image2/jorge_louis_show.jpg)" data-text="조지 루이스쇼" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3579382&cid=59011&categoryId=59011', '', 'width=800, height=350')">조지 루이스쇼</div>
        <div class="inde" style="background-image:url(/inde_image2/kwondeucksoo.jpg)" data-text="권득수" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=550107&cid=46623&categoryId=46623', '', 'width=800, height=350')">권득수</div>
        <div class="inde" style="background-image:url(/inde_image2/leedaeue.jpg)" data-text="이대위" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=5644719&cid=59011&categoryId=59011', '', 'width=800, height=350')">이대위</div>
        <div class="inde" style="background-image:url(/inde_image2/leekwangmin.jpg)" data-text="이광민" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3569665&cid=59011&categoryId=59011', '', 'width=800, height=350')">이광민</div>
        <div class="inde" style="background-image:url(/inde_image2/leeshinae.jpg)" data-text="이신애" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=542615&cid=46623&categoryId=46623', '', 'width=800, height=350')">이신애</div>
        <div class="inde" style="background-image:url(/inde_image2/leeyunjae.jpg)" data-text="이윤재" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=535535&cid=46674&categoryId=46674', '', 'width=800, height=350')">이윤재</div>
        <div class="inde" style="background-image:url(/inde_image2/oeuseon.jpg)" data-text="오의선" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=1218194&cid=40942&categoryId=33384', '', 'width=800, height=350')">오의선</div>
        <div class="inde" style="background-image:url(/inde_image2/omyunjik.jpg)" data-text="오면직" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3578898&cid=59011&categoryId=59011', '', 'width=800, height=350')">오면직</div>
        <div class="inde" style="background-image:url(/inde_image2/osaechang.jpg)" data-text="오세창" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=568260&cid=46658&categoryId=46658', '', 'width=800, height=350')">오세창</div>
        <div class="inde" style="background-image:url(/inde_image2/parkeunsick.jpg)" data-text="박은식" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=556030&cid=46623&categoryId=46623', '', 'width=800, height=350')">박은식</div>
        <div class="inde" style="background-image:url(/inde_image2/shinhongsick.jpg)" data-text="신홍식" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=560757&cid=46623&categoryId=46623', '', 'width=800, height=350')">신홍식</div>
        <div class="inde" style="background-image:url(/inde_image2/shinseokgoo.jpg)" data-text="신석구" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3571522&cid=59011&categoryId=59011', '', 'width=800, height=350')">신석구</div>
        <div class="inde" style="background-image:url(/inde_image2/sonbyungheu.jpg)" data-text="송병희" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=558051&cid=46623&categoryId=46623', '', 'width=800, height=350')">송병희</div>
        <div class="inde" style="background-image:url(/inde_image2/songjongik.jpg)" data-text="송종익" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3570844&cid=59011&categoryId=59011', '', 'width=800, height=350')">송종익</div>
        <div class="inde" style="background-image:url(/inde_image2/yanghanmook.jpg)" data-text="양한묵" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3575658&cid=59011&categoryId=59011', '', 'width=800, height=350')">양한묵</div>
        <div class="inde" style="background-image:url(/inde_image2/yeojoon.jpg)" data-text="여준" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=3577378&cid=59011&categoryId=59011', '', 'width=800, height=350')">여준</div>
        <div class="inde" style="background-image:url(/inde_image2/yeunmidang.jpg)" data-text="연미당" onclick="open_inde_popup('https://terms.naver.com/entry.nhn?docId=5661659&cid=59011&categoryId=59011', '', 'width=800, height=350')">연미당</div>

      </div>
    </div>

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
