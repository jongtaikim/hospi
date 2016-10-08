<?php /* Template_ 2.2.3 2016/07/28 14:36:26 /home/hosting_users/hospi/www/application/views/board/skin/board/write.htm */
$TPL_cate_LIST_1=empty($TPL_VAR["cate_LIST"])||!is_array($TPL_VAR["cate_LIST"])?0:count($TPL_VAR["cate_LIST"]);
$TPL_cate_LIST2_1=empty($TPL_VAR["cate_LIST2"])||!is_array($TPL_VAR["cate_LIST2"])?0:count($TPL_VAR["cate_LIST2"]);?>
<link rel="stylesheet" type="text/css" href="/application/views/board/skin/board/style.css">
<?php echo $TPL_VAR["str_top"]?>
<div id="cu_top"></div>
<div class="section-contents clearfix">
<form name="tx_editor_form" id="tx_editor_form" method="post" accept-charset="<?=_CHARSET?>" enctype="multipart/form-data" style="">
<input type="hidden" name="mcode" value="<?php echo $TPL_VAR["mcode"]?>" required="false">
<input type="hidden" name="cate" value="<?php echo $TPL_VAR["cate"]?>" required="false">
<input type="hidden" name="id" value="<?php echo $TPL_VAR["id"]?>" required="false">
<input type="hidden" name="ch" value="<?php echo $_GET["ch"]?>" required="false">
<fieldset>
<style type="text/css" title="">
.ss_table TD,TH {padding:15px}
</style>
<div class="form_table">
<table border="1" cellspacing="0"  style="border-top: 2px solid #818181;  border-bottom: 1px solid #494949;" class="table  table-bordered">
<tbody>
<tr>
<th scope="row" style="width:130px;padding:15px">Subject</th>
<td colspan="3" style="vertical-align:middle;padding-left:15px">
<div class="item">
<input class="form-control w500 f_l " title="제목" type="text" name="str_title" hname="제목" maxbyte="200" value="<?php echo $TPL_VAR["board_title"]?>" required="required">
&nbsp;
<input type="checkbox" name="num_input_pass"  id="num_input_pass" value = "1" <?php if($TPL_VAR["num_input_pass"]){?>checked<?php }?> style = "border:0px" class="m-l5">비밀글</label>
</div>
</td>
</tr>
<?php if($TPL_VAR["str_category_use"]){?>
<tr>
<th scope="row" style="width:130px;padding:15px">Category 1</th>
<td colspan="3" style="vertical-align:middle;padding-left:15px">
<div class="item">
<?php if($TPL_VAR["str_category_use"]){?>
<select name="str_category"  id="str_category" class="form-control w200 f_l" required="required">
<option value="">-카테고리-</option>
<?php if($TPL_cate_LIST_1){foreach($TPL_VAR["cate_LIST"] as $TPL_V1){?>
<option value="<?php echo $TPL_V1["str_category"]?>" <?php if($TPL_V1["str_category"]==$TPL_VAR["str_category"]){?> selected<?php }?>><?php echo $TPL_V1["str_category"]?></option>
<?php }}?>
</select>
<?php }?>
</div>
</td>
</tr>
<?php }else{?>
<input type="hidden" name="str_category" value="일반"/>
<?php }?>
<?php if($TPL_VAR["str_category_use2"]){?>
<tr>
<th scope="row" style="width:130px;padding:15px">Category 2</th>
<td colspan="3" style="vertical-align:middle;padding-left:15px">
<div class="item">
<?php if($TPL_VAR["str_category_use2"]){?>
<select name="str_category2"  id="str_category2" class="form-control w200 f_l" required="required">
<option value="">-카테고리-</option>
<?php if($TPL_cate_LIST2_1){foreach($TPL_VAR["cate_LIST2"] as $TPL_V1){?>
<option value="<?php echo $TPL_V1["str_category"]?>" <?php if($TPL_V1["str_category"]==$TPL_VAR["str_category2"]){?> selected<?php }?>><?php echo $TPL_V1["str_category"]?></option>
<?php }}?>
</select>
<?php }?>
</div>
</td>
</tr>
<?php }else{?>
<input type="hidden" name="str_category2" value="일반"/>
<?php }?>
<?php if(!$_SESSION["USERID"]){?>
<tr>
<th scope="row">아이디</th>
<td>
<div class="item">
<input class="i_text" title="아이디" type="text" name="str_user" hname="아이디" maxbyte="15" value="<?php echo $TPL_VAR["str_user"]?>" required>
</div>
</td>
<th scope="row" width="12%">비밀번호</th>
<td>
<div class="item">
<input class="i_text" title="비밀번호" type="password" name="str_pass" hname="비밀번호" maxbyte="30" value="<?php echo $TPL_VAR["str_pass"]?>" required>
</div>
</td>
</tr>
<tr>
<th scope="row">이름</th>
<td>
<div class="item">
<input class="i_text" title="이름" type="text" name="str_name" hname="이름" maxbyte="15" value="<?php echo $TPL_VAR["str_name"]?>" required>
</div>
</td>
<th scope="row" width="12%">이메일</th>
<td>
<div class="item">
<input class="i_text" title="이메일" type="text" name="str_email" hname="이메일" maxbyte="30" value="<?php echo $TPL_VAR["str_email"]?>" required>
</div>
</td>
</tr>
<?php }else{?>
<input type="hidden" name="str_name" value = "<?php echo $_SESSION["NAME"]?>" required="false"/>
<input type="hidden" name="str_pass" value = "<?php echo $_SESSION["PASSWORD"]?>" required="false"/>
<input type="hidden" name="str_email" value = "<?php echo $_SESSION["EMAIL"]?>" required="false"/>
<?php }?>
<?php if($TPL_VAR["admin_pre"]){?>
<tr>
<th scope="row" width="12%" style="width:130px;padding:15px">관리기능</th>
<td colspan="3" style="vertical-align:middle;padding-left:15px">
<div class="item">
<input type="radio" name="num_notice" value=""<?php if(!$TPL_VAR["num_notice"]){?> checked<?php }?> style = "border:0px" required="false">일반
<input type="radio" name="num_notice" value="1"<?php if($TPL_VAR["num_notice"]==1){?> checked<?php }?> style = "border:0px" required="false">
공지
날짜
<input type="date" name="dt_date" value="<?php if($TPL_VAR["dt_date"]){?><?php echo substr($TPL_VAR["dt_date"],0,10)?><?php }?>" style = "width:150px" class = "button" required="false">
조회수<input type="text" name="num_hit" value="<?php echo $TPL_VAR["num_hit"]?>" style = "width:40px" class = "button" required="false">
</div>
</td>
</tr>
<?php }?>
<?php if($TPL_VAR["chr_upload"]){?>
<tr>
<th scope="row" style="width:130px;padding:15px">썸네일</th>
<td colspan="3" style="vertical-align:middle;padding-left:15px">
<div class="item">
<input type="file" name="str_file_url1"  accept="image/*">
</div>
<?php if($TPL_VAR["str_file_url1"]){?>
<div class="m-t10" style="height:30px;overflow:hidden">
<img src="<?php echo $TPL_VAR["str_file_url1"]?>" style="width:50px"/> <input type="checkbox" name="del_str_file_url1" value="Y"> 삭제
</div>
<?php }?>
</td>
</tr>
<tr>
<th scope="row" style="width:130px;padding:15px">본문 첨부이미지</th>
<td colspan="3" style="vertical-align:middle;padding-left:15px">
<div class="item">
<input type="file" name="str_file_url2"  accept="image/*">
</div>
<?php if($TPL_VAR["str_file_url2"]){?>
<div class="m-t10" style="height:30px;overflow:hidden">
<img src="<?php echo $TPL_VAR["str_file_url2"]?>" style="width:50px"/> <input type="checkbox" name="del_str_file_url2" value="Y"> 삭제
</div>
<?php }?>
</td>
</tr>
<?php }?>
<?php if($TPL_VAR["str_skin"]=='media'){?>
<tr>
<th scope="row" style="width:130px;padding:15px">외부컨텐츠<br>(유튜브등..)</th>
<td colspan="3" style="vertical-align:middle;padding-left:15px">
<div class="item">
<input class="form-control w500 f_l " title="미디어" type="text" name="str_mov" hname="미디어" maxbyte="200" value="<?php echo $TPL_VAR["str_mov"]?>" required="required">
</div>
ex>https://youtu.be/PFkIX0Up9cM
</td>
</tr>
<?php }?>
</tbody>
</table>
</div>
<?php if($TPL_VAR["meodth"]=="reply"){?>
<strong>본문글</strong>
<div class="boardReadBody openEditorStyles" style="margin-top:4px">
<?php echo $TPL_VAR["str_text"]?>
</div>
<textarea name="content" style="display:none"><?php echo $TPL_VAR["str_text"]?></textarea>
<input type="hidden" name="meodth" value="<?php echo $TPL_VAR["meodth"]?>" required="false">
<strong>답변글</strong>
<?php $attr[name] ="str_re_text";	$attr[height] ="250";	$attr[form] ="tx_editor_form";	$attr[width] ="930";	$attr[sect] = $TPL_VAR["file_sect"];$attr[content] ="application/cache/dynamic/application/views/board/skin/board/write.htm/9c4cd13ffb3bd17bd9294d1dde47ab3c"; include 'application/libraries/src/daum_editor.php';?>
<?php }else{?>
<?php $attr[name] ="content";	$attr[height] ="250";	$attr[form] ="tx_editor_form";	$attr[width] ="930";	$attr[sect] = $TPL_VAR["file_sect"];$attr[content] ="application/cache/dynamic/application/views/board/skin/board/write.htm/f92dcfb1996f08342e1d6937126317cc"; include 'application/libraries/src/daum_editor.php';?>
<?php }?>
<div style="text-align:center;margin-top:20px">
<a href="javascript:saveContent();" class="btn btn-dark btn-xl">등록하기</a>
<a href="javascript:history.go(-1)" class="btn btn-default btn-xl">취소</a>
</div>
</form>
</div>