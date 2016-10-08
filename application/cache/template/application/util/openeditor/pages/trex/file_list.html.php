<?php /* Template_ 2.2.3 2016/07/28 14:36:24 /home/hosting_users/hospi/www/application/util/openeditor/pages/trex/file_list.html */
$TPL_img_LIST_1=empty($TPL_VAR["img_LIST"])||!is_array($TPL_VAR["img_LIST"])?0:count($TPL_VAR["img_LIST"]);
$TPL_file_LIST_1=empty($TPL_VAR["file_LIST"])||!is_array($TPL_VAR["file_LIST"])?0:count($TPL_VAR["file_LIST"]);?>
<?php if($TPL_img_LIST_1){$TPL_I1=-1;foreach($TPL_VAR["img_LIST"] as $TPL_V1){$TPL_I1++;?>
<input type="hidden" name="attach_img_file[<?php echo $TPL_I1?>][names]" value="<?php echo $TPL_V1["str_refile"]?>" class="">
<?php }}?>
<?php if($TPL_file_LIST_1){$TPL_I1=-1;foreach($TPL_VAR["file_LIST"] as $TPL_V1){$TPL_I1++;?>
<input type="hidden" name="attach_file[<?php echo $TPL_I1?>][names]" value="<?php echo $TPL_V1["str_refile"]?>" class="">
<?php }}?>