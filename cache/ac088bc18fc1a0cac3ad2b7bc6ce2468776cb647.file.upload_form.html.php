<?php /* Smarty version Smarty-3.1.15, created on 2016-02-01 17:09:19
         compiled from "/var/www/html/styles/global/upload_form.html" */ ?>
<?php /*%%SmartyHeaderCode:3811089356afd78fc9dca8-48583170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac088bc18fc1a0cac3ad2b7bc6ce2468776cb647' => 
    array (
      0 => '/var/www/html/styles/global/upload_form.html',
      1 => 1454363437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3811089356afd78fc9dca8-48583170',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input' => 0,
    'Upload' => 0,
    'videoFields' => 0,
    'requiredFields' => 0,
    'field' => 0,
    'formObj' => 0,
    'dateAndLocation' => 0,
    'sharingOptions' => 0,
    'categories' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56afd78fd400c3_31345900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56afd78fd400c3_31345900')) {function content_56afd78fd400c3_31345900($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['videoFields'])) {$_smarty_tpl->tpl_vars['videoFields'] = clone $_smarty_tpl->tpl_vars['videoFields'];
$_smarty_tpl->tpl_vars['videoFields']->value = $_smarty_tpl->tpl_vars['Upload']->value->load_video_fields($_smarty_tpl->tpl_vars['input']->value); $_smarty_tpl->tpl_vars['videoFields']->nocache = null; $_smarty_tpl->tpl_vars['videoFields']->scope = 0;
} else $_smarty_tpl->tpl_vars['videoFields'] = new Smarty_variable($_smarty_tpl->tpl_vars['Upload']->value->load_video_fields($_smarty_tpl->tpl_vars['input']->value), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['requiredFields'])) {$_smarty_tpl->tpl_vars['requiredFields'] = clone $_smarty_tpl->tpl_vars['requiredFields'];
$_smarty_tpl->tpl_vars['requiredFields']->value = $_smarty_tpl->tpl_vars['videoFields']->value[0]; $_smarty_tpl->tpl_vars['requiredFields']->nocache = null; $_smarty_tpl->tpl_vars['requiredFields']->scope = 0;
} else $_smarty_tpl->tpl_vars['requiredFields'] = new Smarty_variable($_smarty_tpl->tpl_vars['videoFields']->value[0], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['sharingOptions'])) {$_smarty_tpl->tpl_vars['sharingOptions'] = clone $_smarty_tpl->tpl_vars['sharingOptions'];
$_smarty_tpl->tpl_vars['sharingOptions']->value = $_smarty_tpl->tpl_vars['videoFields']->value[1]; $_smarty_tpl->tpl_vars['sharingOptions']->nocache = null; $_smarty_tpl->tpl_vars['sharingOptions']->scope = 0;
} else $_smarty_tpl->tpl_vars['sharingOptions'] = new Smarty_variable($_smarty_tpl->tpl_vars['videoFields']->value[1], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['dateAndLocation'])) {$_smarty_tpl->tpl_vars['dateAndLocation'] = clone $_smarty_tpl->tpl_vars['dateAndLocation'];
$_smarty_tpl->tpl_vars['dateAndLocation']->value = $_smarty_tpl->tpl_vars['videoFields']->value[2]; $_smarty_tpl->tpl_vars['dateAndLocation']->nocache = null; $_smarty_tpl->tpl_vars['dateAndLocation']->scope = 0;
} else $_smarty_tpl->tpl_vars['dateAndLocation'] = new Smarty_variable($_smarty_tpl->tpl_vars['videoFields']->value[2], null, 0);?>
<div class="uploaderContainer clearfix" id="uploaderContainer">
    <div class="upload-area col-md-12">
        <div class="fileUploaderForm">
            <div class="dragDropContainer" id="dragDrop">
                <span class="upload-logo"></span>
                <strong class="block-title">Drag &amp; Drop Files Here</strong>
                <p>Video can be 1000 MB in size, 120 Min in Duration and of any common format You can also upload HD videos</p>
            </div>
            <div class="selectButtonContainer">
                <a id="selectFiles" href="javascript:;" class="btn btn-primary btn-lg selectFiles">Select Videos</a>
                <!-- <p>Video can be 1000 MB in size, 120 Min in Duration and Any common format<br>You can also upload HD videos</p> -->
            </div>
            <!-- <a id="uploadFiles" class="btn btn-success" href="javascript:;">Upload</a> -->
            
        </div>
    </div>
</div>
<div id="uploadDataContainer" class="uploadDataContainer hidden">
    <div class="uploadingProgressContainer">
        <div class="alert alert-block alert-info">
            <p><b>Selected Files</b> Uploading in progress <small style="color:white;"><span id="progressNumber">0%</span> Complete of Video <span id="videoNumber"></span></small></p>
        </div>
    </div>
    <div class="align-right hidden" id="uploadMore">
        <a href="#" class="btn btn-primary uploadMoreVideos" id="uploadMoreVideos">Upload More Videos</a>
    </div>
    <div id="files"></div>
    <div id="allUploadForms" class="tab-content allUploadForms"></div>
</div>

<form action="#" id="updateVideoInfoForm" class="hidden">
    <div class="row">
        <div class="col-md-8">
            <div class="" id="updateVideoInfo">
                <fieldset class="">
                    <legend class=""><?php echo $_smarty_tpl->tpl_vars['requiredFields']->value['group_name'];?>
</legend>
                </fieldset>
                <div class="requiredFields">
                  <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['requiredFields']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                        <div class="form-group">
                        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['notShowSeprator'] = 'yes';?>
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='radiobutton') {?>
                            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'radio';?>
                            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = '';?>
                            <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='checkbox') {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['categories'])) {$_smarty_tpl->tpl_vars['categories'] = clone $_smarty_tpl->tpl_vars['categories'];
$_smarty_tpl->tpl_vars['categories']->value = $_smarty_tpl->tpl_vars['field']->value; $_smarty_tpl->tpl_vars['categories']->nocache = null; $_smarty_tpl->tpl_vars['categories']->scope = 0;
} else $_smarty_tpl->tpl_vars['categories'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value, null, 0);?>
                        <?php } else { ?>
                            <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
                            <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                        <?php }?>
                        </div>
                    <?php } ?>
                </div>

                <div class="formSection clear">
                    <h4><?php echo $_smarty_tpl->tpl_vars['dateAndLocation']->value['group_name'];?>
 <i class="glyphicon glyphicon-chevron-down pull-right"></i></h4>
                    <div class="sectionContent hidden">
                        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dateAndLocation']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                        <div class="form-group">
                        <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['notShowSeprator'] = 'yes';?>
                            <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='radiobutton') {?>
                                <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'radio';?>
                                <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = '';?>
                                <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='checkbox') {?>
                                <h4><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</h4>
                                <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'checkbox';?>
                                <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'checkbox';?>
                                <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                            <?php } else { ?>
                                <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
                                <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                            <?php }?>
                            </div>
                        <?php } ?>    
                    </div>
                </div>
  
                <div class="formSection clear">
                    <h4><?php echo $_smarty_tpl->tpl_vars['sharingOptions']->value['group_name'];?>
<i class="glyphicon glyphicon-chevron-down pull-right"></i></h4>
                    <div class="sectionContent hidden">
                        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sharingOptions']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                            <div class="form-group">
                            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = 'form-control';?>
                            <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['notShowSeprator'] = 'yes';?>
                            <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='radiobutton') {?>
                                <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['label_class'] = 'radio';?>
                                <?php $_smarty_tpl->createLocalArrayVariable('field', null, 0);
$_smarty_tpl->tpl_vars['field']->value['class'] = '';?>
                                <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                            <?php } else { ?>
                                <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
</label>
                                <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['field']->value);?>

                            <?php }?>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="pad-bottom-sm text-right">
                    <button class="btn btn-primary btn-lg"   id="saveVideoDetails">Submit Now</button>
                </div>  
            </div>
        </div>
        <div class="col-md-4 uploadFormSidebarDiv">
            <h4><?php echo $_smarty_tpl->tpl_vars['categories']->value['title'];?>
</h4>
            <small><?php echo $_smarty_tpl->tpl_vars['categories']->value['hint_1'];?>
</small>
            <div class="categoriesContainer">
                <?php $_smarty_tpl->createLocalArrayVariable('categories', null, 0);
$_smarty_tpl->tpl_vars['categories']->value['label_class'] = 'checkbox';?>
                <?php $_smarty_tpl->createLocalArrayVariable('categories', null, 0);
$_smarty_tpl->tpl_vars['categories']->value['class'] = 'checkbox';?>
                <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['categories']->value);?>

            </div>
            <!-- <div class="cb-box pad-bottom terms-contatiner">
                <div class="checkbox">
                    <label class="light">
                        <input type="checkbox" value="">
                        I have read and agree to submission policy
                    </label>
                </div>
                <div class="checkbox">
                    <label class="light">
                        <input type="checkbox" value="">
                        I have read and agree to terms and conditions
                    </label>
                </div>
                <div class="checkbox">
                    <label class="light">
                        <input type="checkbox" value="">
                        Remember these settings
                    </label>
                </div>
            </div> -->
        </div>
    </div>
</form><?php }} ?>
