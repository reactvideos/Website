<?php /* Smarty version Smarty-3.1.15, created on 2016-02-01 17:09:43
         compiled from "/var/www/html/styles/cb_27/layout/blocks/manage/account_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:209186551156afd7a79fce61-43594449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17e2d91aea6f191d96b85429cdc1466c10391102' => 
    array (
      0 => '/var/www/html/styles/cb_27/layout/blocks/manage/account_menu.html',
      1 => 1454363442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209186551156afd7a79fce61-43594449',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'myAccountLinks' => 0,
    'userquery' => 0,
    'user' => 0,
    'topMenuLinks' => 0,
    'key' => 0,
    'value' => 0,
    'subValue' => 0,
    'subKey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56afd7a7a2e242_07506071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56afd7a7a2e242_07506071')) {function content_56afd7a7a2e242_07506071($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['topMenuLinks'])) {$_smarty_tpl->tpl_vars['topMenuLinks'] = clone $_smarty_tpl->tpl_vars['topMenuLinks'];
$_smarty_tpl->tpl_vars['topMenuLinks']->value = array_slice($_smarty_tpl->tpl_vars['myAccountLinks']->value,0,6); $_smarty_tpl->tpl_vars['topMenuLinks']->nocache = null; $_smarty_tpl->tpl_vars['topMenuLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['topMenuLinks'] = new Smarty_variable(array_slice($_smarty_tpl->tpl_vars['myAccountLinks']->value,0,6), null, 0);?>
 <?php if (userid()) {?>
<div class="userAccountMenu navbar navbar-default cb-box row visible-xs">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="userPicContainer">
            <?php if (userid()) {?>
            <a class="navbar-brand <?php if (userid()) {?> nopadding <?php }?>"  style="<?php if (userid()) {?> padding-top: 7px ! important; <?php }?>" href="#">
                <img class="cb_img_thum" src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getUserThumb('','small',userid());?>
" style="width: 40px; height: 40px;"/>
                My Account &nbsp;&nbsp;&nbsp;<small>Total Uploaded Videos: <?php echo $_smarty_tpl->tpl_vars['user']->value['total_videos'];?>
</small>
            </a>
            <?php }?>
            <!--<a class="navbar-brand"  href="#">   -->
                <!--My Account-->
            <!--</a>-->
        </div>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['topMenuLinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <?php  $_smarty_tpl->tpl_vars['subValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subValue']->_loop = false;
 $_smarty_tpl->tpl_vars['subKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subValue']->key => $_smarty_tpl->tpl_vars['subValue']->value) {
$_smarty_tpl->tpl_vars['subValue']->_loop = true;
 $_smarty_tpl->tpl_vars['subKey']->value = $_smarty_tpl->tpl_vars['subValue']->key;
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['subValue']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['subKey']->value;?>
</a></li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>
        </ul> 
        <div class="pull-right">
            <a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['userquery']->value->udetails);?>
"><?php echo smarty_lang(array('code'=>'com_my_channel'),$_smarty_tpl);?>
</a>
        </div>
    </div>
</div>
<?php }?><?php }} ?>
