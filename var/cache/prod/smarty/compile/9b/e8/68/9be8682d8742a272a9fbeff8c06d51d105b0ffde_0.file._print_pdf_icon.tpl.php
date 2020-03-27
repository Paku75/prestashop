<?php
/* Smarty version 3.1.33, created on 2020-03-27 08:29:13
  from 'C:\wamp64\www\Projects\prestashop\admin\themes\default\template\controllers\outstanding\_print_pdf_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7db95947eb75_19165313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9be8682d8742a272a9fbeff8c06d51d105b0ffde' => 
    array (
      0 => 'C:\\wamp64\\www\\Projects\\prestashop\\admin\\themes\\default\\template\\controllers\\outstanding\\_print_pdf_icon.tpl',
      1 => 1585297617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7db95947eb75_19165313 (Smarty_Internal_Template $_smarty_tpl) {
if (Configuration::get('PS_INVOICE')) {?>
	<span style="width:20px; margin-right:5px;">
		<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf',true,array(),array('submitAction'=>'generateInvoicePDF','id_order_invoice'=>$_smarty_tpl->tpl_vars['id_invoice']->value)),'html','UTF-8' ));?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
	</span>
<?php }
}
}
