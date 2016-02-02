<?php /* Smarty version Smarty-3.1.15, created on 2016-02-01 17:21:38
         compiled from "/var/www/html/styles/cb_27/layout/blocks/common/report.html" */ ?>
<?php /*%%SmartyHeaderCode:162538024056afda72d9b740-27756406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54ef3818f1beac93ee5eefb961de8db2017759d2' => 
    array (
      0 => '/var/www/html/styles/cb_27/layout/blocks/common/report.html',
      1 => 1454363441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162538024056afda72d9b740-27756406',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'params' => 0,
    'flag_options' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56afda72dbedc3_39010103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56afda72dbedc3_39010103')) {function content_56afda72dbedc3_39010103($_smarty_tpl) {?><!-- Flag This <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 -->
<div id="flag_item" class="action_box" >
    <div class="form_container">
        <div class="form_result" id="flag_form_result" ></div>

        <form id="flag_form" name="flag_form"  method="post" action="#">
            <div class="alert alert-info">
                <?php echo sprintf(lang("Please select the category that most closely reflects your concern about the %s, so that we can review it and determine whether it violates our Community Guidelines or isn't appropriate for all viewers. Abusing this feature is also a violation of the Community Guidelines, so don't do it."),$_smarty_tpl->tpl_vars['params']->value['type']);?>

            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['flag_options'])) {$_smarty_tpl->tpl_vars['flag_options'] = clone $_smarty_tpl->tpl_vars['flag_options'];
$_smarty_tpl->tpl_vars['flag_options']->value = get_flag_options($_smarty_tpl->tpl_vars['type']->value); $_smarty_tpl->tpl_vars['flag_options']->nocache = null; $_smarty_tpl->tpl_vars['flag_options']->scope = 0;
} else $_smarty_tpl->tpl_vars['flag_options'] = new Smarty_variable(get_flag_options($_smarty_tpl->tpl_vars['type']->value), null, 0);?>

            <div class="form-group mtm mbm">
                <label for="flag_type"><?php echo lang("Choose a category");?>
</label>
                <select class="form-control" name="flag_type" id="flag_type">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['flag_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
                    <?php } ?>
                </select>
            </div>
            <input type="button" name="send_content" value="<?php echo sprintf(lang("Flag this %s"),$_smarty_tpl->tpl_vars['params']->value['type']);?>
" class="btn btn-primary" onclick="flag_object('flag_form','<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['params']->value['type'];?>
')"/>
        </form>
    </div>
</div>
<!-- Flag This <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 -->
<?php }} ?>
