<?php
/* Smarty version 3.1.33, created on 2020-03-27 10:08:34
  from 'C:\wamp64\www\Projects\prestashop\modules\ps_mbo\views\templates\admin\modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7dc292053b99_12050130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc5e5dfe75faa9d3a0a03ad3e0cb1d25b6b529c8' => 
    array (
      0 => 'C:\\wamp64\\www\\Projects\\prestashop\\modules\\ps_mbo\\views\\templates\\admin\\modal.tpl',
      1 => 1585298745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7dc292053b99_12050130 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recommended Modules and Services'),$_smarty_tpl ) );?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }
}
