<?php /* Smarty version Smarty-3.1.19, created on 2017-06-02 17:38:47
         compiled from "C:\xampp\htdocs\prestashopbox\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2509459318687959535-53619199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c64c6ac9546b3ec656cdbdba18071469d94ecc35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashopbox\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1496414117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2509459318687959535-53619199',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_593186879a7143_03755543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593186879a7143_03755543')) {function content_593186879a7143_03755543($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
