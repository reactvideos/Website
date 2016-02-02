<?php /* Smarty version Smarty-3.1.15, created on 2016-02-01 17:21:38
         compiled from "/var/www/html/styles/cb_27/layout/blocks/videos/video_popular.html" */ ?>
<?php /*%%SmartyHeaderCode:206059193756afda72e19db5-21801211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd94bc9619f3b3ae0233d7139479481fe7d8fa93' => 
    array (
      0 => '/var/www/html/styles/cb_27/layout/blocks/videos/video_popular.html',
      1 => 1454363442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206059193756afda72e19db5-21801211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'video' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56afda72e3b8a6_14904283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56afda72e3b8a6_14904283')) {function content_56afda72e3b8a6_14904283($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/includes/smartyv3/plugins/modifier.truncate.php';
?><div class="clearfix marginBottom grid_view list_view item_video_pop video_thumb_sm">
    <div class="item_video">
        <div class="cb_item_container clearfix">
            <div class=" col-md-5 thumb row ">
               <a href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
" title="<?php echo title($_smarty_tpl->tpl_vars['video']->value['title']);?>
" >
                <span class="fa fa-play play-icon"></span>
                    <img class="" src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>
">
                    <span class="duration"><?php if ($_smarty_tpl->tpl_vars['video']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
<?php } else { ?>00:00<?php }?></span>
                </a>
            </div>
            <div class="pull-right col-md-8 paddingright0">
                <div class="item_text overflow_hidden">
                    <div class="clearfix">
                    	<a href="<?php echo videoLink($_smarty_tpl->tpl_vars['video']->value);?>
"><b><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],50);?>
</b></a>
                    </div>
					<span class="user-block"><?php echo name($_smarty_tpl->tpl_vars['video']->value);?>
</span>
                </div>
                <div class="row small col-md-8">
                    <span class="pull-left views-count"><!-- <span class="bg-eye"></span> --> <?php echo $_smarty_tpl->tpl_vars['video']->value['views'];?>
&nbsp;views</span>
                    <!-- <span class="pull-right"><small><span class="glyphicon glyphicon-thumbs-up"></span> <?php echo $_smarty_tpl->tpl_vars['video']->value['rating'];?>
</small></span> -->
                </div>
            </div>
        </div>
    </div>    
</div>
<?php }} ?>
