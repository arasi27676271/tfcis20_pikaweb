<?php
/* Smarty version 3.1.29, created on 2018-02-26 04:20:41
  from "D:\UniServerZ\www\pika\templates\user_login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a938b192b1e25_82264268',
  'file_dependency' => 
  array (
    'b2de199551f10775780db452273a99e70f8eef46' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\user_login.html',
      1 => 1519618811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a938b192b1e25_82264268 ($_smarty_tpl) {
?>
<form action="user.php" method="post" role="form" class="form-horizontal">
  <div class="form-group">
    <label class="col-md-2 control-label">帳號 : </label>
    <div class="col-md-5">
      <input type="text" name="user_id" id="user_id" class="form-control" placeholder="請輸入帳號">
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-2 control-label">密碼 : </label>
    <div class="col-md-5">
      <input type="password" name="user_passwd" id="user_passwd" class="form-control" placeholder="請輸入密碼">
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-2 control-label">
      <a href="user.php?op=user_form" class="btn btn-link">註冊</a>
    </label>
    <div class="col-md-5">
      <input type="hidden" name="op" value="user_login">
      <button type="submit" name="button" class="btn btn-primary btn-block">登入</button>
    </div>
  </div>
</form>
<?php }
}
