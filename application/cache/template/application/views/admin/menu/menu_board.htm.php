<?php /* Template_ 2.2.3 2016/07/28 14:35:17 /home/hosting_users/hospi/www/application/views/admin/menu/menu_board.htm */
$TPL_LIST_1=empty($TPL_VAR["LIST"])||!is_array($TPL_VAR["LIST"])?0:count($TPL_VAR["LIST"]);?>
<div class="" >
<div class="f_l" style="width:250px;margin-right:20px">
<div class="panel panel-default">
<div class="panel-heading bg-white">
게시판 목록<br>
</div>
<div class="panel-body pos_r">
<div class="pos_r b"  id="">
<div class="  " style="overflow:hidden">
<div id="container_body">
<div id="container" style="margin-bottom:100px">
<ul>
<li data-jstree='{ "selected" : false, "opened" : true }' id="node_0" mcode="0" level="0" subcu="<?php echo count($TPL_VAR["LIST"])?>" >
<strong class="text-info-dk">HOME</strong>
<ul>
<?php if($TPL_LIST_1){foreach($TPL_VAR["LIST"] as $TPL_V1){?>
<li id="node_<?php echo $TPL_V1["num_mcode"]?>" mcode="<?php echo $TPL_V1["num_mcode"]?>" cate="<?php echo $TPL_V1["num_cate"]?>"  level="1" subcu="<?php echo count($TPL_V1["sub"])?>" class="node_item <?php if($TPL_V1["num_view"]=='0'){?>opa70<?php }?>"  node_name="<?php echo $TPL_V1["str_title"]?>" ><?php if($TPL_V1["num_view"]=="0"){?>[숨김] <?php }?><?php echo $TPL_V1["str_title"]?>
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
</div>
</div>
</div>
</div>
</div>
<div class="f_l" id="menu_option" style=";font-size:12px;width:70%;min-width:900px">
<div class="panel panel-default">
<div class="panel-heading bg-white">
게시판 관리
</div>
<div class="panel-body pos_r " style="font-size:12px;">
<iframe name="board_ifr" src="" id="board_ifr" width="100%" height="800px" scrolling="no" frameborder=0 style="overflow:auto"></iframe>
</div>
</div>
</div>
</div>
<style type="text/css" title="">
#menu_option td,th {padding:5px;}
</style>
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
loading_start();
ref = $('#container').jstree(true);
//선택
$('#container').bind('select_node.jstree',function (event) {
dblclickt='';
get_select_node = ref.get_selected();
console.log($('#'+get_select_node).attr('level'));
//메뉴옵션
var mcode = $('#'+get_select_node).attr('mcode');
var cate = $('#'+get_select_node).attr('cate');
if(mcode){
open_menu_option(mcode,cate);
}
});
<?php if($TPL_LIST_1){$TPL_I1=-1;foreach($TPL_VAR["LIST"] as $TPL_V1){$TPL_I1++;?>
<?php if($TPL_I1==0){?>
open_menu_option('<?php echo $TPL_V1["num_mcode"]?>','<?php echo $TPL_V1["num_cate"]?>');
<?php }?>
<?php }}?>
});
}
/*
* 메뉴옵션 열기
*/
function open_menu_option(mcode,cate){
var url = "/user/board/list_view/"+mcode+"?cate="+cate+"&ch=none_src&title=게시판 관리";
$('#board_ifr').attr('src',url);
loading_end();
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
$('#container_body').load('/admin/menu_adm/menu/board/ #container',  function( response, status, xhr ){
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
function height_resize(size){
$('#board_ifr').height(size);
}
</script>