<?php /* Template_ 2.2.3 2016/07/28 14:35:11 /home/hosting_users/hospi/www/application/libraries/src/tpl/file_list.htm */
$TPL_files_LIST_1=empty($TPL_VAR["files_LIST"])||!is_array($TPL_VAR["files_LIST"])?0:count($TPL_VAR["files_LIST"]);?>
<?php if($TPL_VAR["files_LIST"]){?>
<style type="text/css" title="">
.attach_fileList{width:100%;}
.attach_fileList .fileItem{margin:5px}
.attach_fileList .fileItem li{margin:10px;}
.attach_fileList .fileItem li .spec{font-size:11px}
</style>
<div class="attach_fileList">
<ul class="fileItem">
<?php if($TPL_files_LIST_1){foreach($TPL_VAR["files_LIST"] as $TPL_V1){?>
<?php if($TPL_V1["str_type"]!='image'){?>
<li><span class="btn_pack small " style="margin-right:20px"><a href="<?php echo $TPL_V1["pe_url"]?>" target="_self"  id="" class=" btn btn-default btn-xs  "  ="">다운로드</a></span> <img src="/images/icon/<?php echo strtolower($TPL_V1["str_ftype"])?>.gif" alt="" onerror="this.src='/images/icon/default.gif'" /> <a href="<?php echo $TPL_V1["pe_url"]?>"><?php echo $TPL_V1["str_upfile"]?></a> <span class="spec">(용량 : <?php echo $TPL_V1["bytes"]?> / 다운로드 : <?php echo $TPL_V1["num_down"]+0?>)</span>
</li>
<?php }?>
<?php }}?>
</ul>
</div>
<?php }?>