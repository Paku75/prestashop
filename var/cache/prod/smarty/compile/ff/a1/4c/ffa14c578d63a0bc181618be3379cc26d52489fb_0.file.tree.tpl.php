<?php
/* Smarty version 3.1.33, created on 2020-03-27 08:29:22
  from 'C:\wamp64\www\Projects\prestashop\admin\themes\default\template\helpers\tree\tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7db96227b344_99839174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffa14c578d63a0bc181618be3379cc26d52489fb' => 
    array (
      0 => 'C:\\wamp64\\www\\Projects\\prestashop\\admin\\themes\\default\\template\\helpers\\tree\\tree.tpl',
      1 => 1585297618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7db96227b344_99839174 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {
echo $_smarty_tpl->tpl_vars['header']->value;
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>
	<ul id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div>
<?php }
}
