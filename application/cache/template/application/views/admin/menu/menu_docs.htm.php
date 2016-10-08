<?php /* Template_ 2.2.3 2016/07/28 14:35:17 /home/hosting_users/hospi/www/application/views/admin/menu/menu_docs.htm */?>
<form name="editorForm" id="editorForm" method="post" enctype="multipart/form-data">
<input type="hidden" name="mcode" value="<?php echo $TPL_VAR["mcode"]?>"/>
<input type="hidden" name="cate" value="<?php echo $TPL_VAR["cate"]?>"/>
<input type="hidden" name="layout" value="<?php echo $TPL_VAR["layout"]?>"/>
<?php $attr[name] ="contents";	$attr[height] ="400";	$attr[form] ="editorForm";	$attr[width] ="880";	$attr[mode] ="simple";	$attr[sect] = $TPL_VAR["sect"];$attr[content] ="application/cache/dynamic/application/views/admin/menu/menu_docs.htm/b290e1ac2e22cc7ab93f9c55c6da7865"; include 'application/libraries/src/daum_editor.php';?>
<div style="text-align:center">
<input type="button" name="" value="저장" class="btn btn-info btn-sm" onclick="saveContent();">
</div>
</form>