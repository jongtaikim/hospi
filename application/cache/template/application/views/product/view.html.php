<?php /* Template_ 2.2.3 2016/09/29 13:34:00 /home/hosting_users/hospi/www/application/views/product/view.html */?>
<style type="text/css" title="" xmlns: xmlns:>
.tables {margin-top:20px;margin-bottom: 20px}
.tables td{padding:10px;padding-top:18px;padding-left:25px}
.blur {
filter:blur(1px);
-ms-filter:blur(1px);
-moz-filter:blur(1px);
-webkit-filter:blur(1px);
}
</style>
<div class="col-md-12 " id="" style="margin-bottom:30px;min-height:500px">
<div class="text-left m-b20 ">
<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" class="tableTemp01 m-t30 m-b20" summary="^!">
<tbody>
<tr>
<td width="5%" style="padding-right:30px"><img src="/images/product/<?php echo $TPL_VAR["idx"]?>/logo.jpg" style="width:140px" /></td>
<td class="h4"><strong><?php echo $TPL_VAR["상품명2"]?></strong></td>
</tr>
<tr>
<td colspan="2" style="padding-top:20px;padding-bottom:10px;font-size:15px"><?php echo $TPL_VAR["상품설명"]?></td>
</tr>
</tbody>
</table>
</div>
<div class="box-shadow" style="border-radius:3px;overflow:hidden;border: 1px solid rgba(120, 130, 140, 0.14);padding:0px;margin:0px;margin-bottom:20px;" id="">
<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" class="tables  " summary="^!" style="width:100%; border:0px;margin:0px;color:#000" >
<tbody>
<tr>
<td rowspan="3" style="width: 250px;border-top:0px;padding:5px" class="b-r text-center">
<?php if($TPL_VAR["seq"]==8){?>
<img src="/images/product/<?php echo $TPL_VAR["idx"]?>/product.jpg" style="width: 27%;">
<?php }else{?>
<img src="/images/product/<?php echo $TPL_VAR["idx"]?>/product.jpg" style="width: 80%;">
<?php }?>
</td>
<td class="text-right _100" valign="top" style="width:140px;">품목명/모델명</td>
<td style="" valign="top"><?php echo $TPL_VAR["상품명2"]?> - <?php echo $TPL_VAR["상품명"]?> </td>
</tr>
<tr>
<td class="text-right _100 b-t" valign="top" style="">제조국/제조사
</td>
<td style="" valign="top" class="b-t"><?php echo $TPL_VAR["제조사"]?></td>
</tr>
<tr>
<td class="text-right b-t" valign="top" style="">적용분야</td>
<td style="" valign="top" class="b-t"><?php echo nl2br($TPL_VAR["적용분야"])?></td>
</tr>
</tbody>
</table>
</div>
<div class="blank_div m-t20 " id="">
<div class=" m-b20  ">
<div class="row no-gutter b-t b-l b-r b-b box-shadow">
<div class="col-xs-4 b-r">
<a class="p-a block text-center" href="/user/ctl_online/item_add/1410/1?cate=1410&db_title=s1&product_name=<?php echo urlencode($TPL_VAR["상품명2"])?>"><i class="material-icons md-24  m-v-sm inline"></i>
<span class="block">견적문의</span>
</a>
</div>
<div class="col-xs-4 b-r">
<a class="p-a block text-center" href="/user/ctl_online/item_add/1411/1?cate=1411&db_title=s2&product_name=<?php echo urlencode($TPL_VAR["상품명2"])?>">
<i class="material-icons md-24  m-v-sm inline"></i>
<span class="block">A/S문의</span>
</a>
</div>
<div class="col-xs-4">
<a class="p-a block text-center" href="/user/ctl_online/item_add/1812/1?cate=1812&db_title=s8&product_name=<?php echo urlencode($TPL_VAR["상품명2"])?>"><i class="material-icons md-24  m-v-sm inline"></i>
<span class="block">자료요청</span>
</a>
</div>
</div>
</div>
<div class="box box-shadow b-l b-r ">
<div class="box-header dker pos_r">
<h3 class="">제품특징</h3><small class="text-right pos_a" style="right:20px;top:10px"></small>
</div>
<div class="box-body b-t" style="line-height: 190%">
<?php echo nl2br($TPL_VAR["제품특징"])?>
</div>
</div>
<?
$seq =  $TPL_VAR["idx"];
if(is_file($_SERVER['DOCUMENT_ROOT']."/images/product/".$seq."/bg.jpg")){?>
<div class="box box-shadow  clearfix  b-l b-r">
<div class="box-header dker">
<h3>대표이미지</h3>
</div>
<div class="box-body text-center b-t f_l" style="width:100%">
<img src="/images/product/<?php echo $TPL_VAR["idx"]?>/bg.jpg" alt="" style="width:100%"/>
</div>
</div>
<?}?>
<?php if($TPL_VAR["이미지타이틀"]){?>
<div class="box box-shadow  clearfix  b-l b-r">
<div class="box-header dker">
<h3><?php echo $TPL_VAR["이미지타이틀"]?></h3>
</div>
<?
$seq =  $TPL_VAR["idx"];
$text1 =  $TPL_VAR["이미지설명"];
$text1s = explode(",",$text1);
for($ii=1; $ii<10; $ii++) {
$ia=$ii-1;
if(is_file($_SERVER['DOCUMENT_ROOT']."/images/product/".$seq."/p1/".$ii.$ii.".jpg")){
?>
<div class="box-body text-center b-t f_l" style="width:50%">
<img src="/images/product/<?php echo $TPL_VAR["idx"]?>/p1/<?=$ii?><?=$ii?>.jpg" <?php if($TPL_VAR["seq"]!="8"){?>style="width:100%"<?php }else{?>style="width:60%"<?php }?>>
<div class=" m-t10" style="font-weight: bold">
<?=$text1s[$ia]?>
</div>
</div>
<?}?>
<? if(is_file($_SERVER['DOCUMENT_ROOT'].'/images/product/'.$seq.'/p1/'.$ii.'.jpg')){
?>
<div class="box-body text-center b-t f_l" style="width:100%">
<img src="/images/product/<?php echo $TPL_VAR["idx"]?>/p1/<?=$ii?>.jpg" style="width:100%">
<div class=" m-t10" style="font-weight: bold">
<?=$text1s[$ia]?>
</div>
</div>
<?}?>
<?}?>
</div>
<?php }?>
<?php if($TPL_VAR["이미지타이틀2"]){?>
<div class="box box-shadow  clearfix  b-l b-r">
<div class="box-header dker">
<h3><?php echo $TPL_VAR["이미지타이틀2"]?></h3>
</div>
<?
$seq =  $TPL_VAR["idx"];
$text1 =  $TPL_VAR["이미지설명2"];
$text1s = explode(",",$text1);
for($ii=1; $ii<10; $ii++) {
$ia=$ii-1;
if(is_file($_SERVER['DOCUMENT_ROOT']."/images/product/".$seq."/p2/".$ii.$ii.".jpg")){
?>
<div class="box-body text-center b-t f_l" style="width:50%">
<img src="/images/product/<?php echo $TPL_VAR["idx"]?>/p2/<?=$ii?><?=$ii?>.jpg" style="width:100%">
<div class=" m-t10" style="font-weight: bold">
<?=$text1s[$ia]?>
</div>
</div>
<?}?>
<? if(is_file($_SERVER['DOCUMENT_ROOT'].'/images/product/'.$seq.'/p2/'.$ii.'.jpg')){
?>
<div class="box-body text-center b-t f_l" style="width:100%">
<img src="/images/product/<?php echo $TPL_VAR["idx"]?>/p2/<?=$ii?>.jpg" style="width:100%">
<div class=" m-t10" style="font-weight: bold">
<?=$text1s[$ia]?>
</div>
</div>
<?}?>
<?}?>
</div>
<?php }?>
<div class="box box-shadow  clearfix  b-l b-r">
<?
$seq =  $TPL_VAR["idx"];
$text1 =  $TPL_VAR["이미지설명3"];
$text1s = explode(",",$text1);
for($ii=1; $ii<10; $ii++) {
$ia=$ii-1;
if(is_file($_SERVER['DOCUMENT_ROOT']."/images/product/".$seq."/p1/".$ii.$ii.$ii.".jpg")){
?>
<div class="box-body text-center b-t f_l" style="width:33%">
<img src="/images/product/<?php echo $TPL_VAR["idx"]?>/p1/<?=$ii?><?=$ii?><?=$ii?>.jpg" style="width:100%">
<div class=" m-t10" style="font-weight: bold">
<?=$text1s[$ia]?>
</div>
</div>
<?}?>
<?}?>
</div>
</div>