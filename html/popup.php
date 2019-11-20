<html>
<head>
<title> 팝업 </title>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<link rel="stylesheet" href="/include/text.css" type="text/css">
<SCRIPT language="JavaScript">
<!--
// 쿠키를 만듭니다. 아래 closeWin() 함수에서 호출됩니다
function setCookie( name, value, expiredays )
{
        var todayDate = new Date();
        todayDate.setDate( todayDate.getDate() + expiredays );
        document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
        }
// 체크후 닫기버튼을 눌렀을때 쿠키를 만들고 창을 닫습니다
function closeWin()
{
        if ( document.pop.Notice1.checked )
        setCookie( "NEW1", "done" , 1);  // 오른쪽 숫자는 쿠키를 유지할 기간을 설정합니다
        self.close();
}
// -->
</SCRIPT>
</head>
<body>

<form name="pop">
  <table width="600" border="0" cellspacing="0" cellpadding="0" height="350">
    <tr>
      <td valign="top" width: "100%" height: "100%"><img src="todayimg.png" width=100% height=100%/>
      </td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#000000"><table width="88%" border="0" align="right" cellpadding="0" cellspacing="0" class="font1">
        <tr>
          <td width="87%" height="23" bgcolor="#000000"><input type="checkbox" name="Notice1" value="">
              <span class="text style1"> <font color="#FFFFFF">오늘 하루 이창을 열지않음</font></span></td>
          <td width="13%" height="23"><a href="javascript:history.onclick=closeWin()" style="color:#fff">닫기</a></td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>
