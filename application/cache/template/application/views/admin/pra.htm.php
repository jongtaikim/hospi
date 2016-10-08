<?php /* Template_ 2.2.3 2016/07/28 14:34:19 /home/hosting_users/hospi/www/application/views/admin/pra.htm */?>
<script type="text/javascript">
loading_start();
$(document).ready(function(){
loading_end();
});
</script>
<div style="width:1124px">
<div class="card">
<div class="card-heading bg-light lt">
<h2>약관관리</h2>
<small>사이트 회원가입시 회원들이 동의할 약관을 설정합니다.</small>
</div>
<div class="card-body b-t">
<div>
<!--content-->
<form name="editorForm" id="editorForm" method="POST" enctype="multipart/form-data">
<ul class="nav nav-tabs m-b20">
<li <?php if($TPL_VAR["mode"]=="member"){?>class="active"<?php }?>>
<a href="/admin/site_adm/pra/member/?PageNum=<?php echo $TPL_VAR["PageNum"]?>">회원약관</a>
</li>
<li <?php if($TPL_VAR["mode"]!="member"){?>class="active"<?php }?>>
<a href="/admin/site_adm/pra/prict/?PageNum=<?php echo $TPL_VAR["PageNum"]?>">개인정보 취급방침</a>
</li>
</ul>
<?php if($TPL_VAR["mode"]=="member"){?>
<?php $attr[name] ="str_text";	$attr[height] ="250";	$attr[form] ="editorForm";	$attr[width] ="780";	$attr[sect] ="par/member";	$attr[content] ="application/cache/dynamic/application/views/admin/pra.htm/f92dcfb1996f08342e1d6937126317cc"; include 'application/libraries/src/daum_editor.php';?>
<?php }else{?>
<?php $attr[name] ="str_text2";	$attr[height] ="250";	$attr[form] ="editorForm";	$attr[width] ="780";	$attr[sect] ="par/prict";	$attr[content] ="application/cache/dynamic/application/views/admin/pra.htm/ebf0e760c8938f21581740567c6d4c73"; include 'application/libraries/src/daum_editor.php';?>
<?php }?>
<div style="text-align:center">
<a href="javascript:saveContent();" class="btn btn-dark btn-xl">저장</a>
</div>
</form>
<!--content end-->
</div>
</div>
</div>
<div class="">
<div class="panel panel-default">
<div class="panel-heading bg-white">
ㆍ회원들에가 고지할 각종 약관을 관리합니다.<br>
ㆍ개인정보보호정책은 민감한 부분이오니 신중히 입력해주시기 바랍니다.<br>
</div>
</div>
</div>
</div>