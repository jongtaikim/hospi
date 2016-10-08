<?php /* Template_ 2.2.3 2015/12/08 06:30:48 /disk1/home/hospi/www/application/views/user_page/p_view.htm */
$TPL_LIST_1=empty($TPL_VAR["LIST"])||!is_array($TPL_VAR["LIST"])?0:count($TPL_VAR["LIST"]);?>
<?php if($TPL_VAR["contents"]){?>
<?php echo $TPL_VAR["contents"]?>
<?php }?>
<?php if($TPL_LIST_1){foreach($TPL_VAR["LIST"] as $TPL_V1){?>
<div class="box box-shadow box-shadow-z0">
<div class="box-header dker pos_r">
<h3 class=""><?php echo $TPL_V1["title"]?></h3><small class="text-right pos_a" style="right:20px;top:10px"><?php echo $TPL_V1["code"]?>
</small>
</div>
<div class="box-body b-t" style="text-align: center;">
<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" class="tableTemp01" summary="">
<tbody>
<tr>
<td style="width: 308px;"><p style="text-align: center;"><img src="<?php echo $TPL_V1["img"]?>"><br><br></p></td>
<td style="width: 392px;text-align:left" valign="top">
<?php echo strip_tags($TPL_V1["text"],"<TABLE>,<TR><TD><BR>")?>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<?php }}?>
<div class="  text-center m-t20 clearfix" >
<?$CI =& get_instance();echo $CI->webapp->pageings2( $TPL_VAR["total"], $TPL_VAR["listnum"], $TPL_VAR["page"],4);?>
</div>