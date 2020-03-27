<?php
/* Smarty version 3.1.33, created on 2020-03-27 10:07:10
  from 'C:\wamp64\www\Projects\prestashop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7dc23eb12e94_98392940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5d68faa827353f3a49ae30fe6ea4b85a6c0137c' => 
    array (
      0 => 'C:\\wamp64\\www\\Projects\\prestashop\\themes\\classic\\templates\\page.tpl',
      1 => 1585297624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7dc23eb12e94_98392940 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3815592685e7dc23eb00bf5_52520351', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_17026982675e7dc23eb03804_93290918 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_16386106715e7dc23eb01fa6_11287746 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17026982675e7dc23eb03804_93290918', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_4610197475e7dc23eb0a0d3_45238227 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_21447804235e7dc23eb0bcd0_46041609 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12841131175e7dc23eb08d53_00390606 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4610197475e7dc23eb0a0d3_45238227', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21447804235e7dc23eb0bcd0_46041609', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_15253726245e7dc23eb0fd55_51254812 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1254965845e7dc23eb0e9a0_24126879 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15253726245e7dc23eb0fd55_51254812', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_3815592685e7dc23eb00bf5_52520351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3815592685e7dc23eb00bf5_52520351',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_16386106715e7dc23eb01fa6_11287746',
  ),
  'page_title' => 
  array (
    0 => 'Block_17026982675e7dc23eb03804_93290918',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_12841131175e7dc23eb08d53_00390606',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_4610197475e7dc23eb0a0d3_45238227',
  ),
  'page_content' => 
  array (
    0 => 'Block_21447804235e7dc23eb0bcd0_46041609',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1254965845e7dc23eb0e9a0_24126879',
  ),
  'page_footer' => 
  array (
    0 => 'Block_15253726245e7dc23eb0fd55_51254812',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16386106715e7dc23eb01fa6_11287746', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12841131175e7dc23eb08d53_00390606', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1254965845e7dc23eb0e9a0_24126879', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
