<?php /* Template_ 2.2.3 2016/07/28 14:34:18 /home/hosting_users/hospi/www/application/views/admin/login.htm */?>
<div class="center-block w-xxl w-auto-xs p-v-md">
<div class="navbar">
<div class="navbar-brand m-t-lg text-center">
<span class="m-l inline"><?=_ONAME?></span>
</div>
</div>
<div class="p-lg panel md-whiteframe-z1 text-color m">
<div class="m-b text-sm">
관리자 계정으로 로그인해주세요.
</div>
<form name="form" method="post" >
<div class="md-form-group float-label">
<input type="text" class="md-input" ng-model="user.email" name="userid" required>
<label>아이디</label>
</div>
<div class="md-form-group float-label">
<input type="password" class="md-input" ng-model="user.password" name="password"  required>
<label>비밀번호</label>
</div>
<button md-ink-ripple type="submit" class="md-btn md-raised pink btn-block p-h-md">로그인</button>
</form>
</div>
</div>