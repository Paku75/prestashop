<?php
/* Smarty version 3.1.33, created on 2020-03-27 08:29:24
  from 'C:\wamp64\www\Projects\prestashop\themes\classic\templates\catalog\_partials\miniatures\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7db964bc4208_51893927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3911a2e738d14b1e329eb0e818e585e9036fbac' => 
    array (
      0 => 'C:\\wamp64\\www\\Projects\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\miniatures\\category.tpl',
      1 => 1585297624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7db964bc4208_51893927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5124556265e7db964bb7672_20664559', 'category_miniature_item');
?>

<?php }
/* {block 'category_miniature_item'} */
class Block_5124556265e7db964bb7672_20664559 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'category_miniature_item' => 
  array (
    0 => 'Block_5124556265e7db964bb7672_20664559',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="category-miniature">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
      <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['medium']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
">
    </a>

    <h1 class="h2">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
    </h1>

    <div class="category-description"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
  </section>
<?php
}
}
/* {/block 'category_miniature_item'} */
}
