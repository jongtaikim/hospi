<?php /* Template_ 2.2.3 2016/07/28 14:34:20 /home/hosting_users/hospi/www/application/views/member/member_findid.htm */?>
<script type="text/javascript" src="/trunk/scripts/jquery.form.js"></script>
<style>
.login {width:200px;height:24px;}
.login input {margin-right:10px;}
input.login {width:286px;color:#777;padding-left:5px;border:1px solid #ccc;}
input.name{width:192px;height:22px;border:1px solid #ccc;}
input.findid{width:40px;height:22px;border:1px solid #ccc;}
.addition {width:1000px;padding:30px 0;margin:0 auto;clear:both;}
.table1,.table2{ height:40px;}
.table1{color:#777;}
.tit{ background:#f5f5f5;border-bottom:1px solid #eee;padding-left:40px;font-weight:bold;}
.tit1{ background:#f5f5f5;border-bottom:1px solid #ddd;padding-left:40px;font-weight:bold;}
.tit2{ border-bottom:1px solid #eee;padding-left:40px;font-weight:bold;}
.bgc{ background:#f5f5f5;border-bottom:1px solid #eee;}
.bgc1{ background:#f5f5f5;border-bottom:1px solid #ddd;}
.bgc2{ border-bottom:1px solid #eee;}
.agree{color:#bb8902;font-weight:bold;}
.txt{font-weight:bold;}
.table2 span{color:#aaa;}
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
</style>
<?php if($_POST["mode"]=="id"){?>
<form  name="frm" method="post">
<table cellpadding="0" cellspacing="0" width="100%" align="center" style="background:url('/application/views/contents/images/community/id_bg.jpg') no-repeat;height:348px;">
<tr>
<td style="padding-top:20px;" align="center">
<table cellpadding="0" cellspacing="0" width="370" height="138" style="line-height:140%;">
<tr>
<td align="center">회원님의 아이디는 <span class="point "><strong><?php echo $TPL_VAR["userid"]?></strong></span> 입니다.</td>
</tr>
<tr>
<td colspan="2" align="center"><a href="/user/member/member_login"><img src="/application/views/contents/images/community/bt_login_new.jpg" align="middle" alt="로그인" ></a></td>
</tr>
</table>
</td>
</tr>
</table>
</form>
<?php }else{?>
<script>
function find_idpw()
{
var f = document.frm;
if ($("input[name=usernames]").val()==""){
alert("이름을 입력해주세요");
$("input[name=usernames]").focus();
return  ;
}
//f.action ="./find_id.php";
f.submit();
}
function email_input( temps ) {
var temps ;
if ( temps == 9999 )
{
$("#email_show").show();
} else {
$("#email_show").hide();
}
}
</script>
<table cellpadding="0" cellspacing="0" width="100%" align="center" style="background:url('/application/views/contents/images/community/find_bg.jpg') no-repeat;height:348px;">
<tr>
<td style="padding:20px 0 0 70px;">
<form  name="frm" method="post">
<input type="hidden" name="mode" value="id"/>
<input type="hidden" name="etc_val" value="1">
<table cellpadding="0" cellspacing="0" width="370" height="138" style="line-height:140%;">
<tr>
<td width="10%" >이름</td>
<td width="70%"><input type="text" name="usernames" class="name"></td>
</tr>
<tr>
<td width="10%"  style="padding-bottom:15px;">이메일</td>
<td  style="padding-bottom:15px;"><input type="text" name="emails1" id="emails1" placeholder="이메일" class="findid" style="width:90px"> @
<select class="ed2" style="width:120px" name="email_value1" onchange="email_input( this.value );">
<option value="">메일을 선택해주세요</option>
<option value="naver.com">naver.com</option>
<option value="hanmail.net">hanmail.net</option>
<option value="hotmail.com">hotmail.com</option>
<option value="nate.com">nate.com</option>
<option value="yahoo.co.kr">yahoo.co.kr</option>
<option value="empas.com">empas.com</option>
<option value="dreamwiz.com">dreamwiz.com</option>
<option value="freechal.com">freechal.com</option>
<option value="lycos.co.kr">lycos.co.kr</option>
<option value="korea.com">korea.com</option>
<option value="gmail.com">gmail.com</option>
<option value="hanmir.com">hanmir.com</option>
<option value="paran.com">paran.com</option>
<option value="9999">직접입력</option>
</select>
<span style="display:none;" id="email_show"><input type="text" name="email_value2" id="email_value2" class="findid" style="width:96px;" ></span>
</td>
</tr>
<tr>
<td colspan="2" style="height:1px;background-color:#ccc;"></td>
</tr>
<tr>
<td colspan="2" valign="bottom" align="right"><a href="javascript:find_idpw()"><img src="/application/views/contents/images/community/btn_ok.jpg" align="middle" alt="확인" ></a></td>
</tr>
</table>
</form>
</td>
<script type="text/javascript">
<!--
function find_idpw2()
{
var f = document.frm2;
if ($("input[name=userids2]").val()==""){
alert("아이디를 입력해주세요");
$("input[name=userids2]").focus();
return  ;
}
if ($("input[name=celphone1]").val()==""){
alert("휴대폰번호를 입력해주세요");
$("input[name=celphone1]").focus();
return  ;
}
if ($("input[name=celphone2]").val()==""){
alert("휴대폰번호를 입력해주세요");
$("input[name=celphone2]").focus();
return  ;
}
if ($("input[name=celphone3]").val()==""){
alert("휴대폰번호를 입력해주세요");
$("input[name=celphone3]").focus();
return  ;
}
//f.action ="./find_pw.php";
f.submit();
}
function email_input2( temps ) {
var temps ;
if ( temps == 9999 )
{
$("#email_show2").show();
} else {
$("#email_show2").hide();
}
}
//탭 자동 이동
function auto_tab(id1, id2, length) {
if ($(id1).val().length == length) {
$(id2).focus();
}
}
//-->
</script>
<td style="padding:20px 0 0 20px;">
<form name="frm2"  id="frm2" method="post">
<input type="hidden" name="mode" value="pw"/>
<table cellpadding="0" cellspacing="0" width="360" height="138" >
<tr>
<td width="10%" >아이디</td>
<td width="70%"><input type="text" name="userids2"  class="name"></td>
</tr>
<!--tr>
<td width="10%" >이름</td>
<td width="70%"><input type="text" name="usernames2" class="name"></td>
</tr-->
<!--tr>
<td width="10%" >이메일</td>
<td><input type="text" name="emails2" id="emails2" placeholder="이메일" class="findid" style="width:90px"> @
<select class="ed2" style="width:120px" name="email_value2" onchange="email_input2( this.value );">
<option value="">메일을 선택해주세요</option>
<option value="naver.com">naver.com</option>
<option value="hanmail.net">hanmail.net</option>
<option value="hotmail.com">hotmail.com</option>
<option value="nate.com">nate.com</option>
<option value="yahoo.co.kr">yahoo.co.kr</option>
<option value="empas.com">empas.com</option>
<option value="dreamwiz.com">dreamwiz.com</option>
<option value="freechal.com">freechal.com</option>
<option value="lycos.co.kr">lycos.co.kr</option>
<option value="korea.com">korea.com</option>
<option value="gmail.com">gmail.com</option>
<option value="hanmir.com">hanmir.com</option>
<option value="paran.com">paran.com</option>
<option value="9999">직접입력</option>
</select>
<span id="email_show2" style="display:none;"><input type="text" name="email_value3" id="email_value3" class="findid" style="width:96px;"></span>
</td>
</tr-->
<tr>
<td>휴대폰</td>
<td>
<input type="text" class="ed2" name="celphone1" style="width:60px" maxlength="4" onKeyup="auto_tab('form#frm2 input:text[name=celphone1]',  'form#frm2 input:text[name=celphone2]', 3);" >
- <input type="text" class="ed2" name="celphone2"  style="width:60px" maxlength="4" onKeyup="auto_tab('form#frm2 input:text[name=celphone2]',  'form#frm2 input:text[name=celphone3]', 4);" > -
<input type="text" class="ed2" name="celphone3" style="width:60px" maxlength="4" >                    </td>
</tr>
<tr>
<td colspan="2" style="height:1px;background-color:#ccc;"></td>
</tr>
<tr>
<td colspan="2" valign="bottom" align="right"><a href="javascript:find_idpw2();"><img src="/application/views/contents/images/community/btn_ok.jpg" align="middle" alt="확인" ></a></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
<?php }?>