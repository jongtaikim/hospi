<?php /* Template_ 2.2.3 2016/07/28 14:36:24 /home/hosting_users/hospi/www/application/util/openeditor/pages/trex/image_ver1.html */
$TPL_file_LIST_1=empty($TPL_VAR["file_LIST"])||!is_array($TPL_VAR["file_LIST"])?0:count($TPL_VAR["file_LIST"]);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Daum에디터 - 이미지 첨부</title>
<script src="/application/util/openeditor/js/popup_2.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="/application/util/openeditor/css/popup.css" type="text/css"  charset="utf-8"/>
<script type="text/javascript">
// <![CDATA[
function done() {
if (typeof(execAttach) == 'undefined') { //Virtual Function
return;
}
<?php if($TPL_file_LIST_1){foreach($TPL_VAR["file_LIST"] as $TPL_V1){?>
var _mockdata = {
'imageurl': '/data/files/<?php echo $TPL_V1["file_name"]?>',
'filename': '<?php echo $TPL_V1["client_name"]?>',
'filesize': <?php echo round($TPL_V1["file_size"])?>,
'imagealign': 'C',
<?php if($TPL_V1["image_width"]){?>
'width':<?php echo $TPL_V1["image_width"]?>,
'height':<?php echo $TPL_V1["image_height"]?>,
<?php }?>
'originalurl': '/data/files/<?php echo $TPL_V1["file_name"]?>',
'thumburl': '/data/files/<?php echo $TPL_V1["file_name"]?>',
'filemime': '<?php echo $TPL_V1["file_type"]?>',
};
execAttach(_mockdata);
_mockdata="";
<?php }}?>
closeWindow();
}
function initUploader(){
var _opener = PopupUtil.getOpener();
if (!_opener) {
alert('잘못된 경로로 접근하셨습니다.');
return;
}
var _attacher = getAttacher('image', _opener);
registerAction(_attacher);
}
initUploader();
// ]]>
</script>
<style type="text/css" title="">
.upFild{width:240px;border:1px solid #cdcdcd;margin-bottom:5px}
</style>
</head>
<body >
<form method="post" action="/plug_daum_editor_upload/uploadCom/" enctype="multipart/form-data" >
<input type="hidden" name="str_sect"  id="str_sect" value="<?php echo $TPL_VAR["str_sect"]?>">
<script type="text/javascript">
// <![CDATA[
$('#str_sect').val(opener.$('#org_sect').val());
// ]]>
</script>
<div class="wrapper">
<div class="header">
<h1>사진 첨부</h1>
</div>
<div class="body">
<dl class="alert">
<dt>사진 첨부 확인</dt>
<dd>
<input type="file" name="upfile_image1" class="upFild" accept="image/*"><br>
<input type="file" name="upfile_image2" class="upFild" accept="image/*"><br>
<input type="file" name="upfile_image3" class="upFild" accept="image/*"><br>
<input type="file" name="upfile_image4" class="upFild" accept="image/*"><br>
<input type="file" name="upfile_image5" class="upFild" accept="image/*"><br>
<input type="file" name="upfile_image6" class="upFild" accept="image/*"><br>
<input type="file" name="upfile_image7" class="upFild" accept="image/*"><br>
<input type="file" name="upfile_image8" class="upFild" accept="image/*"><br>
<input type="file" name="upfile_image9" class="upFild" accept="image/*"><br>
<input type="file" name="upfile_image10" class="upFild" accept="image/*"><br>
</dd>
</dl>
</div>
<div class="footer">
<p><a href="#" onclick="closeWindow();" title="닫기" class="close">닫기</a></p>
<ul>
<li class="submit">
<span class="btn_pack medium " ><input type="submit" value="업로드"  id="btnSubmit" class=" btn btn-default btn-xs  "  =""></span>
</li>
<li class="cancel" style="margin-left:5px">
<span class="btn_pack medium " ><input type="button" value="취소"   id="" class=" btn btn-default btn-xs  "  onclick="closeWindow();"></span>
</li>
</ul>
</div>
</div>
</form>
<script type="text/javascript">
// <![CDATA[
initUploader();
<?php if($TPL_VAR["error"]){?>
alert('<?php echo strip_tags($TPL_VAR["error"])?>');
<?php }else{?>
<?php if($TPL_VAR["file_LIST"]){?>
done();
<?php }?>
<?php }?>
document.getElementById('str_sect').value = opener.document.getElementById('sect').value
// ]]>
</script>
</body>
</html>