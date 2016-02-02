<?php /* Smarty version Smarty-3.1.15, created on 2016-02-01 17:09:48
         compiled from "/var/www/html/admin_area/styles/cb_2014/layout/video_manager.html" */ ?>
<?php /*%%SmartyHeaderCode:135034025856afd7ac241189-68136508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a69998d5efcb96bf44d92022127947efd3af4bc' => 
    array (
      0 => '/var/www/html/admin_area/styles/cb_2014/layout/video_manager.html',
      1 => 1454363396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135034025856afd7ac241189-68136508',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'videos' => 0,
    'video' => 0,
    'cbvid' => 0,
    'links' => 0,
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56afd7ac2d1e50_34319142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56afd7ac2d1e50_34319142')) {function content_56afd7ac2d1e50_34319142($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/includes/smartyv3/plugins/modifier.truncate.php';
?><div class="heading clearfix">
    <h2 class="pull-left">Video Manager</h2>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layout_dir']->value)."/blocks/advanced_search.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<!-- DIsplaying Videos -->
<form name="video_manage marginBottomLarge" method="post">
    <div class="btn-group">
        <input class="btn btn-primary btn-xs" type="submit" name="activate_selected" value="Activate" class="button"/>
        <?php if ($_GET['active']!='no') {?>
        <input class="btn btn-primary btn-xs" type="submit" name="deactivate_selected" value="Deactivate"
               class="button"/>
        <?php }?>
        <input class="btn btn-primary btn-xs" type="submit" name="make_featured_selected" value="Make Featured"
               class="button"/>
        <input class="btn btn-primary btn-xs" type="submit" name="make_unfeatured_selected" value="Make Unfeatured"
               class="button"/>
        <input class="btn btn-primary btn-xs" type="submit" name="delete_selected" value="Delete" class="button"
               onclick="return _cb.confirm_it('Are you sure you want to delete selected video(s)')"/>
    </div>
    <table class="table table-bordered table-striped manageUsersTable marginTop">
        <tr>
            <td>
                <input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"/></td>
            <td>VID</td>
            <td>Videos Details</td>
            <td>&nbsp;</td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['videos']->value) {?>
       <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
        
        <tr>
            <td>
                <input name="check_video[]" type="checkbox" id="check_video" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
"/>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
</td>
            <td>
                <div class="row">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>
" width="130" height="80" id="thumbs_<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" title=""/>
                            </div>
                            <div class="col-md-9">
                                <a href="edit_video.php?video=<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
">
                                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],80);?>
 </a>(<?php if ($_smarty_tpl->tpl_vars['video']->value['duration']>1) {?><?php echo SetTime($_smarty_tpl->tpl_vars['video']->value['duration']);?>
<?php } else { ?>00:00<?php }?>)<br>
                         <span class="labels1"> <strong><?php echo niceTime($_smarty_tpl->tpl_vars['video']->value['date_added']);?>
</strong> | 
                            <?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
 : <strong><?php echo number_format($_smarty_tpl->tpl_vars['video']->value['views']);?>
</strong></span>
                                <div class="labels mtl">
                                   
                                    <span class="label <?php if ($_smarty_tpl->tpl_vars['video']->value['active']=='yes') {?>label-success<?php } else { ?>label-danger<?php }?>">
                                        <?php if ($_smarty_tpl->tpl_vars['video']->value['active']=='yes') {?>Active<?php } else { ?>Inactive<?php }?> </span>
                                    <span class="label <?php if ($_smarty_tpl->tpl_vars['video']->value['status']=='Successful') {?>label-success<?php } else { ?>label-warning<?php }?>">
                                        <?php echo $_smarty_tpl->tpl_vars['video']->value['status'];?>
 </span>
                                        <?php if ($_smarty_tpl->tpl_vars['video']->value['featured']=='yes') {?>
                                         <span class="label label-info">
                                          Featured</span>
                                           <?php }?>
                                    

                                        <?php  $_smarty_tpl->tpl_vars['links'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['links']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cbvid']->value->video_manager_link_new; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['links']->key => $_smarty_tpl->tpl_vars['links']->value) {
$_smarty_tpl->tpl_vars['links']->_loop = true;
?>
                                        <?php echo $_smarty_tpl->tpl_vars['cbvid']->value->video_manager_link_new($_smarty_tpl->tpl_vars['links']->value,$_smarty_tpl->tpl_vars['video']->value);?>

                                        <?php } ?>
                                       
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="view_user.php?uid=<?php echo $_smarty_tpl->tpl_vars['video']->value['userid'];?>
"><?php echo $_smarty_tpl->tpl_vars['video']->value['username'];?>
</a>
                    </div>
                </div>
            </td>
            <td>
                <div class="dropdown">
                    <button id="dropdownMenu1" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                        Actions <i class="caret"></i></button>
                    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1" role="menu">
                        <li><a role="menuitem" tabindex="-1"
                                                   href="edit_video.php?video=<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" class="">Edit</a></li>
                        <li><a role="menuitem" tabindex="-1"
                            href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/watch_video.php?v=<?php echo $_smarty_tpl->tpl_vars['video']->value['videokey'];?>
"target="_blank">Watch</a>
                        </li>

                        
                        <?php if ($_smarty_tpl->tpl_vars['video']->value['featured']=='yes') {?>
                        <li><a role="menuitem" tabindex="-1" href="?make_unfeature=<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
">Make Unfeatured</a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['video']->value['featured']=='no') {?>
                        <li><a role="menuitem" tabindex="-1" href="?make_feature=<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
">Make
                            Featured</a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['video']->value['active']=='yes') {?>
                        <li><a role="menuitem" tabindex="-1" href="?deactivate=<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
">Deactivate</a>
                        </li>
                        <?php } else { ?>
                        <li><a role="menuitem" tabindex="-1" href="?activate=<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
">Activate</a>
                        </li>
                        <?php }?>
                        <li><a role="menuitem" tabindex="-1"
                                                   href="view_conversion_log.php?file_name=<?php echo $_smarty_tpl->tpl_vars['video']->value['file_name'];?>
">File
                            conversion details</a></li>
                        <li class="divider"></li>
                        <li><a role="menuitem" tabindex="-1" href="?delete_video=<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
">Delete</a>
                        </li>
                        <?php  $_smarty_tpl->tpl_vars['links'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['links']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cbvid']->value->video_manager_link; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['links']->key => $_smarty_tpl->tpl_vars['links']->value) {
$_smarty_tpl->tpl_vars['links']->_loop = true;
?>
                        <?php echo $_smarty_tpl->tpl_vars['cbvid']->value->video_manager_link($_smarty_tpl->tpl_vars['links']->value,$_smarty_tpl->tpl_vars['video']->value);?>

                        <?php } ?>
                    </ul>
                </div>
            </td>
        </tr>
        <?php } ?>
    </table>
    <?php } else { ?>
    <div align="center"><strong><em>No Video Found</em></strong></div>
    <?php }?>
    <div class="btn-group marginBotoomLarge marginTopLarge paddingBotoomLarge paddingTopLarge">
        <input class="btn btn-primary btn-xs" type="submit" name="activate_selected" value="Activate" class="button"/>
        <input class="btn btn-primary btn-xs" type="submit" name="deactivate_selected" value="Deactivate"
               class="button"/>
        <input class="btn btn-primary btn-xs" type="submit" name="make_featured_selected" value="Make Featured"
               class="button"/>
        <input class="btn btn-primary btn-xs" type="submit" name="make_unfeatured_selected" value="Make Unfeatured"
               class="button"/>
        <input class="btn btn-primary btn-xs" type="submit" name="delete_selected" value="Delete" class="button"
               onclick="return _cb.confirm_it('Are you sure you want to delete selected video(s)')"/>
    </div>
</form>

<!-- DIsplaying Videos Ends-->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="marginBottomLarge"></div>


<?php }} ?>
