<?php
/* Smarty version 3.1.33, created on 2020-03-27 08:29:27
  from 'C:\wamp64\www\Projects\prestashop\themes\classic\templates\customer\guest-tracking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7db967e6a376_81884063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bc9f705d263525baf5905c141a3d59f3b5d7db2' => 
    array (
      0 => 'C:\\wamp64\\www\\Projects\\prestashop\\themes\\classic\\templates\\customer\\guest-tracking.tpl',
      1 => 1585297624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:customer/_partials/order-detail-no-return.tpl' => 1,
  ),
),false)) {
function content_5e7db967e6a376_81884063 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11437694705e7db967e4c124_83581326', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12442635035e7db967e4fa47_60776707', 'order_detail');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2171097795e7db967e52e45_13706157', 'order_messages');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19525980645e7db967e55237_54227856', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/order-detail.tpl');
}
/* {block 'page_title'} */
class Block_11437694705e7db967e4c124_83581326 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_11437694705e7db967e4c124_83581326',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Tracking','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'order_detail'} */
class Block_12442635035e7db967e4fa47_60776707 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_detail' => 
  array (
    0 => 'Block_12442635035e7db967e4fa47_60776707',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/order-detail-no-return.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'order_detail'} */
/* {block 'order_messages'} */
class Block_2171097795e7db967e52e45_13706157 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_messages' => 
  array (
    0 => 'Block_2171097795e7db967e52e45_13706157',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'order_messages'} */
/* {block 'guest_to_customer'} */
class Block_18261448275e7db967e565a4_31125609 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['guest_tracking'], ENT_QUOTES, 'UTF-8');?>
" method="post">
      <header>
        <h1 class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Transform your guest account into a customer account and enjoy:','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</h1>
        <ul>
          <li> -<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personalized and secure access','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</li>
          <li> -<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fast and easy checkout','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</li>
          <li> -<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Easier merchandise return','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</li>
        </ul>
      </header>

      <section class="form-fields">

        <label>
          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set your password:','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</span>
          <input type="password" data-validate="isPasswd" name="password" value="">
        </label>

      </section>

      <footer class="form-footer">
        <input type="hidden" name="submitTransformGuestToCustomer" value="1">
        <input type="hidden" name="id_order" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['id'], ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="order_reference" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['reference'], ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['guest_email']->value, ENT_QUOTES, 'UTF-8');?>
">

        <button class="btn btn-primary" type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
      </footer>

    </form>
  <?php
}
}
/* {/block 'guest_to_customer'} */
/* {block 'page_content'} */
class Block_19525980645e7db967e55237_54227856 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_19525980645e7db967e55237_54227856',
  ),
  'guest_to_customer' => 
  array (
    0 => 'Block_18261448275e7db967e565a4_31125609',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18261448275e7db967e565a4_31125609', 'guest_to_customer', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
