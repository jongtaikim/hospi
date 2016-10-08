<?php /* Template_ 2.2.3 2016/07/28 14:35:17 /home/hosting_users/hospi/www/application/views/admin/menu/menu_listorder.htm */
$TPL_LIST_1=empty($TPL_VAR["LIST"])||!is_array($TPL_VAR["LIST"])?0:count($TPL_VAR["LIST"]);?>
<div class="panel panel-default">
<div class="panel-heading bg-white">
<i class="fa  fa-home"></i> <?php echo $TPL_VAR["menu_location"]?> &gt; <strong class="text-primary"><?php echo $TPL_VAR["str_title"]?></strong>
</div>
<div class="panel-body pos_r">
<?php if($TPL_VAR["mcode"]>1){?>
<ul class="nav nav-tabs">
<li >
<a href="javascript:open_menu_option('<?php echo $TPL_VAR["mcode"]?>','')">메뉴옵션</a>
</li>
<li >
<a href="javascript:open_menu_option('<?php echo $TPL_VAR["mcode"]?>','menu_right')">메뉴권한설정</a>
</li>
<li class="active">
<a href="javascript:open_menu_option('<?php echo $TPL_VAR["mcode"]?>','menu_listorder')">하위메뉴 순서변경</a>
</li>
</ul>
<?php }?>
<form name="editorForm" id="editorForm" method="post" enctype="multipart/form-data" style="margin-top:20px" >
<input type="hidden" name="cate" value="<?php echo $TPL_VAR["num_cate"]?>">
<input type="hidden" name="num_mcode" value="<?php echo $TPL_VAR["mcode"]?>">
<div class="" id="">
<div class="" >
<div style="color:#504954; font-weight:bold; padding-top:4px" style="margin-bottom:10px">
하위메뉴 순서변경
</div>
<br>
<div class="list-group list-group-sm list-group-gap sortable " style="min-height:400px">
<?php if($TPL_LIST_1){foreach($TPL_VAR["LIST"] as $TPL_V1){?>
<div class="list-group-item md-whiteframe-z0" style="cursor: move" >
<input type="hidden" name="cates[]" value="<?php echo $TPL_V1["num_cate"]?>">
<span class="pull-left media-xs"><i class="fa fa-sort text-muted fa m-r-sm " ></i></span>
<div class=""><?php echo $TPL_V1["str_title"]?></div>
</div>
<?php }}?>
</div>
<div class=" text-center b-t   p-b20" style=";bottom:40px;background-color:#fff;margin:0px auto">
<button type="button" class="btn btn-primary lt   m-b5  m-t20 " id="" onclick="submit_data_olist()">메뉴 순서 변경</button>
</div>
</div>
</div>
</form>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
// sortable
$( ".sortable" ).sortable();
});
$('#editorForm').keyup(function(event){
if(event.keyCode == '13'){
submit_data_olist();
}
})
function submit_data_olist(){
var validated_t = 'Y';
if(validated_t == "Y"){
$.ajax({
type : 'POST',
url: '/admin/menu_adm/menu_listorder/<?php echo $TPL_VAR["mcode"]?>',
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