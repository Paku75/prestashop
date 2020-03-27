<?php
/* Smarty version 3.1.33, created on 2020-03-27 08:29:14
  from 'C:\wamp64\www\Projects\prestashop\admin\themes\default\template\controllers\slip\_print_pdf_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7db95ac220e9_47550090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64122e47bc7cf9115e923e591f8b4baf6b559061' => 
    array (
      0 => 'C:\\wamp64\\www\\Projects\\prestashop\\admin\\themes\\default\\template\\controllers\\slip\\_print_pdf_icon.tpl',
      1 => 1585297617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7db95ac220e9_47550090 (Smarty_Internal_Template $_smarty_tpl) {
?>

<a class="btn btn-default _blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf',true,array(),array('submitAction'=>'generateOrderSlipPDF','id_order_slip'=>intval($_smarty_tpl->tpl_vars['order_slip']->value->id))),'html','UTF-8' ));?>
">
	<i class="icon-file-text"></i>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download credit slip','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>

</a>

<?php }
}
