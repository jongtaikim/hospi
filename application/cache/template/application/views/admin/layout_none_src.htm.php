<?php /* Template_ 2.2.3 2016/07/28 14:34:18 /home/hosting_users/hospi/www/application/views/admin/layout_none_src.htm */?>
<!DOCTYPE html>
<html lang="ko" style="background-color:#fff">
<head>
<meta charset="utf-8" />
<title> [<?=_OID?>] <?=_ONAME?> - 관리자</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="/trunk/libs/assets/animate.css/animate.css" type="text/css" />
<link rel="stylesheet" href="/trunk/libs/assets/font-awesome/css/font-awesome.css" type="text/css" />
<link rel="stylesheet" href="/trunk/libs/jquery/waves/dist/waves.css" type="text/css" />
<link rel="stylesheet" href="/trunk/styles/material-design-icons.css" type="text/css" />
<link rel="stylesheet" href="/trunk/libs/jquery/bootstrap/dist/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="/trunk/styles/font.css" type="text/css" />
<link rel="stylesheet" href="/trunk/styles/app.css" type="text/css" />
<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico?1" />
<script src="/trunk/libs/jquery/jquery/dist/jquery.js"></script>
<style type="text/css" title="">
@charset "utf-8";
/* CSS Document */
/* reset */
body,div,ul,li,dl,dt,dd,ol,p,h1,h2,h3,h4,h5,h6,from{margin:0; padding:0;}
body{margin:0; padding:0;  font-family:normal Dotum,Dotum,tahoma,geneva,sans-serif; font-style:normal; color:#333;overflow-y:scroll;}
ul,ol,dl{list-style:none;}
/* 기본값 설정 */
a {text-decoration: none;}
ul,li,dl,dt,dd,p,table,tr,th,td,hr{list-style:none;margin:0;padding:0; border:0;}
img {border:0;vertical-align:top;}
</style>
</head>
<?php $this->print_("COMMON",$TPL_SCP,1);?>
<body style="overflow: auto;background-color:#fff">
<div style="margin:15px">
<?php $this->print_("CONTENT",$TPL_SCP,1);?>
</div>
<script type="text/javascript">
loading_start();
$(document).ready(function(){
try{
parent.height_resize($(document).height());
}catch (error) {
}
loading_end();
});
</script>
<script src="/trunk/libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<script src="/trunk/libs/jquery/waves/dist/waves.js"></script>
<script src="/trunk/scripts/ui-load.js"></script>
<script src="/trunk/scripts/ui-jp.config.js"></script>
<script src="/trunk/scripts/ui-jp.js"></script>
<script src="/trunk/scripts/ui-nav.js"></script>
<script src="/trunk/scripts/ui-toggle.js"></script>
<script src="/trunk/scripts/ui-form.js"></script>
<script src="/trunk/scripts/ui-waves.js"></script>
<script src="/trunk/scripts/ui-client.js"></script>
<script src="/trunk/scripts/php.js"></script>
<script src="/trunk/scripts/jquery.validate.min.js"></script>
<script src="/trunk/scripts/additional-methods.min.js"></script>
<script src="/trunk/scripts/messages_ko.js"></script>
<script src="/trunk/scripts/parsley.min.ko.js"></script>
<script src="/trunk/scripts/parsley.extend.js"></script>
<script type="text/javascript" src="/trunk/scripts/jstree.js"></script>
<script type="text/javascript" src="/trunk/scripts/jquery.url.js"></script>
<script type="text/javascript" src="/trunk/scripts/jquery.cookie.js"></script>
<script type="text/javascript" src="/trunk/scripts/jquery-ui-1.10.4.custom.min.js"></script>
</body>
</html>