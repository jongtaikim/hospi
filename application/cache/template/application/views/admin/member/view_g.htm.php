<?php /* Template_ 2.2.3 2016/07/28 14:35:16 /home/hosting_users/hospi/www/application/views/admin/member/view_g.htm */
$TPL_area_text_1=empty($TPL_VAR["area_text"])||!is_array($TPL_VAR["area_text"])?0:count($TPL_VAR["area_text"]);?>
<div class="panel-body ">
<form role="form"  data-validate="parsley" enctype='multipart/form-data' method="post" name="memberForm" id="memberForm">
<input type="hidden" name="userid" value="<?php echo $TPL_VAR["userid"]?>"/>
<div class="col-sm-12 ">
<div class="md-form-group">
<input class="md-input" disabled=""  value="<?php echo $TPL_VAR["userid"]?>">
<label>아이디</label>
</div>
</div>
<div class="col-sm-12">
<div class="md-form-group">
<input class="md-input" disabled=""  value="<?php echo $TPL_VAR["username"]?>">
<label>이름</label>
</div>
</div>
<div class="col-sm-6">
<div class="md-form-group">
<input class="md-input parsley-validated" hname="생년월일" required="required" type="date" value="<?php echo $TPL_VAR["birth2"]?>" id="db_birth2" name="db_birth2" placeholder="0000-00-00">
<label>생년월일</label>
</div>
</div>
<div class="col-sm-6">
<div class="md-form-group">
<select name="db_addr" id="db_addr" class="md-input parsley-validated" required="required" hname="지역">
<option value="">지역선택</option>
<?php if($TPL_area_text_1){foreach($TPL_VAR["area_text"] as $TPL_V1){?>
<option value="<?php echo $TPL_V1?>" <?php if($TPL_V1==$TPL_VAR["addr"]){?> selected<?php }?>><?php echo $TPL_V1?></option>
<?php }}?>
</select>
<label>거주지역</label>
</div>
</div>
<div class="col-sm-9">
<div class="md-form-group">
<input class="md-input parsley-validated" required="required" type="email" value="<?php echo $TPL_VAR["email"]?>" id="db_email" name="db_email" hname="이메일">
<label>이메일</label>
</div>
</div>
<div class="col-sm-3">
<div class="md-form-group">
<input type="checkbox" value="Y" name="db_email_ch" <?php if($TPL_VAR["email_ch"]=="Y"){?> checked="" <?php }?>>
<label>이메일 수신동의</label>
</div>
</div>
<div class="col-sm-9">
<div class="md-form-group">
<input class="md-input parsley-validated" required="required" type="phone" value="<?php echo $TPL_VAR["celphone"]?>" id="db_celphone" name="db_celphone" hname="휴대전화">
<label>휴대전화</label>
</div>
</div>
<script type="text/javascript">
$('#db_celphone').change(function(){
var tmp_p = str_replace("-","",$(this).val());
if(strlen(tmp_p) > 10){
tmp_p = substr(tmp_p,0,3)+'-'+substr(tmp_p,3,4)+'-'+substr(tmp_p,7,4);
}else{
tmp_p = substr(tmp_p,0,3)+'-'+substr(tmp_p,3,3)+'-'+substr(tmp_p,6,4);
}
var rgEx = /(01[016789])[-](\d{4}|\d{3})[-]\d{4}$/g;
var strValue = tmp_p;
var chkFlg = rgEx.test(strValue);
if(!chkFlg){
alert("올바른 휴대폰번호가 아닙니다.");
$(this).focus();
return false;
}
$(this).val(tmp_p);
});
</script>
<div class="col-sm-3">
<div class="md-form-group">
<input type="checkbox" value="Y" name="db_ckyog" <?php if($TPL_VAR["ckyog"]=="Y"){?> checked="" <?php }?>>
<label>SMS수신동의</label>
</div>
</div>
<div class="col-sm-6">
<div class="md-form-group">
<input class="md-input parsley-validated" required="" type="text" value="<?php echo $TPL_VAR["etc_1"]?>" id="db_etc_1" name="db_etc_1" hname="근무처">
<label>근무처</label>
</div>
</div>
<div class="col-sm-6">
<div class="md-form-group">
<input class="md-input parsley-validated" required="" type="text" value="<?php echo $TPL_VAR["etc_2"]?>" id="db_etc_2" name="db_etc_2" hname="면허번호">
<label>면허번호</label>
</div>
</div>
</form>
</div>
<script type="text/javascript">
// <![CDATA[
function submit_data(){
var validated_t = 'Y';
$('.parsley-validated').each(function(){
if($(this).val() ==''){
alert("["+$(this).attr('hname')+'] 은 필수값입니다.');
$(this).focus();
validated_t = '';
return false;
}
});
if(validated_t == "Y"){
$.ajax({
type : 'POST',
url: '/admin/member_adm/member_view/<?php echo $TPL_VAR["userid"]?>',
data : $('#memberForm').serialize(),
dataType:'html',
success : function(data) {
//alert(data);
alert('수정되었습니다.');
$('#memberModal').modal('hide');
reload_member_table()
}
,error: function(request,status,error) {
alert(request.responseText);
alert('저장실패.... 다시시도해 주십시요');
}
});
}
}
//모달 버튼에 바인딩
$('#member_submit_btn').unbind('click').click(function(){
submit_data();
});
// ]]>
</script>