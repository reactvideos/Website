<?php /* Smarty version Smarty-3.1.15, created on 2016-02-01 17:09:17
         compiled from "/var/www/html/styles/cb_27/layout/message.html" */ ?>
<?php /*%%SmartyHeaderCode:49762698156afd78d217481-52118312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '582534a8384993d2b7232979477e2421c47a3268' => 
    array (
      0 => '/var/www/html/styles/cb_27/layout/message.html',
      1 => 1454363438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49762698156afd78d217481-52118312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'eh' => 0,
    'err' => 0,
    'show_msg' => 0,
    'msg' => 0,
    'war' => 0,
    'imageurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56afd78d249932_41895265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56afd78d249932_41895265')) {function content_56afd78d249932_41895265($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['msg'])) {$_smarty_tpl->tpl_vars['msg'] = clone $_smarty_tpl->tpl_vars['msg'];
$_smarty_tpl->tpl_vars['msg']->value = $_smarty_tpl->tpl_vars['eh']->value->message_list; $_smarty_tpl->tpl_vars['msg']->nocache = null; $_smarty_tpl->tpl_vars['msg']->scope = 0;
} else $_smarty_tpl->tpl_vars['msg'] = new Smarty_variable($_smarty_tpl->tpl_vars['eh']->value->message_list, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['err'])) {$_smarty_tpl->tpl_vars['err'] = clone $_smarty_tpl->tpl_vars['err'];
$_smarty_tpl->tpl_vars['err']->value = $_smarty_tpl->tpl_vars['eh']->value->error_list; $_smarty_tpl->tpl_vars['err']->nocache = null; $_smarty_tpl->tpl_vars['err']->scope = 0;
} else $_smarty_tpl->tpl_vars['err'] = new Smarty_variable($_smarty_tpl->tpl_vars['eh']->value->error_list, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['war'])) {$_smarty_tpl->tpl_vars['war'] = clone $_smarty_tpl->tpl_vars['war'];
$_smarty_tpl->tpl_vars['war']->value = $_smarty_tpl->tpl_vars['eh']->value->warning_list; $_smarty_tpl->tpl_vars['war']->nocache = null; $_smarty_tpl->tpl_vars['war']->scope = 0;
} else $_smarty_tpl->tpl_vars['war'] = new Smarty_variable($_smarty_tpl->tpl_vars['eh']->value->warning_list, null, 0);?>

<div class="container">
    <div class="row">
    <div class="col-lg-12">
        <?php if ($_smarty_tpl->tpl_vars['err']->value[0]!=''||$_smarty_tpl->tpl_vars['err']->value[1]!='') {?>
        <div class="alert alert-danger alert-dismissable ">
            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
            <ul  class="list-unstyled">
                <?php  $_smarty_tpl->tpl_vars['show_msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['show_msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['err']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['show_msg']->key => $_smarty_tpl->tpl_vars['show_msg']->value) {
$_smarty_tpl->tpl_vars['show_msg']->_loop = true;
?>
                <li> <?php echo $_smarty_tpl->tpl_vars['show_msg']->value;?>
 </li>
                <?php } ?>
            </ul>
        </div>
        <?php }?>


        <?php if ($_smarty_tpl->tpl_vars['msg']->value[0]!='') {?>
        <div class="alert alert-success alert-dismissable">
            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
            <ul class="list-unstyled">
                <?php  $_smarty_tpl->tpl_vars['show_msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['show_msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['msg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['show_msg']->key => $_smarty_tpl->tpl_vars['show_msg']->value) {
$_smarty_tpl->tpl_vars['show_msg']->_loop = true;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['show_msg']->value;?>
</li>
                <?php } ?>
            </ul>
        </div>
        <?php }?>


        <?php if ($_smarty_tpl->tpl_vars['war']->value[0]!='') {?>
        <div class="alert alert-warning alert-dismissable">
            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">x</button>
            <ul class="list-unstyled">
                <img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/messagebox_warning.png" style="float:left" />
                <?php  $_smarty_tpl->tpl_vars['show_msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['show_msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['war']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['show_msg']->key => $_smarty_tpl->tpl_vars['show_msg']->value) {
$_smarty_tpl->tpl_vars['show_msg']->_loop = true;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['show_msg']->value;?>
</li>
                <?php } ?>
            </ul>
            <div class="clearfix"></div>
        </div>
        <?php }?>
        
    </div>
</div>    
</div>


<?php }} ?>
