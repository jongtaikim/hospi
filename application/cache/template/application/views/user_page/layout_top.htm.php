<?php /* Template_ 2.2.3 2016/07/28 16:23:01 /home/hosting_users/hospi/www/application/views/user_page/layout_top.htm */
$TPL_site_menu_list_1=empty($TPL_VAR["site_menu_list"])||!is_array($TPL_VAR["site_menu_list"])?0:count($TPL_VAR["site_menu_list"]);?>
<?
$sub_view = trim(uri_string());
if($sub_view == "main") $sub_view='';
?>
<div class="col-md-12 p-b20 p-t20 white " id="">
<div class="col-md-6 col-md-offset-3 pos_r text-center" id="">
<a href="/">
<img src="/application/views/user_page/images/logo.png" alt="" />
</a>
<div class="gnb_menu pos_a" id="">
<a href="/" class=" " style="margin-left:4px" >HOME</a>
<?php if(!$_SESSION["USERID"]){?>
<a href="/user/member/member_login" class=" " style="margin-left:10px">LOGIN</a>
<?php }else{?>
<a href="/user/member/member_logout" class="m-r5 " style="margin-left:10px">LOGOUT</a>
<?php }?>
<a href="/user/ctl_online/item_add/1412/1?cate=1412&db_title=s3" class="" style="margin-left:10px">CONTACT US</a>
</div>
</div>
</div>
<div class="col-md-12  box-shadow  box-shadow-z0 top-nav" style=""  id="header">
<div class="cont1" id="">
<ul class="nav navbar-nav pull-left " style="width:100%;">
<?php if($TPL_site_menu_list_1){foreach($TPL_VAR["site_menu_list"] as $TPL_V1){?>
<?php if($TPL_V1["num_view"]==1){?>
<li class="nav-item dropdown dropdown-submenu text-center " style="width:23.3%">
<!--<li class="nav-item dropdown dropdown-submenu text-center " style="width:16%">-->
<a class="nav-link <?php if($TPL_V1["sub"]){?>dropdown-toggle<?php }?>" href="<?php echo $TPL_V1["menu_url"]?>" <?php if($TPL_V1["sub"]){?>data-toggle="dropdown"<?php }?>><strong style="font-size:14px"><?php echo $TPL_V1["str_title"]?></strong></a>
<?php if($TPL_V1["sub"]){?>
<ul	class="dropdown-menu pull-down text-color ng-scope animated fadeInUp" 	role="menu" style="margin-left: 35px;">
<li class="arrow top b-white" ></li>
<?php if(is_array($TPL_R2=$TPL_V1["sub"])&&!empty($TPL_R2)){foreach($TPL_R2 as $TPL_V2){?>
<?php if($TPL_V2["num_view"]==1){?>
<li class="dropdown-item"><a href="<?php echo $TPL_V2["menu_url"]?>"><?php echo $TPL_V2["str_title"]?></a></li>
<?php }?>
<?php }}?>
</ul>
<?php }?>
</li>
<?php }?>
<?php }}?>
</ul>
</div>
</div>