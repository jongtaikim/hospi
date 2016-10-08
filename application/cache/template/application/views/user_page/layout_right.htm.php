<?php /* Template_ 2.2.3 2015/12/08 15:30:48 /disk1/home/hospi/www/application/views/user_page/layout_right.htm */?>
<!-- right floating -->
<div id="floating"  class="right_floating right_floating_btn ">
<div class="toggle">
<ul>
<li><img src="/application/views/user_page/images/main/quick_tit.png"></li>
<li><img src="/application/views/user_page/images/main/quick_01.png" onmouseover="this.src='/application/views/user_page/images/main/quick_01_on.png'" onmouseout="this.src='/application/views/user_page/images/main/quick_01.png'" onclick="" alt="비용상담" class="floating_menu" fidx="1"></li>
<li><img src="/application/views/user_page/images/main/quick_02.png" onmouseover="this.src='/application/views/user_page/images/main/quick_02_on.png'" onmouseout="this.src='/application/views/user_page/images/main/quick_02.png'" onclick="" alt="카톡상담" class="floating_menu" fidx="2"></li>
<li><img src="/application/views/user_page/images/main/quick_03.png" onmouseover="this.src='/application/views/user_page/images/main/quick_03_on.png'" onmouseout="this.src='/application/views/user_page/images/main/quick_03.png'" onclick="" alt="온라인상담" class="floating_menu" fidx="3"></li>
<li><img src="/application/views/user_page/images/main/quick_04.png" onmouseover="this.src='/application/views/user_page/images/main/quick_04_on.png'" onmouseout="this.src='/application/views/user_page/images/main/quick_04.png'" onclick="" alt="오시는길" class="floating_menu" fidx="4"></li>
<li><img src="/application/views/user_page/images/main/quick_call.png"></li>
</ul>
</div>
<!-- 비용상담 -->
<div class="open right_floating right_floating1" >
<div class="closed right_floating_close_btn"><button type="button">닫기</button></div>
<div class="tit"><img src="/application/views/user_page/images/main/quick_tit_01.png"></div>
<form name="counsel_one" id="counsel_one" method="post" action="http://intra.md21.kr/crm/manage/inc_com/rdb_process_other.php">
<input type="hidden" name="rurl" value="http://<?=$_SERVER[HTTP_HOST]?>">
<input type="hidden" name="id" value="ezham"><!--병원아이디-->
<input type="hidden" name="part" value="랜딩">
<input type="hidden" name="type" value="homepage">
<input type="hidden" name="kind" value="1"><!--웹:1,모바일:2-->
<ul class="data">
<li><input type="text" placeholder="이름" class="name" name="name" required="required"></li>
<li><input type="number" placeholder="나이" class="age" name="age" placeholder="나이" required="required" onkeydown="checkKeysInt(event,'');" onkeyup="checkKeysInt(event,'');"></li>
<li><input type="text" placeholder="휴대폰번호" class="phone" name="phone" id="rb_db_phone" required="required" >
<script type="text/javascript">
$('#rb_db_phone').change(function(){
var tmp_p = str_replace("-","",$(this).val());
console.log(strlen(tmp_p));
if(strlen(tmp_p) > 10){
tmp_p = substr(tmp_p,0,3)+'-'+substr(tmp_p,3,4)+'-'+substr(tmp_p,7,4);
}else{
tmp_p = substr(tmp_p,0,3)+'-'+substr(tmp_p,3,3)+'-'+substr(tmp_p,6,4);
}
$(this).val(tmp_p);
var rgEx = /(01[016789])[-](\d{4}|\d{3})[-]\d{4}$/g;
var strValue = $(this).val();
var chkFlg = rgEx.test(strValue);
if(!chkFlg){
alert("올바른 휴대폰번호가 아닙니다.");
$(this).focus();
return false;
}
});
</script>
</li>
<li><select class="data_counsel_time" name="time" required="required" ><option value="">상담시간을 선택해주세요</option></select></li>
<li><select class="data_etc_1_code_select" name="category" required="required"><option value="0">시술항목을 선택해주세요</option></select></li>
<li><input type="number" placeholder="예상비용" name="prince" required="required"></li>
<li><select class="treatment_date" name="ondata"  required="required"><option>수술예상시기를 선택해주세요</option></select></li>
<li><p>개인정보취급방침 및 사용동의</p><textarea class="text_pra2">내용</textarea></li>
</ul>
</form>
<script type="text/javascript">
function save_request(){
var frm_id = "form#counsel_one";
if ($(frm_id + " input[name='name']").val() == "") {
alert("이름을 입력해주세요.");
$(frm_id + " input[name='name']").focus();
return false ;
}
if ($(frm_id + " input[name='phone']").val() == "") {
alert("휴대폰을 입력해주세요.");
$(frm_id + " input[name='phone']").focus();
return false ;
}
$('#counsel_one').submit();
}
</script>
<div class="submit"><button type="button" onclick="save_request()">상담신청하기</button></div>
<div class="kakao_banner"><img src="/application/views/user_page/images/main/quick_kakao.jpg"></div>
</div>
<!-- 카톡상담-->
<div class="open right_floating right_floating2">
<div class="closed right_floating_close_btn"><button type="button">닫기</button></div>
<div class="tit"><img src="/application/views/user_page/images/main/quick_tit_02.png"></div>
<form name="counsel_two" id="counsel_two" method="post" action="http://intra.md21.kr/crm/manage/inc_com/rdb_process_other.php">
<input type="hidden" name="rurl" value="http://<?=$_SERVER[HTTP_HOST]?>">
<input type="hidden" name="id" value="ezham"><!--병원아이디-->
<input type="hidden" name="part" value="랜딩">
<input type="hidden" name="type" value="homepage">
<input type="hidden" name="kind" value="1"><!--웹:1,모바일:2-->
<ul class="data">
<li><input type="text" placeholder="이름" class="name" name="name"></li>
<li><input type="number" placeholder="나이" class="age" name="age" placeholder="나이" onkeydown="checkKeysInt(event,'');" onkeyup="checkKeysInt(event,'');"></li>
<li><input type="text" class="phone" name="phone" placeholder="휴대폰번호 또는 카카오톡 아이디"></li>
<li><select class="data_counsel_time" name="time" required="required" ><option value="">상담시간을 선택해주세요</option></select></li>
<li><select class="data_etc_1_code_select" name="category" required="required"><option value="0">시술항목을 선택해주세요</option></select></li>
<li><input type="number" placeholder="예상비용" name="prince" required="required"></li>
<li><select class="treatment_date" name="ondata"  required="required"><option>수술예상시기를 선택해주세요</option></select></li>
<li><p>개인정보취급방침 및 사용동의</p><textarea class="text_pra2"></textarea></li>
</ul>
</form>
<script type="text/javascript">
function save_request2(){
var frm_id = "form#counsel_two";
if ($(frm_id + " input[name='name']").val() == "") {
alert("이름을 입력해주세요.");
$(frm_id + " input[name='name']").focus();
return false ;
}
if ($(frm_id + " input[name='phone']").val() == "") {
alert("휴대폰을 입력해주세요.");
$(frm_id + " input[name='phone']").focus();
return false ;
}
$('#counsel_two').submit();
}
</script>
<div class="submit"><button type="button" onclick="save_request2()">상담신청하기</button></div>
<div class="kakao_banner"><img src="/application/views/user_page/images/main/quick_kakao.jpg"></div>
</div>
<!--카톡상담 E-->
<!-- 온라인상담-->
<div class="open right_floating right_floating3">
<div class="closed right_floating_close_btn"><button type="button">닫기</button></div>
<div class="tit"><img src="/application/views/user_page/images/main/quick_tit_03.png"></div>
<ul class="list" id="ul_online_body">
</ul>
<script type="text/javascript">
$(document).ready(function(){
$('#ul_online_body').load('/user/ctl_online/list_view/1913?cate=1913&ch=none');
});
</script>
<div class="online"><button type="button" onclick="location.href='/user/ctl_online/list_view/1913?cate=1913'">온라인상담작성하기</button></div>
<div class="kakao_banner"><img src="/application/views/user_page/images/main/quick_kakao.jpg"></div>
</div>
<!--온라인상담 E-->
<!-- 오시는길 -->
<div class="open right_floating right_floating4">
<div class="closed right_floating_close_btn"><button type="button">닫기</button></div>
<div class="tit"><img src="/application/views/user_page/images/main/quick_tit_04.png"></div>
<div class="map"><img src="/application/views/user_page/images/main/quick_map.png"></div>
<div class="map_btn"><a href="javascript:toggle_map_mobile()"><img src="/application/views/user_page/images/main/quick_btn_map_m.jpg" alt="모바일로 약도 전송" class="moblie_btn"></a><a href="javascript:print_map()"><img src="/application/views/user_page/images/main/quick_btn_map_p.jpg" alt="프린터로 약도 인쇄"></a></div>
<div class="kakao_banner"><img src="/application/views/user_page/images/main/quick_kakao.jpg"></div>
</div>
<!--오시는길 E-->
</div>
<!-- right floating E -->
<!-- moblie -->
<div id="moblie" >
<div class="moblie_btn kakao_phone_btn"></div>
<!-- Kakao DB -->
<div class="kakao hide kakao_phone" >
<div class="closed kakao_phone_close pointer"><img src="/application/views/user_page/images/main/floating_closed.png" alt="닫기"></div>
<form method="POST" id="kakao_phone_form"  name="kakao_phone_form" action="http://intra.md21.kr/crm/manage/inc_com/rdb_process_other.php">
<input type="hidden" name="rurl" value="http://<?=$_SERVER[HTTP_HOST]?>">
<input type="hidden" name="id" value="ezham"><!--병원아이디-->
<input type="hidden" name="part" value="랜딩">
<input type="hidden" name="type" value="homepage">
<input type="hidden" name="kind" value="1"><!--웹:1,모바일:2-->
<ul>
<li><p><img src="/application/views/user_page/images/main/floating_name.gif" alt="이름"></p><input type="text" class="input" class="name" name="name" placeholder="이름" ></li>
<li><p><img src="/application/views/user_page/images/main/floating_moblie.gif" alt="휴대폰"></p><input type="text" class="input"  class="phone" name="phone" placeholder="번호입력"></li>
<li><p><img src="/application/views/user_page/images/main/floating_list.gif" alt="시술항목"></p>
<select id="kakao_phone_etc_1"  class="data_etc_1_code_select" name="category"><option value="0">시술항목</option></select>
</li>
<li><input type="checkbox" class="check" name="pra_chk" style="margin-top:3px;margin-right:3px"><img src="/application/views/user_page/images/main/floating_tit_ok.png" alt="개인정보수집동의">
<!--a href="#modal" data-toggle="modal" data-target="#siteModal" class="view_pra2_click"><img src="/application/views/user_page/images/main/floating_btn_view.png" alt="보기"></a-->
<a href="/user/page/introduce/policy" ><img src="/application/views/user_page/images/main/floating_btn_view.png" alt="보기"></a>
</li>
</ul>
</form>
<div class="submit"><button type="button" id="kakao_phone_form_submit">상담신청하기</button></div>
</div>
<!-- Kakao DB E-->
</div>
<!-- moblie E-->
<div id="mms" class="mms">
<div class="input">
<form name="telephone">
<select name="one">
<option value="010">010</option>
<option value="011">011</option>
<option value="016">016</option>
<option value="017">017</option>
<option value="018">018</option>
<option value="019">019</option>
</select>
<input class="middle number" name="two" maxlength="4"/>
<input class="last number" name="three" maxlength="4"/>
<img src="/application/views/contents/images/quick/mms_submit.png" class="mms_submit" style="padding:10px 27px 0 27px;"/>
</form>
</div>
<a href="javascript:void(0)" onclick="toggle_map_mobile()">
<img src="/application/views/contents/images/close.png" class="close" />
</a>
</div>
<div id="fade" class="black_overlay" ></div>
<div class="only-print"><img src="/application/views/contents/images/quick/map_detail.jpg" id="mapImage" /></div> <!-- map image to print -->
<style type="text/css" title="">
@media screen{
.only-print{
display: none;
}
}
@media print{
.no-print{
display: none;
}
}
</style>