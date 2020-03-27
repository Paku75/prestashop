<?php
/* Smarty version 3.1.33, created on 2020-03-27 10:08:15
  from 'C:\wamp64\www\Projects\prestashop\admin797nx34ga\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7dc27fb387f2_20875496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36adc3fa2fbd63ffc5d6d2b3e790ced60b4c3b89' => 
    array (
      0 => 'C:\\wamp64\\www\\Projects\\prestashop\\admin797nx34ga\\themes\\default\\template\\content.tpl',
      1 => 1585297616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7dc27fb387f2_20875496 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
