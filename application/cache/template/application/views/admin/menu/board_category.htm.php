<?php /* Template_ 2.2.3 2016/07/28 14:35:17 /home/hosting_users/hospi/www/application/views/admin/menu/board_category.htm */
$TPL_cate_LIST_1=empty($TPL_VAR["cate_LIST"])||!is_array($TPL_VAR["cate_LIST"])?0:count($TPL_VAR["cate_LIST"]);?>
<script language="JavaScript">
function CateDel(idx) {
if(confirm("["+idx+"]해당게시물이\n[일반]카테고리로 모두 옮겨집니다.\n\n카테고리를 삭제하시겠습니까?")){
document.Frm.mode.value="del";
document.Frm.submit();
}
}
function select1(idx) {
if(!idx){
$('#catenm').html("카테고리추가");
$('#str_category_text').val('');
$('#catedel').html("");
}else{
$('#catenm').html("카테고리수정");
$('#str_category_text').val(idx);
$('#catedel').html("<input type=button value='삭제' class=button onclick=\"CateDel('"+idx+"')\">");
}
}
</script>
<body  style="margin:0" bgcolor="#FFFFFF" >
<form name="Frm" method="POST" >
<input type="hidden" name="mode" value="add">
<table cellpadding="5" height="150" cellspacing="0" border="0" width="100%">
<tr><td colspan=2 style="font-size:11px;color:red" align=center>카테고리 선택 후 추가,수정,삭제하세요.</td></tr>
<tr>
<td>
<select name="str_category" onchange = "select1(this.value);" multiple style="font-size:11px;" size="8">
<option value="">신규카테고리추가</option>
<option value="">=================</option>
<?php if($TPL_cate_LIST_1){foreach($TPL_VAR["cate_LIST"] as $TPL_V1){?>
<option value="<?php echo $TPL_V1["str_category"]?>" <?php if($TPL_V1["str_category"]==$TPL_VAR["str_category"]){?> selected<?php }?>><?php echo $TPL_V1["str_category"]?></option>
<?php }}?>
</select>
</td>
<td>
<div id="catenm" style="font-size:11px;font-weight: bold;">카테고리추가</div>
<div style="padding-bottom:5px;"><input type="text" name="str_category_text" required="required" id="str_category_text" class="button" style="width:100px;" hname="카테고리" required  maxbyte="25"></div>
<div style="text-align:center"><input type="submit" name="" value="저장" class="button"><span id="catedel" style="padding-left:2px;"></span></div>
</td>
</tr>
</table>
</form>