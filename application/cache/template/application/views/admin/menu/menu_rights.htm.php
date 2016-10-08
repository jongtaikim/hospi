<?php /* Template_ 2.2.3 2016/07/28 14:35:17 /home/hosting_users/hospi/www/application/views/admin/menu/menu_rights.htm */
$TPL_TYPES_1=empty($TPL_VAR["TYPES"])||!is_array($TPL_VAR["TYPES"])?0:count($TPL_VAR["TYPES"]);
$TPL_GROUPS_1=empty($TPL_VAR["GROUPS"])||!is_array($TPL_VAR["GROUPS"])?0:count($TPL_VAR["GROUPS"]);
$TPL_LIST_1=empty($TPL_VAR["LIST"])||!is_array($TPL_VAR["LIST"])?0:count($TPL_VAR["LIST"]);?>
<div class="panel panel-default">
<div class="panel-heading bg-white">
<i class="fa  fa-home"></i> <?php echo $TPL_VAR["menu_location"]?> &gt; <strong class="text-primary"><?php echo $TPL_VAR["str_title"]?></strong>
</div>
<div class="panel-body pos_r">
<ul class="nav nav-tabs">
<li >
<a href="javascript:open_menu_option('<?php echo $TPL_VAR["mcode"]?>','')">메뉴옵션</a>
</li>
<li class="active">
<a href="javascript:open_menu_option('<?php echo $TPL_VAR["mcode"]?>','menu_right')">메뉴권한설정</a>
</li>
<?php if($TPL_VAR["sub_cnt"]>1){?>
<li>
<a href="javascript:open_menu_option('<?php echo $TPL_VAR["mcode"]?>','menu_listorder')">하위메뉴 순서변경</a>
</li>
<?php }?>
</ul>
<form name="editorForm" id="editorForm" method="post" enctype="multipart/form-data" style="margin-top:20px" >
<input type="hidden" name="cate" value="<?php echo $TPL_VAR["num_cate"]?>">
<input type="hidden" name="num_mcode" value="<?php echo $TPL_VAR["mcode"]?>">
<div style="color:#504954; font-weight:bold; padding-top:4px" style="margin-bottom:10px">
메뉴권한 설정
</div>
<fieldset>
<div class="" style="margin-top:5px;">
<table border="1" cellspacing="0" summary="표의 요약을 반드시 넣어 주세요" class="table table-bordered" style="min-width:400px">
<tbody>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px" >기본그룹 권한</th>
<td>
<table cellpadding="0" cellspacing="0" border="0" style="border-top:0px" width="100%">
<?php if($TPL_TYPES_1){foreach($TPL_VAR["TYPES"] as $TPL_V1){?>
<tr>
<td width="85" style="padding:2px 2px 2px 10px;border:0px"><strong><?php echo $TPL_V1["name"]?></strong></td>
<td width="300 "style="padding:2px 2px 2px 10px;;border:0px"><?php if(is_array($TPL_R2=$TPL_V1["RIGHTS"])&&!empty($TPL_R2)){foreach($TPL_R2 as $TPL_K2=>$TPL_V2){?><input type="checkbox" name="rights[<?php echo $TPL_V1["code"]?>][<?php echo $TPL_K2?>]" value="1" > <?php echo $TPL_V2?>&nbsp;&nbsp;
<?php }}?>
</td>
</tr>
<?php }}?>
</table>
</td>
</tr>
<?php if($TPL_VAR["GROUPS"]){?>
<tr>
<th scope="row" width="130px">추가그룹 권한</th>
<td>
<table cellpadding="0" cellspacing="0" border="0" style="border-top:0px">
<?php if($TPL_GROUPS_1){foreach($TPL_VAR["GROUPS"] as $TPL_V1){?>
<tr>
<td width="85" style="padding:2px 2px 2px 10px;border:0px"><strong><?php echo $TPL_V1["str_group_name"]?></strong></td>
<td style="padding:2px 2px 2px 10px;;border:0px"><?php if(is_array($TPL_R2=$TPL_V1["RIGHTS"])&&!empty($TPL_R2)){foreach($TPL_R2 as $TPL_K2=>$TPL_V2){?><input type="checkbox" name="rights[<?php echo $TPL_V1["str_group"]?>][<?php echo $TPL_K2?>]" value="1" > <?php echo $TPL_V2?>&nbsp;&nbsp;
<?php }}?>
</td>
</tr>
<?php }}?>
</table>
</td>
</tr>
<?php }?>
</tbody>
</table>
</div>
</fieldset>
<div style=";margin:10px 0 20px 0;text-align:center">
<?php if($TPL_VAR["str_type"]=="doc"){?>
<button type="button" class="btn btn-default lt btn-lx  m-b5 " id="" onclick="allRead()" >전체읽기</button>
<?php }?>
<?php if($TPL_VAR["str_type"]=="board"){?>
<button type="button" class="btn btn-default lt btn-lx  m-b5   " id="" onclick="allListRead()" >전체목록/읽기</button>
<?php }?>
<button type="button" class="btn btn-primary lt   m-b5   " id="" onclick="submit_data_rt()">저장하기</button>
</div>
</form>
</div>
</div>
<script type="text/javascript">
// <![CDATA[
el = document.forms['editorForm'].elements;
<?php if($TPL_LIST_1){foreach($TPL_VAR["LIST"] as $TPL_V1){?>
if(el['rights[<?php echo $TPL_V1["str_group"]?>][<?php echo $TPL_V1["right"]?>]']) el['rights[<?php echo $TPL_V1["str_group"]?>][<?php echo $TPL_V1["right"]?>]'].checked = true;
<?php }}?>
function allRead(){
el = document.forms['editorForm'].elements;
if(el['rights[e][r]']) el['rights[e][r]'].checked = true;
if(el['rights[g][r]']) el['rights[g][r]'].checked = true;
if(el['rights[h][r]']) el['rights[h][r]'].checked = true;
if(el['rights[n][r]']) el['rights[n][r]'].checked = true;
if(el['rights[t][r]']) el['rights[t][r]'].checked = true;
if(el['rights[z][r]']) el['rights[z][r]'].checked = true;
}
function allListRead(){
el = document.forms['editorForm'].elements;
if(el['rights[e][l]']) el['rights[e][l]'].checked = true;
if(el['rights[e][r]']) el['rights[e][r]'].checked = true;
if(el['rights[g][l]']) el['rights[g][l]'].checked = true;
if(el['rights[g][r]']) el['rights[g][r]'].checked = true;
if(el['rights[h][l]']) el['rights[h][l]'].checked = true;
if(el['rights[h][r]']) el['rights[h][r]'].checked = true;
if(el['rights[n][l]']) el['rights[n][l]'].checked = true;
if(el['rights[n][r]']) el['rights[n][r]'].checked = true;
if(el['rights[t][l]']) el['rights[t][l]'].checked = true;
if(el['rights[t][r]']) el['rights[t][r]'].checked = true;
if(el['rights[z][l]']) el['rights[z][l]'].checked = true;
if(el['rights[z][r]']) el['rights[z][r]'].checked = true;
}
$('#editorForm').keyup(function(event){
if(event.keyCode == '13'){
submit_data_rt();
}
})
function submit_data_rt(){
var validated_t = 'Y';
if(validated_t == "Y"){
$.ajax({
type : 'POST',
url: '/admin/menu_adm/menu_right/<?php echo $TPL_VAR["mcode"]?>',
data : $('#editorForm').serialize(),
dataType:'html',
success : function(data) {
//alert(data);
alert('저장되었습니다.');
reload_tree();
}
,error: function(request,status,error) {
alert(request.responseText);
alert('저장실패.... 다시시도해 주십시요');
}
});
}
}
// ]]>
</script>