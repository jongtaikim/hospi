<?php /* Template_ 2.2.3 2016/07/28 14:36:26 /home/hosting_users/hospi/www/application/views/board/skin/board/read.htm */?>
<link rel="stylesheet" type="text/css" href="/application/views/board/skin/board/style.css">
<?php echo $TPL_VAR["str_top"]?>
<div id="cu_top"></div>
<div class="section-contents clearfix">
<!-- Gallery View -->
<div id="galleryView" class="galleryType clearfix">
<div class="head clearfix">
<p class="title"><?php echo $TPL_VAR["str_title"]?></p>
<p class="date"><?php echo substr($TPL_VAR["dt_date"],0,10)?> / Hit <?php echo number_format($TPL_VAR["num_hit"])?></p>
</div>
<div class="viewWrap clearfix">
<div class=" openEditorStyles" style="border:0px">
<?php if($TPL_VAR["str_file_url2"]){?>
<div class="text-center m-b20 p-b20 " id="">
<img src="<?php echo $TPL_VAR["str_file_url2"]?>" alt="" />
</div>
<?php }?>
<?php if(strstr($TPL_VAR["str_mov"],'//youtu.be/')){?>
<?
$utb_code =  $TPL_VAR["str_mov"];
$utb_code_ = explode("youtu.be/",$utb_code);
$utb_codes = $utb_code_[1];
?>
<div class="text-center m-b20 p-b20 " id="">
<iframe width="860" height="615" src="https://www.youtube.com/embed/<?=$utb_codes?>?autoplay=1" frameborder="0" allowfullscreen></iframe>
</div>
<?php }?>
<?php echo $TPL_VAR["str_text"]?>
</div>
</div>
<?
$param[src] ="filelist";	$param[sect] = $TPL_VAR["sect"];$param[template] ="";
include 'application/libraries/src/src_body.php';
?>
<div class="btmWrap clearfix">
<div class="buttons">
<a href="/user/board/list_view/<?php echo $TPL_VAR["num_mcode"]?><?=_QS?>" class="btn btn-dark btn-xl">목록으로</a>
<?php if($TPL_VAR["wirte_pre"]){?>
<a data-toggle="modal" data-target="#boardModal"  href="#" onclick="delete_cp()" class="btn btn-default btn-xl">삭제</a>
<a href="/user/board/write/<?php echo $TPL_VAR["num_mcode"]?>/<?php echo $TPL_VAR["num_serial"]?><?=_QS?>" class="btn btn-default btn-xl">수정</a>
<a href="/user/board/write/<?php echo $TPL_VAR["num_mcode"]?>/<?=_QS?>" class="btn btn-default btn-xl">글쓰기</a>
<?php }?>
</div>
</div>
</div>
<!-- //Gallery View -->
</div>
<script type="text/javascript">
$('.openEditorStyles').find('img').each(function(){
if($(this).width() >=300){
$(this).addClass('pointer');
$(this).click(function(){
d_alert('<div style="width:960px;height:600px;overflow:auto"><img src="'+$(this).attr('src')+'" style="max-width:960px;max-height:600px;border:3px solid #cdcdcd"></div>',960,600);
})
}
})
function delete_cp(){
$('#pw_submit_btn').unbind('click').click(function(){
//encodeURIComponent()
$.ajax({
type: 'POST',
url: '/user/board/delete_run/<?php echo $TPL_VAR["num_mcode"]?>/<?php echo $TPL_VAR["num_serial"]?>',
data : 'mcode=<?php echo $TPL_VAR["num_mcode"]?>&id=<?php echo $TPL_VAR["num_serial"]?>&password='+$('#cp_passwd').val(),
dataType: 'html',
success: function(html, status) {
//alert(html);
if(html == "OK"){
alert('삭제되었습니다.');
location.href='/user/board/list_view/<?php echo $TPL_VAR["num_mcode"]?>?ch=<?php echo $_GET["ch"]?>&cate=<?php echo $_GET["cate"]?>';
}else{
alert('비밀번호가 틀립니다.');
$('#cp_passwd').focus();
}
},
error: function(request,status,error) {
alert(request.responseText);
}
});
});
//
}
</script>
<div class="modal fade" id="boardModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" style="width:320px;margin-top:100px">
<div class="modal-content" style="width:320px">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title">비밀번호 확인</h4>
</div>
<div class="modal-body " >
<br>
<div class="md-form-group">
<input class="md-input"  type="password" value="<?php if($_SESSION["ADMIN"]){?>000<?php }?><?php if($_SESSION["USERID"]==$TPL_VAR["str_user"]){?>000<?php }?>" id="cp_passwd" placeholder="작성하실때 입력하신 비밀번호">
<label>비밀번호 입력</label>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
<button type="button" class="btn btn-primary" id="pw_submit_btn">확인</button>
</div>
</div>
</div>
</div>
<br>
<br>
<br>