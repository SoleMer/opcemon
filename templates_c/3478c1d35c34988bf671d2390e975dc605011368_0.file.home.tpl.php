<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 00:09:14
  from 'C:\xampp\htdocs\opcemon\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f49808a1a3c81_57327419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3478c1d35c34988bf671d2390e975dc605011368' => 
    array (
      0 => 'C:\\xampp\\htdocs\\opcemon\\templates\\home.tpl',
      1 => 1598652550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_5f49808a1a3c81_57327419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="col-md-6 offset-md-3">
        <h1>Op.Ce.Mon</h1>
        <h4>Curso Operador Centro de Monitoreo</h4>
        <p>texto</p>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['admin']->value == true) {?>
        <div class="col-md-2 offset-md-1">
            <form action="admin">
                <button type="submit" class="btn btn-primary">Administrar</button>
            </form>
        </div>
    <?php }?>
</div><?php }
}
