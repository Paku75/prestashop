<?php
/* Smarty version 3.1.33, created on 2020-03-27 08:29:22
  from 'C:\wamp64\www\Projects\prestashop\admin\themes\default\template\helpers\tree\tree_node_folder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7db96251d174_89962548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40d3e5c147130c5a14b163344229d85f9ca1352d' => 
    array (
      0 => 'C:\\wamp64\\www\\Projects\\prestashop\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_folder.tpl',
      1 => 1585297618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7db96251d174_89962548 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['name'],'html','UTF-8' ));?>
</label>
	</span>
	<ul class="tree">
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['children']->value,'UTF-8' ));?>

	</ul>
</li>
<?php }
}
