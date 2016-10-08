<?php /* Template_ 2.2.3 2016/07/28 14:34:19 /home/hosting_users/hospi/www/application/views/admin/popup.htm */?>
<script type="text/javascript">
loading_start();
$(document).ready(function(){
loading_end();
});
</script>
<div style="width:1124px">
<div class="card">
<div class="card-heading bg-light lt">
<h2>팝업관리</h2>
<small>사이트에 개시할 팝업창을 관리합니다.</small>
</div>
<div class="card-body b-t ">
<div>
<!--content-->
<form name="editorForm" id="editorForm" method="POST" enctype="multipart/form-data">
<input type="hidden" name="PageNum" value="<?php echo $_GET["PageNum"]?>"/>
<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" class="tableTemp01" summary="">
<tbody>
<tr>
<td style="padding-right:20px">
<div class="form-group">
<label for="def_passwd">팝업 시작일</label>
<input type="date" size="30" name="popup_start"  value="<?php echo $TPL_VAR["popup_start"]?>" id="popup_start" hname="팝업시작일"  class="form-control" required/>
</div>
</td>
<td  style="padding-right:20px">
<div class="form-group">
<label for="def_passwd">팝업 종료일</label>
<input type="date" size="30" name="popup_end"  value="<?php echo $TPL_VAR["popup_end"]?>" id="popup_end" hname="팝업종료일"  class="form-control" required />
</div>
</td>
<td>
<div class="form-group">
<label for="def_passwd">팝업 사용여부</label>
<select name="popup_use" class="form-control">
<option value="n" <?php if($TPL_VAR["popup_use"]!='y'){?> selected<?php }?>>사용안함</option>
<option value="y" <?php if($TPL_VAR["popup_use"]=='y'){?> selected<?php }?>>사용함</option>
</select>
</div>
</td>
</tr>
<tr>
<td colspan="3">
<div class="" id="">
<?php $attr[name] ="contents";	$attr[height] ="250";	$attr[form] ="editorForm";	$attr[width] ="780";	$attr[sect] ="popup/popup";	$attr[content] ="application/cache/dynamic/application/views/admin/popup.htm/b290e1ac2e22cc7ab93f9c55c6da7865"; include 'application/libraries/src/daum_editor.php';?>
<div style="text-align:center">
<a href="javascript:saveContent();" class="btn btn-dark btn-xl">저장</a>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</form>
<!--content end-->
</div>
</div>
</div>
</div>