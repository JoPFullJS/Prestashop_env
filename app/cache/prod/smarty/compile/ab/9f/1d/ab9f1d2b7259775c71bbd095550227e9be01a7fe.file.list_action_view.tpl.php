<?php /* Smarty version Smarty-3.1.19, created on 2017-06-02 17:47:23
         compiled from "C:\xampp\htdocs\prestashopbox\admin246e0nbch\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:240035931888ba166d8-88066045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab9f1d2b7259775c71bbd095550227e9be01a7fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashopbox\\admin246e0nbch\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1496413521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240035931888ba166d8-88066045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5931888ba4ea02_93221999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5931888ba4ea02_93221999')) {function content_5931888ba4ea02_93221999($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
