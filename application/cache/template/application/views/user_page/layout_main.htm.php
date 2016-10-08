<?php /* Template_ 2.2.3 2016/08/17 16:17:36 /home/hosting_users/hospi/www/application/views/user_page/layout_main.htm */?>
<!DOCTYPE html>
<html lang="ko" class="white">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=1800px,user-scalable=yes, target-densitydpi=medium-dpi" />
<meta name="description" content="대표제품 MOTOmed, InMotion, Galileo, Qualisys, Optogait, IM(Interactive Metronome), TLP(The Listening Program)">
<meta name="naver-site-verification" content="bb6dc04d0368b1d5b712607a50ce4a1ebc3741e0"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="/uiset/assets/animate.css/animate.css" type="text/css" />
<link rel="stylesheet" href="/uiset/assets/font-awesome/css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="/uiset/assets/material-design-icons/material-design-icons.css" type="text/css" />
<link rel="stylesheet" href="/uiset/assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="/uiset/assets/styles/app.css" type="text/css" />
<link rel="stylesheet" href="/application/views/user_page/css/main.css" type="text/css" />
<!-- endbuild -->
<!-- jQuery -->
<script src="/uiset/libs/jquery/jquery/dist/jquery.js"></script>
<!--[if lt IE 9]> <script src="/trunk/scripts//ie/html5shiv.js"></script> <script src="/trunk/scripts/ie/respond.min.js"></script> <script src="/trunk/scripts/ie/excanvas.js"></script> <![endif]-->
<style type="text/css" title="">
@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
/* reset */
body,div,ul,li,dl,dt,dd,ol,p,h1,h2,h3,h4,h5,h6,from{margin:0; padding:0;font-family: "Nanum Gothic", sans-serif;}
</style>
<title><?=_TITLE?></title>
</head>
<body class="white">
<?php $this->print_("TOP_TOOL",$TPL_SCP,1);?>
<div style="clear:left"></div>
<div>
<?php $this->print_("TOP",$TPL_SCP,1);?>
<div style="clear:left"></div>
<div style="margin:0px auto;">
<?php $this->print_("CONTENT",$TPL_SCP,1);?>
</div>
</div>
<?php $this->print_("FOOT",$TPL_SCP,1);?>
<?php if($TPL_VAR["popup_contents"]){?>
<?php if($TPL_VAR["popup_use"]=='y'){?>
<div id="layer_popup" style="position: fixed; z-index: 90;  top: 209px; left: 50%; display: none;">
<div id="m3pop-m3pop" style="display:block;position:relative">
<div style="text-align:right;position:relative;">
<a href="#close" class="btn_ly_close"></a>
</div>
<div class="layerPopupBody" style="width:100%;height:100%;z-index:999;">
<div id="layer_popup_title" style="display: none;">팝업창 안내 공지</div>
<div class="white" id="popup_body"><?php echo $TPL_VAR["popup_contents"]?></div>
</div>
<div class="pop-ck-controller fbox pop-ck-closer" style="background-color:#000;padding:0px;padding-top:5px">
<p>
<input type="checkbox" name="killpop" id="chkagree" class="killpop m-l10 " >
<label for="chkagree" style="color:#fff">이 창을 <span id="num_kill_t">1</span>일동안 열지 않기</label>
</p>
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
if(!$.cookie('ck-pop1')){
$('#layer_popup,#layer_popup_ifr,#m3pop-m3pop').show();
$('#layer_popup').css('margin-left', "-"+($('#popup_body').width()/3)+'px' );
$('.btn_ly_close').click(function(){
$('#m3pop-m3pop').hide();
});
$('#chkagree').click(function(){
$.cookie('ck-pop1', '1', { expires : parseInt(1) });
$('#m3pop-m3pop').hide();
});
}
});
</script>
<?php }?>
<?php }?>
<script type="text/javascript">
// <![CDATA[
function ifr_view(url){
$('#ifrModal').modal('show');
$('#ifr_data').attr('src',url);
}
function popup_view(url,w,h){
if(!w) w = 800;
if(!h) h = 600;
cw=screen.availWidth;     //화면 넓이
ch=screen.availHeight;    //화면 높이
ml=(cw-w)/2;        //가운데 띄우기위한 창의 x위치
mt=(ch-h)/2;         //가운데 띄우기위한 창의 y위치
var myWindow = window.open(url, "tomew", "toolbar=no, scrollbars=yes, resizable=yes, top="+mt+", left="+ml+", width="+w+", height="+h);
}
// ]]>
</script>
<!-- Bootstrap -->
<script src="/uiset/libs/jquery/tether/dist/js/tether.min.js"></script>
<script src="/uiset/libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
<script src="/uiset/libs/jquery/underscore/underscore-min.js"></script>
<script src="/uiset/libs/jquery/routie/dist/routie.js"></script>
<script src="/uiset/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
<script src="/uiset/libs/jquery/PACE/pace.min.js"></script>
<script src="/application/views/user_page/scripts/ui-include.js"></script>
<script src="/application/views/user_page/scripts/app.js"></script>
<script src="/application/views/user_page/scripts/config.js"></script>
<script src="/application/views/user_page/scripts/config.lazyload.js"></script>
<script src="/application/views/user_page/scripts/palette.js"></script>
<script src="/application/views/user_page/scripts/ui-form.js"></script>
<script src="/application/views/user_page/scripts/ui-jp.js"></script>
<script src="/application/views/user_page/scripts/ui-load.js"></script>
<script src="/application/views/user_page/scripts/ui-nav.js"></script>
<script src="/application/views/user_page/scripts/ui-screenfull.js"></script>
<script src="/application/views/user_page/scripts/ui-scroll-to.js"></script>
<script src="/application/views/user_page/scripts/ui-toggle-class.js"></script>
<script src="/trunk/scripts/jquery.cookie.js"></script>
<script src="/application/views/user_page/js/common.js"></script>
<script type="text/javascript" src="/trunk/scripts/php.js"></script>
<script type="text/javascript" src="/trunk/scripts/app.src.js"></script>
<script type="text/javascript" src="/trunk/scripts/jquery.cookie.js"></script>
<!-- endbuild -->
</body>
</html>