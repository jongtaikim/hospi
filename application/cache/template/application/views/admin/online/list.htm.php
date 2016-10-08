<?php /* Template_ 2.2.3 2016/07/28 14:35:18 /home/hosting_users/hospi/www/application/views/admin/online/list.htm */
$TPL_LIST_1=empty($TPL_VAR["LIST"])||!is_array($TPL_VAR["LIST"])?0:count($TPL_VAR["LIST"]);?>
<div class="card table-responsive" style="max-width:1100px">
<div class="card-heading bg-light lt">
<h2>온라인 상담관리</h2>
<small>사이트에 등록된 상담을 답변 및 관리합니다.</small>
</div>
<div class="card-body b-t">
<div class="boardwrap">
<div class="" id="">
<?php echo $TPL_VAR["total"]?>건이 등록되었습니다.
</div>
<div class="" id="online_body">
<table class="table table-bordered table-striped1  table-hover table-condensed" border="1" cellspacing="0"  style="margin-top:5px;font-size:12px" >
<thead class="b-b b-2x bg-light lt ">
<tr>
<th width="7.8%" scope="col" class="text-center">번호</th>
<th width="23%" scope="col" class="text-center">분류</th>
<th width="" scope="col" class=" text-center subject">제목</th>
<th width="10%" scope="col" class="text-center">작성자</th>
<th width="17%" scope="col" class="text-center">작성일</th>
<th width="10%" scope="col" class="text-center">상태</th>
<th width="27%" scope="col" class="text-center">관리</th>
</tr>
</thead>
<tbody>
<?php if($TPL_LIST_1){foreach($TPL_VAR["LIST"] as $TPL_V1){?>
<tr>
<td class="text-center"><?php echo $TPL_V1["num"]?></td>
<td class="text-center"><?php echo $TPL_V1["subjectext"]?></td>
<td class="text-left" style="padding-left:10px">
<p class="title" style="width:500px;">
<?php echo $TPL_V1["title"]?>
</p>
</td>
<td class="text-center"><?php echo $TPL_V1["name"]?></td>
<td class="text-center"><?php echo substr($TPL_V1["date"],0,10)?></td>
<td class="text-center">
<?php if($TPL_V1["reply"]){?>
<img src="/images/reply.png">
<?php }else{?>
<img src="/images/noreply.png" >
<?php }?>
</td>
<td   class="last text-center">
<a  class="btn btn-xs btn-default online_modify_btn" idx="<?php echo $TPL_V1["ind"]?>">답변</a>
<a  class="btn btn-xs btn-default online_del_re_btn" idx="<?php echo $TPL_V1["ind"]?>">답변삭제</a>
<a  class="btn btn-xs btn-default online_del_btn" idx="<?php echo $TPL_V1["ind"]?>">삭제</a>
</td>
</tr>
<?php }}else{?>
<tr>
<td  colspan="7" height="100px" align="center" style="text-align:center">글이 없습니다.</td>
</tr>
<?php }?>
</tbody>
</table>
<div style="margin:10px 0 10px 0;width:100%" class="">
<?$CI =& get_instance();echo $CI->webapp->pageings2( $TPL_VAR["total"], $TPL_VAR["listnum"], $TPL_VAR["page"],3);?>
</div>
</div>
</div>
<div style="height:50px" class="b-t p-t10">
<div style="float:left;width:48%">
</div>
<div style="float:right;text-align:right;width:48%">
<form method="get" id="search_form" action="/admin/online_adm/list_view/1?PageNum=<?php echo $_GET["PageNum"]?>">
<div class="col-sm-7 text-right f_r" style="padding-right:4px">
<div class="input-group m-b ">
<div class="input-group-btn dropdown dropup">
<button type="button" class="btn btn-default dropdown-toggle waves-effect" type="button" id="sch_menu" data-toggle="dropdown" aria-expanded="true">
<span id="sch_menu_label">제목</span> <span class="caret"></span>
</button>
<ul class="dropdown-menu" role="menu" aria-labelledby="sch_menu">
<li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:select_sch_menu('title')">제목</a></li>
<li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:select_sch_menu('name')">작성자</a></li>
</ul>
<script type="text/javascript">
function select_sch_menu(val_name){
switch (val_name) {
case "userid": $('#search_key').val('title');;$('#sch_menu_label').text('제목'); break;
case "celphone": $('#search_key').val('name');;$('#sch_menu_label').text('작성자'); break;
}
}
<?php if($_GET["search_key"]){?>
select_sch_menu('<?php echo $_GET["search_key"]?>');
<?php }?>
</script>
</div><!-- /btn-group -->
<input type="text" class="form-control" name="search_value" id="search_value" value="<?php echo $TPL_VAR["search_value"]?>" >
<span class="input-group-btn">
<button class="btn btn-dark waves-effect" type="button" onclick="$('#search_form').submit();">검색</button>
</span>
</div>
<input type="hidden" name="search_key" id="search_key" value="title"/>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="modal fade" id="onlineModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content" style="width:720px">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="onlineModalLabel">전후사진 등록/수정</h4>
</div>
<div class="modal-body " id="online_modify_body">
...
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
<button type="button" class="btn btn-primary" id="online_submit_btn">저장하기</button>
</div>
</div>
</div>
</div>
<script type="text/javascript">
function list_init(){
$(document).ready(function(){
$('.online_del_btn').click(function(){
online_del($(this).attr('idx'));
});
$('.online_del_re_btn').click(function(){
online_del($(this).attr('idx'),'re_text');
});
$('.online_modify_btn').click(function(){
load_online_view($(this).attr('idx'));
});
$('.how_btn').click(function(){
reload_online_table();
});
});
}
list_init();
function online_del(idx , mode){
if(!mode) mode = 'all';
if(mode == 'all'){
var msg = "삭제 하시겠습니까?";
}else{
var msg = "답변만 삭제 하시겠습니까?";
}
if (confirm(msg)){
$.ajax({
type: 'GET',
url: '/admin/online_adm/item_del/'+mode+'/'+idx,
dataType: 'html',
success: function(html, status) {
alert('삭제하였습니다.');
reload_online_table()
},
error: function(request,status,error) {
alert(request.responseText);
}
});
}
}
function load_online_view(idx){
if(!idx) idx='';
$('#onlineModalLabel').text('답변하기');
$('#onlineModal').modal({
keyboard: false
});
$('#onlineModal').modal('show');
$('#online_modify_body').load('/admin/online_adm/item_view/'+idx);
}
function reload_online_table(){
loading_start();
var datas = $('.how_btn').serialize();
setTimeout(function(){
$('#online_body').load('/admin/online_adm/list_view/1?PageNum=<?php echo $_GET["PageNum"]?>&'+datas+' #online_body');
},300)
setTimeout(function(){
list_init();
loading_end();
},900);
}
</script>