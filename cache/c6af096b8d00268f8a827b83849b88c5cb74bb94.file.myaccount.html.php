<?php /* Smarty version Smarty-3.1.15, created on 2016-02-01 17:09:43
         compiled from "/var/www/html/styles/cb_27/layout/myaccount.html" */ ?>
<?php /*%%SmartyHeaderCode:209596806356afd7a79e1929-39329199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6af096b8d00268f8a827b83849b88c5cb74bb94' => 
    array (
      0 => '/var/www/html/styles/cb_27/layout/myaccount.html',
      1 => 1454363438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209596806356afd7a79e1929-39329199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userquery' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56afd7a79f9666_61094895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56afd7a79f9666_61094895')) {function content_56afd7a79f9666_61094895($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['myAccountLinks'])) {$_smarty_tpl->tpl_vars['myAccountLinks'] = clone $_smarty_tpl->tpl_vars['myAccountLinks'];
$_smarty_tpl->tpl_vars['myAccountLinks']->value = $_smarty_tpl->tpl_vars['userquery']->value->my_account_links(); $_smarty_tpl->tpl_vars['myAccountLinks']->nocache = null; $_smarty_tpl->tpl_vars['myAccountLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['myAccountLinks'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->my_account_links(), null, 0);?>
<div class="container marginBottom">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/account_menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="cb-box">
    	<div class="row">
	        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 hidden-xs">
	            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/userMenuLeft.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	        </div>
	        <div class="mainContent col-lg-9 col-md-9 col-sm-9 col-xs-12">
	            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/account_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user'=>$_smarty_tpl->tpl_vars['user']->value), 0);?>

	        </div>
		</div>
    </div>
</div>

<?php }} ?>
