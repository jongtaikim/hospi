<?php /* Template_ 2.2.3 2016/08/10 20:04:28 /home/hosting_users/hospi/www/application/views/admin/online/add.htm */?>
<div class="panel-body ">
<form role="form"  data-validate="parsley" enctype='multipart/form-data' method="POST" name="bfForm" id="bfForm">
<input type="hidden" name="idx" value="<?php echo $TPL_VAR["idx"]?>"/>
<div class="col-sm-12">
<div class="md-form-group">
<input class="md-input" name="db_subject" id="db_subject" value="<?php echo $TPL_VAR["title"]?>" readonly="readonly" placeholder="제목을 입력">
<label>제목</label>
</div>
</div>
<div class="col-sm-12">
<div class="md-form-group">
<input class="md-input" name="db_product_name" id="db_product_name" value="<?php echo $TPL_VAR["product_name"]?>" readonly="readonly" placeholder="제품명 입력">
<label>제품명</label>
</div>
</div>
<div class="col-sm-6">
<div class="md-form-group">
<input class="md-input f_l"  value="<?php echo $TPL_VAR["phone"]?>" readonly="readonly" style="width:80%">
<label>전화번호</label>
</div>
</div>
<div class="col-sm-6">
<div class="md-form-group">
<input class="md-input"  value="<?php echo $TPL_VAR["email"]?>" name="email" readonly="readonly" >
<label>이메일</label>
</div>
</div>
<div class="col-sm-12">
<div class="md-form-group">
<div class="md-input " readonly="readonly" style="height:100px;overflow:auto;"><?php echo $TPL_VAR["comment"]?></div>
<label>내용</label>
</div>
</div>
<div class="col-sm-12">
<div class="md-form-group">
<textarea name="re_text" id="re_text"  class="md-input" style="height:100px;overflow:auto;line-height:210%"><?php echo $TPL_VAR["text"]?></textarea>
<label>답변하기</label>
</div>
</div>
</form>
</div>
<script type="text/javascript" src="/trunk/scripts/jquery.form.js"></script>
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
var frm = $("#bfForm");
var stringData = $("#bfForm").serialize();
frm.ajaxSubmit({
type : 'post',
url : '/admin/online_adm/item_re/<?php echo $TPL_VAR["idx"]?>',
data : stringData, //json 형태로 form data변경
dataType : 'html',//( default : xml,json,script,text,html )
success : function(data){
alert('답변이 등록되었습니다.');
$('#onlineModal').modal('hide');
reload_online_table();
},
error : function(request, status, error) {
alert(request.responseText);
alert('저장실패.... 다시시도해 주십시요')
}
});
}
}
//모달 버튼에 바인딩
$('#online_submit_btn').unbind('click').click(function(){
submit_data();
});
setTimeout(function(){
$('#re_text').focus();
},700);
// ]]>
</script>