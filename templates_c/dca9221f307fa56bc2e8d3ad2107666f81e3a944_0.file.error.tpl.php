<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 18:10:59
  from 'C:\xampp\htdocs\opcemon\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e7293e30387_27685259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dca9221f307fa56bc2e8d3ad2107666f81e3a944' => 
    array (
      0 => 'C:\\xampp\\htdocs\\opcemon\\templates\\error.tpl',
      1 => 1598975983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e7293e30387_27685259 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-md-12">
        <div class="alert alert-primary" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
    </div>
</div><?php }
}
