<?php /* Template_ 2.2.3 2015/12/14 13:33:34 /disk1/home/hospi/www/application/views/online/read.htm */?>
<link rel="stylesheet" type="text/css" href="/application/views/online/style.css">
<div class="section-contents clearfix">
<!-- Gallery View -->
<div id="galleryView" class="galleryType clearfix">
<div class="head clearfix">
<p class="title"><?php echo $TPL_VAR["title"]?></p>
<p class="date"><?php echo substr($TPL_VAR["date"],0,10)?> </p>
</div>
<div class="viewWrap clearfix">
<strong class="m-b20">문의글입니다.</strong>
<br>
<br>
<div class=" openEditorStyles" style="border:0px">
<?php echo $TPL_VAR["comment"]?>
</div>
</div>
<?php if($TPL_VAR["text"]){?>
<div class="viewWrap clearfix b-t" >
<strong class="m-b20">답글입니다.</strong>
<br>
<br>
<div class=" openEditorStyles" style="border:0px">
<?php echo $TPL_VAR["text"]?>
</div>
</div>
<?php }?>
<div class="btmWrap clearfix">
<div class="buttons">
<a href="/user/ctl_online/list_view/<?php echo $TPL_VAR["mcode"]?>?cate=<?php echo $_GET["cate"]?>" class="btn btn-dark btn-xl">List</a>
</div>
</div>
</div>
<!-- //Gallery View -->
</div>
<script type="text/javascript">
// <![CDATA[
$('.openEditorStyles').find('img').each(function(){
if($(this).width() >=300){
$(this).addClass('pointer');
$(this).click(function(){
d_alert('<div style="width:960px;height:600px;overflow:auto"><img src="'+$(this).attr('src')+'" style="max-width:960px;max-height:600px;border:3px solid #cdcdcd"></div>',960,600);
})
}
})
// ]]>
</script>