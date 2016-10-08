<?php /* Template_ 2.2.3 2015/12/08 15:30:46 /disk1/home/hospi/www/application/views/board/skin/board/list_review.htm */
$TPL_gong_LIST_1=empty($TPL_VAR["gong_LIST"])||!is_array($TPL_VAR["gong_LIST"])?0:count($TPL_VAR["gong_LIST"]);
$TPL_TAB_BOARD_1=empty($TPL_VAR["TAB_BOARD"])||!is_array($TPL_VAR["TAB_BOARD"])?0:count($TPL_VAR["TAB_BOARD"]);?>
<link rel="stylesheet" type="text/css" href="/application/views/board/skin/board/style.css">
<?php if($TPL_VAR["admin_pre"]){?>
<script type="text/javascript">
// <![CDATA[
function checkSelected() {
form = document.forms['itemForm'];
ids = form.elements['ids[]'];
if (!ids) return false;
if (!ids.length) ids = [ids];
flag = false;
for (i = 0,cnt=ids.length; i<cnt; i++) {
if (ids[i].checked) {
flag = true;
break;
}
}
if(!flag) {
alert('항목을 선택하여 주십시오.');
return false;
}
return true;
}
function checkall() {
var all = document.getElementById("all").value;
if ( all == 'Y')
{
uncheckall()
return;
}else{
var form = document.itemForm;
for (i=0; i < form.elements.length; i++) {
if (form.elements[i].name =="ids[]") {
form.elements[i].checked = true;
}
}
document.itemForm.all.value = "Y";
return;
}
}
function uncheckall() {
var form = document.itemForm;
for (i=0; i < form.elements.length; i++) {
if (form.elements[i].name =="ids[]") {
form.elements[i].checked = false;
}
}
document.itemForm.all.value = "";
return;
}
function selectItem() {
form = document.forms['itemForm'];
if (!checkSelected()) return false;
if (!confirm('선택하신 작업을 실행 하시겠습니까?')) return false;
if(!$('mode')){
alert('작업을 선택하여 주세요.');
return false;
}
form.method="post";
form.submit();
}
// ]]>
</script>
<?php }?>
<?php echo $TPL_VAR["str_top"]?>
<!-- board list -->
<div id="boardList" class="clearfix">
<div class="head clearfix">
<p class="title txt-strong-B"><?php echo $TPL_VAR["str_title"]?></p>
<p class="count">total : <?php echo number_format($TPL_VAR["total"]+0)?></p>
</div>
<div class="listWrap clearfix">
<table cellpadding="0" cellspacing="0">
<thead>
<tr>
<th width="7.3%" scope="col" class="text-center">번호</th>
<th width="12%" scope="col" class="text-center">분류</th>
<th width="12%" scope="col" class="text-center">항목</th>
<th width="" scope="col" class="subject text-center">제목</th>
<th width="10%" scope="col" class="text-center">작성일</th>
<th width="10%" scope="col" class="text-center">조회</th>
</tr>
</thead>
<tbody>
<?php if($TPL_gong_LIST_1){foreach($TPL_VAR["gong_LIST"] as $TPL_V1){?>
<tr>
<td><strong>[공지]</strong></td>
<td><p class="title"><?php if($TPL_V1["is_recent"]){?> <img class="new" alt="새글" src="/application/views/board/skin/board/images/icon/ic_new.gif" width="10" height="9">&nbsp;&nbsp;<?php }?><a href="/user/board/read_view/<?php echo $TPL_V1["num_mcode"]?>/<?php echo $TPL_V1["num_serial"]?>?cate=<?php echo $TPL_VAR["cate"]?>&ch=<?php echo $_GET["ch"]?>"><strong><?php echo $TPL_V1["str_title"]?></strong></a></p></td>
<td><?php echo substr($TPL_V1["dt_date"],0,10)?></td>
</tr>
<?php }}?>
<?php if($TPL_TAB_BOARD_1){foreach($TPL_VAR["TAB_BOARD"] as $TPL_V1){?>
<tr>
<td><?php echo $TPL_V1["num"]?></td>
<td><?php echo $TPL_V1["str_category2"]?></td>
<td><?php echo $TPL_V1["str_category"]?></td>
<td><p class="title">
<?php if($TPL_V1["num_input_pass"]){?><img src="/application/views/board/skin/board/images/icon/secret.gif" alt="비밀 글" align="absmiddle" />&nbsp;&nbsp;<?php }?>
<?php if($TPL_V1["is_recent"]){?> <!--img class="new" alt="새글" src="/images/icon/ic_new.gif" width="10" height="9">&nbsp;&nbsp;--><?php }?>
<a href="/user/board/read_view/<?php echo $TPL_V1["num_mcode"]?>/<?php echo $TPL_V1["num_serial"]?>?cate=<?php echo $TPL_VAR["cate"]?>&ch=<?php echo $_GET["ch"]?>" class="board_view_link"><?php echo $TPL_V1["str_title"]?></a>
</p></td>
<td><?php echo substr($TPL_V1["dt_date"],0,10)?></td>
<td><?php echo number_format($TPL_V1["num_hit"])?></td>
</tr>
<?php }}else{?>
<tr>
<td  colspan="3" height="100px" align="center" style="text-align:center">글이 없습니다.</td>
</tr>
<?php }?>
</tbody>
</table>
</div>
</div>
<!--// board list-->
<div style="" class="clearfix">
<div class=" ">
<br>
<form method="get" id="search_form" action="/user/board/list_view/<?php echo $TPL_VAR["mcode"]?>?cate=<?php echo $_GET["cate"]?>&ch=<?php echo $_GET["ch"]?>">
<input type="hidden" name="ch" value="<?php echo $_GET["ch"]?>"/>
<div class="text-left f_l col-md-4" style="padding-left:0px">
<?php if($TPL_VAR["write_pre"]){?>
<a href="/user/board/write/<?php echo $TPL_VAR["mcode"]?>/<?=_QS?>" class="btn btn-default btn-xl">글쓰기</a>
<?php }?>
</div>
<div class="text-right f_r col-md-4" style="padding-right:0px;max-width:300px">
<div class="input-group m-b ">
<input type="text" class="form-control" name="search_value" value="<?php echo $TPL_VAR["search_value"]?>">
<span class="input-group-btn">
<button class="btn btn-dark waves-effect" type="button" onclick="$('#search_form').submit();">검색</button>
</span>
</div>
<input type="hidden" name="search_key" id="search_key" value="str_title"/>
</div>
</form>
</div>
</div>
<div class="  text-center m-t20 clearfix" >
<?$CI =& get_instance();echo $CI->webapp->pageings2( $TPL_VAR["total"], $TPL_VAR["listnum"], $TPL_VAR["page"],4);?>
</div>
<script type="text/javascript">
// <![CDATA[
$('#like_str_title').keyup(function(eventcode){
if(eventcode.keyCode=='13'){
$('#search_form').submit()
}
})
// ]]>
</script>