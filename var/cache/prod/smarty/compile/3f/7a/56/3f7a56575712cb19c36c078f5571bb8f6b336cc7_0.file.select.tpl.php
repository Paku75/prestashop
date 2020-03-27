<?php
/* Smarty version 3.1.33, created on 2020-03-27 08:29:16
  from 'C:\wamp64\www\Projects\prestashop\admin\themes\default\template\controllers\zones\select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7db95cce8144_43662311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f7a56575712cb19c36c078f5571bb8f6b336cc7' => 
    array (
      0 => 'C:\\wamp64\\www\\Projects\\prestashop\\admin\\themes\\default\\template\\controllers\\zones\\select.tpl',
      1 => 1585297616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7db95cce8144_43662311 (Smarty_Internal_Template $_smarty_tpl) {
?><select id="zone_to_affect" name="zone_to_affect">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zones']->value, 'z');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['z']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['z']->value['id_zone'];?>
"><?php echo $_smarty_tpl->tpl_vars['z']->value['name'];?>
</option>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<?php }
}
