<?php /* Template_ 2.2.3 2016/07/28 14:34:22 /home/hosting_users/hospi/www/application/views/user_page/layout_lnb.htm */
$TPL_site_menu_list_1=empty($TPL_VAR["site_menu_list"])||!is_array($TPL_VAR["site_menu_list"])?0:count($TPL_VAR["site_menu_list"]);
$TPL_menu_LIST_1=empty($TPL_VAR["menu_LIST"])||!is_array($TPL_VAR["menu_LIST"])?0:count($TPL_VAR["menu_LIST"]);?>
<?
$s_view = substr(uri_string(),0,12);
?>
<? if($s_view != 'user/product'){ ?>
<nav class="navside white r box-shadow-z0 m-b " style="border:1px solid rgba(120, 130, 140, 0.13);">
<div class="nav-border b-primary" flex="">
<ul class="nav ng-scope" ui-nav="">
<?php if($TPL_site_menu_list_1){foreach($TPL_VAR["site_menu_list"] as $TPL_V1){?>
<?php if($TPL_V1["num_cate"]==substr($_GET["cate"],0,2)){?>
<li class="nav-header hidden-folded">
<span class="text-xl ">
<strong style="font-size:16px;"><i class="fa  fa-align-right"></i> <?php echo $TPL_V1["str_title"]?></strong></span>
</li>
<li><div class="b-b b m-v-sm"></div></li>
<?php if(is_array($TPL_R2=$TPL_V1["sub"])&&!empty($TPL_R2)){foreach($TPL_R2 as $TPL_V2){?>
<?php if($TPL_V2["sub"]){?>
<?php if($TPL_V2["num_view"]==1){?>
<li <?php if($TPL_V2["num_cate"]==substr($_GET["cate"],0,4)){?>class="active dker  "<?php }?>>
<a><span class="nav-caret text-muted"><i class="fa fa-caret-down"></i></span>
<span class="nav-text " ><strong style="color:;font-size:14px"><?php echo $TPL_V2["str_title"]?></strong></span>
</a>
<ul class="nav-sub">
<?php if(is_array($TPL_R3=$TPL_V2["sub"])&&!empty($TPL_R3)){foreach($TPL_R3 as $TPL_V3){?>
<li><div class="b-b b m-v-sm"></div></li>
<?php if($TPL_V3["sub"]){?>
<li <?php if($TPL_V3["num_cate"]==substr($_GET["cate"],0,6)){?>class="active over_plus  "<?php }else{?> class="over_plus"<?php }?>>
<a><span class="nav-caret text-muted">
<i class="fa fa-caret-down"></i></span>
<span class="nav-text " style="<?php if($TPL_V3["num_cate"]==substr($_GET["cate"],0,6)){?>color:#EE7701<?php }?>"><?php echo $TPL_V3["str_title"]?></span>
</a>
<ul class="nav-sub " style="margin-left:-48px;font-size:13px">
<?php if(is_array($TPL_R4=$TPL_V3["sub"])&&!empty($TPL_R4)){foreach($TPL_R4 as $TPL_V4){?>
<li><a  href="<?php echo $TPL_V4["menu_url"]?>"><span class="nav-text " style="<?php if($TPL_V4["num_cate"]==substr($_GET["cate"],0,8)){?>color:#EE7701<?php }?>">· <?php echo $TPL_V4["str_title"]?></span></a></li>
<?php }}?>
</ul>
</li>
<?php }else{?>
<li <?php if($TPL_V3["num_cate"]==substr($_GET["cate"],0,6)){?>class="active dker   "<?php }?>><a href="<?php echo $TPL_V3["menu_url"]?>"><span class="nav-text " style="<?php if($TPL_V3["num_cate"]==substr($_GET["cate"],0,6)){?>color:#EE7701<?php }?>"><?php echo $TPL_V3["str_title"]?></span></a></li>
<?php }?>
<?php }}?>
</ul>
</li>
<?php }?>
<?php }else{?>
<?php if($TPL_V2["num_view"]==1){?>
<li <?php if($TPL_V2["num_cate"]==substr($_GET["cate"],0,4)){?> class="active   "<?php }?>>
<a href="<?php echo $TPL_V2["menu_url"]?>"><span class="nav-text"><?php echo $TPL_V2["str_title"]?></span></a>
</li>
<?php }?>
<?php }?>
<?php if($TPL_V2["num_view"]==1){?>
<li><div class="b-b b m-v-sm"></div></li>
<?php }?>
<?php }}?>
<?php }?>
<?php }}?>
</ul>
</div>
</nav>
<div class="btn-group-vertical m-b hide" style="width: 100%">
<button type="button" class="btn white"  style="font-size:12px" onclick="location.href='/user/ctl_online/item_add/1410/1?cate=1410&db_title=s1'">
<i class="fa fa-file-text-o m-r5"></i>견적문의
</button>
<button type="button" class="btn white"  style="font-size:12px" onclick="location.href='/user/ctl_online/item_add/1411/1?cate=1411&db_title=s2'">
<i class="fa fa-check-circle-o"></i> A/S문의
</button>
<button type="button" class="btn white"  style="font-size:12px" onclick="location.href='/user/ctl_online/list_view/1412?cate=1412&db_title=s3'">
<i class="fa fa-question-circle m-r5"></i>Q&A
</button>
</div>
<?}else{?>
<nav class="navside white r box-shadow-z0 m-b " style="border:1px solid rgba(120, 130, 140, 0.13);">
<div class="nav-border b-primary" flex="">
<ul class="nav ng-scope" ui-nav="">
<li class="nav-header hidden-folded">
<span class="text-xl ">
<strong style="font-size:16px;"><i class="fa  fa-align-right"></i> 제품 소개</strong></span>
</li>
<li><div class="b-b b m-v-sm"></div></li>
<?php if($TPL_menu_LIST_1){foreach($TPL_VAR["menu_LIST"] as $TPL_V1){?>
<li class="<?php if($TPL_VAR["category"]==$TPL_V1["카테고리"]){?> active dker<?php }?>   ">
<a><span class="nav-caret text-muted"><i class="fa fa-caret-down"></i></span>
<span class="nav-text "><strong style="color:;font-size:14px"> <?php echo $TPL_V1["카테고리"]?></strong></span>
</a>
<ul class="nav-sub">
<?php if(is_array($TPL_R2=$TPL_V1["sub"])&&!empty($TPL_R2)){foreach($TPL_R2 as $TPL_V2){?>
<li><div class="b-b b m-v-sm"></div></li>
<li class="<?php if($TPL_VAR["seq"]==$TPL_V2["idx"]){?>active dker<?php }?>    "><a href="/user/product/view/<?php echo $TPL_V2["idx"]?>"><span class="nav-text " <?php if($TPL_VAR["seq"]==$TPL_V2["idx"]){?>style="color:#EE7701"<?php }?>><?php echo $TPL_V2["상품명2"]?><br>(<?php echo $TPL_V2["상품명"]?>)</span></a></li>
<li><div class="b-b b m-v-sm"></div></li>
<?php }}?>
</ul>
</li>
<li><div class="b-b b m-v-sm"></div></li>
<?php }}?>
</ul>
</div>
</nav>
<?}?>