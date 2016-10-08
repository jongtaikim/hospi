<?php /* Template_ 2.2.3 2016/07/28 14:34:18 /home/hosting_users/hospi/www/application/views/admin/left.htm */
$TPL_admin_MENU_1=empty($TPL_VAR["admin_MENU"])||!is_array($TPL_VAR["admin_MENU"])?0:count($TPL_VAR["admin_MENU"]);?>
<div id="nav" style="font-size:12px">
<nav ui-nav>
<ul class="nav">
<li class="nav-header m-v-sm hidden-folded">
관리자메뉴
</li>
<?php if($TPL_admin_MENU_1){$TPL_I1=-1;foreach($TPL_VAR["admin_MENU"] as $TPL_V1){$TPL_I1++;?>
<li <?php if($TPL_VAR["pn_1"]==$TPL_I1){?> <? if(_FUNCTION !="main"){?>class="active"<?}?><?php }?>>
<a md-ink-ripple>
<span class="pull-right text-muted">
<i class="fa fa-caret-down"></i>
</span>
<i class=" <?php echo $TPL_V1["icon"]?> i-10"></i>
<span class="font-normal"><?php echo $TPL_V1["title"]?></span>
</a>
<ul class="nav nav-sub">
<?php if(is_array($TPL_R2=$TPL_V1["submenu"])&&!empty($TPL_R2)){$TPL_I2=-1;foreach($TPL_R2 as $TPL_V2){$TPL_I2++;?>
<li>
<a md-ink-ripple href="<?php echo $TPL_V2["link"]?><?php if(!$TPL_V2["no_pn"]){?>/<?php echo $TPL_V2["pn"]?><?php }?>" style="margin-left:-42px;<?php if($TPL_VAR["pn_3"]==($TPL_I2+1)){?> font-weight: blod<?php }?>" target="<?php echo $TPL_V2["target"]?>" ><i class=" <?php echo $TPL_V2["icon"]?> m-r5"></i> <?php echo $TPL_V2["title"]?></a>
</li>
<?php }}?>
</ul>
</li>
<?php }}?>
</ul>
</nav>
</div>