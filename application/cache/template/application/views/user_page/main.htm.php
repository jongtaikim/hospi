<?php /* Template_ 2.2.3 2016/08/17 15:43:40 /home/hosting_users/hospi/www/application/views/user_page/main.htm */
$TPL_gong_LIST_1=empty($TPL_VAR["gong_LIST"])||!is_array($TPL_VAR["gong_LIST"])?0:count($TPL_VAR["gong_LIST"]);
$TPL_main_LIST_1=empty($TPL_VAR["main_LIST"])||!is_array($TPL_VAR["main_LIST"])?0:count($TPL_VAR["main_LIST"]);?>
<div style="clear:left"></div>
<div class=" carousel slide auto b-t" id="main_vis" >
<ol class="carousel-indicators hide">
<li data-target="#main_vis" data-slide-to="0" class="active"></li>
<li data-target="#main_vis" data-slide-to="1"></li>
</ol>
<ul class="carousel-inner opa00 animated fadeIn" style="padding:0px;magin-bottom:0px" >
<li class="item active">
<div style="background:url(/application/views/user_page/images/vis1.jpg) no-repeat center top;width:100%;height:629px" class="pos_r " >
<div class="pos_a opa00 main_v_text main_v_text1 animated fadeInUp" style="top:42%;left:49%" ani="fadeInUp" delay="700" >
<img src="/application/views/user_page/images/vis_text1.png" alt="" />
</div>
<div class="pos_a  main_v_text main_v_text2 fadeIn animated" style="top:78%;left:49%" ani="fadeIn" delay="1500" >
<a href="/user/page/doc/1310?cate=1310">
<img src="/application/views/user_page/images/vis_text2.png" alt="" />
</a>
</div>
</div>
</li>
<li class="item ">
<div style="background:url(/application/views/user_page/images/main_visual/bg.jpg) no-repeat center top;width:100%;height:629px">
<div class="text-center opa00 main_v_text main_v_text1 " style="margin:0px auto;width:400px;padding-top:70px" ani="fadeIn" delay="700"  >
<img src="/application/views/user_page/images/main_visual/txt_01.png" alt="" />
</div>
<div class="text-center opa00 main_v_text main_v_text2" style="margin:0px auto;width:917px;padding-top:40px" ani="fadeIn" delay="1200" >
<img src="/application/views/user_page/images/main_visual/txt_02.png" alt="" />
</div>
<div class="text-center opa00 main_v_text main_v_text3" style="margin:0px auto;width:997px;padding-top:40px;color:#fff" ani="fadeIn" delay="1500" >
`재활이 곧 희망이다` 라는 의미를 되새기며, 고객의 행복을 함께 만들어가는 하스피입니다.<br>
20여년간 축적된 의료기기의 기술과 경험을 바탕으로 국민건강의 질을 향상시키는데
기여할 수 있도록 차별화된 제품을 끊임없이 발굴하고 보급하는 데 앞장서겠습니다.
</div>
</div>
</li>
</ul>
</div>
<script type="text/javascript">
$(document).ready(function(){
var inits = '';
$('#main_vis').carousel({  interval: 5000 }).on('slide.bs.carousel', function () {
$('.main_v_text').hide().css({"opacity":0, "filter": "alpha(opacity = 0)"});
//console.log(111);
setTimeout(function(){
$('.main_v_text1').addClass('animated fadeIn').show().animate({"opacity":1, "filter": "alpha(opacity = 100)"},500);;
},500);
setTimeout(function(){
$('.main_v_text2').addClass('animated fadeIn').show().animate({"opacity":1, "filter": "alpha(opacity = 100)"},500);;
},1200);
setTimeout(function(){
$('.main_v_text3').addClass('animated fadeIn').show().animate({"opacity":1, "filter": "alpha(opacity = 100)"},500);;
},1800);
inits = 'y';
});
});
</script>
<div class="notice_area  cont2 " style="margin-bottom:20px">
<div class="col-md-3" style="width:20%;padding-right:20px" >
<a href="#">
<img src="/application/views/user_page/images/notice_title.gif" alt="" />
</a>
</div>
<div class="col-md-4" style="width:38%" >
<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0"  class="main_notice">
<tbody>
<?php if($TPL_gong_LIST_1){foreach($TPL_VAR["gong_LIST"] as $TPL_V1){?>
<tr>
<td>
<img src="/application/views/user_page/images/notice_but.gif" alt="" class="m-r10" /> <a href="/user/board/read_view/<?php echo $TPL_V1["num_mcode"]?>/<?php echo $TPL_V1["num_serial"]?>?cate=1315&ch="><?php echo $TPL_V1["str_title"]?> </a>
</td>
</tr>
<?php }}?>
</tbody>
</table>
</div>
<div class="col-md-5" style="width:40%">
<div class="col-md-6 over_plus" style="padding:10px"><a href="/user/ctl_online/item_add/1410/1?cate=1410&db_title=s1"><img src="/application/views/user_page/images/banner1.gif" alt="" /></a></div>
<div class="col-md-6 over_plus" style="padding:10px"><a href="/user/ctl_online/item_add/1411/1?cate=1411&db_title=s2"><img src="/application/views/user_page/images/banner2.gif" alt="" /></a></div>
<div class="col-md-6 over_plus" style="padding:10px"><a href="/user/ctl_online/item_add/1412/1?cate=1412&db_title=s3"><img src="/application/views/user_page/images/banner3.gif" alt="" /></a></div>
<div class="col-md-6 over_plus" style="padding:10px"><a href="/user/ctl_online/item_add/1812/1?cate=1812&db_title=s8"><img src="/application/views/user_page/images/banner4.gif" alt="" /></a></div>
</div>
</div>
<div style="clear:left"></div>
<div class="main_middle_area hide" id="">
<div class="cont2">
<div class="col-md-3" style="width:20%;padding-right:20px" >
<a href="#">
<img src="/application/views/user_page/images/middle_title01.png" alt="" />
</a>
</div>
<div class="col-md-9"  style="width:80%;"   >
<div class="col-md-4 opa00 "  ani="fadeInUp" delay="300">
<img src="/application/views/user_page/images/middle_banner_01.png" alt="" />
</div>
<div class="col-md-4 opa00 "  ani="fadeInUp" delay="700">
<img src="/application/views/user_page/images/middle_banner_02.png" alt="" />
</div>
<div class="col-md-4 opa00 "  ani="fadeInUp" delay="1200">
<img src="/application/views/user_page/images/middle_banner_03.png" alt="" />
</div>
</div>
</div>
</div>
<div style="clear:left"></div>
<div class="main_middle_area2 b-t" id="" style="background-color: #fafafa;height:710px">
<div class="cont2">
<div class="col-md-4" style="padding-right:20px" >
<img src="/application/views/user_page/images/middle_title02.png" alt="" />
</div>
<?php if($TPL_main_LIST_1){$TPL_I1=-1;foreach($TPL_VAR["main_LIST"] as $TPL_V1){$TPL_I1++;?>
<div class="col-md-4  opa00 over_opa m-b30"   ani="fadeInUp" delay="<?php echo (($TPL_I1+1)*200)?>">
<div class=" ">
<div class="pull-left m-r" style="display: table">
<div class=" b" style="width:116px;height:116px;overflow:hidden;border-radius: 300px;border:2px solid #ededed;background-color: #fff">
<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" class=" " summary="^!" style="height: 116px">
<tbody>
<tr>
<td>
<img src="/images/product/<?php echo $TPL_V1["idx"]?>/product.jpg" alt="" style="width: 116px;vertical-align: middle;margin:auto;display: " />
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="clear">
<h4 class="m-a-0 text-lg _300" style="height:164px">
<a href="/user/product/view/<?php echo $TPL_V1["idx"]?>">
<div class="text1"><?php echo $TPL_V1["상품명2"]?></div>
<div class="text2" <?php if($TPL_V1["idx"]==13){?>style="font-size:14px"<?php }?> <?php if($TPL_V1["idx"]==18){?>style="font-size:16px"<?php }?>><?php if($TPL_V1["idx"]==13){?>InMotion 3.0 Wrist Robot / 2.0 Shoulder-Elbow Robot<?php }else{?><?php echo $TPL_V1["상품명"]?><?php }?></div>
<div class="text3" style="font-size: 12px" >
<?php echo nl2br($TPL_V1["상품설명"])?>
</div>
</a>
</h4>
</div>
</div>
</div>
<?php }}?>
</div>