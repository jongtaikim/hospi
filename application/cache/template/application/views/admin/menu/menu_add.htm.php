<?php /* Template_ 2.2.3 2016/07/28 14:35:17 /home/hosting_users/hospi/www/application/views/admin/menu/menu_add.htm */
$TPL_MENU_TYPE_1=empty($TPL_VAR["MENU_TYPE"])||!is_array($TPL_VAR["MENU_TYPE"])?0:count($TPL_VAR["MENU_TYPE"]);?>
<div class=" " id="">
<div class="panel-body ">
<form name="editorForm_add" id="editorForm_add" method="post" enctype="multipart/form-data" onsubmit="return false" >
<input type="hidden" name="num_cate" value="<?php echo $TPL_VAR["num_cate"]?>"/>
<div class="col-sm-12">
<div class="md-form-group">
<input class="md-input parsley-validated" name="str_title" id="db_str_title" hname="메뉴명" placeholder="메뉴명을 입력하세요." required="required">
<label>메뉴명</label>
</div>
</div>
<div class="col-sm-12">
<div class="md-form-group">
<select name="str_type" id="db_str_type" class="md-input parsley-validated" required="required" hname="지역" onchange="$.cookie('MENU_SELECT',this.value)">
<option value="">- 메뉴타입 선택 -</option>
<?php if($TPL_MENU_TYPE_1){$TPL_I1=-1;foreach($TPL_VAR["MENU_TYPE"] as $TPL_K1=>$TPL_V1){$TPL_I1++;?>
<option value = "<?php echo $TPL_K1?>"  id = "str_type_<?php echo $TPL_I1?>"><?php echo $TPL_V1?></option>
<?php }}?>
</select>
<script type="text/javascript">
$(document).ready(function(){
if($.cookie('MENU_SELECT')){
$('#db_str_type').val($.cookie('MENU_SELECT'));
}
setTimeout(function(){
$('#db_str_title').focus();
},400)
});
</script>
<label>메뉴타입</label>
</div>
</div>
</form>
</div>
</div>
<script type="text/javascript">
// <![CDATA[
$('#editorForm_add').keyup(function(event){
if(event.keyCode == '13'){
submit_data_add();
}
})
function submit_data_add(){
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
url: '/admin/menu_adm/menu_add/<?php echo $TPL_VAR["num_mcode"]?>',
data : $('#editorForm_add').serialize(),
dataType:'html',
success : function(data) {
//alert(data);
$('#menuModal').modal('hide');
reload_tree();
}
,error: function(request,status,error) {
alert(request.responseText);
alert('저장실패.... 다시시도해 주십시요');
}
});
}
}
//모달 버튼에 바인딩
$('#menu_submit_btn').unbind('click').click(function(){
submit_data_add();
});
// ]]>
</script>