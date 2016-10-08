<?php /* Template_ 2.2.3 2016/07/28 14:35:17 /home/hosting_users/hospi/www/application/views/admin/menu/menu_frame.htm */
$TPL_LIST_1=empty($TPL_VAR["LIST"])||!is_array($TPL_VAR["LIST"])?0:count($TPL_VAR["LIST"]);?>
<div class="" style="min-width:1200px">
<div class="col-md-3 pos_f" style="width:420px">
<div class="panel panel-default">
<div class="panel-heading bg-white">
홈페이지 컨텐츠 메뉴<br>
</div>
<div class="panel-body pos_r">
<div class="pos_r b"  id="">
<div class="  " style="overflow:hidden" id="treebody">
<div id="container_body">
<div id="container" style="margin-bottom:100px">
<ul>
<li data-jstree='{ "selected" : false, "opened" : true }' id="node_0" mcode="0" level="0" subcu="<?php echo count($TPL_VAR["LIST"])?>" >
<strong class="text-info-dk">HOME</strong>
<ul>
<?php if($TPL_LIST_1){foreach($TPL_VAR["LIST"] as $TPL_V1){?>
<li id="node_<?php echo $TPL_V1["num_mcode"]?>" mcode="<?php echo $TPL_V1["num_mcode"]?>" level="1" subcu="<?php echo count($TPL_V1["sub"])?>" class="node_item <?php if($TPL_V1["num_view"]=='0'){?>opa70<?php }?>"  node_name="<?php echo $TPL_V1["str_title"]?>" ><?php if($TPL_V1["num_view"]=="0"){?>[숨김] <?php }?><?php echo $TPL_V1["str_title"]?>
<?php if(is_array($TPL_R2=$TPL_V1["sub"])&&!empty($TPL_R2)){foreach($TPL_R2 as $TPL_V2){?>
<ul>
<li id="node_<?php echo $TPL_V2["num_mcode"]?>" mcode="<?php echo $TPL_V2["num_mcode"]?>" level="2" subcu="<?php echo count($TPL_V2["sub"])?>" class="node_item <?php if($TPL_V2["num_view"]=='0'){?>opa70<?php }?>"  node_name="<?php echo $TPL_V2["str_title"]?>"><?php if($TPL_V2["num_view"]=="0"){?>[숨김] <?php }?><?php echo $TPL_V2["str_title"]?>
<?php if(is_array($TPL_R3=$TPL_V2["sub"])&&!empty($TPL_R3)){foreach($TPL_R3 as $TPL_V3){?>
<ul>
<li id="node_<?php echo $TPL_V3["num_mcode"]?>" mcode="<?php echo $TPL_V3["num_mcode"]?>" subcu="<?php echo count($TPL_V3["sub"])?>" level="3" class="node_item <?php if($TPL_V3["num_view"]=='0'){?>opa70<?php }?>"  node_name="<?php echo $TPL_V3["str_title"]?>"><?php if($TPL_V3["num_view"]=="0"){?>[숨김] <?php }?><?php echo $TPL_V3["str_title"]?>
<?php if(is_array($TPL_R4=$TPL_V3["sub"])&&!empty($TPL_R4)){foreach($TPL_R4 as $TPL_V4){?>
<ul>
<li id="node_<?php echo $TPL_V4["num_mcode"]?>" mcode="<?php echo $TPL_V4["num_mcode"]?>" subcu="<?php echo count($TPL_V4["sub"])?>" level="4" class="node_item <?php if($TPL_V4["num_view"]=='0'){?>opa70<?php }?>"  node_name="<?php echo $TPL_V4["str_title"]?>"><?php if($TPL_V4["num_view"]=="0"){?>[숨김] <?php }?><?php echo $TPL_V4["str_title"]?>
</li>
</ul>
<?php }}?>
</li>
</ul>
<?php }}?>
</li>
</ul>
<?php }}?>
</li>
<?php }}?>
</ul>
</li>
</ul>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
tree_init();
});
</script>
</div>
<div class=" text-center b-t   p-b20" style=";bottom:40px;background-color:#fff;margin:0px auto">
<button type="button" class="btn btn-primary lt btn-lx  m-b5  m-t20 node_ok-btn1" id="" onclick="addmenu()" data-toggle="modal" data-target="#menuModal" disabled>메뉴생성</button>
<button type="button" class="btn btn-light lt btn-lx  m-b5  m-t20 node_ok-btn2" id="" onclick="deletes()" disabled>삭제</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-7" id="menu_option" style=";font-size:12px;margin-left:400px">
</div>
</div>
<style type="text/css" title="">
#menu_option td,th {padding:5px;}
</style>
<div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">메뉴생성</h4>
</div>
<div class="modal-body " id="menu_modify_body">
...
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
<button type="button" class="btn btn-primary" id="menu_submit_btn">저장하기</button>
</div>
</div>
</div>
</div>
<script type="text/javascript">
var get_select_node ;
var ref = '';
/*
* 트리 초기화
*/
function tree_init(){
$('#container').jstree({
"core" : {
"animation" : 200,
"themes" : { "stripes" : true },
'initially_open':["root"]
},
"types" : {
"default" : {
"icon" : "fa fa-folder text-warning"
}
},
"plugins" : [  "search", "types" , "themes", "state"]
});
$(document).ready(function(){
ref = $('#container').jstree(true);
//선택
$('#container').bind('select_node.jstree',function (event) {
dblclickt='';
get_select_node = ref.get_selected();
console.log($('#'+get_select_node).attr('level'));
//메뉴옵션
var mcode = $('#'+get_select_node).attr('mcode');
if(mcode){
open_menu_option(mcode);
}
//메뉴 버튼 활성화/비활성화
if($('#'+get_select_node).attr('level') <4 ){
$('.node_ok-btn1 ').attr('disabled',false);
}else{
$('.node_ok-btn1 ').attr('disabled',true);
}
if($('#'+get_select_node).attr('subcu') <1 ){
$('.node_ok-btn2 ').attr('disabled',false);
}else{
$('.node_ok-btn2 ').attr('disabled',true);
}
});
});
}
/*
* 메뉴옵션 열기
*/
function open_menu_option(mcode,type){
if(!type){
var url = "/admin/menu_adm/menu_option/"+mcode;
}
if(type=='menu_right'){
var url = "/admin/menu_adm/menu_right/"+mcode;
}
if(type=='menu_listorder'){
var url = "/admin/menu_adm/menu_listorder/"+mcode;
}
if(type=='menu_docs'){
var url = "/admin/menu_adm/menu_docs/"+mcode;
}
if(mcode=='0'){
var url = "/admin/menu_adm/menu_listorder/"+mcode;
}
$('#menu_option').load(url);
}
/*
* 선택된 노드
*/
function select_cate(code){
if(code){
var instance = $('#container').jstree(true);
instance.deselect_all();
instance.select_node(code);
/*$('#sch_rebody').hide();
$('#container').show();
$('#sch_q').val('');*/
}
}
/*
* 트리 새로고침
*/
function reload_tree(){
$('#container_body').load('/admin/menu_adm/menu/frame/ #container',  function( response, status, xhr ){
//console.log(status);
if(status == 'success'){
tree_init();
}
});
}
/*
* 메뉴삭제
*/
function deletes(){
if($('#'+get_select_node).attr('subcu') > 0){
alert('하위메뉴가 있는 메뉴는 삭제할 수 없습니다.');
return false;
}else{
if($('#'+get_select_node).attr('mcode')){
if (!confirm('메뉴를 삭제합니다. 정말 실행하시겠습니까?\n\n(※ 게시판일 경우 데이터도 모두 삭제됩니다.)')) return false;
if($('#'+get_select_node).attr('mcode')) {
//encodeURIComponent()
$.ajax({
type: 'GET',
url: '/admin/menu_adm/menu_delete/'+$('#'+get_select_node).attr('mcode'),
dataType: 'json',
success: function(data, status) {
if(data.result=='ok'){
reload_tree();
}else{
alert(data.error_msg);
location.reload();
}
}
});
}
}
}
}
/*
* 메뉴생성
*/
function addmenu(){
var mcode = $('#'+get_select_node).attr('mcode');
if(!mcode){
var url = "/admin/menu_adm/menu_add/";
}else{
var url = "/admin/menu_adm/menu_add/"+mcode;
}
$('#menu_modify_body').load(url);
$('#menu_submit_btn').text('메뉴생성하기');
}
$('#treebody').height($(window).height()-260);
$(document).resize(function(){ $('#treebody').height($(window).height()-260); });
</script>