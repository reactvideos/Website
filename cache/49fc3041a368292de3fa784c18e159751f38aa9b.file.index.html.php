<?php /* Smarty version Smarty-3.1.15, created on 2016-02-01 17:08:58
         compiled from "/var/www/html/admin_area/styles/cb_2014/layout/index.html" */ ?>
<?php /*%%SmartyHeaderCode:162269423756afd77aa46261-88477605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49fc3041a368292de3fa784c18e159751f38aa9b' => 
    array (
      0 => '/var/www/html/admin_area/styles/cb_2014/layout/index.html',
      1 => 1454363395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162269423756afd77aa46261-88477605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'u' => 0,
    'userquery' => 0,
    'videos' => 0,
    'video' => 0,
    'baseurl' => 0,
    'flaggedUsers' => 0,
    'myquery' => 0,
    'the_note' => 0,
    'todos' => 0,
    'note' => 0,
    'notes' => 0,
    'comments' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56afd77ab2a977_56293857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56afd77ab2a977_56293857')) {function content_56afd77ab2a977_56293857($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/includes/smartyv3/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/includes/smartyv3/plugins/modifier.date_format.php';
?><div class="heading">
    <h2>ClipBucket V2.7 Dashboard</h2>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="tabbable">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active">
                    <a data-toggle="tab" href="#statistics">
                        <h5>Statistics</h5>
                    </a>
                </li>
                <li class="">
                    <a data-toggle="tab" href="#nusers">
                        <h5>New Users</h5>
                    </a>
                </li>
                <li class="">
                    <a data-toggle="tab" href="#mvideos">
                        <h5>Most Viewed Videos</h5>
                    </a>
                </li>
                <li class="">
                    <a data-toggle="tab" href="#fobjects">
                        <h5>Flagged Objects</h5>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="statistics" class="tab-pane active">
                    <div class="tabbable tabs-left">
                        <ul class="nav nav-tabs" id="myTab1">
                            <li class="active">
                                <a data-toggle="tab" href="#sweek">
                                    This Week
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#smonth">
                                    This Month
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#soday">
                                    Today
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="sweek" class="tab-pane active">
                                <div id="weekly_stats" class="flot_chart1"><img class="loading-image" src="./styles/cb_2014/images/ajax-loader.gif"/></div>
                            </div>
                            <div id="smonth" class="tab-pane">
                                <div id="monthly_stats"  class="flot_chart1"><img class="loading-image" src="./styles/cb_2014/images/ajax-loader.gif"/></div>
                            </div>
                            <div id="soday" class="tab-pane">
                                <div id="daily_stats" class="flot_chart1">
                                    <img class="loading-image" src="./styles/cb_2014/images/ajax-loader.gif"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="nusers" class="tab-pane">
                    <div class="tabbable tabs-left">
                        <ul class="nav nav-tabs" id="myTab1">
                            <li class="active">
                                <a data-toggle="tab" href="#uweek">
                                    This Week
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#umonth">
                                    This Month
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#utoday">
                                    Today
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="uweek" class="tab-pane active">
                                <div id="weekly_users" class="flot_chart1"><img class="loading-image" src="./styles/cb_2014/images/ajax-loader.gif"/></div>
                            </div>
                            <div id="umonth" class="tab-pane">
                                <div id="monthly_users"  class="flot_chart1"><img class="loading-image" src="./styles/cb_2014/images/ajax-loader.gif"/></div>
                            </div>
                            <div id="utoday" class="tab-pane">
                                <div id="daily_users" class="flot_chart1">
                                    <img class="loading-image" src="./styles/cb_2014/images/ajax-loader.gif"/></div>
                            </div>


                        </div>
                        <div class="users marginTopLarge">
                            <?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
                                <?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row marginBottom">
                                            <div class="col-md-2">
                                                <a href="view_user.php?uid=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getUserThumb($_smarty_tpl->tpl_vars['u']->value,'small');?>
" class="img-thumbnail oneUserImage" />
                                                </a>
                                            </div>
                                            <div class="col-md-10">
                                                <a href="view_user.php?uid=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['u']->value['username'];?>
        </a>(<?php echo $_smarty_tpl->tpl_vars['u']->value['email'];?>
)
                                                <button id="dropdownMenu1" class="btn btn-primary btn-xs dropdown-toggle pull-right" data-toggle="dropdown">
                                                    <i class="glyphicon glyphicon-cog"></i><i class="icon-angle-down icon-on-right"></i>
                                                </button>
                                                <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1" role="menu">
                                                    <?php if ($_smarty_tpl->tpl_vars['u']->value['ban_status']=='yes') {?>
                                                    <li><a role="menuitem" tabindex="-1" href="?unban=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
">Unban Member</a></li>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['u']->value['ban_status']=='no') {?>
                                                    <li><a role="menuitem" tabindex="-1" href="?ban=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
">Ban Member</a></li>
                                                    <?php }?>
                                                    <li><a role="menuitem" tabindex="-1" href="view_user.php?uid=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
">Edit</a></li>
                                                    <li><a role="menuitem" tabindex="-1" href="members.php?deleteuser=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
">Delete</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php }?>
                        </div>
                    </div>
                </div>
                <div id="mvideos" class="tab-pane">
                    <div class="tabbable tabs-left">
                        <ul class="nav nav-tabs" id="myTab1">
                            <li class="active">
                                <a data-toggle="tab" href="#vweek">
                                    This Week
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#vmonth">
                                    This Month
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#vtoday">
                                    Today
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="vweek" class="tab-pane active">
                                <div id="weekly_users" class="flot_chart1"><img class="loading-image" src="./styles/cb_2014/images/ajax-loader.gif"/></div>
                            </div>
                            <div id="vmonth" class="tab-pane">
                                <div id="monthly_users"  class="flot_chart1"><img class="loading-image" src="./styles/cb_2014/images/ajax-loader.gif"/></div>
                            </div>
                            <div id="vtoday" class="tab-pane">
                                <div id="daily_users" class="flot_chart1">
                                    <img class="loading-image" src="./styles/cb_2014/images/ajax-loader.gif"/></div>
                            </div>
                        </div>
                    </div>
                    <div class="vids marginTopLarge">
                        <?php if ($_smarty_tpl->tpl_vars['videos']->value) {?>
                        <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['video']->value),$_smarty_tpl);?>
" height="80" class="img-thumbnail" id="thumbs_<?php echo $_smarty_tpl->tpl_vars['video']->value['videoid'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
"/>
                            </div>
                            <div class="col-md-9">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/watch_video.php?v=<?php echo $_smarty_tpl->tpl_vars['video']->value['videokey'];?>
"target="_blank">
                                    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['video']->value['title'],45);?>
 </a>
                                <strong class="btn btn-primary btn-xs pull-right"> <?php echo smarty_lang(array('code'=>'views'),$_smarty_tpl);?>
 : <?php echo format_number($_smarty_tpl->tpl_vars['video']->value['views']);?>
</strong>
                            </div>
                        </div>
                        <hr>
                        <?php } ?>
                        <?php }?>
                    </div>
                </div>
                <div id="fobjects" class="tab-pane">
                    <div class="tabbable tabs-left">
                        <ul class="nav nav-tabs" id="myTab1">
                            <li class="active">
                                <a data-toggle="tab" href="#fweek">
                                    This Week
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#fmonth">
                                    This Month
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#ftoday">
                                    Today
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="fweek" class="tab-pane active">
                                <div id="weekly_users" class="flot_chart1"><img class="loading-image" src="./styles/cb_2014/images/ajax-loader.gif"/></div>
                            </div>
                            <div id="fmonth" class="tab-pane">
                                <div id="monthly_users"  class="flot_chart1"><img class="loading-image" src="./styles/cb_2014/images/ajax-loader.gif"/></div>
                            </div>
                            <div id="ftoday" class="tab-pane">
                                <div id="daily_users" class="flot_chart1">
                                    <img class="loading-image" src="./styles/cb_2014/images/ajax-loader.gif"/></div>
                            </div>
                        </div>
                    </div>
                    <div class="flaggedUser marginTopLarge">
                        <?php if ($_smarty_tpl->tpl_vars['flaggedUsers']->value) {?>
                            <?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['flaggedUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="view_user.php?uid=<?php echo $_smarty_tpl->tpl_vars['u']->value['userid'];?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getUserThumb($_smarty_tpl->tpl_vars['u']->value,'small');?>
" class="oneUserImage" width="85" />
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    (<?php echo $_smarty_tpl->tpl_vars['u']->value['email'];?>
) <?php echo $_smarty_tpl->tpl_vars['u']->value['username'];?>

                                </div>

                                <div class="col-md-7">
                                    <label class="label label-danger">Last Active  <?php echo niceTime($_smarty_tpl->tpl_vars['u']->value['last_active']);?>
</label>
                                    <label class="label label-primary"> <?php echo smarty_lang(array('code'=>'Flags'),$_smarty_tpl);?>
 : <?php echo $_smarty_tpl->tpl_vars['u']->value['flag_type'];?>
</label>

                                </div>
                            </div>
                            <?php } ?>
                        <?php }?>
                    </div>
                </div>
           
                <div class="widget-main">
                    <hr>
                    <table class="table table-stripped table-bordered">
                        <tr>
                            <td>
                                <div class="stats_subitem_d">Total Videos : <strong><?php ob_start();?><?php echo get_videos(array('count_only'=>'yes'),$_smarty_tpl);?>
<?php echo number_format(ob_get_clean())?></strong> </div>
                            </td>
                            <td>
                                <div class="stats_subitem_d">Total Groups : <strong><?php echo get_groups(array('count_only'=>'yes'),$_smarty_tpl);?>
</strong> </div>
                            </td>
                            <td>
                                <div class="stats_subitem_d">Total Collection : <strong><?php echo get_collections(array('count_only'=>'yes'),$_smarty_tpl);?>
</strong> </div>
                            </td>
                            <td>
                                <div class="stats_subitem_d">Total Users : <strong><?php echo get_users(array('count_only'=>'yes'),$_smarty_tpl);?>
</strong> </div>
                            </td>
                            <td>
                                <div class="stats_subitem_d">Total Photos: <strong><?php echo get_photos(array('count_only'=>'yes'),$_smarty_tpl);?>
</strong> </div>
                            </td>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="widget-box">
            <div class="widget-header header-color-red">
                <h5><i class="glyphicon glyphicon-book"></i>ClipBucket News</h5>
                <div class="widget-toolbar">
                    <a href="#" data-action="collapse">
                        <i class="icon-chevron-down"></i>
                    </a>
                    <a href="#" data-action="close">
                        <i class="icon-remove"></i>
                    </a>
                </div>
            </div>
            <div class="widget-body">
                <div id="clipbucket_news" class="widget-main" style="height:419px;overflow:auto">
                    
                </div>
            </div>
        </div>
    </div>

    <hr>
   <!--  <div class="tabbable tabs-left" > -->
    <div class=" col-md-8 todotab" >
   
        <ul class="nav nav-tabs" id="myTab" >
            <li class="active">
                <a data-toggle="tab" href="#todolist">
                    <h5><i class="glyphicon glyphicon-list-alt"></i> ToDo List</h5>
                </a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#pnotes">
                    <h5><i class="glyphicon glyphicon-pencil"></i> Personal Notes</h5>
                </a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#rcomments">
                    <h5><i class="glyphicon glyphicon-comment"></i> Recent Comments</h5>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="todolist" class="tab-pane active">
                <div class="widgetBox">
                    <div class="addTodo paddingRightSmall paddingLeftLarge marginBottomLarge">
                        <div class="row">
                            <div class="from-group col-md-10">
                                <input type="text" name="addTodo" class="form-control">
                            </div>
                            <div class="from-group  relative">
                                <div class="addTodoButton">
                                    <button id="addTodo" class="btn btn-primary btn-sm">Add</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <?php if (isset($_smarty_tpl->tpl_vars['todos'])) {$_smarty_tpl->tpl_vars['todos'] = clone $_smarty_tpl->tpl_vars['todos'];
$_smarty_tpl->tpl_vars['todos']->value = $_smarty_tpl->tpl_vars['myquery']->value->get_todos(); $_smarty_tpl->tpl_vars['todos']->nocache = null; $_smarty_tpl->tpl_vars['todos']->scope = 0;
} else $_smarty_tpl->tpl_vars['todos'] = new Smarty_variable($_smarty_tpl->tpl_vars['myquery']->value->get_todos(), null, 0);?>
                    <ul class="row todosList" id="note-<?php echo $_smarty_tpl->tpl_vars['the_note']->value['note_id'];?>
" >
                        <?php  $_smarty_tpl->tpl_vars['note'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['note']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['todos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['note']->key => $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->_loop = true;
?>
                            <li class="col-md-12">
                                <div class="col-md-12">
                                    <p class="oneTodo paddingLeftSmall col-md-10" id="<?php echo $_smarty_tpl->tpl_vars['note']->value['todo_id'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['note']->value['todo'];?>

                                    </p>
                                    <a href="#" class="btn btn-danger btn-xs delete">Delete</a>
                                </div>
                            </li>
                        <?php } ?>
                        </ul>
                </div>
            </div>
            <div id="pnotes" class="tab-pane">
                    <div class="widgetBox">
                        <div class="addNote form-group paddingRightSmall">
                            <textarea class="form-control" name="ntoe" id="note"></textarea>
                            <div class="alignRight marginTopSmall">
                                <a href="#" id="add_new_note" class="btn btn-primary btn-xs">Add a note</a>
                            </div>
                        </div>
                        <?php if (isset($_smarty_tpl->tpl_vars['notes'])) {$_smarty_tpl->tpl_vars['notes'] = clone $_smarty_tpl->tpl_vars['notes'];
$_smarty_tpl->tpl_vars['notes']->value = $_smarty_tpl->tpl_vars['myquery']->value->get_notes(); $_smarty_tpl->tpl_vars['notes']->nocache = null; $_smarty_tpl->tpl_vars['notes']->scope = 0;
} else $_smarty_tpl->tpl_vars['notes'] = new Smarty_variable($_smarty_tpl->tpl_vars['myquery']->value->get_notes(), null, 0);?>
                        <ul class="notesList row paddingRightSmall" id="note-<?php echo $_smarty_tpl->tpl_vars['the_note']->value['note_id'];?>
" >
                            <?php  $_smarty_tpl->tpl_vars['note'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['note']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['note']->key => $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->_loop = true;
?>
                                <li class="col-md-4">
                                    <div class="">
                                        <p class="oneNote" id="<?php echo $_smarty_tpl->tpl_vars['note']->value['note_id'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['note']->value['note'];?>

                                        <a href="#" class="delete">×</a>
                                    </p>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

            </div>
            <div id="rcomments" class="tab-pane">
                <div class="widget-box">
                    <div class="widget-header header-color-blue">
                        <h5>Recent Comments</h5>
                        <div class="widget-toolbar">
                            <a href="#" data-action="collapse">
                                <i class="icon-chevron-down"></i>
                            </a>
                            <a href="#" data-action="close">
                                <i class="icon-remove"></i>
                            </a>
                        </div>
                    </div>
                    <div class="widget-body">
                        <div class="widget-main">
                            <div class="widget-box transparent">
                                <div class="widget-header widget-header-small">
                                </div>
                                <div class="widget-body">
                                    <div class="widget-body">
                                        <div class="widget-main no-padding">
                                            <div class="slimScrollDiv">
                                                <?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
                                                <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
                                                <div class="itemdiv dialogdiv">
                                                    <?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
                                                    <div class="user">
                                                        <img alt="Alexa's Avatar" src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getUserThumb($_smarty_tpl->tpl_vars['u']->value,'small');?>
">
                                                    </div>
                                                    <?php } ?>
                                                    <div class="body">
                                                        <div class="time">
                                                            <i class="icon-time"></i>
                                                            <span class="green"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['date_added']);?>
</span>
                                                        </div>
                                                        <div class="name">
                                                            <a href="#"><?php echo $_smarty_tpl->tpl_vars['comment']->value['anonym_name'];?>
</a>
                                                        </div>
                                                        <div class="text"><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment'];?>
</div>
                                                        <div class="tools">
                                                            <a href="#" class="btn btn-minier btn-info">
                                                                <i class="icon-only icon-share-alt"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                                <?php }?>
                                            </div>
                                        </div>/widget-main
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>







<div class="well" style="margin-top: 14px;background:;border:1px solid rgba(128, 213, 255, 1);" >
    <h3>WHO WE ARE</h3>
    <p style="text-align:left;"><strong><a href="http://clip-bucket.com/" target="self">ClipBucket</a></strong> would not been possible without its team hardwork and determination for the betterment of the products quality and its services. We are proud that over _____ users are using worlds most popular open source video,audio and photo sharing script named
    <strong>ClipBucket</strong>. We are team who is  determined to deliver the best  features to the open source community.
    </p>


    <p style="text-align:left;margin-top:20px; "><strong>Clipbucket</strong> was made in the year 2006 with the idea to bring a better platform for organizations and companies interested in launching their own video,audio or photo sharing website. In every version our mission and goal is to simplify the technology by adopting new technological methods and techniques to cut down several frontend and backend issues faced. The idea is to give the user a chance to explore more with the flexibility of our product.



     We never compromise on our product interactivity. We always try to create a simple yet interactive and elegant design so that the user can have the best experience of the functions. With the improved social networking options like channels and groups. With ClipBucket’s unmatched quantifiability, users will stretch their applications from family videos to photo-albums. We started off as a paid product and later realized there is more power in going open-source and here we stand today <strong>#1</strong> video sharing and media management script in the industry.</p>

    <h3>OUR TEAM</h3>

    <p style="text-align:left;padding-bottom:20px;">However the team behind ClipBucket always kept their heads and nerves, though they faced many difficulties and problems in meeting the requirements. But team’s coordination and their creative techniques of solving issues and overcoming them with the best possible solution helped us in presenting  Pakistan on international platform in the field of technology by bringing “Clip Bucket” A complete open source multimedia management script.
    </p>

    <div class="to_display">
        <p>Founders <strong><a href="http://www.linkedin.com/profile/view?id=273050157" target="blank">Jahanzeb Hassan</a></strong> and <strong><a href="http://www.linkedin.com/profile/view?id=37419812" target="blank">Arslan Hassan</a></strong></p>

         <strong><a href="http://www.linkedin.com/profile/view?id=324544384" target="self">Fawaz Tahir</a></strong> - Web Application Team Lead<br>
         <strong><a href="http://www.linkedin.com/profile/view?id=78646794" target="self">Ruman Malik</a></strong> - Project Manager<br>
         <strong><a href="http://www.linkedin.com/profile/view?id=325944697" target="self">Muneeb</a></strong> - Mobile Application Team Lead<br>
         <strong><a href="http://www.linkedin.com/profile/view?id=324542682" target="self">Zomail</a></strong> - Sales and Support<br>
         <strong><a href="http://www.linkedin.com/profile/view?id=324542554" target="self">Shahzaib</a></strong> - Network Engineer<br>
         <strong><a href="http://www.linkedin.com/profile/view?id=324542025" target="self">Zunair</a></strong> - SEO and Publishing Manager<br>
        <br>

        <h5><strong>Kick-ass development team of <strong>ClipBucket</strong></strong></h5>
        <strong><a href="https://github.com/fahad-cb" target="self">Fahad Abbas</a></strong> - Project Head (Developer)<br>
         <strong><a href="https://github.com/imranhassan009" target="self">Imran Hassan</a></strong> - Web Developer<br>
         <strong><a href="https://github.com/shoaib-dev" target="self">Muhammad Shoaib</a></strong> - Web Services provider (Developer)<br>
         <strong><a href="https://github.com/awaistariq123" target="self">Awais Tariq</a></strong> - Video Converison Handler<br>
         <strong><a href="https://pk.linkedin.com/in/saqirzzq" target="self">Saaqib Razzaq</a></strong> - Web Developer<br>
         <strong><a href="https://github.com/jamilrehman" target="self">Jamil Rehman</a></strong> - Front end  Developer (Head)<br>
         <strong><a href="https://github.com/rameez-anees" target="self">Rameez Anees</a></strong> - Front end  Developer<br>
         <strong><a href="https://github.com/usman-des" target="self">Usman Afzal</a></strong> - Front end  Developer<br>
         <strong><a href="https://github.com/epicPenguin" target="self">Muhammad Rizwan</a></strong> - Quality Assurance department<br><br><br>


         <h5><strong>We are from Pakistan with high heads and soft hearts</strong></h5>

        <p style="padding-bottom:20px;">Pakistan is always been in the news for the bad reasons and has been criticized by the rest of the world,even then the people of Pakistan are patriotic and stand united for the goodwill of their country.no matter how worst the situation gets the youth is eager enough to bring out the best in all the fields like media,communication, IT and science. IT industry is fast growing with a large potential and is regarded as a successful sector even in country’s worst financial crisis. as the IT industry in Pakistan is growing like wise the demand for the softwares and programmes has taken up a rapid growth. ClipBucket is one of the fastest and the most used media sharing script with all the latest features and enhancements in the social media. We as Pakistani feel proud on creating this product which will lead our country to the highest levels in the international market.</p>
    </div>

    <p><button id="addTodo" class="btn btn-primary btn-sm clip_read clip_hide" style="float:right;margin-right:10px;margin-top:-30px;">Read More</button></p>
</div>




<style type="text/css">

.to_display{

   display: none; 
}
    .flot_chart1{
        height: 200px;
        width: 400px;
    }
    .vids{
        height: 250px;
        overflow-y: scroll;
        overflow-x: hidden;
        padding: 5px;
    }
</style>






<script type="text/javascript">
$( document ).ready(function() {

    $(".clip_read").click(function() {

        $(this).toggleClass('clip_hide');


        if(!$(this).hasClass('clip_hide')) 
           
           {
            $('.to_display').show();
            $(".clip_read").text("Hide");
           }
        
        else
           {
            $('.to_display').hide();
            $(".clip_read").text("Read More");
           }     
    });

var baseurl="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
";

$.ajax({
                   // url: baseurl+'/ajax.php',

                   url:baseurl+'/ajax.php',
                    type: "POST",
                    dataType : 'text',
                    data: { mode: "get_news"},
                    success : function(news){ $('#clipbucket_news').html(news) },
                    timeout : 5000,
                    error  :  function(err) { $('#clipbucket_news').html(' <div align="center"><em><strong>Connect with Internet to get News</strong></em></div>')},


                });

 
});





  $(function() {


        var options = {

            series: {
                bars: {
                    show: true,
                    steps: true,
                    barWidth: 0.5,
                    align: "center",
                },
                points: { show: true },
                lines: { show: true }
            },
            xaxis: {
                mode: "categories",
                tickLength: 0
            },
            yaxis: {
                alignTicksWithAxis: false
            },
            grid: {
                hoverable: true, 
                clickable: true,
                labelMargin: 30,
                borderWidth: 0
            }
        };


        var ChartsWorker = function(options){
            this.options = options;

       


            this.getUsersStatistics = function(callback){
                var self = this;
                var ajaxCall = $.ajax({
                    url: "charts/reports/dashboard/get_users_data.php",
                    type: "POST",
                    data:"videos=videos",
                    dataType: "json",
                    success: function(data){
                        callback.call(self, data);
                    },
                    error: function() {
                        //alert('error');
                    },
                });
            };

            this.getVideosStatistics = function(callback){
                var self = this;
                var ajaxCall = $.ajax({
                    url: "charts/reports/dashboard/get_videos_data.php",
                    type: "POST",
                    data:"videos=videos",
                    dataType: "json",
                    success: function(data){
                        callback.call(self, data);
                    },
                    error: function() {
                        //alert('error');
                    },
                });
            };

            this.getFlaggedStatistics = function(callback){
                var self = this;
                var ajaxCall = $.ajax({
                    url: "charts/reports/dashboard/get_flagged_objects_data.php",
                    type: "POST",
                    data:"videos=videos",
                    dataType: "json",
                    success: function(data){
                        callback.call(self, data);
                    },
                    error: function() {
                        //alert('error');
                    },
                });
            };

            this.getOverallStatistics = function(callback){
                var self = this;
                var ajaxCall = $.ajax({
                    url: "charts/reports/dashboard/get_total_status_data.php",
                    type: "POST",
                    data:"videos=videos",
                    dataType: "json",
                    success: function(data){
                        callback.call(self, data);
                    },
                    error: function() {
                        //alert('error');
                    },
                });
            };

        };


        var chartsWorker = new ChartsWorker(options);

        chartsWorker.getUsersStatistics(function(data){
            var today = data.today;
            var week = data.this_week;
            var month = data.this_month;
            $.plot("#nusers #weekly_users", [week] , this.options);
            $.plot("#nusers #monthly_users", [month] , this.options);
            $.plot("#nusers #daily_users", [today], this.options);
        });

        chartsWorker.getVideosStatistics(function(data){
            var today = data.today;
            var week = data.this_week;
            var month = data.this_month;
            $.plot("#mvideos #weekly_users", [week] , this.options);
            $.plot("#mvideos #monthly_users", [month] , this.options);
            $.plot("#mvideos #daily_users", [today], this.options);
        });

        chartsWorker.getFlaggedStatistics(function(data){
            var today = data.today;
            var week = data.this_week;
            var month = data.this_month;
            $.plot("#fobjects #weekly_users", [week] , this.options);
            $.plot("#fobjects #monthly_users", [month] , this.options);
            $.plot("#fobjects #daily_users", [today], this.options);
        });

        chartsWorker.getOverallStatistics(function(data){
            var today = data.today;
            var week = data.this_week;
            var month = data.this_month;
            $.plot("#statistics #weekly_stats", [week] , this.options);
            $.plot("#statistics #monthly_stats", [month] , this.options);
            $.plot("#statistics #daily_stats", [today], this.options);
        });

        // $.plot("#placeholder", data, options);

        var iteration = 0;

        function showTooltip(x, y, contents) {
            $('<div id="tooltip">' + contents + '</div>').css( {
                position: 'absolute',
                display: 'none',
                top: y + 5,
                left: x + 5,
                border: '1px solid #fdd',
                padding: '2px',
                'background-color': '#fee',
                opacity: 0.80
            }).appendTo("body").fadeIn(200);
        }

        var previousPoint = null;
        function tooltip(chart_id,tooltip_id){

            $(chart_id).bind("plothover", function (event, pos, item) {
                $("#x").text(pos.x.toFixed(2));
                $("#y").text(pos.y.toFixed(2));

                if ($(tooltip_id).is(':checked')) {
                    if (item) {
                        if (previousPoint != item.dataIndex) {
                            previousPoint = item.dataIndex;

                            $("#tooltip").remove();
                            var x = item.datapoint[0].toFixed(2),
                                    y = item.datapoint[1].toFixed(2);

                            showTooltip(item.pageX, item.pageY,
                                    item.series.label + " = " + y);
                        }
                    }
                    else {
                        $("#tooltip").remove();
                        previousPoint = null;
                    }
                }
            });
        }

        var page = '<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/index.php';

        $(".oneNote .delete").on({
            click: function(e){
                e.preventDefault();
                var noteId = $(this).parent().attr("id");
                delete_note(noteId);
                $(this).parents("li").remove();
            }
        });

        $("#add_new_note").on({
            click: function(e){
                e.preventDefault();
                var self = this;
                var note = $(this).parents(".widgetBox").find("textarea").val();
                if(!note){
                    alert("Please enter something");
                }
                else{
                    $(this).parents(".widgetBox").find("textarea").val("");
                    $.post(page, {   
                        mode : 'add_note',
                        note : note,
                    },function(data) {
                        console.log(data);
                        var li = document.createElement("li");
                        li.className = "col-md-4";
                        var a = document.createElement("a");
                        a.className = "delete";
                        a.href = "#";
                        a.innerHTML = "x";
                        var p = document.createElement("p");
                        p.id = data.id;
                        p.innerHTML = note;
                        p.className = "oneNote";
                        $(p).append(a);
                        $(li).append(p);
                        $(a).on({
                            click: function(e){
                                e.preventDefault();
                                var noteId = $(this).parent().attr("id");
                                delete_note(noteId);
                                $(this).parents("li").remove();
                            }
                        });
                        $(self).parents(".widgetBox").find("ul").prepend(li);
                    },'json');
                }
            }
        });

        $("#addTodo").on({
            click: function(e){
                e.preventDefault();
                var self = this;
                var newVal = $(this).parents(".addTodo").find("input").val();
                if(newVal.length){
                $(this).parents(".addTodo").find("input").val("");
                var ajaxCall = $.ajax({
                    url: page,
                    type: "post",
                    data: {
                        val: newVal,
                        mode: "add_todo",
                    },
                });
                ajaxCall.success(function(data){
                    data = $.parseJSON(data);
                    var li = document.createElement("li");
                    li.className = "col-md-12";
                    var p = document.createElement("p");
                    p.className = "oneTodo paddingLeftSmall col-md-10";
                    p.id = data.id;
                    p.innerHTML = data.todo;
                    var a = document.createElement("a");
                    a.href = "#";
                    a.className = "col-md-2 btn btn-danger btn-xs delete";
                    a.innerHTML = "Delete";
                    $(a).on("click", function(e){
                        e.preventDefault();
                        var self = this;
                        var id = $(this).prev().attr("id");
                        var ajaxCall = $.ajax({
                            url: page,
                            type: "post",
                            data: {
                                id: id,
                                mode: "delete_todo",
                            },
                        });
                        ajaxCall.success(function(data){
                            $(self).parents("li").remove();
                        });

                    });
                    var div = document.createElement("div");
                    div.className = "col-md-12";

                    $(li).append(div).find("div").append(p).append(a);
                    $(self).parents(".widgetBox").find("ul").prepend(li);
                });
                }else{
                alert("Please enter a valid value");
                }
            }
        });
        
        $("#todolist .delete").on("click", function(e){
            e.preventDefault();
            var self = this;
            var id = $(this).prev().attr("id");
            var ajaxCall = $.ajax({
                url: page,
                type: "post",
                data: {
                    id: id,
                    mode: "delete_todo",
                },
            });
            ajaxCall.success(function(data){
                $(self).parents("li").remove();
            });

        });
    });

</script>



<?php }} ?>
