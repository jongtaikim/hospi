<?php /* Template_ 2.2.3 2016/07/28 14:35:16 /home/hosting_users/hospi/www/application/views/admin/member/list_g.htm */
$TPL_LIST_1=empty($TPL_VAR["LIST"])||!is_array($TPL_VAR["LIST"])?0:count($TPL_VAR["LIST"]);?>
<div style="width:1124px">
<style type="text/css" title="">
td{text-align:center}
</style>
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
function deleteItem() {
form = document.forms['itemForm'];
if (!checkSelected()) return false;
if (!confirm('선택하신 항목을 삭제 하시겠습니까?')) return false;
form.elements['mode'].value = 'delete';
form.method="post";
form.submit();
}
function selectItem() {
form = document.forms['itemForm'];
if (!checkSelected()) return false;
if (!confirm('선택하신 작업을 실행 하시겠습니까?')) return false;
if(!$('#mode').val()){
alert('작업을 선택하여 주세요.');
return false;
}
//form.elements['mode'].value = 'delete';
form.method="post";
form.submit();
}
// ]]>
</script>
<div class="" id="ajax_info"></div>
<!--ui object -->
<style type="text/css" title="">
.div2{width:100%;float:left;margin-bottom:5px}
.div2 .left{width:30%;float:left;padding-top:5px}
.div2 .right{width:68%;float:right;text-align:right}
</style>
<div class="" id="" style="min-width:1200px">
<!--div class="col-md-2" id="">
<div class="card " >
<div class="card-heading bg-light lt">
<h2>검색</h2>
</div>
<div class="card-body b-t">
<div class="">
</div>
</div>
</div>
</div-->
<div class="" id="">
<div class="card table-responsive" >
<div class="card-heading bg-light lt">
<h2>회원관리</h2>
<small>사이트에 가입하여 활동중인 회원들의 정보를 관리합니다.</small>
</div>
<div class="card-body b-t">
<div class="">
<div class="div2">
<div class="left">총 <strong><?php echo $TPL_VAR["total"]+0?></strong>명이 검색되었습니다.</div>
<div class="right">
<span class="btn_pack small " ><a href="/admin/member_adm/member_excel" target="_self"  id="" class=" btn btn-default btn-xs  "  =""><i class='fa fa-file-excel-o m-r5'></i> 엑셀다운로드</a></span>
</div>
</div>
<div class="" id="member_data_table_div">
<form method="POST" id="itemForm" name="itemForm">
<input type="hidden" name="all" id="all" >
<input type="hidden" name="mode" id="mode" >
<input type="hidden" name="types" id="types" value="<?php echo $TPL_VAR["types"]?>">
<table class="table table-bordered table-striped1  table-hover table-condensed" border="1" cellspacing="0"  style="margin-top:5px;font-size:12px" id="member_data_table">
<thead class="b-b b-2x bg-light lt ">
<tr >
<th class="text-center "><input type="checkbox" name="" onclick ="checkall();"></th>
<th class="text-center">아이디</th>
<th class="text-center">이름</th>
<th class="text-center">생년월일</th>
<th class="text-center">지역</th>
<th class="text-center">이메일</th>
<th class="text-center">수신</th>
<th class="text-center">휴대폰</th>
<th class="text-center">수신</th>
<th class="text-center" >근무처</th>
<th class="text-center">면허번호</th>
<th class="text-center">가입날짜</th>
<th class="text-center">최종접속</th>
<th  class="last text-center">관리</th>
</tr>
</thead>
<tbody class=" ">
<?php if($TPL_LIST_1){foreach($TPL_VAR["LIST"] as $TPL_V1){?>
<tr>
<td ><input type="checkbox" name="ids[]" value="<?php echo $TPL_V1["userid"]?>"></td>
<td ><?php echo $TPL_V1["userid"]?></td>
<td ><?php echo $TPL_V1["username"]?></td>
<td ><?php echo $TPL_V1["birth2"]?></td>
<td ><?php echo $TPL_V1["addr"]?></td>
<td ><?php echo $TPL_V1["email"]?></td>
<td ><?php echo $TPL_V1["email_ch"]?></td>
<td ><?php echo $TPL_V1["celphone"]?>
</td>
<td ><?php echo $TPL_V1["ckyog"]?></td>
<td ><?php echo $TPL_V1["etc_1"]?></td>
<td ><?php echo $TPL_V1["etc_2"]?></td>
<td ><?php echo substr($TPL_V1["regdate"],0,10)?></td>
<td ><?php echo substr($TPL_V1["edit_date"],0,10)?></td>
<td   class="last">
<!--a href="javascript:sms_send('<?php echo $TPL_V1["celphone"]?>')" class="btn btn-xs btn-default"><i class=" mdi-action-question-answer i-10"></i></a-->
<a data-toggle="modal" data-target="#memberModal" class="btn btn-xs btn-default member_modify_btn" value="<?php echo $TPL_V1["userid"]?>">수정</a>
</td>
</tr>
<?php }}else{?>
<tr>
<td colspan="14" align="center" height="100px" class="last">회원이 없습니다.</td>
</tr>
<?php }?>
</tbody>
</table>
</form>
</div>
<div style="margin:10px 0 10px 0;width:100%" class="">
<?$CI =& get_instance();echo $CI->webapp->pageings2( $TPL_VAR["total"], $TPL_VAR["listnum"], $TPL_VAR["page"]);?>
</div>
<div style="height:50px" class="b-t p-t10">
<div style="float:left;width:48%">
<div class="col-sm-2 text-right f_ㅣ" id="">
<div class="input-group m-b ">
<div class="input-group-btn dropdown dropup">
<button type="button" class="btn btn-default dropdown-toggle waves-effect" data-toggle="dropdown" ><span id="mode_menu">작업을 선택하세요.</span><span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="javascript:$('#mode').val('');$('#mode_menu').text('작업을 선택하세요.')">선택안함</a></li>
<li role="presentation" class="divider"></li>
<li><a href="javascript:$('#mode').val('delete');$('#mode_menu').text('선택한 건을 삭제')">선택한 건을 삭제</a></li>
</ul>
</div><!-- /btn-group -->
<span class="input-group-btn">
<button class="btn btn-dark waves-effect" type="button" onclick="selectItem();">적용하기</button>
</span>
</div>
</div>
</div>
<div style="float:right;text-align:right;width:48%">
<form method="get" id="search_form" action="/admin/member_adm/member/1/?PageNum=<?php echo $_GET["PageNum"]?>">
<div class="col-sm-6 text-right f_r">
<div class="input-group m-b ">
<div class="input-group-btn dropdown dropup">
<button type="button" class="btn btn-default dropdown-toggle waves-effect" type="button" id="sch_menu" data-toggle="dropdown" aria-expanded="true">
<span id="sch_menu_label">아이디</span> <span class="caret"></span>
</button>
<ul class="dropdown-menu" role="menu" aria-labelledby="sch_menu">
<li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:select_sch_menu('userid')">아이디</a></li>
<li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:select_sch_menu('username')">이름</a></li>
<li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:select_sch_menu('celphone')">전화번호</a></li>
<li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:select_sch_menu('addr')">지역</a></li>
</ul>
<script type="text/javascript">
function select_sch_menu(val_name){
switch (val_name) {
case "userid": $('#search_key').val('userid');;$('#sch_menu_label').text('아이디'); break;
case "username": $('#search_key').val('username');;$('#sch_menu_label').text('이름'); break;
case "celphone": $('#search_key').val('celphone');;$('#sch_menu_label').text('전화번호'); break;
case "celphone": $('#search_key').val('addr');;$('#sch_menu_label').text('지역'); break;
}
}
<?php if($_GET["search_key"]){?>
select_sch_menu('<?php echo $_GET["search_key"]?>');
<?php }?>
</script>
</div><!-- /btn-group -->
<input type="text" class="form-control" name="search_value" value="<?php echo $TPL_VAR["search_value"]?>" >
<span class="input-group-btn">
<button class="btn btn-dark waves-effect" type="button" onclick="$('#search_form').submit();">검색</button>
</span>
</div>
<input type="hidden" name="search_key" id="search_key" value="userid"/>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content" style="width:720px">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">회원정보 수정</h4>
</div>
<div class="modal-body " id="member_modify_body">
...
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
<button type="button" class="btn btn-primary" id="member_submit_btn">저장하기</button>
</div>
</div>
</div>
</div>
<script type="text/javascript">
$('.member_modify_btn').click(function(){
load_member_data($(this).attr('value'));
});
function load_member_data(userid){
//console.log(userid);
$('#member_modify_body').load('/admin/member_adm/member_view/'+userid);
}
function reload_member_table(){
$( "#member_data_table_div" ).load( "<?php echo $_SERVER["REQUEST_URI"]?> #member_data_table" );
}
</script>
</div>