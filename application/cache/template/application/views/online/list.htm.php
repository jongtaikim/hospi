<?php /* Template_ 2.2.3 2016/07/28 14:34:21 /home/hosting_users/hospi/www/application/views/online/list.htm */
$TPL_LIST_1=empty($TPL_VAR["LIST"])||!is_array($TPL_VAR["LIST"])?0:count($TPL_VAR["LIST"]);?>
<?php if($_GET["ch"]=='none'){?>
<!--오른쪽 ajax용 리스트-->
<li class="list_tit">제목<span>상태</span></li>
<?php if($TPL_LIST_1){foreach($TPL_VAR["LIST"] as $TPL_V1){?>
<li><p class="lock"></p><div style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;width:182px"><?php echo $TPL_V1["title"]?></div><div class="<?php if($TPL_V1["reply"]){?>ok<?php }else{?>no<?php }?>"></div></li>
<?php }}?>
<!--오른쪽 ajax용 리스트-->
<?php }else{?>
<link rel="stylesheet" type="text/css" href="/application/views/online/style.css">
<!-- board list -->
<div id="boardList" class="clearfix" >
<div class="listWrap clearfix">
<table cellpadding="0" cellspacing="0">
<thead>
<tr>
<th width="7.8%" scope="col" class="text-center">번호</th>
<th width="20%" scope="col" class="text-center">분류</th>
<th width="" scope="col" class=" text-center subject">제목</th>
<th width="10%" scope="col" class="text-center">작성자</th>
<th width="17%" scope="col" class="text-center">작성일</th>
<th width="10%" scope="col" class="text-center">상태</th>
</tr>
</thead>
<tbody>
<?php if($TPL_LIST_1){foreach($TPL_VAR["LIST"] as $TPL_V1){?>
<tr>
<td><?php echo $TPL_V1["num"]?></td>
<td><?php echo $TPL_V1["subjectext"]?></td>
<td>
<p class="title" style="width:500px;margin-top:12px">
<img src="/application/views/online/images/icon/secret.gif" alt="비밀 글" align="absmiddle" />&nbsp;
<?php if($_SESSION["ADMIN"]){?>
<a href="/user/ctl_online/item_view/<?php echo $TPL_VAR["mcode"]?>/<?php echo $TPL_V1["ind"]?>?cate=<?php echo $TPL_VAR["cate"]?>&db_title=<?php echo $_GET["db_title"]?>">
<?php }else{?>
<a data-toggle="modal" data-target="#onlineModal" onclick="init_pw_input('<?php echo md5($TPL_V1["pw"])?>','<?php echo $TPL_V1["ind"]?>')">
<?php }?>
<?php echo $TPL_V1["title"]?>
</a>
</p>
</td>
<td><?php echo $TPL_V1["name"]?></td>
<td><?php echo substr($TPL_V1["date"],0,10)?></td>
<td>
<?php if($TPL_V1["reply"]){?>
<img src="/images/reply.png">
<?php }else{?>
<img src="/images/noreply.png" >
<?php }?>
</td>
</tr>
<?php }}else{?>
<tr>
<td  colspan="6" height="100px" align="center" style="text-align:center">글이 없습니다.</td>
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
<form method="get" id="search_form" action="/user/ctl_online/list_view/<?php echo $TPL_VAR["mcode"]?>/1?cate=<?php echo $_GET["cate"]?>">
<div class="col-sm-4 " style="padding-left:0px">
<a class="btn btn-dark waves-effect" href="/user/ctl_online/item_add/<?php echo $TPL_VAR["mcode"]?>/1?cate=<?php echo $_GET["cate"]?>&db_title=<?php echo $_GET["db_title"]?>">등록하기</a>
</div>
<div class="col-sm-4 text-right f_r" style="padding-right:4px">
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
<div class="  text-center m-t20 clearfix" >
<?$CI =& get_instance();echo $CI->webapp->pageings2( $TPL_VAR["total"], $TPL_VAR["listnum"], $TPL_VAR["page"],4);?>
</div>
<script type="text/javascript">
$('#search_value').keyup(function(eventcode){
if(eventcode.keyCode=='13'){
$('#search_form').submit()
}
})
var b_pw=''
function init_pw_input(pw,idx){
setTimeout(function(){
b_pw = pw;
$('#cp_passwd').focus().val('');
$('#pw_submit_btn').unbind('click').click(function(){
if(md5($('#cp_passwd').val()) == b_pw ){
$.ajax({
type: 'GET',
url: '/user/ctl_online/set_tmp_passwd/online_pw_'+idx+'/Y',
dataType: 'html',
success: function(html, status) {
location.href='/user/ctl_online/item_view/<?php echo $TPL_VAR["mcode"]?>/'+idx+'?cate=<?php echo $_GET["cate"]?>&section=<?php echo $_GET["section"]?>';
}
});
}else{
alert('비밀번호가 일치하지 않습니다.');
$('#cp_passwd').focus();
}
});
},800);
}
</script>
<div class="modal fade" id="onlineModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" style="width:320px;margin-top:100px">
<div class="modal-content" style="width:320px">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title">비밀번호 확인</h4>
</div>
<div class="modal-body " >
<br>
<div class="md-form-group">
<input class="md-input"  type="password" value="" id="cp_passwd" placeholder="작성하실때 입력하신 비밀번호">
<label>비밀번호 입력</label>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
<button type="button" class="btn btn-primary" id="pw_submit_btn">확인</button>
</div>
</div>
</div>
</div>
<?php }?>