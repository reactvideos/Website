<?php /* Smarty version Smarty-3.1.15, created on 2016-02-01 17:21:39
         compiled from "/var/www/html/styles/cb_27/layout/blocks/comments/comments.html" */ ?>
<?php /*%%SmartyHeaderCode:62379034756afda73707fa6-47098106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57e6d716670be650e716e6e9af5ba0cf53942b04' => 
    array (
      0 => '/var/www/html/styles/cb_27/layout/blocks/comments/comments.html',
      1 => 1454363441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62379034756afda73707fa6-47098106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comments' => 0,
    'comment' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56afda73727ea4_24003736',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56afda73727ea4_24003736')) {function content_56afda73727ea4_24003736($_smarty_tpl) {?><div class="comments clearfix">
    <ul id="comments-ul">
    <?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
    	<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/comments/comment.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('comment'=>$_smarty_tpl->tpl_vars['comment']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value,'parents'=>$_smarty_tpl->tpl_vars['comments']->value['parents']), 0);?>

        <?php } ?>
        <div class="break2"></div>
    <?php } else { ?>
    	<div class="break2"></div>
    	<li class="col-lg-12 no-related no-comments clearfix">
       		<span class="well well-info btn-block">No Comments Added</span>
        </li>
    <?php }?>
    </ul>
</div>




<style type="text/css">
    li {
        list-style: none;
    }
    .main_pic, .comnt_pic, .reply_pic {
        width: 20px;
        height: 20px;
    }
    .textarea-comment {
        position: relative;
    }
    .textarea-comment textarea {
        margin-bottom: 10px;
    }
    .textarea-comment .remove-icon {
        position: absolute;
        top: 10px;
        right: 10px;
    }

</style>
 <script type="text/javascript">
//user page user popover
            $('.comments-load-more').on("click", function(){
                var _this = $(this).data("flag");
                show_replies(_this);
                $(this).hide();
                console.log('nae g ');
            });
 </script><?php }} ?>
