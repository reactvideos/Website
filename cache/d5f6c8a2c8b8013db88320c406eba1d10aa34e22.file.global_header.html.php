<?php /* Smarty version Smarty-3.1.15, created on 2016-02-01 17:08:49
         compiled from "/var/www/html/admin_area/styles/cb_2014/layout/global_header.html" */ ?>
<?php /*%%SmartyHeaderCode:181050245756afd771de36a0-12646554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5f6c8a2c8b8013db88320c406eba1d10aa34e22' => 
    array (
      0 => '/var/www/html/admin_area/styles/cb_2014/layout/global_header.html',
      1 => 1454363395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181050245756afd771de36a0-12646554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_url' => 0,
    'baseurl' => 0,
    'imageurl' => 0,
    'Cbucket' => 0,
    'curActive' => 0,
    'type' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56afd771f0ba60_43988601',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56afd771f0ba60_43988601')) {function content_56afd771f0ba60_43988601($_smarty_tpl) {?><meta charset="UTF-8">
<title><?php echo cbtitle(array(),$_smarty_tpl);?>
</title>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/assets/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/css/styles.css" />

<!--[if IE 7]>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/assets/css/font-awesome-ie7.min.css" />
<![endif]-->

<!-- page specific plugin styles -->

<!-- fonts -->

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300" />

<!-- ace styles -->
<?php if (!this_page('admin_login')) {?> <!-- these css file not includes in admin area login.html -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/assets/css/ace.min.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/assets/css/ace-rtl.min.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/assets/css/ace-skins.min.css" />
<?php }?>

<!--[if lte IE 8]>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/assets/css/ace-ie.min.css" />
<![endif]-->

<!-- inline styles related to this page -->

<script type="text/javascript">
    var baseurl = "<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
";
    var imageurl = "<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
";
</script>





<!-- ace settings handler -->

<script src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/assets/js/ace-extra.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/clipbucket.js"></script>



<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>
<script src="assets/js/html5shiv.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/../../../../js/functions.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/../../../../js/admin_functions.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!-- for bootstrap wysiwyg -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/css/summernote.css" />


<script src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/js/editor.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/js/main.js"></script>

<!-- for bootstrap wysiwyg -->

        <!-- for popovers -->
<script>
    $(function (){
        $(".popoverButton").popover();
    });

</script>

<!-- bootstrap x-editable -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/bootstrap-editable/css/bootstrap-editable.css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/bootstrap-editable/js/bootstrap-editable.min.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('.xedit').editable({
            mode: 'inline',
            url:baseurl+'/admin_area/index.php?mode=update_pharse',
            pk: function(){
                var id = $(this).attr("id");
                
                id = id.match(/([0-9]+)$/g);
               return id.pop();
            },
        });
    });



</script>
<script>
$(document).ready(function() {
             $('.edit_lang').editable(baseurl+'/actions/update_phrase.php', {  alert('yu');
            // cancel    : 'Cancel',
            // submit    : 'OK',
             indicator : '<img src="'+baseurl+'/images/icons/progIndicator.gif">',
             tooltip   : 'Click to edit...',
            });
        });
    $(document).ready(function(){
        $(".drop").on({
            click: function(e){
                var ele = $(this).parent().nextAll("#content").get(0);
                $(ele).toggle();
            }
        });
    });


</script>

<script>
    $(document).ready(function() {
        $('#desc').summernote();
    });
</script>





<script>
    $(function(){


        $(".saveTodo").click(function(e){
            var self = this;
             var newVal = $(this).parent().parent().find("input[name='todo']").val();
             if(newVal.length){
                var ajaxCall = $.ajax({
                    url: "<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
" + "/admin_area/index.php",
                    type: "post",
                    data: {
                        val: newVal,
                        mode: "add_todo",
                    },
                });
                ajaxCall.success(function(data){
                    data = $.parseJSON(data);
                    var p = document.createElement("p");
                    p.className = "xedit editable editable-click";
                    var input = document.createElement("input");
                    input.type = "hidden";
                    input.name = "todoid";
                    input.value = data.id;
                    var b = document.createElement("b");
                    b.innerHTML = data.todo;
                    p.appendChild(input);
                    p.appendChild(b);
                    console.log(p);
                    $(self).parents("form").after(p);
                });
             }else{
                alert("Please enter a valid value");
             }
        });


    $("#todolist").on("click", ".editable-clear-x", function(e){
        e.preventDefault();
            var self = this;
            var id = $(this).parents(".editable-container").prev().attr("id");
            id = id.match(/([0-9]+)$/g);
            id = id.pop();
            var ajaxCall = $.ajax({
                url: "<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
" + "/admin_area/index.php",
                type: "post",
                data: {
                    id: id,
                    mode: "delete_todo",
                },
            });
            ajaxCall.success(function(data){
                $(self).parents("p").remove();
                $(self).parents(".editable-container").remove();
            });
            e.stopPropagation();
    });

    });
</script>

<?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->AdminJSArray) {?>
<!-- Including JS Files-->
<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Cbucket']->value->AdminJSArray; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
 $_smarty_tpl->tpl_vars['file']->value = $_smarty_tpl->tpl_vars['type']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['curActive']->value==$_smarty_tpl->tpl_vars['type']->value||$_smarty_tpl->tpl_vars['type']->value=='global') {?>
        <?php echo include_js(array('type'=>$_smarty_tpl->tpl_vars['type']->value,'file'=>$_smarty_tpl->tpl_vars['file']->value),$_smarty_tpl);?>

    <?php }?>
<?php } ?>
<!-- Including JS Files-->
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->admin_header_files) {?>
    <!-- Including Headers -->
    <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Cbucket']->value->admin_header_files; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
 $_smarty_tpl->tpl_vars['file']->value = $_smarty_tpl->tpl_vars['type']->key;
?>
        <?php echo include_header(array('type'=>$_smarty_tpl->tpl_vars['type']->value,'file'=>$_smarty_tpl->tpl_vars['file']->value),$_smarty_tpl);?>

    <?php } ?>
    <!-- Ending Headers -->
<?php }?>
<?php }} ?>
