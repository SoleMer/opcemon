<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-22 23:47:15
  from 'C:\xampp\htdocs\TPE-Web2\Web2-TPE\TPE\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec8486321c277_56870810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c396006b63d8adc8a1fb2c1647c782e10d8fbd8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-Web2\\Web2-TPE\\TPE\\templates\\error.tpl',
      1 => 1590183510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ec8486321c277_56870810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
<div class="col-md-4 offset-md-4 fondo-blanco">
    <h2>Error</h2>
    <h5><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h5>
    <div class="text-center"><a class="" href="products">Back</a></div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
