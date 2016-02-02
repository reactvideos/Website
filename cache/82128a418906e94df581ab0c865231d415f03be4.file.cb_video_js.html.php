<?php /* Smarty version Smarty-3.1.15, created on 2016-02-01 17:21:38
         compiled from "/var/www/html/player/CB_video_js/cb_video_js.html" */ ?>
<?php /*%%SmartyHeaderCode:136734433756afda72c46f46-89267833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82128a418906e94df581ab0c865231d415f03be4' => 
    array (
      0 => '/var/www/html/player/CB_video_js/cb_video_js.html',
      1 => 1454363430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136734433756afda72c46f46-89267833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cb_vjs_player_url' => 0,
    'width' => 0,
    'height' => 0,
    'vdata' => 0,
    'video_files' => 0,
    'file' => 0,
    'quality' => 0,
    'cb_logo' => 0,
    'player_config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56afda72c83528_08455862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56afda72c83528_08455862')) {function content_56afda72c83528_08455862($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/css/video-js.css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/css/cb_vjs_res.css" rel="stylesheet" type="text/css" />
<link href='//fonts.googleapis.com/css?family=PT+Sans:400,700,700italic,400italic' rel='stylesheet' type='text/css'>

<script src="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/js/video.dev.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/js/cb_vjs_res.js"></script>

<video id="cb_video_js" class="video-js vjs-default-skin" width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
" height="<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
" poster="<?php echo getSmartyThumb(array('vdetails'=>$_smarty_tpl->tpl_vars['vdata']->value,'size'=>'500x283'),$_smarty_tpl);?>
" >
    <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['video_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
    <?php if (isset($_smarty_tpl->tpl_vars['quality'])) {$_smarty_tpl->tpl_vars['quality'] = clone $_smarty_tpl->tpl_vars['quality'];
$_smarty_tpl->tpl_vars['quality']->value = explode('-',$_smarty_tpl->tpl_vars['file']->value); $_smarty_tpl->tpl_vars['quality']->nocache = null; $_smarty_tpl->tpl_vars['quality']->scope = 0;
} else $_smarty_tpl->tpl_vars['quality'] = new Smarty_variable(explode('-',$_smarty_tpl->tpl_vars['file']->value), null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['quality'])) {$_smarty_tpl->tpl_vars['quality'] = clone $_smarty_tpl->tpl_vars['quality'];
$_smarty_tpl->tpl_vars['quality']->value = end($_smarty_tpl->tpl_vars['quality']->value); $_smarty_tpl->tpl_vars['quality']->nocache = null; $_smarty_tpl->tpl_vars['quality']->scope = 0;
} else $_smarty_tpl->tpl_vars['quality'] = new Smarty_variable(end($_smarty_tpl->tpl_vars['quality']->value), null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['quality'])) {$_smarty_tpl->tpl_vars['quality'] = clone $_smarty_tpl->tpl_vars['quality'];
$_smarty_tpl->tpl_vars['quality']->value = explode('.',$_smarty_tpl->tpl_vars['quality']->value); $_smarty_tpl->tpl_vars['quality']->nocache = null; $_smarty_tpl->tpl_vars['quality']->scope = 0;
} else $_smarty_tpl->tpl_vars['quality'] = new Smarty_variable(explode('.',$_smarty_tpl->tpl_vars['quality']->value), null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['quality'])) {$_smarty_tpl->tpl_vars['quality'] = clone $_smarty_tpl->tpl_vars['quality'];
$_smarty_tpl->tpl_vars['quality']->value = $_smarty_tpl->tpl_vars['quality']->value[0]; $_smarty_tpl->tpl_vars['quality']->nocache = null; $_smarty_tpl->tpl_vars['quality']->scope = 0;
} else $_smarty_tpl->tpl_vars['quality'] = new Smarty_variable($_smarty_tpl->tpl_vars['quality']->value[0], null, 0);?>
    <source src='<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
' type="video/mp4" data-res="<?php echo $_smarty_tpl->tpl_vars['quality']->value;?>
" />
    <?php } ?>
    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
</video>

<script type="text/javascript">
var vid_id = "<?php echo $_smarty_tpl->tpl_vars['vdata']->value['videoid'];?>
";
var videotitle = "<?php echo $_smarty_tpl->tpl_vars['vdata']->value['title'];?>
";
var uploader = "<?php echo $_smarty_tpl->tpl_vars['vdata']->value['username'];?>
";
var branding_logo  = "<?php echo $_smarty_tpl->tpl_vars['cb_logo']->value;?>
";
var product_link = "<?php echo $_smarty_tpl->tpl_vars['player_config']->value['player_logo_url'];?>
";
var show_logo = true;
	// check if plugin is installed and call function
	if (!(typeof(extract_yt_url_ajax)=='undefined'))
	{
		var the_data = extract_yt_id('<?php echo $_smarty_tpl->tpl_vars['vdata']->value['embed_code'];?>
',vid_id);
	}

	var cb_player_setup = {
		plugins : { resolutionSelector : {
			// Pass any options here
			default_res : 'HD'
			// Define an on.ready function
		} }, 
		"techOrder" : ['html5', 'flash'],
		"controls": true,
		"autoplay": false,
		"preload": "auto",
		"vid_id" : vid_id,
		"videotitle" : videotitle,
		"uploader" : uploader,
		"branding_logo" : branding_logo,
		"show_logo" : show_logo,
		"product_link" : product_link,
		"data" : the_data
	};
	//Initializing
	var player = videojs('cb_video_js', cb_player_setup , function(){
		var cb_video_js = this;
	});

</script>
<script src="<?php echo $_smarty_tpl->tpl_vars['cb_vjs_player_url']->value;?>
/js/cb_vjs_custom.js"></script>
<?php }} ?>
