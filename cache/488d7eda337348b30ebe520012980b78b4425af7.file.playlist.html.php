<?php /* Smarty version Smarty-3.1.15, created on 2016-02-01 17:21:38
         compiled from "/var/www/html/styles/cb_27/layout/blocks/common/playlist.html" */ ?>
<?php /*%%SmartyHeaderCode:2929013456afda72d4b228-56016288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '488d7eda337348b30ebe520012980b78b4425af7' => 
    array (
      0 => '/var/www/html/styles/cb_27/layout/blocks/common/playlist.html',
      1 => 1454363441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2929013456afda72d4b228-56016288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'playlists' => 0,
    'playlist' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56afda72d75777_18831942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56afda72d75777_18831942')) {function content_56afda72d75777_18831942($_smarty_tpl) {?><!-- Add To Playlist This <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 -->
<div id="playlist_form" class="action_box" >
    <div class="form_container" align="center">
        <div class="form_result" id="playlist_form_result" style="display:none"></div>

        <form id="add_playlist_form" name="playlist_form" method="post" action="" class="">

            <?php echo lang("Please select playlist name from following");?>
<br>
            <select name="playlist_id" id="playlist_id" class="form-control mtm">
                <?php if ($_smarty_tpl->tpl_vars['playlists']->value) {?>
                    <?php  $_smarty_tpl->tpl_vars['playlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['playlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['playlists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['playlist']->key => $_smarty_tpl->tpl_vars['playlist']->value) {
$_smarty_tpl->tpl_vars['playlist']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['playlist']->value['playlist_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['playlist']->value['playlist_name'];?>
</option>
                    <?php } ?>
                <?php } else { ?>
                    <option value="" placeholder>--- <?php echo lang("No playlist exists");?>
 ---</option>
                <?php }?>
            </select>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="button" class="btn mtm btn-block btn-primary" name="add_to_playlist" value="Add to playlist" class="cb_button" onclick="add_playlist('add','<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
','add_playlist_form','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')"/>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a class="btn btn-block mtm btn-success" href="javascript:void(0)" onClick="$('#add_playlist_form').css('display','none');$('#new_playlist_form').css('display','block')"><?php echo lang('create new playlist');?>
</a>
                </div>
            </div>


        </form>

      <form id="new_playlist_form" name="new_playlist_form" method="post" action="" class="" style="display:none">
            <div class="form-group">
                <label for="playlist_name"><?php echo lang("Enter playlist name");?>
</label>
                <input name="playlist_name" type="text" class="form-control" id="playlist_name" value=""/>
              

            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                   <!-- <input type="button" name="add_new_playlist" value="Add new playlist" class="btn mtm btn-block btn-success " onclick="add_playlist('add','<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
','add_playlist_form','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')"/>-->
                   <input type="button" name="add_new_playlist" value="Add new playlist" class="btn mtm btn-block btn-success cb_button" onclick="add_playlist('new','<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
','new_playlist_form','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')"/>
                   
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a href="javascript:void(0)" class="btn btn-block mtm btn-primary" onClick="$('#add_playlist_form').css('display','block');$('#new_playlist_form').css('display','none')">Select from list </a>                </div>
            </div>
        </form>
    </div>
</div>
<!-- Add To Playlist This <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 -->



 
  <?php }} ?>
