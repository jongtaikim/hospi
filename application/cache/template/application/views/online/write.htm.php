<?php /* Template_ 2.2.3 2016/08/02 20:03:23 /home/hosting_users/hospi/www/application/views/online/write.htm */?>
<link rel="stylesheet" type="text/css" href="/application/views/online/style.css">
<div class="section-contents clearfix">
<form name="tx_editor_form" id="tx_editor_form" method="post" accept-charset="<?=_CHARSET?>" enctype="multipart/form-data" style="">
<input type="hidden" name="mcode" value="<?php echo $TPL_VAR["mcode"]?>" required="false">
<input type="hidden" name="cate" value="<?php echo $_GET["cate"]?>" required="false">
<input type="hidden" name="idx" value="<?php echo $TPL_VAR["ind"]?>" required="false">
<fieldset>
<table border="1" cellspacing="0"  style="border-top: 2px solid #818181;  border-bottom: 1px solid #494949;" class="table  table-bordered">
<tbody>
<input type="hidden" name="db_subject" value="<?php echo $TPL_VAR["menu_title"]?>"/>
<?php if($_GET["db_title"]){?>
<script type="text/javascript">
$('#db_subject').val('<?php echo $_GET["db_title"]?>');
</script>
<?php }?>
<tr>
<th scope="row" style="width:100px;padding:15px">이름</th>
<td style="vertical-align:middle;padding-left:15px">
<div class="item">
<input type="hidden" name="db_id" value="<?php echo $_SESSION["USERID"]?>"/>
<input class="w200 form-control" title="이름" type="text" name="db_name" required="required" hname="이름" maxbyte="15" placeholder="이름입력">
</div>
</td>
</tr>
<tr>
<th scope="row" style="width:100px;padding:15px">전화번호</th>
<td style="vertical-align:middle;padding-left:15px">
<div class="item">
<input class="w280 form-control" title="전화번호" type="text" name="db_phone" id="db_phone" required="required" hname="전화번호" placeholder="전화번호 입력 ex) 010-0000-0000">
</div>
<script type="text/javascript">
$('#db_phone').change(function(){
var tmp_p = str_replace("-","",$(this).val());
console.log(strlen(tmp_p));
if(strlen(tmp_p) > 10){
tmp_p = substr(tmp_p,0,3)+'-'+substr(tmp_p,3,4)+'-'+substr(tmp_p,7,4);
}else{
tmp_p = substr(tmp_p,0,3)+'-'+substr(tmp_p,3,3)+'-'+substr(tmp_p,6,4);
}
$(this).val(tmp_p);
var rgEx = /(01[016789])[-](\d{4}|\d{3})[-]\d{4}$/g;
var strValue = $(this).val();
var chkFlg = rgEx.test(strValue);
if(!chkFlg){
alert("올바른 휴대폰번호가 아닙니다.");
$(this).focus();
return false;
}
});
</script>
</td>
</tr>
<tr>
<th scope="row" style="width:100px;padding:15px">이메일</th>
<td style="vertical-align:middle;padding-left:15px">
<div class="item">
<input class="w280 form-control" title="이메일" type="email" name="db_email" hname="이메일" placeholder="이메일 입력" >
</div>
</td>
</tr>
<!--<tr>
<th scope="row" style="width:100px;padding:15px">비밀번호</th>
<td style="vertical-align:middle;padding-left:15px">
<div class="item">
<input class="w280 form-control" title="비밀번호" type="password" name="db_pw" hname="비밀번호" required="required" placeholder="답변글을 확인하실때 필요합니다." >
</div>
</td>
</tr>-->
<tr>
<th scope="row" style="width:100px;padding:15px">제품명</th>
<td style="vertical-align:middle;padding-left:15px">
<div class="item">
<input class="w280 form-control" title="제품명" type="text" name="db_product_name" hname="제품명" placeholder="제품명 입력" value="<?php echo $_GET["product_name"]?>">
</div>
</td>
</tr>
<tr>
<th scope="row" style="width:100px;padding:15px">문의내용</th>
<td style="vertical-align:middle;padding-left:15px">
<div class="item">
<textarea name="content" rows="" cols="" class="form-control" style="width:100%;height: 200px"><?php echo $TPL_VAR["str_text"]?></textarea>
</div>
</td>
</tr>
</tbody>
</table>
<div style="text-align:center;margin-top:15px">
<input type="submit" id="" value="등록하기" class="btn btn-dark btn-xl">
<a href="javascript:history.go(-1)" class="btn btn-default btn-xl">취소</a>
</div>
</form>
</div>