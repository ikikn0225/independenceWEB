<!DOCTYPE html>
<html>
<head>
    <title>독립 지도</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
       .table_name{
       text-align: center;
       margin-top: 50px;
       font-size: 1.3em;
       }


       #search {
         margin-left: 50px;
         margin-top: 100px;
       }

       .people_list {
         margin-top: 50px;
         vertical-align: top;
         margin-left: 50px;
         height: 500px;

       }

       .people_list img {
         margin-right: -4px;
         position: relative;
       }

       .inde {
         display: inline-block;
         width: 80px;
         height: 80px;
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

      #map {

        height: 100%;
        width: 63%;
        left: 37%;
        top: -61%;

      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;

        padding: 0;
      }

      #footer {
          height: 150px;

          color: white;
          background-color: black;
          padding: 30px 0;
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
    </script>
</head>
<body>
  <?php include "header.php" ?>

  <!--페이지 설명란-->
  <div class="table_name">
    <h1>독립 지도</h1>
    <h5>독립 운동가분들의 기념관과 역사관을 소개합니다.</h5>
  </div>

  <!--검색-->
  <div class="history_cont" id="history_cont">

    <input id="search" type="text" placeholder="검색..">

    <div class="people_list" id="people_list">

      <div class="inde" id="inde" style="background-image:url(/inde_map_images/anchanghoreal.jpg) " data-text="안창호 기념관">안창호</div>
      <div class="inde" id="inde1" style="background-image:url(/inde_map_images/seodaemoonreal.jpeg)" data-text="서대문형무소 기념관">서대문</div>
      <div class="inde" id="inde2" style="background-image:url(/inde_map_images/doklip.JPG)" data-text="독립 기념관">독립기념관</div>
      <div class="inde" id="inde3" style="background-image:url(/inde_map_images/anseong.JPG)" data-text="3.1 기념관" >3.1기념관</div>
      <div class="inde" id="inde4" style="background-image:url(/inde_map_images/yoonbonggil.jpeg)" data-text="윤봉길 기념관" >윤봉길</div>
      <div class="inde" id="inde5" style="background-image:url(/inde_map_images/jomansick.jpg)" data-text="조만식 기념관" >조만식</div>
</br>
      <div class="inde" id="inde6" style="background-image:url(/inde_map_images/kimkoo.jpeg)" data-text="백범김구 기념관">백범김구</div>
      <div class="inde" id="inde7" style="background-image:url(/inde_map_images/anjoonggeun.jpeg)" data-text="안중근 기념관" >안중근</div>
      <div class="inde" id="inde8" style="background-image:url(/inde_map_images/ukwansoon.jpg)" data-text="유관순 기념관" >유관순</div>
      <div class="inde" id="inde9" style="background-image:url(/inde_map_images/yoonbonggil2.jpeg)" data-text="윤봉길 생가" >윤봉길</div>
      <div class="inde" id="inde10" style="background-image:url(/inde_map_images/leebongchang.jpg)" data-text="이봉창선생 생가" >윤봉길</div>
      <div class="inde" id="inde11" style="background-image:url(/inde_map_images/jicheongcheon.jpeg)" data-text="지청천 생가" >지청천</div>
</br>
      <div class="inde" id="inde12" style="background-image:url(/inde_map_images/ukwansoon2.jpg)" data-text="유관순열사 생가" >유관순</div>
      <div class="inde" id="inde13" style="background-image:url(/inde_map_images/parkyeol.jpg)" data-text="박열열사 생가" >박열</div>
      <div class="inde" id="inde14" style="background-image:url(/inde_map_images/imsijeongboo.jpeg)" data-text="대한임시정부" >대한임시정</div>
      <div class="inde" id="inde15" style="background-image:url(/inde_map_images/yoondongjoomoonhak.jpg)" data-text="윤동주 문학관" >윤동주문학</div>
      <div class="inde" id="inde16" style="background-image:url(/inde_map_images/leenamgyu.jpg)" data-text="이남규 기념관" >이남규기념</div>
      <div class="inde" id="inde17" style="background-image:url(/inde_map_images/hanyongun.jpeg)" data-text="한용운 심우장" >한용운</div>
</br>
      <div class="inde" id="inde18" style="background-image:url(/inde_map_images/leesangjae.png)" data-text="이상재 기념관" >이상재</div>
      <div class="inde" id="inde19" style="background-image:url(/inde_map_images/kookchae.jpg)" data-text="국채보상운동 기념관" >국채보상</div>
      <div class="inde" id="inde20" style="background-image:url(/inde_map_images/jipyungli.jpeg)" data-text="지평리 전투 기념관" >지평리전투</div>
      <div class="inde" id="inde21" style="background-image:url(/inde_map_images/garam.jpeg)" data-text="가람 문학관" >가람문학관</div>
      <div class="inde" id="inde22" style="background-image:url(/inde_map_images/jeonjaengforchild.jpg)" data-text="어린이전쟁박물관" >어린이전쟁</div>
      <div class="inde" id="inde23" style="background-image:url(/inde_map_images/cilgok.jpeg)" data-text="칠곡호국평화기념관" >칠곡호국</div>
</br>
      <div class="inde" id="inde24" style="background-image:url(/inde_map_images/gyungsangbukdo.jpeg)" data-text="경북 독립운동기념관" >경북독립</div>
      <div class="inde" id="inde25" style="background-image:url(/inde_map_images/daehanminkook.jpeg)" data-text="대한민국역사박물관" >대한민국역</div>
      <div class="inde" id="inde26" style="background-image:url(/inde_map_images/geojaedo.JPG)" data-text="거제도포로수용소유적공원" >거제도포로</div>
      <div class="inde" id="inde27" style="background-image:url(/inde_map_images/busankwangbok.jpeg)" data-text="부산광복기념관" >부산광복</div>
      <div class="inde" id="inde28" style="background-image:url(/inde_map_images/shinchaehoginyumkwan.jpg)" data-text="신채호기념관" >신채호</div>
      <div class="inde" id="inde29" style="background-image:url(/inde_map_images/koklipiljae.jpg)" data-text="국립일제강제동원역사관" >국립일제강</div>
    </div>
  </div>


    <div id="map"></div>
    <script>

      function initMap() {
        //Map options
        var options = {
          zoom:11,
          center: {lat:37.549149, lng:126.989519}
        }

        var map = new
        google.maps.Map(document.getElementById('map'), options);


        //Array of Markers
        var markers = [
          {
            coords:{lat:37.524078, lng:127.035520},
            content: '<img src="/inde_map_images/anchanghoreal.jpg"><h3>도산 안창호 기념관</h3></br><h5 style="color: gray">서울 강남구 도산대로 45길 20</h5>'
          },
          {
            coords:{lat:37.574484, lng:126.956092},
            content: '<img src="/inde_map_images/seodaemoonreal.jpeg"><h3>서대문 형무소 기념관</h3></br><h5 style="color: gray">서울 서대문구 통일로 251</h5>'
          },
          {
            coords:{lat:36.783582, lng:127.223201},
            content: '<img src="/inde_map_images/doklip.JPG"><h3>독립 기념관</h3></br><h5 style="color: gray">충남 천안시 동남구 목천읍 독립기념관로1</h5>'
          },
          {
            coords:{lat:37.061852, lng:127.174461},
            content: '<img src="/inde_map_images/anseong.JPG"><h3>안성 3.1운동 기념관</h3></br><h5 style="color: gray">경기도 안성시 원곡면 만세로 868</h5>'
          },
          {
            coords:{lat:37.471302, lng:127.036725},
            content: '<img src="/inde_map_images/yoonbonggil.jpeg"><h3>윤봉길의사 기념관</h3></br><h5 style="color: gray">서울시 서초구 매헌로 99</h5>'
          },
          {
            coords:{lat:37.496397, lng:126.956940},
            content: '<img src="/inde_map_images/jomansick.jpg"><h3>조만식 기념관</h3></br><h5 style="color: gray">서울시 동작구 상도동 511</h5>'
          },
          {
            coords:{lat:37.545067, lng:126.959763},
            content: '<img src="/inde_map_images/kimkoo.jpeg"><h3>백범김구 기념관</h3></br><h5 style="color: gray">서울시 용산구 임정로 26</h5>'
          },
          {
            coords:{lat:37.553893, lng:126.980536},
            content: '<img src="/inde_map_images/anjoonggeun.jpeg"><h3>안중근 의사 기념관</h3></br><h5 style="color: gray">서울시 중구 소월로 91</h5>'
          },
          {
            coords:{lat:37.564996, lng:126.969584},
            content: '<img src="/inde_map_images/ukwansoon.jpg"><h3>유관순 기념관</h3></br><h5 style="color: gray">서울시 중구 통일 4길 30-1</h5>'
          },
          {
            coords:{lat:36.686546, lng:126.651483},
            content: '<img src="/inde_map_images/yoonbonggil2.jpeg"><h3>윤봉길의사 생가</h3></br><h5 style="color: gray">충청남도 예산군 덕산면 덕산온천로 183-5</h5>'
          },
          {
            coords:{lat:37.539694, lng:126.961061},
            content: '<img src="/inde_map_images/leebongchang.jpg"><h3>이봉창 선생 생가</h3></br><h5 style="color: gray">서울시 용산구 백범로 285-5</h5>'
          },
          {
            coords:{lat:37.586369, lng:126.981811},
            content: '<img src="/inde_map_images/jicheongcheon.jpeg"><h3>지청천장군 생가터</h3></br><h5 style="color: gray">서울시 종로구 삼청동 38-1</h5>'
          },
          {
            coords:{lat:36.757411, lng:127.316883},
            content: '<img src="/inde_map_images/ukwansoon2.jpg"><h3>유관순열사 생가터</h3></br><h5 style="color: gray">충청남도 천안시 동남구 병천면 용두리 338-1</h5>'
          },
          {
            coords:{lat:36.681047, lng:128.135781},
            content: '<img src="/inde_map_images/parkyeol.jpg"><h3>박열의사 생가</h3></br><h5 style="color: gray">경상북도 문경시 마성면 오천리 98</h5>'
          },
          {
            coords:{lat:31.217363, lng:121.474654},
            content: '<img src="/inde_map_images/imsijeongboo.jpeg"><h3>대한민국 임시정부</h3></br><h5 style="color: gray">중국 상하이 황푸 마당길 302</h5>'
          },
          {
            coords:{lat:36.681047, lng:128.135781},
            content: '<img src="/inde_map_images/yoondongjoomoonhak.jpg"><h3>윤동주 문학관</h3></br><h5 style="color: gray">서울 특별시 종로구 창의문로 119</h5>'
          },
          {
            coords:{lat:36.668097, lng:126.924966},
              content: '<img src="/inde_map_images/leenamgyu.jpg"><h3>이남규 기념관</h3></br><h5 style="color: gray">충청남도 예산군 대술면 상항방산로 181-8</h5>'
          },
          {
            coords:{lat:37.554049, lng:126.980447},
            content: '<img src="/inde_map_images/hanyongun.jpeg"><h3>한용운 심우장</h3></br><h5 style="color: gray">서울특별시 중구 소월로 91</h5>'
          },



          {
            coords:{lat:36.099939, lng:126.806220},
            content: '<img src="/inde_map_images/leesangjae.png"><h3>이상재 기념관</h3></br><h5 style="color: gray">충남 서천군 한산면 종단길 71</h5>'
          },
          {
            coords:{lat:35.869050, lng:128.601731},
            content: '<img src="/inde_map_images/kookchae.jpg"><h3>국채보상운동 기념관</h3></br><h5 style="color: gray">대구 중구 국채보상로 670</h5>'
          },
          {
            coords:{lat:37.480801, lng:127.638267},
            content: '<img src="/inde_map_images/jipyungli.jpeg"><h3>지평리 전투 기념관</h3></br><h5 style="color: gray">경기 양평군 지평면 지평로 357</h5>'
          },
          {
            coords:{lat:36.035293, lng:127.084419},
            content: '<img src="/inde_map_images/garam.jpeg"><h3>가람 문학관</h3></br><h5 style="color: gray">전북 익산시 여산면 가람1길 76</h5>'
          },
          {
            coords:{lat:37.536236, lng:126.977774},
            content: '<img src="/inde_map_images/jeonjaengforchild.jpg"><h3>어린이 전쟁박물관</h3></br><h5 style="color: gray">서울특별시 용산구 이태원로 29</h5>'
          },
          {
            coords:{lat:36.018701, lng:128.403348},
            content: '<img src="/inde_map_images/chilgok.jpeg"><h3>칠곡호국평화 기념관</h3></br><h5 style="color: gray">경북 칠곡군 석적읍 강변대로 1580</h5>'
          },
          {
            coords:{lat:36.533182, lng:128.857992},
            content: '<img src="/inde_map_images/gyungsangbukdo.jpeg"><h3>경북 독립운동기념관</h3></br><h5 style="color: gray">경북 안동시 임하면 독립기념관길 2</h5>'
          },
          {
            coords:{lat:37.573858, lng:126.978110},
            content: '<img src="/inde_map_images/daehanminkook.jpeg"><h3>대한민국역사박물관</h3></br><h5 style="color: gray">서울특별시 종로구 세종대로 198</h5>'
          },
          {
            coords:{lat:34.876568, lng:128.624471},
            content: '<img src="/inde_map_images/geojaedo.JPG"><h3>거제도포로수용소유적공원</h3></br><h5 style="color: gray">경남 거제시 계룡로 61</h5>'
          },
          {
            coords:{lat:35.111381, lng:129.027506},
            content: '<img src="/inde_map_images/busankwangbok.jpeg"><h3>부산광복기념관</h3></br><h5 style="color: gray">부산광역시 서구 망양로 193번길 167</h5>'
          },
          {
            coords:{lat:36.632566, lng:127.487387},
            content: '<img src="/inde_map_images/shinchaeginyumkwan.jpg"><h3>신채호 기념관</h3></br><h5 style="color: gray">충북 청주시 상당구 남사로 115</h5>'
          },
          {
            coords:{lat:35.125003, lng:129.092346},
            content: '<img src="/inde_map_images/koklipiljae.jpg"><h3>국립일제강제동원역사관</h3></br><h5 style="color: gray">부산광역시 남구 홍곡로 320번길 100</h5>'
          }
        ];

        for(var i = 0; i < markers.length; i++) {
          //Add Marker
          addMarker(markers[i]);
        }

        //Add Marker function
        function addMarker(props) {
          var marker = new google.maps.Marker({
            position:props.coords,
            map:map
          });

            //콘텐츠 존재 여부 체크
            if(props.content) {
            var infoWindow = new google.maps.InfoWindow({
              content: props.content
            });
            marker.addListener('click', function() {
              infoWindow.open(map, marker),
              map.setZoom(13),
              map.setCenter(marker.getPosition());
            });
          }
        }


/////////////////////////////이미지 클릭 시 지도 마커 클릭 이벤트//////////////////////////////////////////
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[0].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[0].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[0].coords);
        });

        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde1'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[1].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[1].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[1].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde2'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[2].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[2].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[2].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde3'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[3].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[3].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[3].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde4'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[4].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[4].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[4].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde5'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[5].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[5].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[5].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde6'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[6].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[6].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[6].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde7'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[7].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[7].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[7].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde8'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[8].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[8].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[8].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde9'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[9].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[9].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[9].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde10'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[10].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[10].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[10].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde11'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[11].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[11].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[11].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde12'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[12].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[12].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[12].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde13'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[13].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[13].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[13].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde14'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[14].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[14].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[14].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde15'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[15].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[15].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[15].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde16'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[16].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[16].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[16].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde17'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[17].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[17].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[17].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde18'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[18].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[18].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[18].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde19'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[19].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[19].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[19].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde20'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[20].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[20].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[20].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde21'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[21].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[21].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[21].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde22'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[22].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[22].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[22].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde23'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[23].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[23].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[23].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde24'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[24].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[24].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[24].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde25'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[25].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[25].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[25].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde26'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[26].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[26].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[26].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde27'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[27].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[27].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[27].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde28'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[28].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[28].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[28].coords);
        });
        //도산 안창호
        google.maps.event.addDomListener(document.getElementById('inde29'), 'click', function() {
          var marker = new google.maps.Marker({
            position:markers[29].coords,
            map:map
          });
          var infoWindow = new google.maps.InfoWindow({
            content:markers[29].content
          });
          infoWindow.open(map, marker),
          map.setZoom(13),
          map.setCenter(markers[29].coords);
        });

        }


    </script>




    <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYrTS0zaYuuit4GLdNoffMciZTPKmFTPk&callback=initMap">
</script>
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
</html>
