<?php /* Template_ 2.2.3 2016/07/28 14:34:20 /home/hosting_users/hospi/www/application/views/member/join_form.htm */?>
<style>
.,.{ height:40px;}
.{color:#777;}
.tit{ background:#f5f5f5;border-bottom:1px solid #eee;padding-left:40px;font-weight:bold;}
.tit1{ background:#f5f5f5;border-bottom:1px solid #ddd;padding-left:40px;font-weight:bold;}
.tit{ border-bottom:1px solid #eee;padding-left:40px;font-weight:bold;}
.bgc{ background:#f5f5f5;border-bottom:1px solid #eee;}
.bgc1{ background:#f5f5f5;border-bottom:1px solid #ddd;}
.bgc2{ border-bottom:1px solid #eee;}
.agree{color:#bb8902;font-weight:bold;}
.txt{font-weight:bold;}
. span{color:#aaa;}
.form_m{
border:1px solid #ECECEC;
border-top:3px solid #333;
margin:0 auto;
background:#FCFCFC;
height:400px;
padding:0 10px 0 10px;
width:990px;}
.ed2, .se {
width:200px;
height:22px;
font-size:1em;
line-height:22px;
border-radius:0px;
border:1px solid #ccc;
margin-right:5px;
}
img{display:inline;}
.bpad_50{padding-bottom:36px;}
</style>
<form id="frmMemberReg" method="post" name="frm">
<input type="hidden" name="chkid" value="">
<input type="hidden" name="txtCouns_cont" value="">
<input type="hidden" name="txtSearch_mothod" value="">
<input type="hidden" name="txtSearch_mothod_media" value="">
<input type="hidden" name="txtSearch_mothod_etc" value="">
<div class="" style="padding:20px">
<h4>회원가입</h4>
</div>
<div class="" style="border-bottom: 1px solid #eee;">
<!--기본정보입력-->
<table cellpadding=0 cellspacing=0 width=100% style="border-top:2px solid #3e3e3e;padding-top:10px;border-bottom: 1px solid #eee;" class="table b-b">
<tr>
<td class=" tit text-right" width="200px">아이디</td>
<td class=" bgc text-left" style="padding-left:20px"><input type="text" class="ed2" name="userid" id="userid" placeholder="&nbsp아이디"> <img style="cursor:pointer" src="/images/community/btn_idover.png" align="absbottom" id="btnChkId" alt="중복확인"> <span class="txt">영문 소문자, 숫자 조합 4~12자로 입력</span></td>
</tr>
<tr>
<td class=" tit text-right">비밀번호</td>
<td class=" bgc text-left" style="padding-left:20px"><input type="password" class="ed2" name="pwd" value="">  <span class="txt">4~16자리의 영문, 숫자, 특수문자 조합 가능</span>
</td>
</tr>
<tr>
<td class=" tit1 text-right">비밀번호확인</td>
<td class=" bgc1 text-left" style="padding-left:20px"><input type="password" class="ed2" name="pwd_confirm" value=""></td>
</tr>
<tr>
<td width="200px" class=" tit text-right">이름</td>
<td  class=" bgc2 text-left p-l20" style="padding-left:20px"><input type="text" class="ed2" name="username" > <span class="txt">2~4자 한글</span></td>
</tr>
<tr>
<td  class=" tit text-right">연락처</td>
<td  class=" bgc2 text-left" style="padding-left:20px">
<input type="text" class="ed2 text-center" name="celphone1" value="010" style="width:60px"> -
<input type="text" class="ed2 text-center" name="celphone2" style="width:60px"> -
<input type="text" class="ed2 text-center" name="celphone3" style="width:60px">
</td>
</tr>
<tr>
<td  class=" tit text-right">이메일</td>
<td  class=" bgc2 text-left" style="padding-left:20px"><input type="email" class="ed2" name="email_full" ></td>
</tr>
<tr>
<td  class=" tit text-right">근무처</td>
<td  class=" bgc2 text-left" style="padding-left:20px"><input type="text" class="ed2" name="etc_1" ></td>
</tr>
<tr>
<td  class=" tit text-right">면허번호</td>
<td  class=" bgc2 text-left" style="padding-left:20px"><input type="text" class="ed2" name="etc_2" ></td>
</tr>
<tr>
<td  class=" tit text-right" valign="">서비스 이용약관</td>
<td style="padding-left:20px;padding-top:10px;padding-bottom:10px;"  class=" bgc2 text-left">
<div class="text-left">
<div style="height: 100px;width:100%;overflow:auto;border:1px solid #dddddd;padding:10px;background-color: #fff" class="ed2">
하스피 이용약관<br><br>목록<br>1.제 1 장 : 총칙<br>2.제 2 장 : 서비스 이용계약<br>3.제 3 장 : 계약당사자의 의무<br>4.제 4 장 : 서비스 이용<br>5.제 5 장 : 계약해지 및 이용제한<br>6.제 6 장 : 기타<br><br>◎ 제1장 총 칙<br>제1조(목적)<br>이 약관은 "하스피" (이하 "웹사이트"라 한다.)에서 제공하는 모든 서비스(이하“서비스”라 한다)의 이용 조건 및 절차에 관한 사항과 기타 필요한 사항을 전기통신사업법 및 동법 시행령에 따라 준수하고 규정함을 목적으로 한다.<br>제2조(정의)<br>이 약관에서 사용하는 용어의 정의는 다음 각 호와 같습니다. <br>1.이용자 : 본 약관에 따라 회사가 제공하는 서비스를 받는 자<br>2.이용계약 : 서비스 이용과 관련하여 회사와 이용자간에 체결하는 계약<br>3.가입 : 회사가 제공하는 신청서 양식에 해당 정보를 기입하고, 본 약관에 동의하여 서비스 이용계약을 완료시키는 행위<br>4.회원 : 당 사이트에 회원가입에 필요한 개인정보를 제공하여 회원 등록을 한 자<br>5.이용자번호(ID) : 회원 식별과 회원의 서비스 이용을 위하여 이용자가 선정하고 회사가 승인하는 영문자와 숫자의 조합<br>6.패스워드(PASSWORD) : 회원의 정보 보호를 위해 이용자 자신이 설정한 영문자와 숫자, 특수문자의 조합<br>7.이용해지 : 회사 또는 회원이 서비스 이용이후 그 이용계약을 종료시키는 의사표시<br>제3조(약관의 효력과 변경)<br>회원은 변경된 약관에 동의하지 않을 경우 회원 탈퇴(해지)를 요청할 수 있으며, 변경된 약관의 효력 발생일로부터 7일 이후에도 거부의사를 표시하지 아니하고 서비스를 계속 사용할 경우 약관의 변경 사항에 동의한 것으로 간주됩니다. <br>1.이 약관의 서비스 화면에 게시하거나 공지사항 게시판 또는 기타의 방법으로 공지함으로써 효력이 발생됩니다.<br>2.회사는 필요하다고 인정되는 경우 이 약관의 내용을 변경할 수 있으며, 변경된 약관은 서비스 화면에 공지하며, 공지후 7일 이후에도 거부의사를 표시하지 아니하고 서비스를 계속 사용할 경우 약관의 변경 사항에 동의한 것으로 간주됩니다.<br>3.이용자가 변경된 약관에 동의하지 않는 경우 서비스 이용을 중단하고 본인의 회원등록을 취소할 수 있으며, 계속 사용하시는 경우에는 약관 변경에 동의한 것으로 간주되며 변경된 약관은 전항과 같은 방법으로 효력이 발생합니다.<br>제4조(준용규정)<br>이 약관에 명시되지 않은 사항은 전기통신기본법, 전기통신사업법 및 기타 관련법령의 규정에 따릅니다. <br><br>제2장 서비스 이용계약<br>제5조(이용계약의 성립)<br>이용계약은 이용자의 이용신청에 대한 회사의 승낙과 이용자의 약관 내용에 대한 동의로 성립됩니다. <br>제6조(이용신청)<br>이용신청은 서비스의 회원정보 화면에서 이용자가 회사에서 요구하는 가입신청서 양식에 개인의 신상정보를 기록하여 신청할 수 있습니다. <br>제7조(이용신청의 승낙) <br>1.회원이 신청서의 모든 사항을 정확히 기재하여 이용신청을 하였을 경우에 특별한 사정이 없는 한 서비스 이용신청을 승낙합니다.<br>2.다음 각 호에 해당하는 경우에는 이용 승낙을 하지 않을 수 있습니다. <br>A.본인의 실명으로 신청하지 않았을 때<br>B.타인의 명의를 사용하여 신청하였을 때<br>C.이용신청의 내용을 허위로 기재한 경우<br>D.사회의 안녕 질서 또는 미풍양속을 저해할 목적으로 신청하였을 때<br>E.기타 회사가 정한 이용신청 요건에 미비 되었을 때<br>제8조(계약사항의 변경)<br>회원은 이용신청시 기재한 사항이 변경되었을 경우에는 수정하여야 하며, 수정하지 아니하여 발생하는 문제의 책임은 회원에게 있습니다. <br><br>제3장 계약당사자의 의무<br>제9조(회사의 의무)<br>회사는 서비스 제공과 관련해서 알고 있는 회원의 신상 정보를 본인의 승낙 없이 제3자에게 누설하거나 배포하지 않습니다. 단, 전기통신기본법 등 법률의 규정에 의해 국가기관의 요구가 있는 경우, 범죄에 대한 수사상의 목적이 있거나 또는 기타 관계법령에서 정한 절차에 의한 요청이 있을 경우에는 그러하지 아니합니다. <br>제10조(회원의 의무) <br>1.회원은 서비스를 이용할 때 다음 각 호의 행위를 하지 않아야 합니다. <br>A.다른 회원의 ID를 부정하게 사용하는 행위<br>B.서비스에서 얻은 정보를 복제, 출판 또는 제3자에게 제공하는 행위<br>C.회사의 저작권, 제3자의 저작권 등 기타 권리를 침해하는 행위<br>D.공공질서 및 미풍양속에 위반되는 내용을 유포하는 행위<br>E.범죄와 결부된다고 객관적으로 판단되는 행위<br>F.기타 관계법령에 위반되는 행위<br>2.회원은 서비스를 이용하여 영업활동을 할 수 없으며, 영업활동에 이용하여 발생한 결과에 대하여 회사는 책임을 지지 않습니다.<br>3.회원은 서비스의 이용권한, 기타 이용계약상 지위를 타인에게 양도하거나 증여할 수 없으며, 이를 담보로도 제공할 수 없습니다.<br><br>제4장 서비스 이용<br>제11조(회원의 의무) <br>1.회원은 필요에 따라 자신의 메일, 게시판, 등록자료 등 유지보수에 대한 관리책임을 갖습니다. <br>2.회원은 회사에서 제공하는 자료를 임의로 삭제, 변경할 수 없습니다. <br>3.회원은 회사의 홈페이지에 공공질서 및 미풍양속에 위반되는 내용물이나 제3자의 저작권 등 기타권리를 침해하는 내용물을 등록하는 행위를 하지 않아야 합니다. 만약 이와 같은 내용물을 게재하였을 때 발생하는 결과에 대한 모든 책임은 회원에게 있습니다.<br>제12조(게시물 관리 및 삭제)<br>효율적인 서비스 운영을 위하여 회원의 메모리 공간, 메시지크기, 보관일수 등을 제한할 수 있으며 등록하는 내용이 다음 각 호에 해당하는 경우에는 사전 통지없이 삭제할 수 있습니다. <br>1.다른 회원 또는 제3자를 비방하거나 중상모략으로 명예를 손상시키는 내용인 경우<br>2.공공질서 및 미풍양속에 위반되는 내용인 경우<br>3.범죄적 행위에 결부된다고 인정되는 내용인 경우<br>4.회사의 저작권, 제3자의 저작권 등 기타 권리를 침해하는 내용인 경우<br>5.회원이 회사의 홈페이지와 게시판에 음란물을 게재하거나 음란 사이트를 링크하는 경우<br>6.기타 관계법령에 위반된다고 판단되는 경우<br>제13조(게시물의 저작권)<br>게시물의 저작권은 게시자 본인에게 있으며 회원은 서비스를 이용하여 얻은 정보를 가공, 판매하는 행위 등 서비스에 게재된 자료를 상업적으로 사용할 수 없습니다. <br>제14조(서비스 이용시간)<br>서비스의 이용은 업무상 또는 기술상 특별한 지장이 없는 한 연중무휴 1일 24시간을 원칙으로 합니다. 다만 정기 점검 등의 사유 발생시는 그러하지 않습니다. <br>제15조(서비스 이용 책임)<br>서비스를 이용하여 해킹, 음란사이트 링크, 상용S/W 불법배포 등의 행위를 하여서는 아니되며, 이를 위반으로 인해 발생한 영업활동의 결과 및 손실, 관계기관에 의한 법적 조치 등에 관하여는 회사는 책임을 지지 않습니다. <br>제16조(서비스 제공의 중지)<br>다음 각 호에 해당하는 경우에는 서비스 제공을 중지할 수 있습니다. <br>1.서비스용 설비의 보수 등 공사로 인한 부득이한 경우<br>2.전기통신사업법에 규정된 기간통신사업자가 전기통신 서비스를 중지했을 경우<br>3.시스템 점검이 필요한 경우<br>4.기타 불가항력적 사유가 있는 경우<br><br>제5장 계약해지 및 이용제한<br>제17조(계약해지 및 이용제한)<br>1.회원이 이용계약을 해지하고자 하는 때에는 회원 본인이 인터넷을 통하여 해지신청을 하여야 하며, 회사에서는 본인 여부를 확인 후 조치합니다.<br>2.회사는 회원이 다음 각 호에 해당하는 행위를 하였을 경우 해지조치 30일전까지 그 뜻을 이용고객에게 통지하여 의견진술 할 기회를 주어야 합니다. <br>A.타인의 이용자ID 및 패스워드를 도용한 경우<br>B.서비스 운영을 고의로 방해한 경우<br>C.허위로 가입 신청을 한 경우<br>D.같은 사용자가 다른 ID로 이중 등록을 한 경우<br>E.공공질서 및 미풍양속에 저해되는 내용을 유포시킨 경우<br>F.타인의 명예를 손상시키거나 불이익을 주는 행위를 한 경우<br>G.서비스의 안정적 운영을 방해할 목적으로 다량의 정보를 전송하거나 광고성 정보를 전송하는 경우<br>H.정보통신설비의 오작동이나 정보 등의 파괴를 유발시키는 컴퓨터바이러스 프로그램 등을 유포하는 경우<br>I.회사 또는 다른 회원이나 제3자의 지적재산권을 침해하는 경우<br>J.타인의 개인정보, 이용자ID 및 패스워드를 부정하게 사용하는 경우<br>K.회원이 자신의 홈페이지나 게시판 등에 음란물을 게재하거나 음란 사이트를 링크하는 경우<br>L.기타 관련법령에 위반된다고 판단되는 경우<br><br>제6장 기 타<br>제18조(양도금지)<br>회원은 서비스의 이용권한, 기타 이용계약상의 지위를 타인에게 양도, 증여할 수 없으며, 이를 담보로 제공할 수 없습니다. <br>제19조(손해배상)<br>회사는 무료로 제공되는 서비스와 관련하여 회원에게 어떠한 손해가 발생하더라도 동 손해가 회사의 고의 또는 중대한 과실로 인한 손해를 제외하고 이에 대하여 책임을 부담하지 아니합니다. <br>제20조(면책 조항) <br>1.회사는 천재지변, 전쟁 또는 기타 이에 준하는 불가항력으로 인하여 서비스를 제공할 수 없는 경우에는 서비스 제공에 관한 책임이 면제됩니다.<br>2.회사는 서비스용 설비의 보수, 교체, 정기점검, 공사 등 부득이한 사유로 발생한 손해에 대한 책임이 면제됩니다.<br>3.회사는 회원의 귀책사유로 인한 서비스이용의 장애에 대하여 책임을 지지 않습니다.<br>4.회사는 회원이 서비스를 이용하여 기대하는 이익이나 서비스를 통하여 얻는 자료로 인한 손해에 관하여 책임을 지지 않습니다.<br>5.회사는 회원이 서비스에 게재한 정보, 자료, 사실의 신뢰도, 정확성 등의 내용에 관하여는 책임을 지지 않습니다.<br>제21조(관할법원)<br>서비스 이용으로 발생한 분쟁에 대해 소송이 제기 될 경우 회사의 소재지를 관할하는 법원을 전속 관할법원으로 합니다. <br><br>부 칙<br>(시행일) 이 약관은 2016년 8월 1일부터 시행합니다. 
</div>
</div>
<div style="padding-top:10px">
<input type="checkbox" name="" value="y" id="argge1"> 이용약관에 동의 합니다.
</div>
</td>
</tr>
<tr>
<td  class=" tit text-right" valign="">개인정보 동의사항</td>
<td style="padding-left:20px;padding-top:10px;padding-bottom:10px;border-bottom: 1px solid #bbb5b5;"  class=" bgc2 text-left">
<div class="text-left">
<div style="height: 100px;width:100%;overflow:auto;border:1px solid #dddddd;padding:10px;background-color: #fff" class="ed2">
하스피 이용약관<br><br> ◎ 제1장 총 칙<br><br>제1조 목적<br>이 약관은 "하스피" (이하 "웹사이트"라 한다.)에서 제공하는 모든 서비스(이하“서비스”라 한다)의 이용 조건 및 절차에 <br>관한 사항과 기타 필요한 사항을 전기통신사업법 및 동법 <br>시행령에 따라 준수하고 규정함을 목적으로 한다.
</div>
</div>
<div style="padding-top:10px">
<input type="checkbox" name="" value="y" id="argge2"> 개인정보 제공에 동의 합니다.
</div>
</td>
</tr>
<tr>
<td colspan="2">
<a href="javascript:hy_add()"><img src="/images/community/btn_ok.jpg" align="middle" alt="확인" ></a>
<a href="/"><img src="/images/community/btn_cancel.jpg" align="middle" alt="취소" ></a>
</td>
</tr>
</table>
</div>
<!--선택정보입력-->
<script type="text/javascript" src="/trunk/scripts/jquery.validate.min.js"></script>
<script type="text/javascript" src="/application/views/member/js/member.js"></script>
</form>
<!-- -->
<!-- -->
<script>
function email_input2( temps ) {
var temps ;
if ( temps == 9999 )
{
$("#email_show2").show();
} else {
$("#email_show2").hide();
}
}
</script>