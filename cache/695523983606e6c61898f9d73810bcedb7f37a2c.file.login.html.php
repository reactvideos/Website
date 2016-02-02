<?php /* Smarty version Smarty-3.1.15, created on 2016-02-01 17:08:49
         compiled from "/var/www/html/admin_area/styles/cb_2014/layout/login.html" */ ?>
<?php /*%%SmartyHeaderCode:20346169056afd771f12841-31618448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '695523983606e6c61898f9d73810bcedb7f37a2c' => 
    array (
      0 => '/var/www/html/admin_area/styles/cb_2014/layout/login.html',
      1 => 1454363395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20346169056afd771f12841-31618448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56afd771f31315_38103249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56afd771f31315_38103249')) {function content_56afd771f31315_38103249($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/includes/smartyv3/plugins/modifier.date_format.php';
?><html>
    <body  style="background-color: #ffffff;">
        <div class="container">
            <div class="row ">
                <div class="logo-admin">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
" class="login-logo"></a>
                </div>
                <h3 align="center" class="mrgnt10">Sign in with your Clipbucket Account</h3>
                <div class="col-sm-6 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 mrgnt20">
                   <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/msg.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                
                    <div id="login_box">
                        <span class="login-profile"></span>
                        <form name="form1" method="post" action="#">
                            <div class="form-group">
                                <input placeholder="Username" type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <input placeholder="Password" type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="login" class="btn btn-primary btn-block" value="Login">
                            </div>
                            <div align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/forgot.php"><?php echo smarty_lang(array('code'=>'user_forgot_password'),$_smarty_tpl);?>
</a></div>
                        </form>
                    </div>
                </div>
            </div>
        
            <div align="center" class="login_footer mrgnt10">
              &copy; ClipBucket Copyright 2007 &#8211; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 | Arslan Hassan
            </div>
        </div>
    </body>
</html>



<?php }} ?>
