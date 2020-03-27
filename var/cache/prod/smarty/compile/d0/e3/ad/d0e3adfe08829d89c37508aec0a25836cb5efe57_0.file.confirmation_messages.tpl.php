<?php
/* Smarty version 3.1.33, created on 2020-03-27 10:08:33
  from 'C:\wamp64\www\Projects\prestashop\admin797nx34ga\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7dc291efc150_43575606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0e3adfe08829d89c37508aec0a25836cb5efe57' => 
    array (
      0 => 'C:\\wamp64\\www\\Projects\\prestashop\\admin797nx34ga\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1585297614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7dc291efc150_43575606 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
