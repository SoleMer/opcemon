<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-04 02:39:05
  from 'C:\xampp\htdocs\opcemon\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f518ca95ad385_67942737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dca9221f307fa56bc2e8d3ad2107666f81e3a944' => 
    array (
      0 => 'C:\\xampp\\htdocs\\opcemon\\templates\\error.tpl',
      1 => 1599179943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_5f518ca95ad385_67942737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

      </div>
    </div>
</div><?php }
}
