<?php /* Template_ 2.2.3 2016/07/28 14:34:22 /home/hosting_users/hospi/www/application/views/user_page/layout_top_tool.htm */?>
<?php if($_SESSION["ADMIN"]){?>
<style type="text/css" title="">
.nav-tabs{display:none}
</style>
<div style="padding-top:6px;background-color: #3C4356" class="bg-dark blue-grey-800 col-md-12  " id="top_admin_tool">
<div style="margin:0px auto;padding-left:20px">
<a href="/admin/menu_adm/menu/frame/?PageNum=030101" class="btn btn-xs btn-default f_l m-r10">컨텐츠 메뉴관리</a>
<?php if($TPL_VAR["mcode"]){?>
<a href="javascript:open_menu_op('<?php echo $TPL_VAR["mcode"]?>')" class="btn btn-xs btn-default f_l m-r10">메뉴옵션</a>
<a href="javascript:open_menu_op('<?php echo $TPL_VAR["mcode"]?>','menu_right')" class="btn btn-xs btn-default f_l m-r10">권한설정</a>
<?php }else{?>
<?php }?>
<a href="javascript:$('#top_admin_tool').hide()" class="f_r">
<i class="mdi-navigation-close m-l10 m-t5" style="font-size:20px"></i>
</a>
<a href="/adm" class="btn btn-xs btn-info f_r m-l10">관리자모드</a>
<a href="/admin/menu_adm/menu/board/?PageNum=030301" class="btn btn-xs btn-default f_r m-l10">게시판관리</a>
<a href="/admin/member_adm/member/1/?PageNum=020101" class="btn btn-xs btn-default f_r ">회원관리</a>
<a href="/admin/online_adm/list_view/?PageNum=040101" class="btn btn-xs btn-default f_r m-l10 m-r10">온라인상담</a>
</div>
</div>
<div style="clear:left"></div>
<div class="modal fade" id="menu_opModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content" style="width:720px">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="" style="font-size:14px">상세보기</h4>
</div>
<div class="modal-body " id="menu_op_body">
...
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal" style="font-size:14px">닫기</button>
</div>
</div>
</div>
</div>
<script type="text/javascript">
function open_menu_op(mcode,type){
$('#menu_opModal').modal({
keyboard: false
});
$('#bfModal2').modal('show');
open_menu_option(mcode,type);
}
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
$('#menu_op_body').load(url);
}
</script>
<?php }?>