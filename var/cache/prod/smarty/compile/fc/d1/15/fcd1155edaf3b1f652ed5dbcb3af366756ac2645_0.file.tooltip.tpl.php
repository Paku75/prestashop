<?php
/* Smarty version 3.1.33, created on 2020-03-27 10:08:33
  from 'C:\wamp64\www\Projects\prestashop\modules\welcome\views\templates\tooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7dc291d47027_47523254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcd1155edaf3b1f652ed5dbcb3af366756ac2645' => 
    array (
      0 => 'C:\\wamp64\\www\\Projects\\prestashop\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1585297621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7dc291d47027_47523254 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
</div>
<?php }
}
