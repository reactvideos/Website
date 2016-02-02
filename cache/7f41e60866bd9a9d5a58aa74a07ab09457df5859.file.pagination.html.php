<?php /* Smarty version Smarty-3.1.15, created on 2016-02-01 17:09:48
         compiled from "/var/www/html/admin_area/styles/cb_2014/layout/blocks/pagination.html" */ ?>
<?php /*%%SmartyHeaderCode:152649899656afd7ac328628-51885032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f41e60866bd9a9d5a58aa74a07ab09457df5859' => 
    array (
      0 => '/var/www/html/admin_area/styles/cb_2014/layout/blocks/pagination.html',
      1 => 1454363396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152649899656afd7ac328628-51885032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagination' => 0,
    'first_link' => 0,
    'pre_link' => 0,
    'next_link' => 0,
    'last_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56afd7ac345725_49822899',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56afd7ac345725_49822899')) {function content_56afd7ac345725_49822899($_smarty_tpl) {?>
<div class="dataTables_paginate paging_bootstrap">
    <ul class="pagination">
        <li class="prev disabled">
            <a href="#">
            <i class="icon-double-angle-left"></i></a></li>
        <li class="active"><?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
          <?php if ($_smarty_tpl->tpl_vars['first_link']->value!='') {?><a class="active" <?php echo $_smarty_tpl->tpl_vars['first_link']->value;?>
>&laquo;</a><?php }?>  <?php if ($_smarty_tpl->tpl_vars['pre_link']->value!='') {?><a <?php echo $_smarty_tpl->tpl_vars['pre_link']->value;?>
 >&#8249;</a><?php }?> <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
  <?php if ($_smarty_tpl->tpl_vars['next_link']->value!='') {?><a <?php echo $_smarty_tpl->tpl_vars['next_link']->value;?>
>&#8250;</a><?php }?>
            <?php }?></li>
        <li class="next"> <?php if ($_smarty_tpl->tpl_vars['last_link']->value!='') {?><a <?php echo $_smarty_tpl->tpl_vars['last_link']->value;?>
>&raquo;</a><?php }?></li>
    </ul>

</div>


<?php }} ?>
