<?php /* Smarty version Smarty-3.1.19, created on 2017-06-02 17:38:08
         compiled from "C:\xampp\htdocs\prestashopbox\admin246e0nbch\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3060593186602c9631-73260211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56bccca17059e20999a8549b789802d8b6991308' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashopbox\\admin246e0nbch\\themes\\default\\template\\content.tpl',
      1 => 1496413505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3060593186602c9631-73260211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_593186602e6450_25388053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593186602e6450_25388053')) {function content_593186602e6450_25388053($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
