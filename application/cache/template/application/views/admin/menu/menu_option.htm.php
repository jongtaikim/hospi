<?php /* Template_ 2.2.3 2016/07/28 14:35:17 /home/hosting_users/hospi/www/application/views/admin/menu/menu_option.htm */
$TPL_MENU_TYPE_1=empty($TPL_VAR["MENU_TYPE"])||!is_array($TPL_VAR["MENU_TYPE"])?0:count($TPL_VAR["MENU_TYPE"]);
$TPL_layout_LIST_1=empty($TPL_VAR["layout_LIST"])||!is_array($TPL_VAR["layout_LIST"])?0:count($TPL_VAR["layout_LIST"]);?>
<div class="panel panel-default">
<div class="panel-heading bg-white">
<i class="fa  fa-home"></i> <?php echo $TPL_VAR["menu_location"]?> &gt; <strong class="text-primary"><?php echo $TPL_VAR["str_title"]?></strong>
</div>
<div class="panel-body pos_r" style="font-size:12px">
<ul class="nav nav-tabs">
<li class="active">
<a href="javascript:open_menu_option('<?php echo $TPL_VAR["mcode"]?>','')">메뉴옵션</a>
</li>
<?php if($TPL_VAR["str_type"]!="menu"){?>
<li>
<a href="javascript:open_menu_option('<?php echo $TPL_VAR["mcode"]?>','menu_right')">메뉴권한설정</a>
</li>
<?php }?>
<?php if($TPL_VAR["sub_cnt"]>1){?>
<li>
<a href="javascript:open_menu_option('<?php echo $TPL_VAR["mcode"]?>','menu_listorder')">하위메뉴 순서변경</a>
</li>
<?php }?>
</ul>
<form name="editorForm" id="editorForm" method="post" enctype="multipart/form-data" style="margin-top:20px" onsubmit="return validate(this);">
<input type="hidden" name="cate" value="<?php echo $TPL_VAR["num_cate"]?>">
<fieldset>
<div style="color:#504954; font-weight:bold; padding-top:4px" style="margin-bottom:10px">
메뉴 설정
</div>
<div class="" style="margin-top:5px;">
<table border="0" cellspacing="0" class="table table-bordered" >
<tbody>
<tr>
<th class="bg-light lt text-right w130 " style="vertical-align:middle;padding-right:10px">메뉴명</th>
<td>
<div class="item">
<input type="text" size="50" name="str_title" hname="메뉴명" value="<?php echo $TPL_VAR["str_title"]?>" class="parsley-validated" required trim="trim"/>
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">메뉴숨기기</th>
<td>
<div class="item">
<input type="radio" name="num_view" value="1" <?php if($TPL_VAR["num_view"]==1){?> checked<?php }?>> 표출
<input type="radio" name="num_view" value="0" <?php if($TPL_VAR["num_view"]==0){?> checked<?php }?>> 숨김
<div style="color:#993366">(숨김상태에서는 메뉴바에 표출되지 않습니다.)</div>
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">메뉴형태</th>
<td>
<div class="item">
<select name="str_type" class="parsley-validated">
<?php if($TPL_MENU_TYPE_1){foreach($TPL_VAR["MENU_TYPE"] as $TPL_K1=>$TPL_V1){?>
<option value="<?php echo $TPL_K1?>" <?php if($TPL_VAR["str_type"]==$TPL_K1){?> selected<?php }?>><?php echo $TPL_V1?></option>
<?php }}?>
</select>
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">메뉴주소</th>
<td>
<div class="item padding3">
<input type="text" name="menu_url" class="fom01" style="width:280px;border:0px" value="<?php echo $TPL_VAR["menu_url"]?>">
</div>
</td>
</tr>
</tbody>
</table>
</div>
</fieldset>
<?php if($TPL_VAR["str_type"]=="doc"){?>
<div style="color:#504954; font-weight:bold; padding-top:4px" style="margin-bottom:10px">
웹페이지 설정
</div>
<fieldset>
<div class="" style="margin-top:5px;">
<table border="0" cellspacing="0" class="table table-bordered">
<tbody>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">상단 추가 내용</th>
<td>
<div class="item padding3">
<textarea name="str_menu_top" style="width:100%;height:80px;"><?php echo $TPL_VAR["str_menu_top"]?></textarea>
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">웹페이지 상단</th>
<td>
<div class="item padding3">
<input type="text" name="str_inc_file2" value="<?php echo $TPL_VAR["str_inc_file2"]?>" style="width:400px" placeholder="출력할 html,php,이미지 경로입력">
</div>
</td>
</tr>
<?php if($TPL_VAR["str_layout"]=="@sub_menu"){?>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">LNB 설정</th>
<td>
<div class="item padding3">
<input type="text" name="str_lnb_file" value="<?php echo $TPL_VAR["str_lnb_file"]?>" style="width:400px" placeholder="출력할 html,php 경로입력">
</div>
</td>
</tr>
<?php }?>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">웹페이지 설정</th>
<td>
<div class="item padding3">
<input type="text" name="str_inc_file" value="<?php echo $TPL_VAR["str_inc_file"]?>" style="width:400px" placeholder="출력할 html,php,이미지 경로입력">
</div>
</td>
</tr>
<tr class="hide">
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">내용</th>
<td>
<div class="item padding3">
<textarea name="str_text" style="width:100%;height:180px;"><?php echo $TPL_VAR["str_text"]?></textarea>
</div>
</td>
</tr>
<tr >
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">내용</th>
<td>
<div class="item padding3">
<a href="/admin/menu_adm/menu_docs/<?php echo $TPL_VAR["num_mcode"]?>?cate=<?php echo $TPL_VAR["num_cate"]?>" target="_blank" class="btn btn-xl btn-info">내용편집</a>
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">웹페이지 하단</th>
<td>
<div class="item padding3">
<input type="text" name="str_inc_file3" value="<?php echo $TPL_VAR["str_inc_file3"]?>" style="width:400px" placeholder="출력할 html,php,이미지 경로입력">
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">하단 추가 내용</th>
<td>
<div class="item padding3">
<textarea name="str_menu_bottom" style="width:100%;height:80px;"><?php echo $TPL_VAR["str_menu_bottom"]?></textarea>
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">레이아웃 설정</th>
<td>
<div class="item padding3">
<select name="str_layout">
<?php if($TPL_layout_LIST_1){foreach($TPL_VAR["layout_LIST"] as $TPL_K1=>$TPL_V1){?>
<?php if($TPL_K1!="admin"&&$TPL_K1!="main"){?>
<option value="@<?php echo $TPL_K1?>" <?php if(substr($TPL_VAR["str_layout"],1)==$TPL_K1){?>selected<?php }?>><?php echo $TPL_K1?></option>
<?php }?>
<?php }}?>
</select>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</fieldset>
<div class="hide" id="">
<div style="color:#504954; font-weight:bold; padding-top:4px" style="margin-bottom:10px">
모바일 웹페이지 설정
</div>
<fieldset>
<div class="" style="margin-top:5px;">
<table border="0" cellspacing="0" class="table table-bordered">
<tbody>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">모바일 상단</th>
<td>
<div class="item padding3">
<input type="text" name="str_mobile_inc_file" value="<?php echo $TPL_VAR["str_mobile_inc_file"]?>" style="width:400px" placeholder="출력할 html,php,이미지 경로입력">
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">모바일 내용</th>
<td>
<div class="item padding3">
<textarea name="str_mobile_text" style="width:100%;height:180px;"><?php echo $TPL_VAR["str_mobile_text"]?></textarea>
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">모바일 하단</th>
<td>
<div class="item padding3">
<input type="text" name="str_mobile_inc_file2" value="<?php echo $TPL_VAR["str_mobile_inc_file2"]?>" style="width:400px" placeholder="출력할 html,php,이미지 경로입력">
</div>
</td>
</tr>
</tbody>
</table>
</div>
</fieldset>
</div>
<?php }?>
<?php if($TPL_VAR["str_type"]=="link"){?>
<div style="color:#504954; font-weight:bold; padding-top:4px" style="margin-bottom:10px">
링크메뉴 설정
</div>
<fieldset>
<div class="form_table" style="margin-top:5px;">
<table border="0" cellspacing="0" class="table table-bordered">
<tbody>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">URL</th>
<td>
<div class="item padding3">
<input type="text" name="str_url" value="<?php echo $TPL_VAR["menu_url"]?>" size="45">
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">내용표시</th>
<td>
<div class="item padding3">
<label for="str_target1"><input type="radio" name="str_target" id="str_target1" value="_self"  <?php if($TPL_VAR["str_target"]=='_self'||$TPL_VAR["str_target"]==''){?>checked<?php }?> style="border:0px;">현재창에</label>
<label for="str_target2"><input type="radio" name="str_target" id="str_target2" value="_blank"<?php if($TPL_VAR["str_target"]=='_blank'){?>checked<?php }?> style="border:0px;">새창에</label>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</fieldset>
<?php }?>
<?php if($TPL_VAR["str_type"]=="board"){?>
<div style="color:#504954; font-weight:bold; padding-top:4px" style="margin-bottom:10px">
게시판 설정
</div>
<fieldset>
<div class="form_table" style="margin-top:5px;">
<table border="0" cellspacing="0" class="table table-bordered">
<tbody>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">레이아웃 설정</th>
<td>
<div class="item padding3">
<select name="str_layout">
<?php if($TPL_layout_LIST_1){foreach($TPL_VAR["layout_LIST"] as $TPL_K1=>$TPL_V1){?>
<?php if($TPL_K1!="admin"&&$TPL_K1!="main"){?>
<option value="@<?php echo $TPL_K1?>" <?php if(substr($TPL_VAR["str_layout"],1,100)==$TPL_K1){?>selected<?php }?>><?php echo $TPL_K1?></option>
<?php }?>
<?php }}?>
</select>
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">LNB 설정</th>
<td>
<div class="item padding3">
<input type="text" name="str_lnb_file" value="<?php echo $TPL_VAR["str_lnb_file"]?>" style="width:400px" placeholder="출력할 html,php 경로입력">
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">상단 파일 설정</th>
<td>
<div class="item padding3">
<input type="text" name="str_inc_file2" value="<?php echo $TPL_VAR["str_inc_file2"]?>" style="width:400px" placeholder="출력할 html,php 경로입력">
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">상단 추가 내용</th>
<td>
<div class="item padding3">
<textarea name="str_menu_top" style="width:100%;height:80px;"><?php echo $TPL_VAR["str_menu_top"]?></textarea>
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">※ 모바일 상단 내용</th>
<td>
<div class="item padding3">
<textarea name="str_mobile_text" style="width:100%;height:80px;"><?php echo $TPL_VAR["str_mobile_text"]?></textarea>
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">게시판 스킨</th>
<td>
<div class="item padding3">
<select name="str_skin" size="1" id="str_skin">
<option value="board" <?php if($TPL_VAR["str_skin"]=='board'){?>selected<?php }?>>일반형 게시판</option>
<option value="web_board" <?php if($TPL_VAR["str_skin"]=='web_board'){?>selected<?php }?>>웹진형 게시판</option>
<option value="gallery" <?php if($TPL_VAR["str_skin"]=='gallery'){?>selected<?php }?>>겔러리형 게시판</option>
<option value="review" <?php if($TPL_VAR["str_skin"]=='review'){?>selected<?php }?>>리뷰형 게시판</option>
<option value="media" <?php if($TPL_VAR["str_skin"]=='media'){?>selected<?php }?>>미디어형 게시판</option>
</select>
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">하단 추가 내용</th>
<td>
<div class="item padding3">
<textarea name="str_menu_bottom" style="width:100%;height:80px;"><?php echo $TPL_VAR["str_menu_bottom"]?></textarea>
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">하단 파일 설정</th>
<td>
<div class="item padding3">
<input type="text" name="str_inc_file3" value="<?php echo $TPL_VAR["str_inc_file3"]?>" style="width:400px" placeholder="출력할 html,php 경로입력">
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">페이지당 목록수</th>
<td>
<div class="item padding3">
<input type="text" name="num_listnum" value="<?php echo $TPL_VAR["num_listnum"]?>" class="">
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">카테고리 관리</th>
<td>
<div class="item padding3">
<input type="checkbox" name="str_category_use" value="1" <?php if($TPL_VAR["str_category_use"]==1){?> checked <?php }?>>사용
<script type="text/javascript">
// <![CDATA[
var cate_config_view = 'N';
function toggle_cate_config(){
if(cate_config_view=="N"){
$('#board_cate_v').show();$('#cateData').attr('src','/admin/menu_adm/board_category/<?php echo $TPL_VAR["mcode"]?>');
cate_config_view='Y';
}else{
$('#board_cate_v').hide()
cate_config_view='N';
}
}
// ]]>
</script>
<span class="btn_pack small " ><input type="button" value="카테고리 관리"   id="" class=" btn btn-default btn-xs  "  onclick="toggle_cate_config()"></span>
<div  id="board_cate_v" <?php if(!$TPL_VAR["str_category_use"]){?> style="display:none"<?php }?> >
<div style="border:1px solid #CECECE; width:300px;padding:5px;margin-top:10px">
<iframe name="cateData" id="cateData" <?php if($TPL_VAR["str_category_use"]){?>src="/admin/menu_adm/board_category/<?php echo $TPL_VAR["mcode"]?>"<?php }?> width="100%" height="170px" scrolling="no" frameborder=0></iframe>
</div>
</div>
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">카테고리 관리2</th>
<td>
<div class="item padding3">
<input type="checkbox" name="str_category_use2" value="1" <?php if($TPL_VAR["str_category_use2"]==1){?> checked <?php }?>>사용
<script type="text/javascript">
// <![CDATA[
var cate_config_view2 = 'N';
function toggle_cate_config2(){
if(cate_config_view=="N"){
$('#board_cate_v2').show();$('#cateData2').attr('src','/admin/menu_adm/board_category2/<?php echo $TPL_VAR["mcode"]?>');
cate_config_view2='Y';
}else{
$('#board_cate_v2').hide()
cate_config_view2='N';
}
}
// ]]>
</script>
<span class="btn_pack small " ><input type="button" value="카테고리 관리"   id="" class=" btn btn-default btn-xs  "  onclick="toggle_cate_config2()"></span>
<div  id="board_cate_v2" <?php if(!$TPL_VAR["str_category_use2"]){?> style="display:none"<?php }?> >
<div style="border:1px solid #CECECE; width:300px;padding:5px;margin-top:10px">
<iframe name="cateData2" id="cateData2" <?php if($TPL_VAR["str_category_use2"]){?>src="/admin/menu_adm/board_category2/<?php echo $TPL_VAR["mcode"]?>"<?php }?> width="100%" height="170px" scrolling="no" frameborder=0></iframe>
</div>
</div>
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">댓글사용여부</th>
<td>
<div class="item padding3">
<input type="checkbox" name="chr_comment" value="Y" <?php if($TPL_VAR["chr_comment"]=='Y'){?> checked <?php }?>> 사용하기
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">파일첨부</th>
<td>
<div class="item padding3">
<input type="checkbox" name="chr_upload" value="Y" <?php if($TPL_VAR["chr_upload"]=="Y"){?> checked<?php }?>> 사용하기
</div>
</td>
</tr>
<tr>
<th class="bg-light lt text-right w130 p-r10" style="vertical-align:middle;padding-right:10px">총 사용 용량</th>
<td>
<div class="item padding3">
<b class="bx1_text03"><?php if($TPL_VAR["max_disk"]){?><?php echo $TPL_VAR["max_disk"]?><?php }else{?>0 byte<?php }?></b>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</fieldset>
<?php }?>
<div style=";margin:10px 0 20px 0;float:left;width:100%" class="text-center">
<button type="button" class="btn btn-primary lt   m-b5   " id="" onclick="submit_data_op()">저장하기</button>
</div>
</form>
</div>
</div>
<script type="text/javascript">
var ifrContentsTimer;
$('#editorForm').keyup(function(event){
if(event.keyCode == '13'){
//submit_data_op();
}
})
function submit_data_op(){
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
url: '/admin/menu_adm/menu_option/<?php echo $TPL_VAR["mcode"]?>',
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
</script>
<br>
<br>